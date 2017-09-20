<?php
/**
 * Moose Framework functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Moose_Framework
 */

if ( ! function_exists( 'moose_frame_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function moose_frame_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Moose Framework, use a find and replace
	 * to change 'moose-frame' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'moose-frame', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'blog-size', 400, 200, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'moose-frame' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'moose_frame_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'moose_frame_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function moose_frame_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'moose_frame_content_width', 760 );
}
add_action( 'after_setup_theme', 'moose_frame_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function moose_frame_widgets_init() {

	// register_sidebar( array(
	// 	'name'          => esc_html__( 'Footer Sidebar 3', 'moose-frame' ),
	// 	'id'            => 'footer-sidebar-3',
	// 	'description'   => '',
	// 	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 	'after_widget'  => '</section>',
	// 	'before_title'  => '<h2 class="widget-title">',
	// 	'after_title'   => '</h2>',
	// ) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'moose-frame' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar 1', 'moose-frame' ),
		'id'            => 'footer-sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget-footer %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar 2', 'moose-frame' ),
		'id'            => 'footer-sidebar-2',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget-footer %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar 3', 'moose-frame' ),
		'id'            => 'footer-sidebar-3',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget-footer %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );	

	register_sidebar( array(
		'name'          => esc_html__( 'Page Bottom Widget', 'moose-frame' ),
		'id'            => 'page-bottom',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class=" %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="">',
		'after_title'   => '</h2>',
	) );		
}
add_action( 'widgets_init', 'moose_frame_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function moose_frame_scripts() {
	wp_enqueue_style( 'moose-frame-style', get_stylesheet_uri(), '', '3.0' );

	wp_enqueue_style( 'moose-masonry-style', get_template_directory_uri() . '/_masonry-css/style.css', '', '1.0' );
	wp_enqueue_style( 'moose-masonry-media-query-style', get_template_directory_uri() . '/_masonry-css/media_query.css', '', '1.0' );

	wp_enqueue_script( 'moose-frame-jq-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '20120206', false );
	wp_enqueue_script( 'moose-frame-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20120206', true );
	wp_enqueue_script( 'moose-frame-wow-js', get_template_directory_uri() . '/js/wow.min.js', array(), '20120206', true );
	wp_enqueue_script( 'moose-frame-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script( 'moose-image-loaded-js', 'https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js', array(), '20120206', true );
	wp_enqueue_script( 'moose-masonry-js', '//cdnjs.cloudflare.com/ajax/libs/masonry/3.1.5/masonry.pkgd.min.js', array(), '20120206', true );
	wp_enqueue_script( 'moose-frame-script-js', get_template_directory_uri() . '/js/script.js', array(), '20120206', true );
	// wp_enqueue_script( 'moose-frame-vue-js', 'https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.4/vue.js', array(), '20120206', true );
	// wp_enqueue_script( 'moose-frame-axios-js', 'https://unpkg.com/axios@0.12.0/dist/axios.min.js', array(), '20120206', true );
	// wp_enqueue_script( 'moose-frame-slimscroll-js', get_template_directory_uri() . '/js/jquery.slimscroll.min.js', array('jquery'), '20120206', true );
	// wp_enqueue_script( 'moose-frame-vuenews-js', get_template_directory_uri() . '/js/app-vue-news.js', array(), '20120206', true );
	// wp_enqueue_script( 'moose-frame-vuetestimonials-js', get_template_directory_uri() . '/js/app-vue-testimonials.js', array(), '20120206', true );
	// wp_enqueue_script( 'moose-frame-vueHOMEtestimonials-js', get_template_directory_uri() . '/js/app-vue-home-testimonials.js', array(), '20120206', true );



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'moose_frame_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

// Register Custom Navigation Walker
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';


// Replaces the excerpt "more" text by a link
// function new_excerpt_more($more) {
//        global $post;
// 	return ' ... <a class="moretag btn btn-success" href="'. get_permalink($post->ID) . '"> Read The Full Article</a>';
// }
// add_filter('excerpt_more', 'new_excerpt_more');


// Remove Comments from Jetpack Carousel 
function tweakjp_rm_comments_att( $open, $post_id ) {
    $post = get_post( $post_id );
    if( $post->post_type == 'attachment' ) {
        return false;
    }
    return $open;
}
add_filter( 'comments_open', 'tweakjp_rm_comments_att', 10 , 2 );

// Enable shortcodes in text widgets
add_filter('widget_text','do_shortcode');

// Update CSS within in Admin
function admin_style() {
  wp_enqueue_style('admin-styles', get_template_directory_uri().'/admin.css');
}
add_action('admin_enqueue_scripts', 'admin_style');

// LIMIT THE EXCERPT LENGTH
function custom_excerpt_length( $length ) {
  return 50;
}
// add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


/**
 *
 * Adding data attributes to Menu bar item ID menu-item-2912
 * Use only the number at the end.
 *
 */

/*

add_filter( 'nav_menu_link_attributes', 'my_menu_atts', 10, 3 );
function my_menu_atts( $atts, $item, $args )
{
  // Provide the id of the targeted menu item
  $menu_target = 2974;

  // inspect $item

  if ($item->ID == $menu_target) {
    $atts['data-toggle'] = 'modal';
    $atts['data-target'] = '#myModal';
  }
  return $atts;
}


*/

/**
*
* THIS IS TO GET THE CURRENT TEMPLATE NAME FOR DEBUGGING REASON
*
*/

add_filter( 'template_include', 'var_template_include', 1000 );

function var_template_include( $t ){

$GLOBALS['current_theme_template'] = basename($t);

return $t;

}


function get_current_template( $echo = false ) {

if( !isset( $GLOBALS['current_theme_template'] ) )

return false;

if( $echo )

echo $GLOBALS['current_theme_template'];

else

return $GLOBALS['current_theme_template'];

}




/*======================================
=            ACF Google Map            =
======================================*/

function my_acf_init() {
	
	acf_update_setting('google_api_key', 'AIzaSyA_QX-gHIZII6GzEMz4LMmRTE15HDADKrI');
}

add_action('acf/init', 'my_acf_init');

/*=====  End of ACF Google Map  ======*/


/*=====================================
=  Remove Gravity Form Labels        =
=====================================*/

add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );

/*=====  End of Remove Gravity Form Labels  ======*/


/*========================================
=            PREPARE REST API            =
========================================*/

function prepare_rest( $data, $post, $request ) {

	$_data = $data->data;

	$thumbnail_id = get_post_thumbnail_id( $post->ID );
	$thumbnail_img = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail' );
	$medium_img = wp_get_attachment_image_src( $thumbnail_id, 'medium' );
	$full_img = wp_get_attachment_image_src( $thumbnail_id, 'full' );

	$_data['featured_thumb'] = $thumbnail_img[0];
	$_data['featured_medium'] = $medium_img[0];
	$_data['featured_full'] = $full_img[0];
	
	$data->data = $_data;

	return $data;
}

add_filter('rest_prepare_post', 'prepare_rest', 10, 3 );

/*=====  End of PREPARE REST API  ======*/



