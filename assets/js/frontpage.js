jQuery(document).ready(function($) {

	var windowHeight = $(window).height()

	$('.carousel').carousel({
    	interval: false
	}); 

	$(window).on('load', function () {
		if ($('#navbar').hasClass('navbar-fixed-top')) {
			$('#navbar').removeClass('navbar-fixed-top')
		}
	})
	.on('resize', function () {
		windowHeight = $(this).height()
	})
	.scroll(function () {
		console.log($(this).scrollTop())

		if ($(this).scrollTop() > windowHeight - 68) {

			console.log('in')
			$('#navbar').addClass('navbar-fixed-top')
		}
		else if ($('#navbar').hasClass('navbar-fixed-top')) {
			$('#navbar').removeClass('navbar-fixed-top')
		}
	})

})