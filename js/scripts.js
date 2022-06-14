( function() {

	var app = {
		initNavigation: function() {
			var $nav = jQuery( '#nav' );
			if ( $nav.length > 0 ) $nav.navTabDoubleTap();
		},
		initHomepageBanner: function(){
			var $bannerSlider = jQuery('.banner-slider');
			$bannerSlider.slick({
				slidesToScroll: 1, 
				slideToShow: 1,
				infinite: true,
				arrows: false,
				draggable: false,
				autoplay: true,
				autoplaySpeed: 2500
			});
		},
		initFeaturedProperties: function() {
			/* Put featured properties code here */
		},
		initFeaturedCommunities: function() {
			/* Put featured communities code here */
			var $featureProperties = jQuery('.properties-slider');
			$featureProperties.slick({
				slidesToShow: 3,
				slidesToScroll: 1,
				arrows: true,
				infinite: true,
				autoplay: true,
				autoplaySpeed: 2500,
				variableWidth: true,
				centerMode: true,
				nextArrow: $('.slider-nav.btn-next'),
				prevArrow: $('.slider-nav.btn-prev')
			});
		},
		initTestimonials: function() {
			/* Put testimonials code here */
			var $homepageTestimonials = jQuery('.testimonials-slider');
			$homepageTestimonials.slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: true,
				autoplay: true,
				autoplaySpeed: 2500,
				nextArrow: $('.testimonial-nav.btn-next'),
				prevArrow: $('.testimonial-nav.btn-prev')
			});
		},
		initQuickSearch: function() {
			/* Put quick search code here */
		},
		initCustomFunction: function() {
			/* See the pattern? Create more functions like this if needed. */
		},
		initHeaderScrolled: function(){
			if (jQuery(this).scrollTop()) {
				jQuery('header.header').addClass('scrolled position-fixed');
			}
		},
		fixedHeader: function(){
			jQuery(window).scroll(function() {
				if (jQuery(this).scrollTop()) {
					jQuery('header.header').addClass('scrolled position-fixed');
				} else {
					jQuery('header.header').removeClass('scrolled position-fixed');
				}
			});
		}
		
	}

	
	jQuery(document).ready( function() {
		
		/* Initialize navigation */
		app.initNavigation();

		/* Initialize homepage banner */
		app.initHomepageBanner();
		
		/* Initialize featured properties */
		app.initFeaturedProperties();

		/* Initialize featured communities */
		app.initFeaturedCommunities();
		
		/* Initialize testimonials */
		app.initTestimonials();
		
		/* Initialize quick search */
		app.initQuickSearch();

		// Check if page is loaded when scrolled
		app.initHeaderScrolled();
		
		// Fixed Header When Scrolled
		app.fixedHeader();

	});
	
	jQuery(window).on('load', function(){
		
	})


})();