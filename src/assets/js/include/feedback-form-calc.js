/* -----------------------------------------*/
// Инициализируем калькулятор
jQuery( function ( jQuery ) {
  jQuery( '.feedback-form-calc .btn' ).removeAttr( 'disabled' );
  jQuery( '.feedback-form-calc' ).on( 'submit', formCalc );
});
/* -----------------------------------------*/




function formCalc( event ) {
  event.preventDefault();

  var formKeyup = this.querySelectorAll( '.calc-step-1, .calc-step-3' ),
  formInputStep2 = this.querySelector( '.calc-step-2' ),
  radioBlock = this.querySelector( '.radio-block-wrapper' );
  smsText = this.querySelector( '.sms-text' );
  thisSelect = this;

  // Проверяем правильность заполнения первого поля
  if ( formKeyup[ 0 ].value === '' ) {
    formKeyup[ 0 ].focus();
  }

  // Описываем переход на второй шаг
  else if ( this.getAttribute( 'data-step' ) === '1' ) {
    jQuery( thisSelect ).find( '.input-inner, .feedback-form-calc__label, .form-description-text, .calc-steps .step-number' ).animate({
      opacity: 0
    }, function() {
      thisSelect.querySelector( '.feedback-form-calc__label' ).innerHTML = jQuery( '.input-select_wrapper' ).attr( 'data-step-label' );
      thisSelect.querySelector( '.step-number' ).innerHTML = '2';
      formKeyup[ 0 ].style.display = 'none';
      thisSelect.querySelector( '.input-select_wrapper' ).style.display = 'block';
      radioBlock.style.display = 'block';
    });
    jQuery( thisSelect ).find( '.input-inner, .feedback-form-calc__label, .form-description-text, .calc-steps .step-number' ).animate({
      opacity: 1
    });
    this.setAttribute( 'data-step', '2' );
  }

  // Описываем третий шаг
  else if ( this.getAttribute( 'data-step' ) === '2' ) {
    jQuery( thisSelect ).find( '.input-inner, .feedback-form-calc__label, .form-description-text, .calc-steps .step-number' ).animate({
      opacity: 0
    }, function() {
      thisSelect.querySelector( '.feedback-form-calc__label' ).innerHTML = 'Укажите ваш номер телефона:';
      thisSelect.querySelector( '.step-number' ).innerHTML = '3';
      thisSelect.querySelector( '.input-select_wrapper' ).style.display = 'none'; // Скрываем поле на втором шаге
      radioBlock.style.display = 'none';
      formKeyup[ 1 ].style.display = 'block'; // Отображаем поле третьего шага
      smsText.style.display = 'block';
    });
    jQuery( thisSelect ).find( '.input-inner, .feedback-form-calc__label, .form-description-text, .calc-steps .step-number' ).animate({
      opacity: 1
    });
    this.setAttribute( 'data-step', '3' );
  }

  // Проверяем правильность заполнения поля 3-го шага
  else if ( formKeyup[ 1 ].value === '' && this.getAttribute( 'data-step' ) === '3' ) {
    formKeyup[ 1 ].focus();
  }

  // При успешном заполнении формы
  else {

    // show load btn
    jQuery( thisSelect ).find( '.btn-form-inner button' ).attr( 'disabled', true ).addClass( 'btn-submit_load' ).find( '.btn-submit-load-icon' ).fadeIn( 'slow' );

    jQuery.ajax({
      method: 'POST',
      url: '/wp-content/themes/mossebo/amocrm/handler.php',
      data: {
        nameLead: thisSelect.querySelector( '.radio-wraper input[name="calc-radio"]:checked' ).value,
        roomSpace: formKeyup[ 0 ].value,
        roomType: formInputStep2.value,
        phoneNumber: formKeyup[ 1 ].value,
        urlPage: document.location.href,
        pagePlace: thisSelect.getAttribute( 'data-form-place' ),
        geoOffice: thisSelect.getAttribute( 'data-form-office' ),
        geoLocation: thisSelect.getAttribute( 'data-form-city' )
      }
    })
      .done( function() {

        // Show modal Thank yoy page
        jQuery.magnificPopup.close();
        setTimeout( thnModal, 600 );

        // Yandex reachGoal
        yaCounter42716444.reachGoal( 'calcorder' );

        // Facebook
        var cookieUTM = getCookie( 'utm_source' );
        if ( cookieUTM === 'facebook' || cookieUTM === 'instagram' ) fbq( 'trackCustom', 'LeadFormCalc' );

        jQuery( thisSelect ).find( '.input-inner, .feedback-form-calc__label, .form-description-text, .calc-steps .step-number' ).animate({
          opacity: 0
        }, function() {
          jQuery( thisSelect ).find( '.calc-step-3' ).val( '' ).hide();
          jQuery( thisSelect ).find( '.calc-step-1' ).val( '' ).show();
          jQuery( thisSelect ).find( '.feedback-form-calc__label' ).html( jQuery( thisSelect ).find( '.calc-step-1' ).attr( 'data-step-label' ) );
          jQuery( thisSelect ).find( '.step-number' ).html( '1' );
          jQuery( thisSelect ).attr( 'data-step', '1' );
          smsText.style.display = 'none';
          // hide load btn
          jQuery( thisSelect ).find( '.btn-form-inner button' ).removeAttr( 'disabled' ).removeClass( 'btn-submit_load' ).find( '.btn-submit-load-icon' ).hide();
        });
        jQuery( thisSelect ).find( '.input-inner, .feedback-form-calc__label, .form-description-text, .calc-steps .step-number' ).animate({
          opacity: 1
        });

      });
  }
}
