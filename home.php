<?php
/**
 * The main template file.
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

get_header('shopify'); ?>


<!--=====================================
=            TOP IMAGE MODAL            =
======================================-->

<!-- THE TOP IMAGE MODAL CODE -->

<!-- Modal Top one-->

<div class="modal fade" id="myModal-image" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header" style="background: #ef4a83; color: white;">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white;"><span aria-hidden="true">&times;</span></button>

                <h4 class="modal-title text-center" id="myModalLabel" style="color: white;">www.jenniferbrown.com</h4>

            </div>

            <div class="modal-body">

                <section id="popup-form-click" class="clearfix">

                    <article class="popup-text">

                        <figure>

                        	<?php the_field('blog_page_optin_image_mailchimp_form_code', get_option('page_for_posts')); ?>

                        </figure>

                    </article>

                </section>

            </div>

        </div>

        <div class="modal-footer hide">

            <button type="button" class="btn btn-primary center-block" data-dismiss="modal" style="background: black; color: white; border: 1px solid black;">Close</button>

        </div>

    </div>

</div>

<!--====  End of TOP IMAGE MODAL  ====-->

<!--=========================================
=            BOTTOM BUTTON MODAL            =
==========================================-->

<!-- Modal Bottom one-->

<div class="modal fade" id="myModal-button" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header" style="background: #01b3b5; color: white;">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white;"><span aria-hidden="true">&times;</span></button>

                <h4 class="modal-title text-center" id="myModalLabel" style="color: white;">www.jenniferbrown.com</h4>

            </div>

            <div class="modal-body">

                <section id="popup-form-click" class="clearfix">

                    <article class="popup-text">

                        <figure>

							<?php the_field('blog_page_optin_button_mailchimp_form_code', get_option('page_for_posts')); ?>

                        </figure>

                    </article>

                </section>

            </div>

        </div>

        <div class="modal-footer hide">

            <button type="button" class="btn btn-primary center-block" data-dismiss="modal" style="background: black; color: white; border: 1px solid black;">Close</button>

        </div>

    </div>

</div>

<!--====  End of BOTTOM BUTTON MODAL  ====-->

<!-- <h1>MOOSE IS LOSS</h1> -->

<section id="heather-blog-indx-header">

	<div class="content-box container">

		<div class="col-sm-7 col-md-7 col-lg-7">

			<?php 

				$args = array(

					'post_type' => 'post',

					'category_name' => 'featured', 

					'posts_per_page' => 1,

					'post_status' => 'publish',

					// 'order' => 'ASC',

				);

				$the_query = new WP_Query( $args );


				if ( $the_query->have_posts() ) :


				while ( $the_query->have_posts() ) : $the_query->the_post(); 
			?>


			<article class="featured-article">
			    <a class="article-content" href="<?php esc_url( the_permalink()); ?>">
			    	
			    	<figure class="article-image">

			           	<?php the_post_thumbnail('featured-size', ['class' => 'img-responsive', 'title' => 'Feature image']); ?>

			        </figure>


			        <div class="article-content">

			            <h4 class="article-title"> <?php the_title(); ?>  </h4>

			            <p class="article-date"> <?php the_time('F jS, Y') ?> </p>

			            <div class="article-text">
			            	<?php the_excerpt(); ?>
			            </div>

			        </div>

			    </a>
			   	<hr>
				<footer class="article-footer">

			        <div class="clearfix footer-content">
			        	<?php 
				    		$categories = get_the_category();

				    		foreach($categories as $category){
							   $cat_link = get_category_link($category->cat_ID);
							   echo '<a class="category-name pull-right" href="'.$cat_link.'">'.$category->name.'</a>'; // category link
							}

				    	?>
						<div class="social-icons">
							<?php echo do_shortcode('[addtoany]'); ?>
						</div>
			        </div>

			    </footer>			    

			</article>


			<?php

				endwhile;

				endif;

				// Reset Post Data

				wp_reset_postdata();
			?>
			
		</div>

		<div class="col-sm-5 col-md-5 col-lg-5">

			<div class="lead-pg lead-pg-block-1">

				<!-- <div class="lead-pg-image"> -->
					
			        <a data-toggle="modal" data-target="#myModal-image" >
			        	<img class="img-responsive" src="<?php the_field('blog_page_optin_image', get_option('page_for_posts')); ?>" alt=""></a>
			        </a>	

				<!-- </div> -->

			</div>	
			<div class="lead-pg lead-pg-block-2">

				<h3 class="block-text text-center">
					
					<?php the_field('blog_page_button_opt-in_headline', get_option('page_for_posts')) ?>

				</h3>			

				
				<h3 class="block-title text-center">
				
					<button class="btn btn-primary btn-block" type="button" data-toggle="modal" data-target="#myModal-button">

						<?php the_field('blog_page_optin_button_text', get_option('page_for_posts')); ?>

					</button> 

				</h3>
				
				

				
			</div>					
			
		</div>

	</div>
	
</section>

<section id="heather-blog-indx">

	<main id="col-md-moose"  class="container">

		<div id="masonry-grid">

			<div class="grid-sizer"></div>

			 
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


			<article class="grid-item article-content-block">

			    <a class="article-link" href="<?php esc_url( the_permalink()); ?>">
			    	
			    	<figure class="article-image" itemprop="image">
			           	<!-- <img src="http://via.placeholder.com/450x225" alt=""> -->
			           	<?php the_post_thumbnail('blog-size', ['class' => 'img-responsive', 'title' => 'Feature image']); ?>
			        </figure>


			        <div class="article-content">

			            <h4 class="article-title" itemprop="headline"> <?php the_title(); ?> </h4>

			            <p class="article-date" itemprop="datePublished"> <?php the_time('F jS, Y') ?> </p>

			            <div class="article-text">
			    			
			    			<?php the_excerpt(); ?>
			            	
			            </div>

			        </div>

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
							<!-- Sharingbutton Facebook -->
							
						</div>
			        </div>

			    </footer>

			</article>

			<?php endwhile; else: ?>
			    <?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
			<?php endif; ?>

		</div>


	</main> <!-- MAIN COL WRAPPER -->
	
</section>

<?php

get_footer();
