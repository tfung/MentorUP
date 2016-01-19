// Must pass in $ for function, to allow shorthand jquery calls
jQuery(function($) {

	(function() {
		// if wpadminbar exists add an offset to page
		if (document.getElementById('wpadminbar')) {
			if ($('nav').hasClass('navbar-fixed-top')) {
				$('nav').addClass('adminbar-offset')
			}
		}
	})()


	$(window).on("load resize", function () {
		var windowHeight = $('#frontCarousel').height()

		$('#frontCarousel > .carousel-inner > .item').each(function () {
			var imageHeight = $(this).height()
			var offsetDelta = (imageHeight-windowHeight) / 2

			//console.log($(this).height())
			//console.log($(this).children('img:first'))

			console.log(offsetDelta)

			if (offsetDelta > 0) {
				$(this).css("margin-top", -offsetDelta)
			}

		})
	})

})