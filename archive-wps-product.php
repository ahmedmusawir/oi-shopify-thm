<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

get_header('shopify'); ?>
<h1 class="text-center">Shopify Local Store</h1>

<section id="wpfree-video-page-category-index-block" class="container-fluid">
	
	<div class="content-box container">

		<main class="flex-container">
	       <?php if( have_posts() ) : ?>
	        <?php while( have_posts() ) : the_post(); ?>

				<div class="flex-item" data-product-id="<?php the_product_id(); ?>">
				
					<article class="content">

						<figure class="image-holder">

							<a href="<?php the_permalink(); ?>">
			
								<!-- <img class="img-responsive center-block" src="http://via.placeholder.com/300x200" alt=""> -->
								<product-image></product-image>
								
							</a>
							
						</figure>
						<a href="<?php the_permalink(); ?>">
							<h2 class="headline">
                        		<product-title></product-title>
							</h2>
						</a>	
						<h5 class="well"><span class="label label-primary">PRICE:<product-price></product-price></span> &nbsp; <span class="label label-success">TYPE: <product-type></product-type></span></h5>
						<p class="text-only">
	        				<!-- <product-description></product-description> -->
						</p>

						<div class="button-holder">
							<a href="<?php the_permalink(); ?>" class="btn btn-primary btn-lg">Product Details</a>
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
