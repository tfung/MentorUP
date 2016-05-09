;(function($) {

  // temporary footer fix
  var footerPadding = $('#footer-padding');
  var footer = $('footer');

  var adjustFooterPadding = function () {
    if (footerPadding.height() < window.innerHeight) {
      var paddingAmt = window.innerHeight-footerPadding.position().top-footer.height();

      footerPadding.css('padding-top', paddingAmt + 'px');
    }
  }

  var setNavBarTheme = function () {
    var isTop = !$(window).scrollTop();
    var winWidth = window.innerWidth;

    if (isTop && winWidth > 768) {
      $('#navbar').removeClass('navbar-default');
      $('#navbar').addClass('navbar-transparent');

      $('#navbar .navbar-brand > img').removeClass('navbar-brand-fixedtop-img');
      $('#navbar .navbar-brand > img').addClass('navbar-brand-img');

      $('#navbar #navbar-list > #menu-main-menu').removeClass('navbar-fixedtop-margin');
    } 
    else {
      $('#navbar').removeClass('navbar-transparent');
      $('#navbar').addClass('navbar-default');

      $('#navbar .navbar-brand > img').removeClass('navbar-brand-img');
      $('#navbar .navbar-brand > img').addClass('navbar-brand-fixedtop-img');

      $('#navbar #navbar-list > #menu-main-menu').addClass('navbar-fixedtop-margin');
    }
  }

  $(window).on('load', function () {
    adjustFooterPadding();

    if (window.innerWidth <= 768) {
      $('#navbar').removeClass('navbar-transparent');
      $('#navbar').addClass('navbar-default');
    }
  })
  .on('resize', function () {
    adjustFooterPadding();
    setNavBarTheme();
  })
  .scroll(function() {
    setNavBarTheme();
  });

})(jQuery);
