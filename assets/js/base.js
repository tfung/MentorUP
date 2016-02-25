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
  });

})(jQuery);
