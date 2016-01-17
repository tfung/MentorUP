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

})