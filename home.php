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

<!-- Start of Featured Properties Section -->
<section class="featured-properties">
	<!-- Featured Properties Content -->
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('AP Featured Properties') ) : ?>
	<?php endif ?>
</section>
<!-- End of Featured Properties Section -->

<!-- Start of Featured Communities Section -->
<section class="featured-communities container-spacer">
	<!-- Featured Communities Content -->
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('AP Featured Communities') ) : ?>
	<?php endif ?>
</section>
<!-- End of Featured Communities Section -->

<!-- Start of Testimonial Section -->
<section class="homepage-testimonials container-spacer">
	<!-- Homepage Testimonial Content -->
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('AP Homepage Testimonials') ) : ?>
	<?php endif ?>
</section>
<!-- End of Testimonial Section -->

<!-- Start of CTA Section -->
<section class="homepage-cta container-spacer">
	<div class="cta-wrap">
		<div class="container">
			<!-- CTA Content -->
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('AP Call To Action') ) : ?>
			<?php endif ?>
		</div>
	</div>
</section>
<!-- End of CTA Section -->

<!-- Start of Latest News Section -->
<section class="latest-news container-spacer">
	<!-- Latest News Content -->
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('AP Latest News') ) : ?>
	<?php endif ?>
</section>
<!-- End of Latest News Section -->

<?php get_footer(); ?>
