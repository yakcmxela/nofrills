$(document).ready(function() {

// Viewport

	function defineViewport() {
		viewportWidth = $(window).outerWidth();
		viewportHeight = $(window).outerHeight();
	};
	defineViewport();

// Functions to perform on window resize
	$(window).on('resize', function() {
		defineViewport();
	});

// Functions to perform on window scroll
	$(window).on('scroll', function() {
	});

// Open and close nav

	$('.nav-button').on('click', function() {
		$('.nav-full').toggleClass('Active');
		$('.nav-button').toggleClass('Active');
		if (viewportWidth <= 575) {
			$('.page-content').toggleClass('Hidden');
		} else {
			$('.page-content').removeClass('Hidden');
		}
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
			if( type_desc == type ) {
				$(this).find('.block').addClass('Active');
			}
		});
	});

// Carry data from plan / products pages to sign up form
	$('.plan-sign-up').on('click', function(e) {
		var planSelected = $(e.currentTarget).data('plan');
		localStorage.setItem('planSelected', planSelected);
	});
	$('.fuel-type-sign-up').on('click', function(e) {
		var fuelSelected = $(e.currentTarget).data('fueltype');
		localStorage.setItem('fuelSelected', fuelSelected);
	});
	if ($('#sign-up-form').length) {
		var planSelected = localStorage.getItem('planSelected');
		var fuelSelected = localStorage.getItem('fuelSelected');
		if (planSelected != null) {
			$('#accountType').val(planSelected);
		}
		if (fuelSelected != null) {
			$('#fuelType').val(fuelSelected);
		}
	};

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

	// Navigate right
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

	// Navigate left
	
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

	// Navigate by icon
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
	// Typing effect in search bar
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

				$(window).on('resize', function() {
					font_size = $('.title').css('font-size');
					$('.mapboxgl-ctrl-geocoder input').css('font-size', font_size);

					$('body').append('<span id="placeholder-width" style="font-size:' + font_size + '">' + placeholder_text + '</span>');
					length = $('#placeholder-width').width();

					$('#placeholder-width').remove();

					container_box.css('min-width', length + 16);
				});

				input_box.on('click', function() {
					clearInterval(counter);
					input_box.attr('placeholder', '');
					input_box.css('max-width', 'initial')
					$('.map-search-button').addClass('Active');
				});
			};
		};

		$(window).on('load', setInputLength());

	// Return to search
		$('.return-to-search').on('click', function() {
			$('.banner').removeClass('Small');
			$('.yes-service').removeClass('Active');
			$('.no-service').removeClass('Active');
			var input_box = $('.mapboxgl-ctrl-geocoder input');
			input_box.val('');
			$('#map').css('opacity', '0');
		});
		$('.view-full').on('click', function() {
			$('.banner').addClass('Small');
			$('.return-to-search-icon').addClass('Active');
			$('#map').css('opacity', '1');
		});
		$('.return-to-search-icon').on('click', function() {
			$(this).removeClass('Active');
			$('.banner').removeClass('Small');
			$('.yes-service').removeClass('Active');
			$('.no-service').removeClass('Active');
			$('#map').css('opacity', '0');
		});

// Sign Up Form
	var formElements = [];
	var formElementHeights = [];
	var formNav = [];
	var formNavSections = $('.form-sections li');
	var signUpForm = $('#sign-up-form');
	var achForm = $('#ach-form');
	var nextButton = $('.next');
	var backButton = $('.back');
	var formIndex = 0;
	var errorSection = [];
	var slideLimit;
	var applicantNav = $('#nav-applicant');
	var applicantInfo = $('#applicant-info');
	var formGroup = $('.form-group');

	// Intial set up
		// Set page content height to fit forms
			function setFormSizing() {
				if (signUpForm.length) {
					$.each(signUpForm.find('.form-group'), function() {
						var height = $(this).outerHeight();
						formElementHeights.push(height);
					});
					
					var max = formElementHeights.reduce(function(a, b) {
						return Math.max(a,b);
					});

					signUpForm.css('height', max);
					slideLimit = $('.form-sections li').length - 1;
				}
			};
			setFormSizing();
			$(window).on('resize', function() {
				setFormSizing();
			});
		// Set data attributes 
			if (signUpForm.length) {
				$('#applicant').children().children().attr('data-formsection', 'applicant');
				$('#property').children().children().attr('data-formsection', 'property');
				$('#fuel-info').children().children().attr('data-formsection', 'fuel-info');
				$('#form-signature').children().children().attr('data-formsection', 'form-signature');
				$.each(signUpForm.find('.form-group'), function() {
					formElements.push(this);
				});
			}

		// Resize forms if validation errors
			$('.btn').on('click', function() {
				$('.form-nav ol li').removeClass('Errors');
				setTimeout(function() {
					setFormSizing();
				}, 50);
			});

	// Form navigation functions
		// Darks next/prev buttons when at beginning and end
			function slideButtonColor(index) {
				if ( index == slideLimit) {
						nextButton.css('background-color', '#e9ecef');
					} else {
						nextButton.css('background-color', '#00853c');
					}

				if ( index == 0) {
					backButton.css('background-color', '#e9ecef');
					} else {
						backButton.css('background-color', '#00853c');
					}
			};
		
		// Move to next slide
			function nextSlide(index) {
				if (index < slideLimit) {
					formGroup = formElements[index];
					$(formGroup).removeClass('Active');

					index++;
					formGroup = formElements[index];
					$(formGroup).addClass('Active');

					formIndex = index;
					$(formNavSections).css('color', 'rgba(39, 40, 34, .5)');
					$(formNavSections).eq(index).css('color', 'rgba(39, 40, 34, 1)');
					slideButtonColor(index);
				}
			};

			nextButton.on('click', function() {
				nextSlide(formIndex);
				$('html, body').animate({scrollTop:0},'50');
			});

		// Move to prev slide
			function prevSlide(index) {
				if (index > 0) {
					formGroup = formElements[index];
					$(formGroup).removeClass('Active');

					index--;

					formGroup = formElements[index];
					$(formGroup).addClass('Active');

					formIndex = index;
					$(formNavSections).css('color', 'rgba(39, 40, 34, .5)');
					$(formNavSections).eq(index).css('color', 'rgba(39, 40, 34, 1)');
					slideButtonColor(index);
				}
			};

			backButton.on('click', function() {
				prevSlide(formIndex);
				$('html, body').animate({scrollTop:0},'50');
			});

		// Use form section titles to navigate
			formNavSections.on('click', function(e) {
				formNavSections.css('color', 'rgba(39, 40, 34, 0.5)');
				$(e.currentTarget).css('color', 'rgba(39, 40, 34, 1)');
				var elPos = $(e.currentTarget).index();
				formGroup = formElements[formIndex];
				$(formGroup).removeClass('Active');


				formIndex = elPos;
				formGroup = formElements[formIndex];
				$(formGroup).addClass('Active');
				slideButtonColor(formIndex)
			});
	
	// Populate hidden input with full name. Used to validate final signature.
		var appFirstName = '';
		var appLastName = '';
		var coAppFirstName = '';
		var coAppLastName = '';

		$('#applicantFirstName').on('change', function() {
			appFirstName = $(this).val();
			var fullName = appFirstName + ' ' + appLastName;
			$('#applicantFullName').val(fullName);
		});
		$('#applicantLastName').on('change', function(){
			appLastName = $(this).val();
			var fullName = appFirstName + ' ' + appLastName;
			$('#applicantFullName').val(fullName);
		});
		$('#coApplicantFirstName').on('change', function() {
			coAppFirstName = $(this).val();
			var fullName = coAppFirstName + ' ' + coAppLastName;
			$('#coApplicantFullName').val(fullName);
		});
		$('#coApplicantLastName').on('change', function(){
			coAppLastName = $(this).val();
			var fullName = coAppFirstName + ' ' + coAppLastName;
			$('#coApplicantFullName').val(fullName);
		});

	// Disable fields when not applicable

		$('.not-applicable').on('click', function(e) {
			var isApplicable = $(e.currentTarget).data('applicable');
			if( isApplicable == true ) {
				$(e.currentTarget).parent().siblings().children().prop('readonly', true);
				$(e.currentTarget).parent().siblings().children('select').css('background-color', '#e9ecef');
				$(e.currentTarget).data('applicable', false);
				$(e.currentTarget).find('.checkbox').addClass('Selected');
			} else if ( isApplicable == false) {
				$(e.currentTarget).parent().siblings().children('input').prop('readonly', false);
				$(e.currentTarget).parent().siblings().children('select').css('background-color', 'white');
				$(e.currentTarget).find('.checkbox').removeClass('Selected');
				$(e.currentTarget).data('applicable', true);
			}
		});

	// Copy fields if same as first

		$('.same-as-applicant').on('click', function(e) {
			var applicantInfo = {
				firstName: $('#applicantFirstName').val(),
				lastName: $('#applicantLastName').val(),
				primaryTelephone: $('#applicantTelephone').val(),
				secondaryTelephone: $('#applicantTelephone2').val(),
				street: $('#applicantStreetAddress').val(),
				street2: $('#applicantStreetAddress2').val(),
				city: $('#applicantCity').val(),
				state: $('#applicantState').val(),
				zip: $('#applicantZip').val(),
			}
			var onOff = $(e.currentTarget).data('sameas');
			var formSection = $(this).parent().data('subsection');
			if (onOff == true) {
				$('#' + formSection + 'FirstName').val(applicantInfo.firstName);
				$('#' + formSection + 'LastName').val(applicantInfo.lastName);
				$('#' + formSection + 'Telephone').val(applicantInfo.primaryTelephone);
				$('#' + formSection + 'Telephone2').val(applicantInfo.secondaryTelephone);
				$('#' + formSection + 'StreetAddress').val(applicantInfo.street);
				$('#' + formSection + 'StreetAddress2').val(applicantInfo.street2);
				$('#' + formSection + 'City').val(applicantInfo.city);
				$('#' + formSection + 'State').val(applicantInfo.state);
				$('#' + formSection + 'Zip').val(applicantInfo.zip);
				$(e.currentTarget).data('sameas', false);
			} else {
				$('#' + formSection + 'FirstName').val('');
				$('#' + formSection + 'LastName').val('');
				$('#' + formSection + 'Telephone').val('');
				$('#' + formSection + 'Telephone2').val('');
				$('#' + formSection + 'StreetAddress').val('');
				$('#' + formSection + 'StreetAddress2').val('');
				$('#' + formSection + 'City').val('');
				$('#' + formSection + 'State').val('');
				$('#' + formSection + 'Zip').val('');
				$(e.currentTarget).data('sameas', true);
			}
			
			$(e.currentTarget).find('.checkbox').toggleClass('Selected');
		});

	// Disable field if n/a

		$('#propertyCaretaker').change(function() {
			value = $(this).val();
			if (value == 'No') {
				$('#caretakerFirstName').prop('readonly', true);
				$('#caretakerLastName').prop('readonly', true);
				$('#caretakerTelephone').prop('readonly', true);
			} else {
				$('#caretakerFirstName').prop('readonly', false);
				$('#caretakerLastName').prop('readonly', false);
				$('#caretakerTelephone').prop('readonly', false);
			}
		});

	// Validation
		// Sign up form
			// Add US Phone Validation
			jQuery.validator.addMethod('phoneUS', function(phone_number, element) {
			    phone_number = phone_number.replace(/\s+/g, ''); 
			    return this.optional(element) || phone_number.length > 9 &&
			        phone_number.match(/^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/);
			}, 'Please enter a valid phone number.');

			jQuery.validator.addMethod('valueNotEquals', function(value, element, arg) {
				return arg !== value;
			});

			signUpForm.validate({
			  success: "valid",
			  rules: {
				    applicantFirstName: {
				      required: true
				    },
				    applicantLastName: {
				      required: true
				    },
				    applicantDOB: {
				      required: true
				    },
				    applicantStreetAddress: {
				      required: true
				    },
				    applicantCity: {
				      required: true
				    },
				    applicantState: {
				      required: true
				    },
				    applicantZip: {
				      required: true,
				      minlength: 5
				    },
				    applicantTelephone: {
				      required: true,
				      phoneUS: true
				    },
				    applicantTelephone2: {
				      phoneUS: true
				    },
				    applicantEmail: {
				      email: true
				    },
				    applicantSocial: {
				      required: function(element) {
				      	return $('#accountType').val() != 'C.O.D';
				      },
				      minlength: 9
				    },
				    accountType: {
				      required: true
				    },
				    coApplicantSocial: {
				      required: function(element) {
				      	return $('#coApplicantFirstName').val() != '';
				      },
				      minlength: 9
				    },
				    coApplicantLastName: {
				      required: function(element) {
				      	return $('#coApplicantFirstName').val() != '';
				      },
				    },
				    coApplicantDOB: {
					  required: function(element) {
				      	return $('#coApplicantFirstName').val() != '';
				      },
				    },
				    employerTelephone: {
				      phoneUS: true
				    },
				    employerZip: {
				      minlength: 5
				    },
				    propertyStreetAddress: {
				      required: true
				    },
				   	propertyCity: {
				      required: true
				    },
				    propertyState: {
				      required: true
				    },
				    propertyZip: {
				      required: true,
				      minlength: 5
				    },
				    propertyType: {
				      required: true
				    },
				    propertyOccupied: {
				      required: true
				    },
				    automaticDeliveries: {
				      required: true
				    },
				    woodHeating: {
				      required: true
				    },
				    deliveryMethod: {
				      required: true
				    },
				    fuelType: { 
				    	valueNotEquals: 'n/a' 
				    },
				    propertyCaretaker: {
				      required: true
				    },
				    caretakerTelephone: {
				      phoneUS: true
				    },
				    landlordFirstName: {
				      required: true
				    },
				    landlordLastName: {
				      required: true
				    },
				    landlordTelephone: {
				      required: true,
				      phoneUS: true
				    },
				    landlordStreetAddress: {
				      required: true
				    },
				    landlordCity: {
				      required: true
				    },
				    landlordState: {
				      required: true
				    },
				    landlordZip: {
				      required: true,
				      minlength: 5
				    },
				    newPropaneWhoLinesTelephone: {
				      phoneUS: true
				    },
				    applicantNameSignature: {
				      equalTo: '#applicantFullName'
				    },
				    applicantSignatureAuthorization: {
				      required: true
				    },
				    coApplicantNameSignature: {
				    	equalTo: '#coApplicantFullName'
				    }
			  },
			  messages: {
			  	applicantNameSignature: {
			  		equalTo: "Signature name must be identical to applicant name."
			  	},
			  	coApplicantNameSignature: {
			  		equalTo: "Co-signature name must be identical to co-applicant name."
			  	},
			  	fuelType: {
			  		valueNotEquals: "Please select a fuel type to deliver."
			  	}
			  },
			  errorPlacement: function(error, element) {
			  	error.appendTo( element.parent() );
			  },
			  success: function(error) {
			  	error.remove();
			  },
			  invalidHandler: function(event, validator) {
			  	$.each(validator.errorList, function() {
			  		var element = this.element.id;
			  		var formSection = $('#' + element).parent().data('formsection');
			  		$('#nav-' + formSection).addClass('Errors');
			  	});
			  }
			});

		// ACH Authorization Form
			achForm.validate({
			  success: "valid",
			  rules: {
			  	nameInsitution: {
			  		required: true
			  	},
			  	streetInstitution: {
			  		required: true
			  	},
			  	cityInstitution: {
			  		required: true
			  	},
			  	stateInstitution: {
			  		required: true
			  	},
			  	zipInstitution: {
			  		required: true
			  	},
			  	accountNumber: {
			  		required: true
			  	},
			  	routingNumber: {
			  		required: true
			  	},
			  	withdrawAmount: {
			  		required: true
			  	},
			  	amount: {
			  		required: true
			  	},
			  	streetAddress: {
			  		required: true
			  	},
			  	city: {
			  		required: true
			  	},
			  	state: {
			  		required: true
			  	},
			  	zip: {
			  		required: true
			  	},
			  	email: {
			  		required: true
			  	},
			  	nameSignature: {
			  		required: true
			  	},
			  	signatureAuthorization: {
			  		required: true
			  	}
			  },
			  errorPlacement: function(error, element) {
			  	error.appendTo( element.parent() );
			  },
			  success: function(error) {
			  	error.remove();
			  },
			});

});