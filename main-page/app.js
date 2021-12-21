//scroll animation fade in
var scroll =
  window.requestAnimationFrame ||
  function (callback) {
    window.setTimeout(callback, 1000 / 60);
  };
var elementsToShow = document.querySelectorAll(".show-on-scroll");
function loop() {
  elementsToShow.forEach(function (element) {
    if (isElementInViewport(element)) {
      element.classList.add("is-visible");
    } else {
      element.classList.remove("is-visible");
    }
  });
  scroll(loop);
}
loop();

function isElementInViewport(el) {
  if (typeof jQuery === "function" && el instanceof jQuery) {
    el = el[0];
  }
  var rect = el.getBoundingClientRect();
  return (
    (rect.top <= 0 && rect.bottom >= 0) ||
    (rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.top <= (window.innerHeight || document.documentElement.clientHeight)) ||
    (rect.top >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
  );
}
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

// slider
$(".slider-responsive").slick({
  arrows: true,
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 2,
  autoplay: true,
  autoplaySpeed: 4000,
  dots: true,
  swipeToSlide: true,
  responsive: [
    {
      breakpoint: 1023,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

var filtered = false;

$(".js-filter").on("click", function () {
  if (filtered === false) {
    $(".filtering").slick("slickFilter", ":even");
    $(this).text("Unfilter Slides");
    filtered = true;
  } else {
    $(".filtering").slick("slickUnfilter");
    $(this).text("Filter Slides");
    filtered = false;
  }
});

// video play
//lấy ra các giá trị chứa class btn-watch
var video = document.querySelector(".video");
var btnWatch = document.querySelector(".btn-watch");
function togglePlayPause() {
  if (video.paused) {
    document.querySelector('.watch-icon').innerHTML = '<img srcset="./images/icon-pause.png 2x" />';
    document.querySelector('.watch-icon1').innerHTML = '<img srcset="./images/icon-pause.png 2x" />';
    video.play();
  } else {
    document.querySelector('.watch-icon').innerHTML = '<img srcset="./images/icon-play.png 2x" />';
    document.querySelector('.watch-icon1').innerHTML = '<img srcset="./images/icon-play.png 2x" />';
    video.pause();
  }
}
btnWatch.onclick = function () {
  togglePlayPause();
};
var btnWatch1 = document.querySelector(".btn-watch1");
function togglePlayPause1() {
  if (video.paused) {
    document.querySelector('.watch-icon1').innerHTML = '<img srcset="./images/icon-pause.png 2x" />';
    document.querySelector('.watch-icon').innerHTML = '<img srcset="./images/icon-pause.png 2x" />';
    video.play();
  } else {
    document.querySelector('.watch-icon1').innerHTML = '<img srcset="./images/icon-play.png 2x" />';
    document.querySelector('.watch-icon').innerHTML = '<img srcset="./images/icon-play.png 2x" />';
    video.pause();
  }
}
btnWatch1.onclick = function () {
  togglePlayPause1();
};

// link-active
$(document).ready(function () {
  $(".menu .menu-link").click(function () {
    $(".menu .menu-link").removeClass("link-active");
    $(this).addClass("link-active");
  });
});
