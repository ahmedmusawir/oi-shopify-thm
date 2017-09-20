<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wandervale
 */
wp_footer();
?>
		<div class="footer-container container-fluid">

			<footer id="footer-main" class="footer-main">

				<article class="col-sm-12 col-md-12 col-lg-12">

					<aside id="text-1" class="widget-footer-container widget_text">

						<?php 
							if ( ! is_active_sidebar( 'footer-sidebar-1' ) ) {
								return;
							}

							dynamic_sidebar( 'footer-sidebar-1' ); 

						?>

				   	</aside>

				
				</article>

				<article class="col-sm-12 col-md-12 col-lg-12">

					<aside id="text-2" class="widget-footer-container widget_text">

						<?php 
							if ( ! is_active_sidebar( 'footer-sidebar-2' ) ) {
								return;
							}

							dynamic_sidebar( 'footer-sidebar-2' ); 

						?>

				   	</aside>

				
				</article>

				<article class="col-sm-12 col-md-12 col-lg-12">

					<aside id="text-3" class="widget-footer-container widget_text">

						<?php 
							if ( ! is_active_sidebar( 'page-bottom' ) ) {
								return;
							}

							dynamic_sidebar( 'page-bottom' ); 

						?>

				   	</aside>

				
				</article>



				<!-- <div id="copyright" class="copyright col-sm-12 col-md-12 col-lg-12">
					<h4>COPYRIGHT INSPIREBLISSFULBEGINNINGS.COM</h4>
					<ul>
						<li><a href="http://tianagustafson.com/privacy-policy/">PRIVACY POLICY</a> | </li>
						<li><a href="http://tianagustafson.com/terms-of-service/">TERMS</a> | </li>
						<li><a href="http://tianagustafson.com/earnings-disclaimer/">DISCLAIMER</a> </li>
					</ul>
				</div> -->
				<!--==============================================================================
				=            THIS IS FOR DEBUGGING. PLZ DISABLE WHEN READY TO PUBLISH            =
				===============================================================================-->
				
				<div style="color: white"><strong>Current template:</strong> <?php echo get_current_template( true ); ?></div>
				
				<!--====  End of THIS IS FOR DEBUGGING. PLZ DISABLE WHEN READY TO PUBLISH  ====-->
				

			</footer>
		</div> <!-- FOOTER CONTAINER ENDED -->

	</div> <!-- End of id="content" class="site-content" -->
</div> <!-- End of id="page" class="site" -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.4/vue.js" type="text/javascript"></script> 
<script src="https://unpkg.com/axios@0.12.0/dist/axios.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.slimscroll.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/app-vue-news.js"></script>

 -->

</body>
</html>