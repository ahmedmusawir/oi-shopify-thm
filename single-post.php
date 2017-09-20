<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * 
 *
 * @package Moose_Framework
 */

get_header('blog'); ?>
<section class="container">
<!-- <h1>Blog Single Only</h1> -->

	<div id="primary" class="content-area col-md-12 col-lg-12">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single' );

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
</section> <!-- End Container -->	
<?php
get_footer();
