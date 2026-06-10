/* CDMG Inc. site interactions */
(function () {
  "use strict";

  /* Mobile nav toggle */
  var toggle = document.querySelector(".nav__toggle");
  var menu = document.querySelector(".nav__menu");
  if (toggle && menu) {
    toggle.addEventListener("click", function () {
      menu.classList.toggle("open");
      toggle.classList.toggle("active");
    });
    menu.querySelectorAll("a").forEach(function (link) {
      link.addEventListener("click", function () {
        if (window.innerWidth <= 760) menu.classList.remove("open");
      });
    });
  }

  /* FAQ accordion */
  document.querySelectorAll(".faq__q").forEach(function (q) {
    q.addEventListener("click", function () {
      var item = q.closest(".faq__item");
      var a = item.querySelector(".faq__a");
      var isOpen = item.classList.contains("open");
      document.querySelectorAll(".faq__item.open").forEach(function (other) {
        if (other !== item) {
          other.classList.remove("open");
          other.querySelector(".faq__a").style.maxHeight = null;
        }
      });
      if (isOpen) {
        item.classList.remove("open");
        a.style.maxHeight = null;
      } else {
        item.classList.add("open");
        a.style.maxHeight = a.scrollHeight + "px";
      }
    });
  });

  /* Scroll reveal */
  var reveals = document.querySelectorAll(".reveal");
  if ("IntersectionObserver" in window && reveals.length) {
    var obs = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) {
          e.target.classList.add("in");
          obs.unobserve(e.target);
        }
      });
    }, { threshold: 0.12 });
    reveals.forEach(function (el) { obs.observe(el); });
  } else {
    reveals.forEach(function (el) { el.classList.add("in"); });
  }

  /* Lead and contact forms submit to Formspree, which emails each lead. */
  function setStatus(form, message, ok) {
    var note = form.querySelector(".form-status");
    if (!note) {
      note = document.createElement("p");
      note.className = "form-status form-note";
      form.appendChild(note);
    }
    note.style.color = ok ? "#1d9b54" : "#c0392b";
    note.textContent = message;
  }

  document.querySelectorAll("form[data-lead]").forEach(function (form) {
    /* Inject a hidden honeypot field for spam protection */
    if (!form.querySelector('input[name="_gotcha"]')) {
      var hp = document.createElement("input");
      hp.type = "text";
      hp.name = "_gotcha";
      hp.tabIndex = -1;
      hp.autocomplete = "off";
      hp.setAttribute("aria-hidden", "true");
      hp.style.cssText = "position:absolute;left:-9999px;width:1px;height:1px;opacity:0;";
      form.appendChild(hp);
    }

    form.addEventListener("submit", function (e) {
      e.preventDefault();
      var btn = form.querySelector('button[type="submit"], .btn');
      var original = btn ? btn.textContent : "";
      if (btn) { btn.disabled = true; btn.textContent = "Sending..."; }

      var data = {};
      new FormData(form).forEach(function (v, k) { data[k] = v; });
      data.source = window.location.pathname;
      data._subject = "New CDMG website lead (" + window.location.pathname + ")";

      fetch("https://formspree.io/f/xzdqvlbd", {
        method: "POST",
        headers: { "Content-Type": "application/json", "Accept": "application/json" },
        body: JSON.stringify(data)
      })
        .then(function (res) {
          return res.json().then(
            function (j) { return { ok: res.ok, body: j }; },
            function () { return { ok: res.ok, body: {} }; }
          );
        })
        .then(function (r) {
          if (r.ok) {
            setStatus(form, "Thank you. Your request has been received. A CDMG strategist will reach out shortly.", true);
            form.reset();
          } else {
            var msg = "Something went wrong. Please try again, or email us directly.";
            if (r.body && r.body.errors && r.body.errors.length) {
              msg = r.body.errors.map(function (er) { return er.message; }).join(" ");
            }
            setStatus(form, msg, false);
          }
        })
        .catch(function () {
          setStatus(form, "We couldn't send your request just now. Please try again, or email us directly.", false);
        })
        .finally(function () {
          if (btn) { btn.disabled = false; btn.textContent = original; }
        });
    });
  });

  /* Footer year */
  var yr = document.getElementById("year");
  if (yr) yr.textContent = new Date().getFullYear();
})();
