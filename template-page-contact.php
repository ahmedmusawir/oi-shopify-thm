<?php
/**
 * The template for displaying Contact Page.
 *
 * Template Name: Contact Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

get_header('shopify'); ?>

<section id="Acf-Google-Map-Block">
	<!--====================================
	=            ACF Google MAP            =
	=====================================-->

	<style type="text/css">

	.acf-map {
		width: 100%;
		height: 400px;
		border: #ccc solid 1px;
		margin: 0px 0;
	}

	/* fixes potential theme css conflict */
	.acf-map img {
	   max-width: inherit !important;
	}

	</style>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_QX-gHIZII6GzEMz4LMmRTE15HDADKrI"></script>
	<script type="text/javascript">

	jQuery(document).ready(function($) {


		/**
		
			ACF GOOGLE MAP
		
		 */
		
		/*
		*  new_map
		*
		*  This function will render a Google Map onto the selected jQuery element
		*
		*  @type	function
		*  @date	8/11/2013
		*  @since	4.3.0
		*
		*  @param	$el (jQuery element)
		*  @return	n/a
		*/

		function new_map( $el ) {
			
			// var
			var $markers = $el.find('.marker');
			
			
			// vars
			var args = {
				zoom		: 14,
				center		: new google.maps.LatLng(0, 0),
				mapTypeId	: google.maps.MapTypeId.ROADMAP,
				scrollwheel: false
			};
			
			
			// create map	        	
			var map = new google.maps.Map( $el[0], args);
			
			
			// add a markers reference
			map.markers = [];
			
			
			// add markers
			$markers.each(function(){
				
		    	add_marker( $(this), map );
				
			});
			
			
			// center map
			center_map( map );
			
			
			// return
			return map;
			
		}

		/*
		*  add_marker
		*
		*  This function will add a marker to the selected Google Map
		*
		*  @type	function
		*  @date	8/11/2013
		*  @since	4.3.0
		*
		*  @param	$marker (jQuery element)
		*  @param	map (Google Map object)
		*  @return	n/a
		*/

		function add_marker( $marker, map ) {

			// var
			var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

			// create marker
			var marker = new google.maps.Marker({
				position	: latlng,
				map			: map
			});

			// add to array
			map.markers.push( marker );

			// if marker contains HTML, add it to an infoWindow
			if( $marker.html() )
			{
				// create info window
				var infowindow = new google.maps.InfoWindow({
					content		: $marker.html()
				});

				// show info window when marker is clicked
				google.maps.event.addListener(marker, 'click', function() {

					infowindow.open( map, marker );

				});
			}

		}

		/*
		*  center_map
		*
		*  This function will center the map, showing all markers attached to this map
		*
		*  @type	function
		*  @date	8/11/2013
		*  @since	4.3.0
		*
		*  @param	map (Google Map object)
		*  @return	n/a
		*/

		function center_map( map ) {

			// vars
			var bounds = new google.maps.LatLngBounds();

			// loop through all markers and create bounds
			$.each( map.markers, function( i, marker ){

				var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

				bounds.extend( latlng );

			});

			// only 1 marker?
			if( map.markers.length == 1 )
			{
				// set center of map
			    map.setCenter( bounds.getCenter() );
			    map.setZoom( 16 );
			}
			else
			{
				// fit to bounds
				map.fitBounds( bounds );
			}

		}

		/*
		*  document ready
		*
		*  This function will render each map when the document is ready (page has loaded)
		*
		*  @type	function
		*  @date	8/11/2013
		*  @since	5.0.0
		*
		*  @param	n/a
		*  @return	n/a
		*/
		// global var
		var map = null;

		$(document).ready(function(){

			$('.acf-map').each(function(){

				// create map
				map = new_map( $(this) );

			});

		});





	});

	</script>

	<!--====  End of ACF Google MAP  ====-->


	<?php 

	$location = get_field('google_map');

	if( !empty($location) ):
	?>
	<div class="acf-map">
		<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
	</div>
	<?php endif; ?>

	
</section>

<section id="Title-Container" class="">

	<div id="primary" class="container content-area col-sm-12 col-md-12 col-lg-12">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'contact' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

</section> <!-- End Container -->	

<section id="Contact-Main-Content">
<!-- <h1>I am contact</h1> -->
	<div id="primary" class="container content-area">
		<main id="main" class="site-main contact-content" role="main">

			<div class="col-sm-6 col-md-6 col-lg-6">
				<article class="left-text-content">

					<h2 class="headline-social">Get Social</h2>
					<ul class="contact-social">

					<?php if( get_field('social_icon_1') ): ?>

					    <li><a target="_blank" href="<?php the_field('social_link_1'); ?>"><i class="fa <?php the_field('social_icon_1'); ?> fa-2x"></i></a></li>

					<?php endif; ?>
					<?php if( get_field('social_icon_2') ): ?>

					    <li><a target="_blank" href="<?php the_field('social_link_2'); ?>"><i class="fa <?php the_field('social_icon_2'); ?> fa-2x"></i></a></li>

					<?php endif; ?>	
					<?php if( get_field('social_icon_3') ): ?>

					    <li><a target="_blank" href="<?php the_field('social_link_3'); ?>"><i class="fa <?php the_field('social_icon_3'); ?> fa-2x"></i></a></li>

					<?php endif; ?>	
					<?php if( get_field('social_icon_4') ): ?>

					    <li><a target="_blank" href="<?php the_field('social_link_4'); ?>"><i class="fa <?php the_field('social_icon_4'); ?> fa-2x"></i></a></li>

					<?php endif; ?>	
					<?php if( get_field('social_icon_5') ): ?>

					    <li><a target="_blank" href="<?php the_field('social_link_5'); ?>"><i class="fa <?php the_field('social_icon_5'); ?> fa-2x"></i></a></li>

					<?php endif; ?>						
					    
					</ul>


					<h2 class="headline-info"><?php the_field('headline_contact_info'); ?></h2>
					
					<div class="content-info">
						<p class="address">
							<i class="fa fa-map-marker"></i>&nbsp;

							<?php the_field('address_line_1'); ?><br>
							&nbsp; &nbsp; &nbsp;<?php the_field('address_line_2'); ?><br>
							
						</p>

					
						<p class="phone"><i class="fa fa-phone"></i>&nbsp;<?php the_field('phone_number'); ?></p>

						
						<p class="email"><i class="fa fa-envelope"></i>&nbsp;<?php the_field('email_address'); ?></p>		

					</div>

					
					
							
				</article>
			</div>

			<div class="col-sm-6 col-md-6 col-lg-6">
				<article class="right-form-content">

					<h2 class="headline-form"><?php the_field('headline_right'); ?></h2>
					<p class="sub-headline-form"><?php the_field('subheadline_right'); ?></p>

					<figure>
						
						<?php echo do_shortcode( get_field( 'form_shortcode_right' ) ); ?>
						<?php //echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
						
					</figure>

				</article>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
	
</section> <!-- End Container -->	

<?php
get_footer();
