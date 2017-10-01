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
  <h1>apiKey</h1>
	<?php echo get_option('wshop_api_key'); ?><br>
  <h1>apiDomain</h1>
  <?php echo get_option('wshop_domain'); ?> <br>
  <h1>apiAppID</h1>
	<?php echo get_option('wshop_app_id'); ?> 
</h3>

    

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
