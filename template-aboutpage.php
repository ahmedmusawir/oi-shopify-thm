<?php
/**
 * The template for displaying all pages with Sidebar
 *
 * Template Name: About Page Template
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

get_header('about'); ?>

<section id="imb-aboutpg-roadmap" class="container-fluid">

	<div class="content-box container">
		
		<!-- <h1 class="headline text-center">Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit Esse</h1> -->

		<div class="image-group row">

			<figure class="image-box col-sm-4 col-md-4 col-lg-4">
				
				<div class="icon-box-holder text-center">
					<div class="icon-box center-block">
						<i class="fa <?php the_field('optin_left_icon'); ?> fa-5x"></i>
					</div>					
				</div>
			
				<article class="roadmap-image-text">

					<h3 class="subheadline">
						<?php the_field('optin_left_headline'); ?>
					</h3>
					
					<h4 class="text-only">
						<?php the_field('optin_left_text'); ?>
					</h4>
					
				</article>

				<!-- <div class="roadmap-button">

					<a href="#" class="btn btn-warning btn-lg">CLICK HERE</a>
				
				</div> -->

			</figure>

			<figure class="image-box col-sm-4 col-md-4 col-lg-4">
				
				<div class="icon-box-holder text-center">
					<div class="icon-box center-block">
						<i class="fa <?php the_field('optin_center_icon'); ?> fa-5x"></i>
					</div>					
				</div>
			
				<article class="roadmap-image-text">

					<h3 class="subheadline">
						<?php the_field('optin_center_headline'); ?>
					</h3>
					
					<h4 class="text-only">
						<?php the_field('optin_center_text'); ?>
					</h4>
					
				</article>

				<!-- <div class="roadmap-button">

					<a href="#" class="btn btn-warning btn-lg">CLICK HERE</a>
				
				</div> -->

			</figure>

			<figure class="image-box col-sm-4 col-md-4 col-lg-4">
				
				<div class="icon-box-holder text-center">
					<div class="icon-box center-block">
						<i class="fa <?php the_field('optin_right_icon'); ?> fa-5x"></i>
					</div>					
				</div>
			
				<article class="roadmap-image-text">

					<h3 class="subheadline">
						<?php the_field('optin_right_headline'); ?>
					</h3>
					
					<h4 class="text-only">
						<?php the_field('optin_right_text'); ?>
					</h4>
					
				</article>

				<!-- <div class="roadmap-button">

					<a href="#" class="btn btn-warning btn-lg">CLICK HERE</a>
				
				</div> -->

			</figure>


			
		</div>

	</div>
	
</section> <!-- End imb-startpg-top-roadmap -->	

<section id="imb-aboutpg-testimonial" class="container-fluid">
	
	<main class="container">
		
		<div class="content-box">

			<h1 class="headline text-center"><!-- THIS IS KEPT FOR TOP PADDING SPACE --></h1>

				<article id="testimonial-slider">

						<div id="carousel-example-captions" class="carousel slide" data-ride="carousel" data-interval="false">
						   <ol class="carousel-indicators">
						      <!-- <li data-target="#carousel-example-captions" data-slide-to="0" class="caption-image">
						      	<img class="img-responsive center-block img-circle" src="http://leisapeterson.com/wp-content/uploads/2016/07/Debbie-Shadid.jpg" alt="">
						      </li>
						      <li data-target="#carousel-example-captions" data-slide-to="1" class="caption-image">
						      	<img class="img-responsive center-block img-circle" src="http://leisapeterson.com/wp-content/uploads/2016/07/Macy_BHL_005-1.jpg" alt="">
						      </li>
						      <li data-target="#carousel-example-captions" data-slide-to="2" class="caption-image">
						      	<img class="img-responsive center-block img-circle" src="http://leisapeterson.com/wp-content/uploads/2016/07/Lynne-Gardner-1.jpg" alt="">
						      </li>
						      <li data-target="#carousel-example-captions" data-slide-to="3" class="caption-image active">
						      	<img class="img-responsive center-block img-circle" src="http://leisapeterson.com/wp-content/uploads/2016/07/karen_norris-1.jpg" alt="">
						      </li> -->
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

</section> <!-- End imb-home-testimonial -->

<section id="imb-aboutpg-social-proof" class="container-fluid">
	
	<div class="content-box container text-center">
		
		<!-- <img class="img-responsive flex-item" src="/wp-content/uploads/2017/07/wired2.png" alt="">
		<img class="img-responsive flex-item" src="/wp-content/uploads/2017/07/usa11.png" alt="">
		<img class="img-responsive flex-item" src="/wp-content/uploads/2017/07/TorreyPines2.png" alt="">
		<img class="img-responsive flex-item" src="/wp-content/uploads/2017/07/TheRockChurch3.png" alt="">
		<img class="img-responsive flex-item" src="/wp-content/uploads/2017/07/QualcommLogo2.png" alt="">
		<img class="img-responsive flex-item" src="/wp-content/uploads/2017/07/NBC2.png" alt="">
		<img class="img-responsive flex-item" src="/wp-content/uploads/2017/07/ubisoft.png" alt="">
		<img class="img-responsive flex-item" src="/wp-content/uploads/2017/07/TheMusicBed3.png" alt="">
		<img class="img-responsive flex-item" src="/wp-content/uploads/2017/07/NapaCellars2.png" alt="">
		<img class="img-responsive flex-item" src="/wp-content/uploads/2017/07/CookingLight2.png" alt="">
		<img class="img-responsive flex-item" src="/wp-content/uploads/2017/07/Ikea2.png" alt="">
		<img class="img-responsive flex-item" src="/wp-content/uploads/2017/07/dji.png" alt="">
		<img class="img-responsive flex-item" src="/wp-content/uploads/2017/07/Chargers1.png" alt="">
		<img class="img-responsive flex-item" src="/wp-content/uploads/2017/07/cbs11.png" alt="">
		<img class="img-responsive flex-item" src="/wp-content/uploads/2017/07/BMW2.png" alt="">
		<img class="img-responsive flex-item" src="/wp-content/uploads/2017/07/abc12.png" alt=""> -->
		<?php if (get_field('social_proof_items')) : ?>

			<?php while(has_sub_field('social_proof_items')) : ?>

				<img class="img-responsive flex-item" src="<?php the_sub_field('social_proof_logo'); ?>" alt="">

			<?php endwhile ?>	

		<?php endif; ?>			

	</div>

</section> <!-- End imb-home-social-proof -->

<section id="imb-aboutpg-optin-CTA" class="container-fluid">
	
	<div class="content-box">
		
		<article class="col-sm-2 col-md-2 col-lg-2"></article>
		<article class="text-content col-sm-8 col-md-8 col-lg-8">
			
			<h1 class="headline text-center">
				
				<?php the_field('about_optin_headline'); ?>
				
			</h1>

			<?php if( have_rows( 'about_flexible_optin_content' ) ) : ?>
				<?php while ( have_rows( 'about_flexible_optin_content' ) ) : the_row(); ?>

					<?php if( get_row_layout() == 'form_shortcode' ) : ?>

						<?php echo do_shortcode( get_sub_field( 'enter_optin_form_shortcode' ) ); ?>

					<?php elseif( get_row_layout() == 'form_html_&_js_code' ) : ?>	

						<?php the_sub_field('enter_optin_form_html_code'); ?>
						<br>
						<br>

					<?php endif; ?>

				<?php endwhile; ?>
			<?php endif; ?>		

		</article>
		<article class="col-sm-2 col-md-2 col-lg-2"></article>

	</div>

</section> <!-- End imb-startpg-optin-CTA -->


<?php
get_footer();
