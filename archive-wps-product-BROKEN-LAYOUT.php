<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

get_header('event'); ?>
<section id="heather-archive-indx">
<h1>Shopify Archive</h1>
		<main id="col-md-moose" class="container" role="main">

			<?php
				if ( have_posts() ) : ?>

					<header class="page-header">
						<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
						<product-image></product-image>
					</header><!-- .page-header -->

			<div id="masonry-grid">

				<div class="grid-sizer"></div>

				
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						//get_template_part( 'template-parts/content', 'shopify' );
					?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('grid-item article-content-block'); ?>>

						<a class="article-link" href="<?php esc_url( the_permalink()); ?>">
					    <section  data-product-id="<?php the_product_id(); ?>">
					    		
					    	<figure class="article-image" itemprop="image">
					           	<!-- <img src="http://via.placeholder.com/450x225" alt=""> -->
					           	<?php //the_post_thumbnail('blog-size', ['class' => 'img-responsive', 'title' => 'Feature image']); ?>
	        					<product-image></product-image>
					            
					        </figure>


					        <div class="article-content">

					            <h4 class="article-title" itemprop="headline">
        						
				                    <!-- <a href="<?php the_permalink(); ?>"> -->
				                        <product-title></product-title>
				                    <!-- </a> -->
					            	
					            </h4>
					            <!-- <h4 class="article-title" itemprop="headline"> <?php //the_title(); ?> </h4> -->

					            <p class="article-date" itemprop="datePublished"> <?php the_time('F jS, Y') ?> </p>

					            <div class="article-text">
					    			
					    			<?php the_excerpt(); ?>
					                <!-- <product-description></product-description> -->
					            	
					            </div>

					        </div>

				    	</section>	
					    </a>
					   	<hr>
					    <footer class="article-footer">

					        <div class="clearfix footer-content">
					        	<?php 
						    		$categories = get_the_category();

						    		foreach($categories as $category){
									   $cat_link = get_category_link($category->cat_ID);
									   echo '<a class="category-name pull-right" href="'.$cat_link.'">'.$category->name.'</a>'; // category link
									   // echo '<a class="category-name pull-right" href="'. "#" .'">'.$category->name.'</a>'; // category link
									}

						    	?>
								<div class="social-icons">
									<?php echo do_shortcode('[addtoany]'); ?>
								</div>
					        </div>

					    </footer>	


					</article><!-- #post-## -->

				<?php

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

			</div> <!-- MASONRY GRID -->

		</main><!-- #main -->
	<!-- </div>#primary -->
	
</section> <!-- End Container -->	

<?php
get_footer();
