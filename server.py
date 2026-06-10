#!/usr/bin/env python3
"""
CDMG Inc. website backend.

Zero third-party dependencies. Uses only the Python standard library, so it
runs on any machine with Python 3.7+ without a pip install.

What it does:
  * Serves the static site (index.html, css, js, assets, ...).
  * Accepts lead submissions at POST /api/lead.
  * Validates the input, blocks simple bot spam with a honeypot field.
  * Stores every lead in two places:
        leads.jsonl  (one JSON object per line, easy to parse)
        leads.csv    (spreadsheet friendly)
  * Optionally emails a notification when SMTP env vars are set.

Run it:
    python3 server.py
    # then open http://localhost:8011

Configure the port:
    PORT=9000 python3 server.py

Enable email notifications (optional):
    export CDMG_SMTP_HOST=smtp.example.com
    export CDMG_SMTP_PORT=587
    export CDMG_SMTP_USER=notifications@cdmginc.com
    export CDMG_SMTP_PASS=app-password
    export CDMG_LEAD_TO=sales@cdmginc.com
    export CDMG_LEAD_FROM=notifications@cdmginc.com
    python3 server.py
"""

import csv
import json
import os
import smtplib
import sys
from datetime import datetime, timezone
from email.message import EmailMessage
from http.server import SimpleHTTPRequestHandler, ThreadingHTTPServer
from urllib.parse import parse_qs

ROOT = os.path.dirname(os.path.abspath(__file__))
PORT = int(os.environ.get("PORT", "8011"))
JSONL_PATH = os.path.join(ROOT, "leads.jsonl")
CSV_PATH = os.path.join(ROOT, "leads.csv")
CSV_FIELDS = ["received_at", "name", "email", "phone", "company", "message", "source", "remote_ip"]
MAX_BODY = 64 * 1024  # 64 KB cap on a submission


def store_lead(lead):
    """Append the lead to the JSONL log and the CSV file."""
    with open(JSONL_PATH, "a", encoding="utf-8") as fh:
        fh.write(json.dumps(lead, ensure_ascii=False) + "\n")

    write_header = not os.path.exists(CSV_PATH) or os.path.getsize(CSV_PATH) == 0
    with open(CSV_PATH, "a", newline="", encoding="utf-8") as fh:
        writer = csv.DictWriter(fh, fieldnames=CSV_FIELDS)
        if write_header:
            writer.writeheader()
        writer.writerow({k: lead.get(k, "") for k in CSV_FIELDS})


def notify_email(lead):
    """Send an email notification if SMTP settings are present. Best effort."""
    host = os.environ.get("CDMG_SMTP_HOST")
    to_addr = os.environ.get("CDMG_LEAD_TO")
    if not host or not to_addr:
        return  # email not configured, skip silently

    msg = EmailMessage()
    msg["Subject"] = f"New CDMG lead: {lead.get('name', 'Unknown')}"
    msg["From"] = os.environ.get("CDMG_LEAD_FROM", to_addr)
    msg["To"] = to_addr
    body = "\n".join(f"{k}: {lead.get(k, '')}" for k in CSV_FIELDS)
    msg.set_content("A new lead came in through the CDMG website.\n\n" + body)

    try:
        port = int(os.environ.get("CDMG_SMTP_PORT", "587"))
        with smtplib.SMTP(host, port, timeout=10) as smtp:
            smtp.starttls()
            user = os.environ.get("CDMG_SMTP_USER")
            password = os.environ.get("CDMG_SMTP_PASS")
            if user and password:
                smtp.login(user, password)
            smtp.send_message(msg)
    except Exception as exc:  # never let email failure break the response
        sys.stderr.write(f"[CDMG] email notification failed: {exc}\n")


class CDMGHandler(SimpleHTTPRequestHandler):
    def __init__(self, *args, **kwargs):
        super().__init__(*args, directory=ROOT, **kwargs)

    def log_message(self, fmt, *args):
        sys.stderr.write("[CDMG] " + (fmt % args) + "\n")

    def _send_json(self, status, payload):
        data = json.dumps(payload).encode("utf-8")
        self.send_response(status)
        self.send_header("Content-Type", "application/json")
        self.send_header("Content-Length", str(len(data)))
        self.end_headers()
        self.wfile.write(data)

    def do_POST(self):
        if self.path.rstrip("/") != "/api/lead":
            self._send_json(404, {"ok": False, "error": "Not found"})
            return

        try:
            length = int(self.headers.get("Content-Length", "0"))
        except ValueError:
            length = 0
        if length <= 0 or length > MAX_BODY:
            self._send_json(400, {"ok": False, "error": "Invalid request body"})
            return

        raw = self.rfile.read(length)
        fields = self._parse_body(raw)

        # Honeypot: real users never fill a hidden "website" field.
        if fields.get("website"):
            self._send_json(200, {"ok": True})  # pretend success, drop spam
            return

        name = (fields.get("name") or "").strip()
        email = (fields.get("email") or "").strip()
        if not name or "@" not in email:
            self._send_json(422, {"ok": False, "error": "Name and a valid email are required."})
            return

        lead = {
            "received_at": datetime.now(timezone.utc).isoformat(),
            "name": name,
            "email": email,
            "phone": (fields.get("phone") or "").strip(),
            "company": (fields.get("company") or "").strip(),
            "message": (fields.get("message") or "").strip(),
            "source": (fields.get("source") or self.headers.get("Referer") or "").strip(),
            "remote_ip": self.client_address[0] if self.client_address else "",
        }

        try:
            store_lead(lead)
        except Exception as exc:
            sys.stderr.write(f"[CDMG] failed to store lead: {exc}\n")
            self._send_json(500, {"ok": False, "error": "Could not save your request. Please try again."})
            return

        notify_email(lead)
        self._send_json(200, {"ok": True, "message": "Thank you. Your request has been received."})

    @staticmethod
    def _parse_body(raw):
        """Accept either JSON or url-encoded form bodies."""
        text = raw.decode("utf-8", errors="replace").strip()
        if text.startswith("{"):
            try:
                obj = json.loads(text)
                return {k: ("" if v is None else str(v)) for k, v in obj.items()}
            except json.JSONDecodeError:
                return {}
        parsed = parse_qs(text, keep_blank_values=True)
        return {k: v[0] for k, v in parsed.items()}


def main():
    os.chdir(ROOT)
    server = ThreadingHTTPServer(("0.0.0.0", PORT), CDMGHandler)
    print(f"CDMG site running at http://localhost:{PORT}")
    print(f"Leads are saved to:\n  {JSONL_PATH}\n  {CSV_PATH}")
    print("Press Ctrl+C to stop.")
    try:
        server.serve_forever()
    except KeyboardInterrupt:
        print("\nShutting down.")
        server.shutdown()


if __name__ == "__main__":
    main()
