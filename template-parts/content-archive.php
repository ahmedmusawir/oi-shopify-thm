<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('grid-item article-content-block'); ?>>

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
			</div>
        </div>

    </footer>	


</article><!-- #post-## -->
