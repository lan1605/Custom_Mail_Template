const slides = document.querySelectorAll(".service-content--items"),
  dots = document.querySelectorAll(".dot"),
  listContent = document.querySelector(".service-content--custom");
let slideIndex = 0;
function changeSlide(index) {
  listContent.style = `transform :translateX(${
    index * slides[index].clientWidth - slides[index].clientWidth
  }px)`;
  slides.forEach((item) => (item.style = "opacity: 1"));
  slides[index].style = "opacity: 0";
  dots.forEach((item) => item.classList.add("active"));
  dots[index].classList.remove("active");
}

dots.forEach((item) =>
  item.addEventListener("click", function (e) {
    if (item.id === e.target.id) {
      listContent.style = `transform :translateX(${0}px)`;
      dots.forEach((item) => item.classList.remove("active"));

      e.target.classList.add("active");
      if (e.target.id === "right") {
        slideIndex = 0;
      } else {
        slideIndex = slideIndex + 1;
      }
      changeSlide(slideIndex);
    }
  })
);
const fader = (items, timer, current = 0) => {
  const total = items.length;
  current = current !== total - 1 ? current + 1 : 0;
  changeSlide(current);
  setTimeout(fader, timer, items, timer, current);
};
window.addEventListener("DOMContentLoaded", function () {
  fader(slides, 4000);
});
