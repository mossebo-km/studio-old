<?php

/*
Template Name: Услуги - Помощь в приемке квартиры у застройщика
*/
get_header();

?>

<!-- Banner -->
<div class="page-banner page-banner_help-getting container-fluid">
  <div class="row">
    <div class="col-md-10 offset-md-1">
      <div class="row">
        <!-- title -->
        <div class="col-12">
          <h1 class="page-banner__title">Помощь в приемке квартиры<br> у застройщика</h1>
          <h2 class="page-banner__sub-title page-banner__sub-title_theme-color-black"><span class="text-primary">Сохрани от 70 000 до 300 000 рублей</span> на новую<br> машину, будущий ремонт или долгожданный отпуск</h2>
        </div>

        <!-- Feedback form -->
        <div class="col-12">
          <?php feedback_form( array(
            'feedback-form__id' => 2, // Описание после полей
            'feedback-form__form-place' => 'Гланый экран', // Имя формы
            // 'feedback-form__class' => 'franchise-page-feedback__feedback-form',
            'feedback-form__mail-input' => false, // Поле email
            'feedback-form__title' => 'Получите <span class="text-primary">бесплатную</span> помощь при приемке квартиры в новостройке:', // Заголовок
            // 'feedback-form__title-sub' => 'об условиях партнерства у руководителя отдела франчайзинга', // Подзаголовок
            'feedback-form__text-description' => '* Вам перезвонят и согласуют встречу', // Описание после полей
            'feedback-form__btn-value' => 'Получить помощь', // Описание после полей
          )); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- how getting -->
<div class="how-getting container">
  <!-- title <-->
  <div class="section-title section-title_theme-1">Как принимать квартиру в новостройке?</div>
  <div class="how-getting__sub-title">Смотри видео и подготовься к битве с застройщиком:</div>
  <!-- youtube -->
  <div class="how-getting__youtube-player row">
    <div class="col-md-8 offset-md-2">
      <div class="youtube-player" data-youtube-player-src-img="<?php echo get_template_directory_uri(); ?>/dir/img/service/help-getting/how-getting/youtube-player__tum.jpg" data-youtube-player-id="3bkb7-U-DwY">
        <div class="youtube-player__img-preview youtube-player__img-preview_theme-bnw"></div>
      </div>
    </div>
  </div>
</div>

<!-- why-help -->
<div class="why-help container">
  <div class="section-title section-title_theme-1">Зачем нужна помощь при приемке?</div>
  <div class="why-help__description">Визуальные дефекты можно обнаружить, но для поиска серьезных ошибок нужна помощь строителя и профессиональное оборудование. <b>Только он сможет проверить:</b></div>
  <div class="feauteres-grids row">
    <div class="feauteres-grids__col col-sm-4">
      <i class="feauteres-grids__col-icon feauteres-grids__col-icon_help-getting-1"></i>
      <div class="feauteres-grids__col-title"><span class="feauteres-grids__col-title-count">1.</span> Состояние стен</div>
      <div class="feauteres-grids__col-description">С помощью тепловизора стены проверяются на предмет наличия трещин и промерзания углов.</div>
    </div>
    <div class="feauteres-grids__col col-sm-4">
      <i class="feauteres-grids__col-icon feauteres-grids__col-icon_help-getting-2"></i>
      <div class="feauteres-grids__col-title"><span class="feauteres-grids__col-title-count">2.</span> Качество стяжки пола</div>
      <div class="feauteres-grids__col-description">Замеряется толщина пола, выявляется возможное наличие пустот в стяжке.</div>
    </div>
    <div class="feauteres-grids__col col-sm-4">
      <i class="feauteres-grids__col-icon feauteres-grids__col-icon_help-getting-3"></i>
      <div class="feauteres-grids__col-title"><span class="feauteres-grids__col-title-count">3.</span> Безопасность электропроводки</div>
      <div class="feauteres-grids__col-description">Электропроводка и электрощиток обследуются на предмет несоответствия нормам безопасности.</div>
    </div>
    <div class="feauteres-grids__col col-sm-4">
      <i class="feauteres-grids__col-icon feauteres-grids__col-icon_help-getting-4"></i>
      <div class="feauteres-grids__col-title"><span class="feauteres-grids__col-title-count">4.</span> Исправность системы отопления</div>
      <div class="feauteres-grids__col-description">Выявляются возможные дефекты в установке радиаторов и труб отопления.</div>
    </div>
    <div class="feauteres-grids__col col-sm-4">
      <i class="feauteres-grids__col-icon feauteres-grids__col-icon_help-getting-5"></i>
      <div class="feauteres-grids__col-title"><span class="feauteres-grids__col-title-count">5.</span> Точность метража</div>
      <div class="feauteres-grids__col-description">Чтобы избежать возможных доплат за «лишние» метры, производится контрольный замер площади квартиры.</div>
    </div>
  </div>

</div>


<!-- Call to action calc -->
<?php call_to_action( array(
  'title'       => 'Проверьте будущий дом на безопасность —<br> защитите свою семью',
  'btn-form'   => array(
    'btn-form__class'   => 'btn_2',
    'btn-form__value'   => 'Проверить',
  ),
)); ?>

<!-- indicators-feauteres -->
<div class="indicators-feauteres container">
  <div class="section-title section-title_theme-1">6 индикаторов халтуры застройщиков</div>
  <div class="indicators-feauteres__description">Ваш застройщик не сдал дом вовремя? Предлагал серые схемы? Не выполнил условия по договору? Тогда у вас нет оснований верить качеству его работы.</div>
  <!-- feauteres -->
  <div class="indicators-feauteres__row row">
    <div class="indicators-feauteres__grid col-md-4">
      <div class="indicators-feauteres__grid-text">
        <div class="indicators-feauteres__grid-count">1</div>
        Перепады уровня стен и потолка больше нормативных
      </div>
    </div>
    <div class="indicators-feauteres__grid col-md-4">
      <div class="indicators-feauteres__grid-text">
        <div class="indicators-feauteres__grid-count">2</div>
        Из розеток и электрощитка торчит оголенная проводка
      </div>
    </div>
    <div class="indicators-feauteres__grid col-md-4">
      <div class="indicators-feauteres__grid-text">
        <div class="indicators-feauteres__grid-count">3</div>
        Входные и межкомнатные двери хлопают, не закрываются и скрипят
      </div>
    </div>
    <div class="indicators-feauteres__grid col-md-4">
      <div class="indicators-feauteres__grid-text">
        <div class="indicators-feauteres__grid-count">4</div>
        На окнах образуется конденсат и наледь, в углах есть плесень и грибок
      </div>
    </div>
    <div class="indicators-feauteres__grid col-md-4">
      <div class="indicators-feauteres__grid-text">
        <div class="indicators-feauteres__grid-count">5</div>
        Нарушена система вентиляции
      </div>
    </div>
    <div class="indicators-feauteres__grid col-md-4">
      <div class="indicators-feauteres__grid-text">
        <div class="indicators-feauteres__grid-count">6</div>
        Открытые дефекты на сварке труб в ванной и санузлах
      </div>
    </div>
  </div>
  <!-- bottom row -->
  <div class="indicators-feauteres__bottom-row row">
    <div class="col-md-7">
      <div class="section-title section-title_theme-1 indicators-feauteres__bottom-row-title">Если подписать акт приема-передачи — устранять все дефекты придется за свой счет!</div>
      <div class="indicators-feauteres__bottom-row-description">Пригласите на приемку профессионала и сохраните свое<br> время и деньги.</div>
    </div>
    <div class="col-md-5">
      <img class="indicators-feauteres__bottom-row-img" src="<?php echo get_template_directory_uri(); ?>/dir/img/service/help-getting/indicators-feauteres/indicators-feauteres__bottom-row-img.jpg" alt="">
    </div>
  </div>
</div>

<!-- Protect you -->
<div class="protect-you container">
  <div class="section-title section-title_theme-1 protect-you__title">Защитим вас от незаконных переплат за лишние метры</div>
  <div class="protect-you__row row">
    <div class="col-md-5">
      <img class="protect-you__img" src="<?php echo get_template_directory_uri(); ?>/dir/img/service/help-getting/protect-you/protect-you__img.png" alt="">
    </div>
    <div class="col-md-6 offset-md-1">
      <div class="protect-you__text">Застройщики всегда включают в договор пункт о доплатах после обмера помещения. Только специалист сможет правильно составить план квартиры и высчитать жилую и общую площадь, сохранив ваш бюджет.</div>
    </div>
  </div>
</div>


<!-- Call to action calc -->
<?php call_to_action( array(
  'title'       => 'Получите точный план квартиры и не платите за<br> "лишние" метры',
  'btn-form'   => array(
    'btn-form__class'   => 'btn_2',
    'btn-form__value'   => 'Получить план',
  ),
)); ?>


<?php get_footer(); ?>
