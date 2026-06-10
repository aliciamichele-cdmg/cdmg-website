# CDMG Inc. Website

A new marketing website for Creative Direct Marketing Group (CDMGinc.com).

The structure, layout, and conversion-focused interaction patterns are modeled
on cabinetiq.com. All content, copy, branding, and creative come from
cdmginc.com. No content was copied from CabinetIQ.

## Pages

| File | Page |
|------|------|
| `index.html` | Home |
| `5-dimensions.html` | 5 Dimensional Marketing methodology |
| `why-you.html` | Why You / Verticals |
| `our-story.html` | Our Story and Team |
| `blog.html` | Blog / Learn From the Pros |
| `contact.html` | Let's Talk / Contact |

Shared assets: `css/style.css`, `js/main.js`, and `assets/` (real CDMG logo and
favicon pulled from the live site).

## Running the site

The site ships with a zero-dependency Python backend that serves the pages and
captures lead submissions. You only need Python 3.7 or newer. No pip install.

```bash
python3 server.py
# then open http://localhost:8011
```

Change the port with `PORT=9000 python3 server.py`.

## Lead capture

Every consultation, contact, and newsletter form posts to `POST /api/lead`.
The backend validates the submission, blocks simple bot spam with a hidden
honeypot field, and saves each lead to two files in this folder:

* `leads.jsonl` holds one JSON object per line and is easy to parse
* `leads.csv` opens directly in Excel or Google Sheets

If the page is opened directly as a file (without the backend running), the
forms fall back to a friendly on-screen confirmation so nothing breaks.

## Optional email notifications

Set these environment variables before starting the server to get an email
each time a lead comes in:

```bash
export CDMG_SMTP_HOST=smtp.example.com
export CDMG_SMTP_PORT=587
export CDMG_SMTP_USER=notifications@cdmginc.com
export CDMG_SMTP_PASS=your-app-password
export CDMG_LEAD_TO=sales@cdmginc.com
export CDMG_LEAD_FROM=notifications@cdmginc.com
python3 server.py
```

## Still to provide

These areas are styled to match the design and are ready for real content:

* Blog article bodies (the cards link to placeholders)
* Project gallery and team photography (currently brand-colored blocks)
* Real social media URLs in the header and footer
* Targets for the legal pages (Accessibility, Privacy Policies)
* The real `info@` contact email (the live site redacted it; a placeholder is in use)
