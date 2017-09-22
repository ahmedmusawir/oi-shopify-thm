<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

get_header('shopify'); ?>
<h1>Shopify Archive</h1>

<section id="wpfree-video-page-category-index-block" class="container-fluid">
	
	<div class="content-box">

		<main class="flex-container">


	        <?php if( have_posts() ) : ?>
	        <?php while( have_posts() ) : the_post(); ?>

			<div class="flex-item chrome">
			<!-- <div class="flex-item" :class="{safari: browserClass}"> -->

				<article class="content" data-product-id="<?php the_product_id(); ?>">

					<figure class="image-holder">

						<a href="#">
		
							<!-- <img class="img-responsive center-block" src="http://via.placeholder.com/100x100" alt=""> -->
	        				<product-image class="img-responsive center-block"></product-image>
							
						</a>
						
					</figure>		        	

		                
					<h2 class="headline">
	                    <a href="<?php the_permalink(); ?>">
	                        <product-title></product-title>
	                        <!-- This is a headline -->
	                    </a>
					</h2>

					<p class="text-only">
	        			
	        			<!-- <product-description></product-description> -->
	        			
						
					</p>

					<div class="button-holder">
						<a href="#" class="btn btn-primary btn-lg">WATCH NOW</a>
        				<!-- <product-add  class="btn btn-primary btn-lg"  style="margin-top: 2rem;">Product Details</product-add> -->

					</div>
				</article>

			</div>
        <?php endwhile; ?>
        <?php endif; ?>

		</main>

	</div>

</section> <!-- End wpfree-video-page-category-index-block -->


<?php
get_footer();
