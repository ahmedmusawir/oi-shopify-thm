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

<?php wp_head(); ?>
</head>

<?php
    $hero_desktop_bg_image = get_field('hero_background_image_desktop'); // 1476 is post id                               
    $hero_mobile_bg_image = get_field('hero_background_image_mobile'); // 1476 is post id                               
    // $blog_header_image = get_field('page_header_image', 324); // 1476 is post id                               
    $siteLogo = get_field( 'site_logo_image', 5 ); // 1476 is post id                               
    // $size = 'full'; // (thumbnail, medium, large, full or custom size)
?>	

<body <?php body_class(); ?>>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'moose-frame' ); ?></a>

	<style type="text/css" media="screen">

		#masthead {
	 		height: 800px;	
			
			/* background-image: url("/wp-content/uploads/2017/07/JEN3-Hero-Img-1920x800.jpg");  */
			background-image: url("<?php echo $hero_desktop_bg_image; ?>"); 
			background-size: cover;
			background-position: top center;

		}

		@media ( max-width: 800px ) {
			#masthead {
			
				/* background-image: url("/wp-content/uploads/2017/06/jennifer-fp-hero-img-MOBILE-800x600.jpg"); */
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
			    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img id="logo" src="<?php echo $siteLogo; ?>"></a>
			    <!-- <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img id="logo" src="/wp-content/uploads/2017/06/JenniferBrownLogo-450x144.png"></a> -->
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

		<section id="header-hero-CTA-block">

			<div id="the-CTA" class="container">

				<article class="hero-text-block">

					<div class="text-only">
						
						<?php the_field('hero_headline_text'); ?>

					</div> 
					<div class="col-md-12 text-center">
						<a  target="_blank" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal-hero">
						<!-- <a href="<?php the_field('hero_button_url'); ?>" target="_blank" class="btn btn-primary btn-lg" > -->
							<?php the_field('hero_button_text'); ?> <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
						</a>				
					</div>

				</article>

			</div>				
		
		</section>



	</header><!-- #masthead -->

	<div id="content" class="site-content">

	



















