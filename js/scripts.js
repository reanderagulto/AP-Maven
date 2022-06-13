( function() {

	var app = {
		
		initNavigation: function() {
			var $nav = jQuery( '#nav' );
			if ( $nav.length > 0 ) $nav.navTabDoubleTap();
		},
		initFeaturedProperties: function() {
			/* Put featured properties code here */
		},
		initFeaturedCommunities: function() {
			/* Put featured communities code here */
		},
		initTestimonials: function() {
			/* Put testimonials code here */
		},
		initQuickSearch: function() {
			/* Put quick search code here */
		},
		initCustomFunction: function() {
			/* See the pattern? Create more functions like this if needed. */
		}
		
	}

	
	jQuery(document).ready( function() {
		
		/* Initialize navigation */
		app.initNavigation();
		
		/* Initialize featured properties */
		app.initFeaturedProperties();

		/* Initialize featured communities */
		app.initFeaturedCommunities();
		
		/* Initialize testimonials */
		app.initTestimonials();
		
		/* Initialize quick search */
		app.initQuickSearch();
		
	});
	
	jQuery(window).on('load', function(){
		slickSlider();
		fixedHeader();

	})

	function slickSlider(){
		var $bannerSlider = $('.banner-slider');
		$bannerSlider.slick({
			slidesToScroll: 1, 
			slideToShow: 1,
			infinite: true,
			arrows: false,
			draggable: false,
			autoplay: true,
			autoplaySpeed: 2500
		});
	}

	function fixedHeader(){
		$(window).scroll(function() {
			if ($(this).scrollTop()) {
				$('header.header').addClass('scrolled position-fixed');
			} else {
				$('header.header').removeClass('scrolled position-fixed');
			}
		});
	}


})();