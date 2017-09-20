jQuery(document).ready(function($) {

  $( '#content' ).fadeIn(600);	

	new WOW().init();

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

	// $('#left-inner-content-div').slimScroll({
 //        height: '810px'
 //    });

	// $('#right-inner-content-div').slimScroll({
 //        height: '810px'
 //    });    

});


// jQuery(document).ready(function($) {

// 	$('#left-inner-content-div').slimScroll({
//         height: '810px'
//     });
// });

// jQuery(document).ready(function($) {

// 	$('#right-inner-content-div').slimScroll({
//         height: '810px'
//     });
// });