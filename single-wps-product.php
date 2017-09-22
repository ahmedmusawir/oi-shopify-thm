<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Moose_Framework
 */

get_header('shopify'); ?>
<section class="container">
<h1 class="text-center">Single Shopify Product</h1>

		<style type="text/css" media="screen">
			#gallery .wps-image-wrap {
				display: inline-block;
			    float: left;
			    width: 25%;
			    border: 1rem solid gray;		
			}
		</style>      	     

	<article class="row">
	    <div data-product-id="<?php the_product_id(); ?>">

	        <h2><product-title></product-title></h2>
	        <div class="col-md-6">
		        <figure>

		        	<product-image></product-image>

		        	
		        </figure>
	        	<h3 class="well">
	        		<product-price></product-price>
	        	</h3>	        
	        </div>


	        <div class="col-md-6">
		        <p class="well">
		        	<product-description></product-description>
		        </p>

		        <figure id="gallery">

		        	<product-gallery></product-gallery>
		        	
		        </figure>

	        	<product-add  class="btn btn-primary btn-lg pull-right"  style="margin-top: 2rem;">Add To Cart</product-add>

		    </div>
		        
	    </div>
	</article>
    
 <!--    <article class="row">
    	<h1 class="text-center">This is the Cart</h1>
    	<div data-cart>

    		<h2>My Cart</h2>
	        <h2><product-title></product-title></h2>
	        <checkout-link class="btn btn-primary">Check Out Now</checkout-link>


	    <div v-for="item in this.$root.cartItems">
	        Price: {{ item.price }}<br/>
	        Quantity: {{ item.quantity }}<br/>
	        Title: {{ item.title }}<br/>

	        <h3>All information:</h3>
	        {{ item }}
	        <remove-button class="btn btn-danger" :item="item">Remove Item</remove-button>
	        <single-image :item="item"/>

	    </div>	        

		</div>
    </article> -->

</section> <!-- End Container -->	
<?php
get_footer();
