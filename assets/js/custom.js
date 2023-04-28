(function ($) {
  $(document).ready(function () {
    console.log('jquery is working...');
    // START jQuery

    let isScroll = 0,
      targetScroll = 32;
    $(window).on('scroll', function () {
      if (isScroll === 0 && $(this).scrollTop() >= targetScroll) {
        isScroll = 1;
        faAngleDown();
      } else if (isScroll === 1 && $(this).scrollTop() < targetScroll) {
        isScroll = 0;
        faAngleUp();
      }
    });

    $('.collapse').on('click', function () {
      if ($('.header__inner').hasClass('header__inner_hide')) {
        faAngleUp();
      } else {
        faAngleDown();
      }
    });

    $('.portfolio-slider').slick();
    $('.reviews-slider').slick();

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

    // END jQuery
  });
})(jQuery);
