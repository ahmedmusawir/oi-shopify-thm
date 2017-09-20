<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

?>
<!-- <h1>event-single</h1> -->
<article id="post-<?php the_ID(); ?>" <?php post_class('single-page'); ?>>

	<header class="entry-header">

		<?php if ( has_post_thumbnail() ) : ?> 
				
			<div class="featured-img">
				<a href="<?php the_permalink(); ?>" title=""><?php the_post_thumbnail( 'full', array('class' => 'img-responsive'));  ?></a>

			</div>
		<?php else : ?>	

			<div class="featured-img">
				<a href="<?php the_permalink(); ?>" title=""><img class="img-responsive" src="/wp-content/uploads/2016/06/TianaNEWJuneBlock_no-featured-version.jpg" alt=""></a>

			</div>				

		<?php endif; ?>		

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

<hr>
	
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

	<section id="single-related-post-block" class="hide">
				
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
	<section class="facebook-comments-block hide">
	
	<!--==========================================================
	=            THIS IS FOR FACEBOOK COMMENTS PLUGIN            =
	===========================================================-->

	<?php echo do_shortcode('[fbcomments]'); ?>

	<!--====  End of THIS IS FOR FACEBOOK COMMENTS PLUGIN  ====-->

		
	</section>
	

</article><!-- #post-## -->
















