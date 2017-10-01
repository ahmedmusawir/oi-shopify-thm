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
<h3>
	<?php $product_id = get_post_meta( get_the_ID(), '_wshop_product_id', true ); ?>
	<?php //$post_id = get_the_ID(); ?>
	<?php //print_r(get_post_custom($post_id)); ?> 
</h3>

		<style type="text/css" media="screen">
			#gallery .wps-image-wrap {
				display: inline-block;
			    float: left;
			    width: 25%;
			    border: 1rem solid gray;		
			}
		</style>      	     

	<article class="row hide">
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

	        	<product-add id="AddBtn"  class="btn btn-primary btn-lg pull-right"  style="margin-top: 2rem;">Add To Cart</product-add>
		        

		        <product-radio></product-radio>
		        <product-select></product-select>

		    </div>
		    <div class="row">
		    	<input type="number" name="" value="" placeholder="">
		    </div>
		        
	    </div>
	</article>
    
    <article class="row hide">
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
		    	
		        <div class="well">
		        	<ul>
		        		<!-- <li>Image Variants: {{ item.image_variants[0].src }}</li> -->
		        		<li>Variant ID: {{ item.variant_id }}</li>
		        		<li>Image ID: {{ item.image.id }}</li>
		        	</ul>

		        </div>
		        <!-- <single-image :item="item"/> -->
				<br><br><br>
				<pre>
				<!-- {{ item }} -->
					
				</pre>

		    </div>	        

	        <checkout-link class="btn btn-primary pull-right">Check Out Now</checkout-link>

		</div>
   </article>

</section> <!-- End Container -->	

<script src="https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js" type="text/javascript"></script>
<!-- <script src="https://sdks.shopifycdn.com/buy-button/0.2.0/buybutton.js" type="text/javascript"></script> -->

<script type="text/javascript">

var client = ShopifyBuy.buildClient({
  apiKey: 'b0a4f5673914835c4026ff9e1ea420bd',
  domain: 'biboshop-biz.myshopify.com',
  appId: '6'
});

var ui = ShopifyBuy.UI.init(client);

var colors = {
  'Dark Green': '#2F3B4B',
  Black: 'black'
}

var sizes = {
  'X-Small': 'XS',
  'Small': 'S',
  'Medium': 'M'
}

var ui = ShopifyBuy.UI.init(client);
ui.createComponent('product', {
  id: <?php echo $product_id; ?>,
  // id: 10765262349,
  node: document.getElementById('product'),
  options: {
    option: {
      templates: {
        option: '' +
          '<div class="{{data.classes.option.wrapper}}">' +
            '<p class="{{data.classes.option.label}}">{{data.name}}</p>' +
            '<div>' +
              '{{#data.values}}' +
              '<button {{#data.styleAttr}} {{name}} {{/data.styleAttr}} data-value="{{name}}" data-option={{data.name}} class="{{#disabled}}{{data.classes.option.optionDisabled}}{{/disabled}} {{#selected}}{{data.classes.option.optionSelected}}{{/selected}} {{data.classes.option.option}}">{{#data.optionName}}{{name}}{{/data.optionName}}</button>' +
              '{{/data.values}}' +
            '</div>' +
          '</div>'
      },
      styles: {
        wrapper: {
          'padding-bottom': '10px',
          'border': 0,
        },
        label: {
          'margin-top': '0'
        },
        option: {
          'border': '1px solid #c7c2c0',
          'display': 'inline-block',
          'margin-top': '0!important',
          'margin-right': '5px',
          'background-color': '#fff',
          'height': '45px',
          'width': '45px',
          'cursor': 'pointer',
          'font-weight': 'bold',
        },
        optionDisabled: {
          'opacity': '0.2',
          'position': 'relative',
          ':before': {
            'content': '""',
            'position': 'absolute',
            'height': '60px',
            'width': '1px',
            'background': 'black',
            'top': '-8px',
            'left': '21px',
            'transform': 'rotate(45deg)'
          }
        },
        optionSelected: {
          'border-color': 'black'
        }
      }
    },
    product: {
      layout: 'horizontal',
      // iframe: false,

      DOMEvents: {
        'click .shopify-buy__option-select': function (evt, target) {
          var data = target.dataset;
          var product = ui.components.product[0];
          product.updateVariant(data.option, data.value);
        }
      },

      contents: {
      	img: false,
      	imgWithCarousel: true,
        variantTitle: true,
        quantity: true,
      },
      templates: {
        quantity: '<div class="{{data.classes.product.quantity}} {{data.quantityClass}}">'  +
        '<p><label class="{{data.classes.option.label}}">Quantity:</lable></p><input class="{{data.classes.product.quantityInput}}" type="number" min="0" aria-label="Quantity" value="{{data.selectedQuantity}}">' +
        '</div>'
      },
      styles: {
        quantity: {
          'margin-top': '0!important',
        },
        quantityInput: {
          'border-radius': 0
        },
        button: {
          'background-color': 'black',
          'border-radius': 0,
        }
      },
      text: {
        button: 'Add to bag'
      },
      viewData: {
        optionName: function () {
          return function (text, render) {
            var key = render(text).trim();
            if (colors[key]) {
              return '';
            }
            return sizes[key];
          }
        },
        styleAttr: function () {
          return function (text, render) {
            var key = render(text).trim();
            var styleAttr = '';
            if (key) {
              styleAttr = 'style="background-color: ' + colors[key] + '"';
            }
            return styleAttr;
          }
        }
      },
    },

    toggle: {
      styles: {
        toggle: {
          'background-color': 'white',
          'border-radius': 0,
          'border': '2px solid black',
          'border-right': 0,
          ':hover': {
            'background-color': 'white',
          }
        },
        count: {
          'color': 'black'
        },
        iconPath: {
          'fill': 'black'
        }
      }
    }
  }
});


	
	
</script>
<?php
get_footer();
