<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single-page'); ?>>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<article class="only-text">

		<?php
			// the_content();
		?>
		
		</article>
	</div><!-- .entry-content -->
	
</article><!-- #post-## -->
