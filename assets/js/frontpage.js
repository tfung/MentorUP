;(function($) {

  var windowHeight = $(window).height()

  $(window).on('load', function () {
    if ($('#navbar').hasClass('navbar-fixed-top')) {
      $('#navbar').removeClass('navbar-fixed-top')
    }
  })
  .on('resize', function () {
    windowHeight = $(this).height()
  })
  .scroll(function () {
    if ($(this).scrollTop() > windowHeight - 68) {
      if (!$('#navbar').hasClass('navbar-fixed-top'))
        $('#navbar').addClass('navbar-fixed-top')
    }
    else if ($('#navbar').hasClass('navbar-fixed-top')) {
      $('#navbar').removeClass('navbar-fixed-top')
    }
  })

  $(window).scroll(function () {
    var tmp = $('#test').position().top;

    if (tmp < window.innerHeight * 0.5) {
      $('#test').css('opacity', tmp / window.innerHeight);
    }
  });

})(jQuery);
