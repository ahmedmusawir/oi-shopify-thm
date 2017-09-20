<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Moose_Framework
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="p:domain_verify" content="3833b9f5fb66f58faddede705b2ccac0"/>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

<!--============================================
=            Google Analytics Code            =
=============================================-->


<!--============================================
=            Tiana Facebook Ad Code            =
=============================================-->

<!-- Facebook Pixel Code -->

<!-- End Facebook Pixel Code -->

<!--====  End of Tiana Facebook Ad Code  ====-->



<?php wp_head(); ?>
</head>

<?php
    $hero_desktop_bg_image = get_field('hero_background_image_desktop'); // 1476 is post id                               
    $hero_mobile_bg_image = get_field('hero_background_image_mobile'); // 1476 is post id                               
?>	

<body <?php body_class(); ?>>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'moose-frame' ); ?></a>

	<style type="text/css" media="screen">

		#masthead {
	 		height: 500px;	
			
			/* background-image: url("/wp-content/uploads/2017/07/about-hero-1920x800-mountain.jpg ");  */
			background-image: url("<?php echo $hero_desktop_bg_image; ?>"); 
			background-size: cover;
			background-position: top center;

		}

		@media ( max-width: 800px ) {
			#masthead {
			
				/* background-image: url("/wp-content/uploads/2017/07/about-hero-1920x800-mountain.jpg "); */
				background-image: url("<?php echo $hero_mobile_bg_image; ?>");
				background-size: cover;
				background-position: top center;
			}
		}		

	</style>			

	<header id="masthead" class="site-header" role="banner">
	
		<div class="navbar-container">
			<!-- <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"> -->
			<nav class="navbar navbar-inverse" role="navigation">
	
	  		  <div class="container-fluid">

			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			        </button>
			    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img id="logo" src="/wp-content/uploads/2017/06/JenniferBrownLogo-450x144.png"></a>
			    <!-- <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="logo-text">INSPIRED <span class="tiana-txt">MOMMY</span> BOSS</span> </a> -->
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse navbar-ex1-collapse">

			    	
			        <?php
				        wp_nav_menu( array(
				            'theme_location' => 'primary',
				            'depth' => 2,
				            'container' => false,
				            'menu_class' => 'nav navbar-nav navbar-right',
				            'fallback_cb' => 'wp_page_menu',
				            //Process nav menu using our custom nav walker
				            'walker' => new wp_bootstrap_navwalker())
				        );
			        ?>
			    </div><!-- /.navbar-collapse --> 
	  		  </div><!-- /.container-fluid -->

			</nav> <!-- END NAV BAR -->

				
		</div>

		<section id="header-box">
			
			<div class="content-box">
				<article class="text-content">
					<h1 class="headline text-center"><?php the_field('hero_headline_text'); ?></h1>
					<!-- <h1 class="headline text-center">There Is Nothing Divine In The Vast Emptiness</h1> -->
					<h4 class="subheadline text-center"><?php the_field('hero_sub_headline_text'); ?></h4>
					<!-- <h4 class="subheadline text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</h4> -->
				</article>

				<!-- <div class="btn-holder text-center">
					<a class="btn btn-primary btn-lg" href="#">REQUEST AN INVITE</a>
					<a class="btn btn-warning btn-lg" href="#">WATCH THE VIDEO</a>
				</div> -->
			</div>

		</section>


	</header><!-- #masthead -->

	<div id="content" class="site-content">

	



















