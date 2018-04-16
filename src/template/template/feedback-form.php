<?php
// 'feedback-form__id' => 2, // Описание после полей
// 'feedback-form__form-place' => 'Гланый экран', // Имя формы
// 'feedback-form__class' => 'franchise-page-feedback__feedback-form',
// 'feedback-form__mail-input' => false, // Поле email
// 'feedback-form__title' => 'Получите <span class="text-primary">бесплатную</span> помощь при приемке квартиры в новостройке:', // Заголовок
// // 'feedback-form__title-sub' => 'об условиях партнерства у руководителя отдела франчайзинга', // Подзаголовок
// 'feedback-form__text-description' => '* Вам перезвонят и согласуют встречу', // Описание после полей
// 'feedback-form__btn-value' => 'Получить помощь', // Описание после полей


/*
Id's
1 - воронка франшиза
2 - воронка ремонт
3 - на почту в отдел кадров2
*/


function feedback_form( $array ) {

  $form_office_address = geoInit( 'address' );
  $form_city_name_geo = geoInit( 'city' ); ?>

  <form class="feedback-form<?php echo ( isset( $array[ 'feedback-form__class' ] ) && $array[ 'feedback-form__class' ] !== '' ) ? ' ' . $array[ 'feedback-form__class' ] : ''; ?>" data-form-id="<?php echo $array[ 'feedback-form__id' ] ?>" data-form-place="<?php echo $array[ 'feedback-form__form-place' ]; ?>" data-form-city="<?php echo $form_city_name_geo; ?>">

    <!-- title -->
    <div class="feedback-form__title">
      <?php echo $array[ 'feedback-form__title' ]; ?>
      <?php if ( isset($array[ 'feedback-form__title-sub' ]) && $array[ 'feedback-form__title-sub' ] !== '' ) { ?>
        <div class="feddback-form__title-sub"><?php echo $array[ 'feedback-form__title-sub' ]; ?></div>
      <?php } ?>
    </div>

    <!-- name -->
    <div class="feedback-form__input-inner">
      <!-- <label class="feedback-form__label" for="feedback-form__name_1-modal">Укажите ваше имя</label> -->
      <input class="feedback-form__input" type="text" placeholder="Ваше имя" id="feedback-form__name_1-modal" name="feedback-form__name" required>
    </div>

    <!-- phone -->
    <div class="feedback-form__input-inner">

      <input class="feedback-form__input" type="tel" placeholder="Ваш номер телефона" id="feedback-form__phone_1-modal" name="feedback-form__phone" required>
    </div>

    <!-- email -->
    <?php if ( isset( $array[ 'feedback-form__mail-input' ] ) && $array[ 'feedback-form__mail-input' ] === true ) { ?>
      <div class="feedback-form__input-inner feedback-form__input-inner-margin-bottom-big">
        <!-- <label class="feedback-form__label" for="feedback-form__email_1-modal">E-mail</label> -->
        <input class="feedback-form__input" type="email" placeholder="Ваш email" id="feedback-form__email_1-modal" name="feedback-form__email" required>
      </div>
    <?php } ?>


    <?php if ( isset( $array[ 'feedback-form__textarea' ] ) && $array[ 'feedback-form__textarea' ] === true ) { ?>
    <div class="feedback-form__input-inner">
      <!-- <label class="feedback-form__label feedback-form__label_textarea" for="vacancies-feedback__text">Сопроводительное письмо</label> -->
      <textarea class="feedback-form__input feedback-form__input_textarea" id="vacancies-feedback__text" placeholder="Текст сообщения" name="feedback-form__text" rows="8" cols="80"></textarea>
    </div>
    <?php } ?>

    <!-- text description -->
    <?php if ( isset( $array[ 'feedback-form__text-description' ] ) && $array[ 'feedback-form__text-description' ] !== '' ) { ?>
      <div class="feedback-form__text-description"><?php echo $array[ 'feedback-form__text-description' ] ?></div>
    <?php } ?>

    <!-- submit btn -->
    <button class="feedback-form__btn-submit btn btn_1" type="submit">
      <svg class="feedback-form__btn-submit-load-icon" width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
        <rect x="0" y="0" width="100" height="100" fill="none" class="bk"></rect>
        <circle cx="50" cy="50" r="40" stroke-dasharray="163.36281798666926 87.9645943005142" stroke="#ffff" fill="none" stroke-width="20">
          <animateTransform attributeName="transform" type="rotate" values="0 50 50;180 50 50;360 50 50;" keyTimes="0;0.5;1" dur="1s" repeatCount="indefinite" begin="0s"></animateTransform>
        </circle>
      </svg>
      <span class="feedback-form__btn-submit-text"><?php echo $array[ 'feedback-form__btn-value' ]; ?></span>
    </button>

  </form>

<?php } ?>
