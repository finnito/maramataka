/*jslint browser */
/*global window flatpickr URLSearchParams*/
document.addEventListener("DOMContentLoaded", function () {
    "use strict";
    var urlParams = new URLSearchParams(window.location.search);
    var date = urlParams.get("date");
    var subject = urlParams.get("subject");

    document.querySelectorAll(".form-container").forEach(function(form) {
        console.log(form);
    });

    if (date) {
        console.log(Date.parse(date));
        var dateStr = date.replace("T", " "); // 2022-04-08 14:10
        const fp = flatpickr("#date", {});
        fp.set("dateFormat", "Y-m-d H:i");
        fp.set("enableTime", true);
        // fp.set("defaultDate", date);
        // fp.setDate(Date.parse(date));
        fp.setDate(dateStr);
    }

    if (subject) {
        console.log(subject);
        Array.from(document.querySelector("#subject").options).forEach(function (option) {
            if (subject === option.innerText) {
                option.selected = true;
            }
        });
    }
});
