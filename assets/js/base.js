// Must pass in $ for function, to allow shorthand jquery calls
jQuery(document).ready(function($) {

	var windowHeight = $(window).height()

	// (function() {
	// 	// if wpadminbar exists add an offset to page
	// 	if (document.getElementById('wpadminbar')) {
	// 		if ($('nav').hasClass('navbar-fixed-top')) {
	// 			$('nav').addClass('adminbar-offset')
	// 		}
	// 	}
	// })()


	// $(window).on("load resize", function () {
	// 	var windowHeight = $('#frontCarousel').height()

	// 	$('#frontCarousel > .carousel-inner > .item').each(function () {
	// 		var imageHeight = $(this).outerHeight()
	// 		var offsetDelta = (imageHeight-windowHeight) / 2

	// 		console.log(imageHeight + '-' + windowHeight + '=' + (imageHeight-windowHeight) + '/2 = ' + offsetDelta)

	// 		if (offsetDelta > 0) {
	// 			$(this).css("margin-top", -offsetDelta)
	// 		}

	// 	})
	// })

	$('.carousel').carousel({
    	interval: false
	}); 

	$(window).on('resize', function () {
		windowHeight = $(this).height()

		console.log(windowHeight)
		console.log('scrooltop: '+$(this).scrollTop())
	})
})