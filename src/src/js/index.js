//swiper

var mySwiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  speed: 600,
  // autoplay: {
  //   delay: 6000,
  // },

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

// hover hue change

$('.slide-cta').hover(
  function() {
    // Mouse enters the element
    $('.alexx-website-logo , #open_preferences_center, .slide-cta, .swiper-pagination, .cc-nb-okagree, .cc-nb-reject').addClass('hue-rotate-effect');
  },
  function() {
    // Mouse leaves the element
    $('.alexx-website-logo, #open_preferences_center, .slide-cta, .swiper-pagination, .cc-nb-okagree, .cc-nb-reject').removeClass('hue-rotate-effect');
  }
);

// black and white change


// Add classes for hover styles
$('.swiper').hover(
  function() {
    // Mouse enters the element
    $('.swiper-slide img').addClass('hovered');
  },
  function() {
    // Mouse leaves the element
    $('.swiper-slide img').removeClass('hovered');
  }
);