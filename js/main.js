$(document).ready(function() {

	// Functions to optimize pages
	// Viewport
	function defineViewport() {
		viewportWidth = $(window).outerWidth();
		viewportHeight = $(window).outerHeight();
	};

	// Header
		function headerToDefaults() {

		}

		function headerTablet() {
			
		}
		
		function headerMobile() {
			
		}
	// Footer
		function footerToDefaults() {
			
		}

		function footerTablet() {
			
		}
		
		function footerMobile() {
			
		}
	// Landing Page
		function landingPageToDefaults() {
			
		}
		
		function landingPageTablet() {
			
		}

		function landingPageMobile() {
			
		}
	// Our Company
		function ourCompanyPageToDefaults() {

		}
		
		function ourCompanyPageTablet() {
			
		}

		function ourCompanyPageMobile() {
			
		}
	// Delivery Area
		function deliveryAreaPageToDefaults() {
			
		}
		
		function deliveryAreaPageTablet() {
			
		}

		function deliveryAreaPageMobile() {
			
		}
	// Products and Services
		function productsServicesPageToDefaults() {
			
		}
		
		function productsServicesPageTablet() {
			
		}

		function productsServicesPageMobile() {
			
		}
	// Price Plans
		function pricePlansPageToDefaults() {
			
		}
		
		function pricePlansPageTablet() {
			
		}

		function pricePlansPageMobile() {
			
		}
	// Contact Page
		function contactPageToDefaults() {
		}
		
		function contactPageTablet() {
		}

		function contactPageMobile() {
		}

	
	function optimizePages() {
			if (viewportWidth >= 1280) {
				headerToDefaults();
				footerToDefaults();
				landingPageToDefaults();
				contactPageToDefaults();
			} else if (viewportWidth < 1280 && viewportWidth > 1150) {
				headerToDefaults();
				footerToDefaults();
				landingPageTablet();
				contactPageToDefaults();
			} else if (viewportWidth <= 1150 && viewportWidth > 1023) {
				headerToDefaults();
				footerToDefaults();
				landingPageTablet();
			} else if (viewportWidth <= 1023 && viewportWidth > 861) {
				headerToDefaults();
				footerTablet();
				landingPageTablet();
			} else if (viewportWidth <= 861 && viewportWidth > 785) {
				headerToDefaults();
				footerTablet();
				landingPageTablet();
				contactPageTablet();
			} else if (viewportWidth <= 785 && viewportWidth > 576) {
				headerToDefaults();
				footerMobile();
				landingPageTablet();
				contactPageTablet();
			} else if (viewportWidth <= 576) {
				headerMobile();
				footerMobile()
				landingPageMobile();
				contactPageMobile();
			};
		};


	$('.nav-button').on('click', function() {
		$('.nav-full').toggleClass('Active');
		$('.nav-button').toggleClass('Active');
	});

	$('.page-content').on('click', function() {
		$('.nav-full').removeClass('Active');
		$('.nav-button').removeClass('Active');
	})

	$('.product-button').on('click', function(e) {
		$('.block').addClass('Hidden');
		$(e.currentTarget).removeClass('Hidden').addClass('Active');
		var type = $(e.currentTarget).data('fueltype');
		var description = $('.product-description');
		$.each(description, function() {
			var type_desc = $(this).data('fueltype');
			console.log(type_desc, type);
			if( type_desc == type ) {
				$(this).find('.block').addClass('Active');
			}
		});
	});

// Products Page
	function productsPageInit() {
		if ($('.Products-Services').length) {

			var heights = $('.info').map(function () {
	        	return $(this).outerHeight();
	   		}).get();

	    	maxHeight = Math.max.apply(null, heights);
	    	$('.description-container').css('height', maxHeight);

			$('.blanket').addClass('Hidden');
			$('.blanket').eq(0).removeClass('Hidden').addClass('Active');

			$('.title h1').addClass('Hidden');
			$('.title h1').eq(0).removeClass('Hidden').addClass('Active');

			$('.info').addClass('Hidden');
			$('.info').eq(0).removeClass('Hidden').addClass('Active');

			$('.icon').removeClass('Active');
			$('.icon').eq(0).addClass('Active');
		}
	};

	productsPageInit();

	var product_index = 0;
	var product_total = $('.Products-Services .info').length;

	$('.arrow-container .right').on('click', function() {

		if ($('.Products-Services').length) {

			$('.blanket').eq(product_index).removeClass('Active').addClass('Hidden');
			$('.info').eq(product_index).removeClass('Active').addClass('Hidden');
			$('.title h1').eq(product_index).removeClass('Active').addClass('Hidden');
			$('.icon').eq(product_index).removeClass('Active');

			product_index = product_index + 1;
			if (product_index + 1 > product_total) {
				product_index = 0;
			}

			$('.blanket').eq(product_index).removeClass('Hidden').addClass('Active');
			$('.info').eq(product_index).removeClass('Hidden').addClass('Active');
			$('.title h1').eq(product_index).removeClass('Hidden').addClass('Active');
			$('.icon').eq(product_index).addClass('Active');
			
		}
	});

	$('.arrow-container .left').on('click', function() {

		$('.blanket').eq(product_index).removeClass('Active').addClass('Hidden');
		$('.info').eq(product_index).removeClass('Active').addClass('Hidden');
		$('.title h1').eq(product_index).removeClass('Active').addClass('Hidden');
		$('.icon').eq(product_index).removeClass('Active');

		product_index = product_index + -1;
		if (product_index - 1 > product_total) {
			product_index = product_total - 1;
		}

		$('.blanket').eq(product_index).removeClass('Hidden').addClass('Active');
		$('.info').eq(product_index).removeClass('Hidden').addClass('Active');
		$('.title h1').eq(product_index).removeClass('Hidden').addClass('Active');
		$('.icon').eq(product_index).addClass('Active');
		
	});

	$('.Products-Services .icon').on('click', function(e) {
		$('.blanket').eq(product_index).removeClass('Active').addClass('Hidden');
		$('.info').eq(product_index).removeClass('Active').addClass('Hidden');
		$('.title h1').eq(product_index).removeClass('Active').addClass('Hidden');
		$('.icon').eq(product_index).removeClass('Active');

		var icon = $(e.currentTarget);
		product_index = $(e.currentTarget).index() - 1;
		
		$('.blanket').eq(product_index).removeClass('Hidden').addClass('Active');
		$('.info').eq(product_index).removeClass('Hidden').addClass('Active');
		$('.title h1').eq(product_index).removeClass('Hidden').addClass('Active');
		$('.icon').eq(product_index).addClass('Active');
	});
// Coverage Map
	function setInputLength() {
		if ($('.Delivery-Area').length) {

			var search_box = $('.mapboxgl-ctrl-geocoder');
			var search_icon = $('.geocoder-icon-search');
			
			search_box.appendTo($('.search-box'));
			search_icon.addClass('map-search-button').addClass('fa fa-search fa-3x');
			search_icon.appendTo($('.search-box'));

			var input_box = $('.mapboxgl-ctrl-geocoder input');
			var container_box = $('.mapboxgl-ctrl-geocoder');
			var placeholder_text = 'your neck of the woods';
			var i = 0;
			var placeholder_text_to_append = placeholder_text[i];
			var search_box_position = $('.mapboxgl-ctrl-geocoder').offset().left;
			
			var counter = 
				setInterval(function() {

					input_box.attr('placeholder', placeholder_text_to_append);
					i++
					placeholder_text_to_append += placeholder_text[i];

					if (i > placeholder_text.length -1) {
						clearInterval(counter);
						$('.map-search-button').addClass('Active');
					}

				}, 100);
			
			var font_size = $('.title').css('font-size');
			$('.mapboxgl-ctrl-geocoder input').css('font-size', font_size);

			$('body').append('<span id="placeholder-width" style="font-size:' + font_size + '">' + placeholder_text + '</span>');
			var length = $('#placeholder-width').width();

			$('#placeholder-width').remove();

			container_box.css('min-width', length + 16);

			input_box.on('click', function() {
				clearInterval(counter);
				input_box.attr('placeholder', '');
				$('.map-search-button').addClass('Active');
			});
		}
	}

// On Load
	defineViewport();
	optimizePages();
	setInputLength();

	
// On window resize
	$(window).on('resize', function() {
		defineViewport();
		optimizePages();
	})

});