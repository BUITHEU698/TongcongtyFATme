$(".slider-responsive-banner").slick({
  arrows: false,
  infinite: true,
  slidesToScroll: 1,
  adaptiveHeight: true,
  autoplay: false,
  autoplaySpeed: 4000,
  speed: 1000,
});
$(".slider-responsive-banner-list").slick({
  slidesToShow: 3,
  arrows: false,
  infinite: true,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1200,
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
$(".slider-responsive-category-list").slick({
  slidesToShow: 4,
  arrows: false,
  infinite: true,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      },
    },
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

// get class heart click to change innerhtml image and get back
$(".heart").click(function () {
  if ($(this).attr("src") == "../assets/images/main-images/icon-heart.png") {
    $(this).attr("src", "../assets/images/main-images/icon-heart-fill.png");
  } else {
    $(this).attr("src", "../assets/images/main-images/icon-heart.png");
  }
});

