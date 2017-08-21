<?php
/*
  call_to_action( array(
    'title'       => 'Проверьте будущий дом на безопасность —<br> защитите свою семью',

    // btn form
    'btn-form'   => array(
      'btn-form__class'   => 'btn_2',
      'btn-form__value'   => 'Проверить',

      // feedback form calc
      'feedback-form-calc'   => array(
        'feedback-form-calc__place'   => 'Форма внизу страницы портфолио',
      ),

    ),
  ));
*/

function call_to_action( $array ) { ?>
  <div class="call-to-action-calc">

    <!-- title -->
    <h2 class="call-to-action-calc__title"><?php echo $array[ 'title' ]; ?></h2>

    <!-- btn -->
    <?php if ( isset( $array[ 'btn-form' ] ) ): ?>
      <button class="call-to-action-calc__btn franchise-page-feedback-form-modal btn <?php echo $array[ 'btn-form' ][ 'btn-form__class' ]; ?>" type="button">
        <?php echo $array[ 'btn-form' ][ 'btn-form__value' ]; ?>
      </button>
    <?php endif; ?>

    <!-- feedback-form-calc -->
    <?php if ( isset( $array[ 'feedback-form-calc' ] ) ) feedback_form_calc( $array[ 'feedback-form-calc' ] ); ?>

  </div>

<?php } ?>
