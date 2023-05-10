(function ($) {
  $(document).ready(function () {
    console.log('jquery is working...');
    // START jQuery

    $('.collapse').on('click', function () {
      if ($('.header__inner').hasClass('header__inner_hide')) {
        faAngleUp();
      } else {
        faAngleDown();
      }
    });

    $('.reviews-slider').slick({
      prevArrow: $('.reviews-slider-btns__prev'),
      nextArrow: $('.reviews-slider-btns__next'),
      slidesToShow: 3,
      dots: true,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            dots: true,
          },
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            dots: false,
          },
        },
        {
          breakpoint: 640,
          settings: {
            slidesToShow: 1,
            dots: false,
          },
        },
      ],
    });

    // start functions
    function faAngleUp() {
      $('.fa-angle-up').addClass('collapse_active');
      $('.fa-angle-down').removeClass('collapse_active');
      //
      $('.header').removeClass('header_collapse');
      $('.header').addClass('animate__animated animate__fadeInDown animate__faster');
      $('.header__inner').removeClass('header__inner_hide');
    }
    function faAngleDown() {
      $('.fa-angle-up').removeClass('collapse_active');
      $('.fa-angle-down').addClass('collapse_active');
      //
      $('.header').addClass('header_collapse');
      $('.header').removeClass('animate__animated animate__fadeInDown animate__faster');
      $('.header__inner').addClass('header__inner_hide');
    }
    // end functions

    $('.btns__order-rework').on('click', function () {
      $('select.wpcf7-form-control option[value="Доработка сайта"]').prop('selected', true);
    });
    $('.btns__order-site').on('click', function () {
      $('select.wpcf7-form-control option[value="Создание сайта-визитки"]').prop('selected', true);
    });

    new WOW().init();

    // start technology
    $('.technology-item__progress span').each(function () {
      $(this).css({ width: `${$(this).attr('data-level')}%` });
    });
    // end technology

    // start menu
    $('.header__nav-mob').on('click', function () {
      $(this).find('div').toggleClass('nav-mob_active');
      if ($('.header__nav-mob__open').hasClass('nav-mob_active')) {
        $('.header__nav').removeClass('header__nav_active');
      } else {
        $('.header__nav').addClass('header__nav_active');
      }
    });
    // end menu

    // start single
    $('.single__bottom p').slick({
      prevArrow: $('.single-slider-btns__prev'),
      nextArrow: $('.single-slider-btns__next'),
    });
    // end single

    // END jQuery
  });
})(jQuery);
