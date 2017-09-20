<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

?>
<!-- <h1>content-single</h1> -->
<article id="post-<?php the_ID(); ?>" <?php post_class('single-page'); ?>>

	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php moose_frame_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
	
		<article class="only-text">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'moose-frame' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );



			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'moose-frame' ),
				'after'  => '</div>',
			) );
		?>
		</article>
	</div><!-- .entry-content -->


	
	<!--======================================
	=            The Related Post Block            =
	=======================================-->
	

<?php 
$current_categories = get_the_category();

$args = array(
	'posts_per_page' => 2,
	'post__not_in' => array( $post->ID )
);	

$related_post_items = new WP_Query($args);
?>

	<section id="single-related-post-block" class="container-fluid">
				
		<article class="post-content">

			<hr>
			<h4 class="text-center">Keep On Learning ...</h4>
			<hr>


			<?php if ( $related_post_items->have_posts() ) : ?>
				
				<?php while ( $related_post_items->have_posts() ) : $related_post_items->the_post(); ?>					

					<div class="col-sm-6 col-md-6 col-lg-6">

						<h5 class="text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>

					</div>
							
				<?php endwhile; ?>	

			<?php endif; 
			
			wp_reset_postdata();

			?>
			
		</article>

	</section>	

	
	<!--====  End of The Related Post Block  ====-->	

		<section id="single-form-block" class="container-fluid">
				
		<article class="post-content">

			<!-- <h4 class="text-center">Join My Team</h4> -->

			<!-- <h2 class="headline-form"><?php //the_field('headline_right'); ?></h2> -->
			<!-- <p class="sub-headline-form"><?php //the_field('subheadline_right'); ?></p> -->

			<figure>
				
				<!-- Begin MailChimp Signup Form --> 
					<?php the_field( 'blog_single_optin_form_code', 643 ); ?>
				<!--End mc_embed_signup-->				
				
			</figure>			
			
		</article>

	</section>	


	<?php 

	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
	    comments_template();
	endif;

	?>

	<section class="facebook-comments-block">
	
	<!--==========================================================
	=            THIS IS FOR FACEBOOK COMMENTS PLUGIN            =
	NO LONGER WORKS
	===========================================================-->
	
	<?php //echo do_shortcode('[fbcomments]'); ?>

	<!--====  End of THIS IS FOR FACEBOOK COMMENTS PLUGIN  ====-->

		
	</section>
	

</article><!-- #post-## -->
















