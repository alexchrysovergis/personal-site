//swiper

var mySwiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  speed: 600,
  autoplay: {
    delay: 6000,
  },

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

// for overflow issues (temporary)

$(window).on('load', function() {
  setTimeout(function() {
    $('html').removeClass('overflow-hidden');
  }, 100);
});

// about interaction

$(document).ready(function() {

  $('.about-arrow-headings h2').on('click', function() {

      $('.arrow').removeClass('current-arrow');

      $(this).find('.arrow').addClass('current-arrow');

      $('.about-arrow-headings h2').removeClass('current-item');
      
      $(this).addClass('current-item');

      $('.about-arrow-headings p').addClass('d-none');
      
      let targetParagraph = $($(this).data('target')).addClass('is-visible');;
      targetParagraph.removeClass('d-none');
  });
});