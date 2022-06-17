			<?php if ( !is_home() && !is_page_template( 'template-fullwidth.php' ) && !is_page_template( 'template-homepage.php' ) ) : ?>
			<div class="clearfix"></div>
			</div><!-- end of #inner-page-wrapper .inner -->
			</div><!-- end of #inner-page-wrapper -->
		<?php endif ?>
	</main>
	
		<footer class="footer container-spacer">
			<!-- Start of Footer Information -->
			<div class="footer-info">
				<div class="container">
					<!-- Footer Information Content -->
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('AP Footer Info') ) : ?>
					<?php endif ?>
					<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'footernav', 'theme_location' => 'primary-menu','depth'=>1 ) ); ?>
				</div>	
			</div>
			<!-- End of Footer Information -->

			<!-- Start of Footer Copyright -->
			<div class="footer-copyright">
				<div class="container">
					<!-- Footer Copyright Content -->
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('AP Footer Copyright') ) : ?>
					<?php endif ?>
				</div>	
			</div>
			<!-- End of Footer Information -->
	
		</footer>
		
		<?php do_action('aios_neighborhoods_footer')?>
		<?php do_action('aios_landing_page_footer')?>
		
	</div><!-- end of #main-wrapper -->


	<?php wp_footer(); ?>
</body>
</html>
