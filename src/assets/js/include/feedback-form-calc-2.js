var feedBackFormCalc2 = {

		// Валидация радио полей
		radioVal: function radioVal( radio ) {
		  var radioChecked = document.querySelectorAll( radio ),
		      result = true;

		  if ( radioChecked.length === 0 ) {
		    result = !result;
		  }

		  return result;
		},

		// Валидация полей
		inputValid: function inputValid( input ) {
			var input = input,
			result = true;

			if ( input[ 0 ].value === '' ) {
				result = !result;
			}

			return result;
		},

		// перейти на следующий шаш
		nextStep: function nextStep( step ) {
			var steps = step;

			for ( var i = 0; i < steps[ 'length' ]; i++ ) {
				if ( jQuery( steps[ i ] ).is( ':visible' ) ) {
					jQuery( steps[ i ] ).fadeOut( '400', function() {
						 jQuery( steps[ i + 1 ] ).fadeIn( '400' );
					});
					break;
				}
			}

			return;
		},

		// Отправляем форму
		sendForm: function( self ) {

			var self = self,
			 	dataForm = {
				nameLead: jQuery( self ).find('input[name="feedback-form-calc-2__step-1-radio-2" ]:checked').val(),
				fixType: jQuery( self ).find('input[name="feedback-form-calc-2__step-1-radio-1" ]:checked').val(),
				roomSpace: jQuery( self ).find('input[name="feedback-form-calc-2__step-2-input"]').val(),
				roomType: jQuery( self ).find( 'input[name="feedback-form-calc-2__step-2-radio-2"]' ).val(),
				phoneNumber: jQuery( self ).find( 'input[name="feedback-form-calc-2__step-3-input"]' ).val(),
				urlPage: document.location.href,
				pagePlace: self.getAttribute( 'data-form-place' ),
				geoOffice: self.getAttribute( 'data-form-office' ),
				geoLocation: self.getAttribute( 'data-form-city' )
			};

			console.log( dataForm );

			jQuery.ajax({
				method: 'POST',
				url: '/wp-content/themes/mossebo/amocrm/handler.php',
				data: dataForm
			})
				.done( function() {


					// Show modal Thank yoy page
					setTimeout( thnModal, 600 );

					var steps = jQuery( self ).find( '.feedback-form-calc-2__step' );

					jQuery( self )[ 0 ].reset()
					jQuery( self ).attr( 'data-step', '0' );
					jQuery( '.feedback-form-calc-2__index-counter' ).html( '1' )

					steps.fadeOut( '400', function() {
								 jQuery( steps[ 0 ] ).fadeIn( '400' );
					});

					// Yandex reachGoal
					yaCounter42716444.reachGoal( 'calcorder' );

					// Facebook
					var cookieUTM = getCookie( 'utm_source' );
					if ( cookieUTM === 'facebook' || cookieUTM === 'instagram' ) fbq( 'trackCustom', 'LeadFormCalc' );

				});
		}

};

jQuery( '.feedback-form-calc-2' ).on( 'submit', function( event ) {
	event.preventDefault();

	var self = this;

	switch ( jQuery( self ).attr( 'data-step' ) ) {

		// Первый шаг
		case '0':
		jQuery( self ).attr( 'data-step', '1' );
			feedBackFormCalc2.nextStep( jQuery( self ).find( '.feedback-form-calc-2__step' ) );
			jQuery( '.feedback-form-calc-2__index-counter' ).html( '2' );
			break;

		// Второй шаг
		case '1':
			if ( feedBackFormCalc2.inputValid( jQuery( self ).find( 'input[name="feedback-form-calc-2__step-2-input"]' ) ) ) {
				jQuery( self ).attr( 'data-step', '2' );
				feedBackFormCalc2.nextStep( jQuery( self ).find( '.feedback-form-calc-2__step' ) );
							jQuery( '.feedback-form-calc-2__index-counter' ).html( '3' );
			} else {
				jQuery( self ).find( 'input[name="feedback-form-calc-2__step-2-input"]' ).focus();
			}
			break;

		// Третий шаг
		case '2':
			if ( feedBackFormCalc2.inputValid( jQuery( self ).find( 'input[name="feedback-form-calc-2__step-3-input"]' ) ) ) {
				feedBackFormCalc2.sendForm( self );

			} else {
				jQuery( self ).find( 'input[name="feedback-form-calc-2__step-3-input"]' ).focus();
			}
		break;

	}

});
