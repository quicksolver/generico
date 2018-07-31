var generico = (function ($) {
	'use strict';

	/**
	 * Empty placeholder function.
	 *
	 * @since 0.1.0
	 */
	var functionName = function () {
			// Empty function, do all the things.
		},

		/**
		 * Fire events on document ready, and bind other events.
		 *
		 * @since 0.1.0
		 */
		ready = function () {
			functionName();

			// Examples binding to events.
			$(window).on('resize.generico', functionName);
			$(window).on('scroll.generico resize.generico', functionName);
		};

	// Only expose the ready function to the world
	return {
		ready: ready
	};

})(jQuery);

jQuery(generico.ready);
