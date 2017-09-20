jQuery(document).ready(function($) {
   
// This bit sets up jQuery Masonry
	var $container = jQuery('#masonry-grid');

	$container.imagesLoaded( function(){

		$container.masonry({
		  	columnWidth: '.grid-sizer',
			itemSelector: '.grid-item',
			isInitLayout: true, //layout kicks in at initialization
			isFitWidth: true,
			// isOriginLeft: false, //aligns to the right
			isOriginTop: true, //aligns bottom up
			isResizeBound: true, //binds with window resize ... default true
			transitionDuration: '2s',


		});
	});
});