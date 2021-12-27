
// go to top button
const gotoTop = document.querySelector(".goto-top");
const nav = document.querySelector(".navigation");
window.addEventListener("scroll", function () {
  if (window.pageYOffset > 120) {
    gotoTop.classList.add("is-visible");
    nav.classList.add("navigation-fixed");
  } else {
    gotoTop.classList.remove("is-visible");
    nav.classList.remove("navigation-fixed");
  }
});


// link-active
$(document).ready(function () {
  $(". .menu-link").click(function () {
    $(".menu .menu-link").removeClass("link-active");
    $(this).addClass("link-active");
  });
});
