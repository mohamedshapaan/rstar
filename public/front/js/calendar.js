/*
    Vanilla AutoComplete v0.1
    Copyright (c) 2019 Mauro Marssola
    GitHub: https://github.com/marssola/vanilla-calendar
    License: http://www.opensource.org/licenses/mit-license.php
*/
let VanillaCalendar = (function() {
  return function(t) {
    function e(t, e, a) {
      t &&
        (t.attachEvent ? t.attachEvent("on" + e, a) : t.addEventListener(e, a));
    }
    function a(t, e, a) {
      t &&
        (t.detachEvent
          ? t.detachEvent("on" + e, a)
          : t.removeEventListener(e, a));
    }
    let n = {
      selector: null,
      datesFilter: !1,
      pastDates: !0,
      availableWeekDays: [],
      availableDates: [],
      date: new Date(),
      todaysDate: new Date(),
      button_prev: null,
      button_next: null,
      month: null,
      month_label: null,
      onSelect: (t, e) => {},
      months: [
        "يناير",
        "فبراير",
        "مارس",
        "ابريل",
        "مايو",
        "يونيو",
        "يوليو",
        "أغسطس",
        "سبتمبر",
        "أكتوبر",
        "نوفمبر",
        "ديسمبر"
      ],
      shortWeekday: ["SUN", "MON", "TUE", "WED", "THU", "FRI", "SAT"]
    };
    for (let e in t) n.hasOwnProperty(e) && (n[e] = t[e]);
    let l = document.querySelector(n.selector);
    if (!l) return;
    const d = function(t) {
        let e = document.createElement("div"),
          a = document.createElement("span");
        (a.innerHTML = t.getDate()),
          (e.className = "vanilla-calendar-date"),
          e.setAttribute("data-calendar-date", t);
        let l = n.availableWeekDays.filter(
            e =>
              e.day === t.getDay() ||
              e.day ===
                (function(t) {
                  return [
                    "sunday",
                    "monday",
                    "tuesday",
                    "wednesday",
                    "thursday",
                    "friday",
                    "saturday"
                  ][t];
                })(t.getDay())
          ),
          d = n.availableDates.filter(
            e =>
              e.date ===
              t.getFullYear() +
                "-" +
                String(t.getMonth() + 1).padStart("2", 0) +
                "-" +
                String(t.getDate()).padStart("2", 0)
          );
        1 === t.getDate() && (e.style.marginLeft = 14.28 * t.getDay() + "%"),
          n.date.getTime() <= n.todaysDate.getTime() - 1 && !n.pastDates
            ? e.classList.add("vanilla-calendar-date--disabled")
            : n.datesFilter
            ? l.length
              ? (e.classList.add("vanilla-calendar-date--active"),
                e.setAttribute("data-calendar-data", JSON.stringify(l[0])),
                e.setAttribute("data-calendar-status", "active"))
              : d.length
              ? (e.classList.add("vanilla-calendar-date--active"),
                e.setAttribute("data-calendar-data", JSON.stringify(d[0])),
                e.setAttribute("data-calendar-status", "active"))
              : e.classList.add("vanilla-calendar-date--disabled")
            : (e.classList.add("vanilla-calendar-date--active"),
              e.setAttribute("data-calendar-status", "active")),
          t.toString() === n.todaysDate.toString() &&
            e.classList.add("vanilla-calendar-date--today"),
          e.appendChild(a),
          n.month.appendChild(e);
      },
      r = function() {
        l.querySelectorAll("[data-calendar-status=active]").forEach(t => {
          t.addEventListener("click", function() {
            document
              .querySelectorAll(".vanilla-calendar-date--selected")
              .forEach(t => {
                t.classList.remove("vanilla-calendar-date--selected");
              });
            let t = this.dataset,
              e = {};
            t.calendarDate && (e.date = t.calendarDate),
              t.calendarData && (e.data = JSON.parse(t.calendarData)),
              n.onSelect(e, this),
              this.classList.add("vanilla-calendar-date--selected");
          });
        });
      },
      s = function() {
        o();
        let t = n.date.getMonth();
        for (; n.date.getMonth() === t; )
          d(n.date), n.date.setDate(n.date.getDate() + 1);
        n.date.setDate(1),
          n.date.setMonth(n.date.getMonth() - 1),
          (n.month_label.innerHTML =
            n.months[n.date.getMonth()] + " " + n.date.getFullYear()),
          r();
      },
      i = function() {
        n.date.setMonth(n.date.getMonth() - 1), s();
      },
      c = function() {
        n.date.setMonth(n.date.getMonth() + 1), s();
      },
      o = function() {
        n.month.innerHTML = "";
      };
    (this.init = function() {
      (document.querySelector(n.selector).innerHTML =
        '\n            <div class="vanilla-calendar-header">\n <button type="button" class="vanilla-calendar-btn" data-calendar-toggle="previous"><i class="far fa-chevron-right""></i></button>\n                <div class="vanilla-calendar-header__label" data-calendar-label="month"></div>\n                <button type="button" class="vanilla-calendar-btn" data-calendar-toggle="next"><i class="far fa-chevron-left"></i></button>\n            </div>\n            <div class="vanilla-calendar-week"></div>\n            <div class="vanilla-calendar-body" data-calendar-area="month"></div>\n            '),
        (n.button_prev = document.querySelector(
          n.selector + " [data-calendar-toggle=previous]"
        )),
        (n.button_next = document.querySelector(
          n.selector + " [data-calendar-toggle=next]"
        )),
        (n.month = document.querySelector(
          n.selector + " [data-calendar-area=month]"
        )),
        (n.month_label = document.querySelector(
          n.selector + " [data-calendar-label=month]"
        )),
        n.date.setDate(1),
        s(),
        (document.querySelector(
          `${n.selector} .vanilla-calendar-week`
        ).innerHTML = `\n                <span>${n.shortWeekday[0]}</span>\n                <span>${n.shortWeekday[1]}</span>\n                <span>${n.shortWeekday[2]}</span>\n                <span>${n.shortWeekday[3]}</span>\n                <span>${n.shortWeekday[4]}</span>\n                <span>${n.shortWeekday[5]}</span>\n                <span>${n.shortWeekday[6]}</span>\n            `),
        e(n.button_prev, "click", i),
        e(n.button_next, "click", c);
    }),
      (this.destroy = function() {
        a(n.button_prev, "click", i),
          a(n.button_next, "click", c),
          o(),
          (document.querySelector(n.selector).innerHTML = "");
      }),
      (this.reset = function() {
        this.destroy(), this.init();
      }),
      (this.set = function(t) {
        for (let e in t) n.hasOwnProperty(e) && (n[e] = t[e]);
        s();
      }),
      this.init();
  };
})();
window.VanillaCalendar = VanillaCalendar;