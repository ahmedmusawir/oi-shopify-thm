<?php
/**
 * The template for displaying all pages with Sidebar
 *
 * Template Name: Home Page Template
 *
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

get_header('shopify'); ?>

<!--=====================================
=            TOP IMAGE MODAL            =
======================================-->

<!-- THE TOP HERO BUTTON MODAL CODE -->

<!-- Modal Top one-->

<div class="modal fade" id="myModal-hero" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

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

                        	<?php the_field( 'hero_modal_form_code' ); ?>
                        	
                        	<!-- FOLLOWING IS FOR BLOG INDEX PAGE ACF -->
                        	<?php //the_field('blog_page_optin_image_mailchimp_form_code', get_option('page_for_posts')); ?> 

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

<!--====  End of TOP HERO BUTTONMODAL  ====-->

<img src="https://drive.google.com/uc?id=0B0uxrfVW1N50WV9IUHg3SXBmR2M" alt="">


<section id="imb-home-top-roadmap" class="container-fluid">

	<main class="container">
		
		<div class="flex-content-box">

			<article class="flex-item">

				<div class="icon-box-holder text-center">
					<div class="icon-box center-block">
						<i class="fa <?php the_field('optin_left_icon'); ?> fa-5x"></i>
					</div>					
				</div>

				<h1 class="headline text-center">
					<?php the_field('optin_left_headline'); ?>
				</h1>

				<p class="text-only text-center">
					<?php the_field('optin_left_text'); ?>
				</p>

				<div class="btn-holder text-center">
					<!-- <a class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModal-hero" ><?php the_field('optin_left_button_text'); ?></a> -->
					<a class="btn btn-primary btn-lg" href="<?php the_field('optin_left_button_url') ?>"><?php the_field('optin_left_button_text'); ?></a>
				</div>
				
				
			</article>
			<article class="flex-item">

				<div class="icon-box-holder text-center">
					<div class="icon-box center-block">
						<i class="fa <?php the_field('optin_center_icon'); ?> fa-5x"></i>
					</div>					
				</div>

				<h1 class="headline text-center">
					<?php the_field('optin_center_headline'); ?>
				</h1>

				<p class="text-only text-center">
					<?php the_field('optin_center_text'); ?>
				</p>

				<div class="btn-holder text-center">
					<a class="btn btn-primary btn-lg" href="<?php the_field('optin_center_button_url') ?>"><?php the_field('optin_center_button_text'); ?></a>
				</div>
				
				
			</article>
			<article class="flex-item">

				<div class="icon-box-holder text-center">
					<div class="icon-box center-block">
						<i class="fa <?php the_field('optin_right_icon'); ?> fa-5x"></i>
					</div>					
				</div>

				<h1 class="headline text-center">
					<?php the_field('optin_right_headline'); ?>
				</h1>

				<p class="text-only text-center">
					<?php the_field('optin_right_text'); ?>
				</p>

				<div class="btn-holder text-center">
					<a class="btn btn-primary btn-lg" href="<?php the_field('optin_right_button_url') ?>"><?php the_field('optin_right_button_text'); ?></a>
				</div>
				
				
			</article>			
			
		</div>

	</main>
	
</section> <!-- End imb-home-top-roadmap -->	

<section id="imb-home-info-block" class="container-fluid">

	<main class="container">
		
		<div class="content-box">

			<h1 class="headline text-center"><?php the_field('info_block_headline'); ?></h1>

			<div class=" col-sm-6 col-md-3 col-lg-3">
				<article class="text-box">
					
					<div class="text-only">

						<?php the_field('info_block_text_box_1') ?>
						
					</div>

				</article>				
			</div>
			<div class=" col-sm-6 col-md-3 col-lg-3">
				<article class="text-box">
					
					<div class="text-only">

						<?php the_field('info_block_text_box_2') ?>
						
					</div>

				</article>				
			</div>
			<div class=" col-sm-6 col-md-3 col-lg-3">
				<article class="text-box">
					
					<div class="text-only">

						<?php the_field('info_block_text_box_3') ?>
						
					</div>

				</article>				
			</div>
			<div class=" col-sm-6 col-md-3 col-lg-3">
				<article class="text-box">
					
					<div class="text-only">

						<?php the_field('info_block_text_box_4') ?>
						
					</div>

				</article>				
			</div>

		</div>

	</main>	
	
</section> <!-- End imb-home-info-block -->

<section id="imb-home-testimonial" class="container-fluid">

	<main class="container">
		
		<div class="content-box">

			<h1 class="headline text-center"><?php the_field('testimonial_headline'); ?></h1>

				<article id="testimonial-slider">

						<div id="carousel-example-captions" class="carousel slide" data-ride="carousel" data-interval="false">
						   <ol class="carousel-indicators">

								<?php if (get_field('home_testimonial_list')) :  $i = 0;  ?>

									<?php while(has_sub_field('home_testimonial_list')) :  ?>

									<?php if ( $i == 0 ) : ?>

										<li data-target="#carousel-example-captions" data-slide-to="<?php echo $i; ?>" class="caption-image active">

									<?php else : ?>

										<li data-target="#carousel-example-captions" data-slide-to="<?php echo $i; ?>" class="caption-image">

									<?php endif; ?>	

								      		<img class="img-responsive center-block img-circle" src="<?php the_sub_field( 'home_testimonial_client_image' ); ?>" alt="">

								      	</li>

								    <?php $i++; ?> 	

									<?php endwhile;  ?>

									<?php //reset_rows(); ?>	

								<?php endif; ?>															   
						      
						   </ol>
						   <div class="carousel-inner" role="listbox">

						   <?php if (get_field('home_testimonial_list')) :  $i = 0; ?>

								<?php while(has_sub_field('home_testimonial_list')) : $i++; ?>

									<?php if ( $i == 1 ) : ?>

										<div class="item active">

									<?php else : ?>

										<div class="item">

									<?php endif; ?>	

									      	<img class="img-responsive center-block img-circle" src="<?php the_sub_field( 'home_testimonial_client_image' ); ?>" alt="">
									      	<i class="fa fa-quote-left pull-left" aria-hidden="true"></i>
									      	<h4 class="text-center">
									      		<?php the_sub_field( 'home_testimonial_client_text' ); ?>
									      	</h4>
									         <div class="moose-caption">
									            <h3><?php the_sub_field( 'home_testimonial_client_name' ); ?></h3>
									            <p><?php the_sub_field( 'home_testimonial_client_description' ); ?></p>
									         </div>
								      	
								      	</div>

									
								<?php endwhile ?>	

							<?php endif; ?>	

						      						      							      							      
						   </div>
						   <a class="left carousel-control" href="#carousel-example-captions" role="button" data-slide="prev"> 
						   <i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
								<span class="sr-only">Previous</span> </a> 
								<a class="right carousel-control" href="#carousel-example-captions" role="button" data-slide="next"> 
								<i class="fa fa-chevron-right fa-2x" aria-hidden="true"></i> <span class="sr-only">Next</span> </a> 
						</div>
										
				</article>			

		</div>

	</main>	
	
</section> <!-- End imb-home-info-block -->
<?php
get_footer();
