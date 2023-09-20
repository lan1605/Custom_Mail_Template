const btnSignup = document.querySelector(".service-content--btn"),
  btnClosePopup = document.querySelector(".popup-close");
const popup = document.querySelector(".popup"),
  backdropPopup = document.querySelector(".backdrop-popup");
function closePopup() {
  popup.classList.remove("show-popup");
  backdropPopup.classList.remove("show");
}
function openPopup() {
  popup.classList.add("show-popup");
  backdropPopup.classList.add("show");
}
btnSignup.addEventListener("click", openPopup);
btnClosePopup.addEventListener("click", closePopup);
backdropPopup.addEventListener("click", closePopup);
function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    total: t,
    days: days,
    hours: hours,
    minutes: minutes,
    seconds: seconds,
  };
}
var daysSpan = document.querySelector(".day :where(.number)"),
  hoursSpan = document.querySelector(".hour :where(.number)"),
  minutesSpan = document.querySelector(".minute :where(.number)"),
  secondsSpan = document.querySelector(".second :where(.number)"),
  daysPopup = document.querySelector(".popup-set--time.day :where(.number)"),
  hoursPopup = document.querySelector(".popup-set--time.hour :where(.number)"),
  minutesPopup = document.querySelector(
    ".popup-set--time.minute :where(.number)"
  ),
  secondsPopup = document.querySelector(
    ".popup-set--time.second :where(.number)"
  );
function initializeClock(id, endtime, days, hours, minutes, seconds) {
  function updateClock() {
    var t = getTimeRemaining(endtime);

    if (t.total <= 0) {
      clearInterval(timeinterval);

      var newTime = Date.parse(endtime);
      var nowTime = Date.parse(new Date());

      while (newTime <= nowTime) {
        newTime = newTime + 1 * 24 * 60 * 60 * 1000; // add 24hours
      }

      var deadline = new Date(newTime);
      initializeClock("countdown", deadline, days, hours, minutes, seconds);
    } else {
      days.innerHTML = "0" + t.days;
      hours.innerHTML = ("0" + t.hours).slice(-2);
      minutes.innerHTML = ("0" + t.minutes).slice(-2);
      seconds.innerHTML = ("0" + t.seconds).slice(-2);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var deadline = "Thu Aug 31 2023 15:56:25 GMT+0700 (Indochina Time)";
initializeClock(
  "countdown",
  deadline,
  daysSpan,
  hoursSpan,
  minutesSpan,
  secondsSpan
);
initializeClock(
  "countdown",
  deadline,
  daysPopup,
  hoursPopup,
  minutesPopup,
  secondsPopup
);
// document.addEventListener("DOMContentLoaded", function () {
//   setTimeout(() => {
//     openPopup();
//   }, 2500);
// });
