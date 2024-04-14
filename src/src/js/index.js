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

let headings = $('#introduction-heading, #skills-heading, #miscelaneous-heading');

    headings.on('click', function() {

        // Remove 'current-arrow' class from all arrows
        $('.arrow').removeClass('current-arrow');

        // Add 'current-arrow' class to the arrow within the clicked heading
        $(this).find('.arrow').addClass('current-arrow');

    headings.removeClass('current-item');
    
    $(this).addClass('current-item');


    $('#introduction-paragraph, #skills-paragraph, #miscelaneous-paragraph').addClass('d-none');
    
    let targetParagraph = $($(this).data('target'));
    targetParagraph.removeClass('d-none');
});