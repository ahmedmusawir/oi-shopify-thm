<?php
/**
 * Template Name: Cart Template
 * The template for displaying all pages.
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
<section class="container">

	<div id="primary" class="content-area col-sm-12 col-md-12 col-lg-12">
		<main id="main" class="site-main" role="main">

   <article class="row">
    	<h1 class="text-center">This is the Cart</h1>
    	<div data-cart>

    		<h2>Moose Cart</h2>
	        <h2><product-title></product-title></h2>


		    <div v-for="item in this.$root.cartItems">

				<section class="row">
					<img :src="item.image.src" alt="" style="width:10%;" class="pull-left">

					<article class="pull-left" style="margin-top: -2.5rem; padding-left: 2rem;">
						<!-- <h3>Cart Item Information:</h3> -->
				        <h4>Title: {{ item.title }}<br/></h4>
				        <h5>Price: {{ item.price }}<br/></h5>
				        <h5>Quantity: {{ item.quantity }}<br/></h5>
				        <!-- {{ item }} -->
				        <remove-button class="btn btn-danger pull-right" :item="item">Remove Item</remove-button>	
					</article>	
				</section>
		    	
		        
		        <!-- <single-image :item="item"/> -->
				<br><br><br>
				<!-- {{ item }} -->

		    </div>	        

	        <checkout-link class="btn btn-primary pull-right">Check Out Now</checkout-link>

		</div>
    </article>

		</main><!-- #main -->
	</div><!-- #primary -->

</section> <!-- End Container -->	

<script type="text/javascript">
// Vue.config.devtools = true;
</script>
	
<?php
get_footer();
