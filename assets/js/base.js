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

  $(window).on('load', function () {
    adjustFooterPadding();
  })
  .on('resize', function () {
    adjustFooterPadding();
  })
  .scroll(function() {
      var isTop = !$(window).scrollTop();

      if (isTop) {
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
    });

})(jQuery);
