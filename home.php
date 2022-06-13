<?php get_header(); ?>

<!-- Start of Homepage Slider Section -->
<section class="homepage-slider">
	<!-- Slider Content -->
	<div class="slider-images">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('AP Homepage Banner Slider') ) : ?>
		<?php endif ?>

		<!-- Banner Text -->
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('AP Homepage Banner Text') ) : ?>
		<?php endif ?>
	</div>
</section>
<!-- End of Homepage Slider Section -->

<!-- Start of Homepage Welcome Section -->
<section class="homepage-welcome">
	<div class="welcome-area container-spacer">
		<div class="welcome-wrap">
			<div class="welcome-image">
				<!-- Welcome Image -->
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('AP Welcome Section Image') ) : ?>
				<?php endif ?>
			</div>
			<div class="welcome-content">
				<!-- Welcome Content -->
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('AP Welcome Section Content') ) : ?>
				<?php endif ?>
			</div>
		</div>
	</div>
</section>
<!-- End of Homepage Welcome Section -->

<?php get_footer(); ?>
