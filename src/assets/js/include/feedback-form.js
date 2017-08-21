jQuery( function( jQuery ) {
  var
  thisElem, // This elem
  thankModal,
  yaReachCol,
  formId,
  facebookEvent; // Modal window

  jQuery( '.feedback-form' ).on( 'submit', function( event ) {
    event.preventDefault();
    thisElem = this;

    if ( feedbackForm__inputValidation() ) {

      // init form
      switch ( +jQuery( thisElem ).attr( 'data-form-id' ) ) {
        case 1:
          thankModal = feedbackFormThankPage;
          yaReachCol = function() {
            yaCounter42716444.reachGoal( 'franchise__feedback-form' );
          };
          formId = 1;
          // Facebook
          facebookEvent = function() {
            var cookieUTM = getCookie( 'utm_source' );
            if ( cookieUTM === 'facebook' || cookieUTM === 'instagram' ) fbq( 'trackCustom', 'LeadFormFranchise' );
          };
          break;

        case 2:
          thankModal = thnModal;
          yaReachCol = function() {
            yaCounter42716444.reachGoal( 'service__feedback-form_help-getting' );
          };
          formId = 2;
          break;

        case 3:
          thankModal = function() {
            alert( 'Спасибо за отклик! С вами свяжется представитель HR-отдела Mossebo.' );
          };
          yaReachCol = function() {
            yaCounter42716444.reachGoal( 'vacancies__feedback-form' );
          };
          formId = 3;
          break;
        default:
          alert( 'Feedback form error!' );
      }

      // show load btn
      jQuery( thisElem ).find( '.feedback-form__btn-submit' ).attr( 'disabled', true ).addClass( 'feedback-form__btn-submit_load' ).find( '.feedback-form__btn-submit-load-icon' ).fadeIn( 'slow' );

      // send
      jQuery.ajax({
        method: 'POST',
        url: '/wp-content/themes/mossebo/amocrm-franchise/handler.php',
        data: {
          // form id
          formId: formId,
          // Имя
          name: jQuery( thisElem ).find( 'input[name="feedback-form__name"]' ).val(),
          // Email
          email: jQuery( thisElem ).find( 'input[name="feedback-form__email"]' ).val(),
          // Телефон
          phone: jQuery( thisElem ).find( 'input[name="feedback-form__phone"]' ).val(),
          // URL страницы
          urlPage: document.location.href,
          // Имя формы
          pagePlace: thisElem.getAttribute( 'data-form-place' ),
          // Геолокация
          geoLocation: thisElem.getAttribute( 'data-form-city' ),
          // Татунашвили тег
          tatunashviliTag: function() {
            if ( document.location.href === 'http://mossebo.studio/franchise/?utm_source=Youtube&utm_campaign=Tatunashvili' ) {
              return 'Татунашвили';
            }
          }
        }
      })
      .done( function() {
        // Clear form's
        jQuery( thisElem )[ 0 ].reset();
        // Show modal Thank yoy page
        jQuery.magnificPopup.close();
        setTimeout( thankModal, 600 );
        // Yandex reachGoal
        yaReachCol();
        // Facebook
        facebookEvent();
        // hide load btn
        jQuery( thisElem ).find( '.feedback-form__btn-submit' ).removeAttr( 'disabled' ).removeClass( 'feedback-form__btn-submit_load' ).find( '.feedback-form__btn-submit-load-icon' ).hide();
      });

    } // if END;
  });

  // Validation form
  function feedbackForm__inputValidation() {
    var inputs = thisElem.querySelectorAll( '.feedback-form__input[required]' ),
    result = true;

    for ( var i = 0; i < inputs.length; i++ ) {
      if ( inputs[ i ].value === '' ) {
        result = !result;
        inputs[ i ].focus();
        break;
      }
    }
    return result;
  }

  // Modal calc window
  jQuery( '.franchise-page-feedback-form-modal' ).click( function() {
    $.magnificPopup.open({
      items: {
        src: '.feedback-form-modal',
      },
      removalDelay: 300,
      callbacks: {
        beforeOpen: function() {
          if ( jQuery( window ).width() <= 991 && jQuery( '#nav-icon3' ).hasClass( 'open' ) ) {
            toggleMenu();
          }
        }
      }
    });
  });

  // Show modal Thank you page
  function feedbackFormThankPage() {
    jQuery.magnificPopup.open({
      items: {
        src: '.feedback-form-modal-thank-page'
      },
      removalDelay: 300,
      // Callbacck функция, инициализация пикселей
      callbacks: {
        open: function() {
          document.querySelector( '.feedback-form-modal-thank-page__btn' ).click();
        }
      }
    });
  }

});
