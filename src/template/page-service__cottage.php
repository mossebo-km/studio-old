<?php

/*
Template Name: Услуги - Дизайн и ремонт коттеджей
*/
get_header();

?>

<!-- Banner -->
<div class="page-banner page-banner_cottage container-fluid">
  <div class="row">
    <div class="col-md-10 offset-md-1">
      <div class="row">
        <!-- title -->
        <div class="col-12">
          <h1 class="page-banner__title">Дизайн и ремонт<br> коттеджей</h1>
          <h2 class="page-banner__sub-title page-banner__sub-title_theme-color-black">Создаем интерьеры загородных домов в<br> Санкт-Петербурге и Ленинградской области</h2>
        </div>
        <!-- Feedback form -->
        <div class="col-12">
          <?php feedback_form_calc( array(
            'form-place' => 'Коттеджи', // Form name
            'title' => 'Рассчитайте стоимость дизайна и ремонта коттеджа <span class="text-primary">прямо сейчас:</span>', // Title
            'steps' => array( // Step's
              'step-1' => array( // Step 1
                'label' => 'Укажите площадь помещения:',
                'placeholder' => 'площадь помещения, м²'
              ),
              'step-2' => array( // Step 2
                'label' => 'Выберите тип коттеджа:',
                'options' => array( 'Газобетонный', 'Деревянный', 'Кирпичный', 'Блочный' ),
                'radio-label' => 'Нужен ли вам дизайн интерьера?'
              ),
            ),
          )); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Feauteres -->
<div class="feauteres feauteres_theme-background-white container-fluid">
  <div class="row">
    <div class="feauteres__grid col-sm-4">
        <i class="feauteres__icon feauteres__icon_7"></i>
        <div class="feauteres__text">Любая площадь</div>
        <div class="feauteres__description">Работаем со всеми коттеджами в пределах 50 км от границы города.</div>
    </div>
    <div class="feauteres__grid col-sm-4">
        <i class="feauteres__icon feauteres__icon_8"></i>
        <div class="feauteres__text">Комплексные<br> решения</div>
        <div class="feauteres__description">От установки котельной и скважины до ландшафтного дизайна и декорирования дома.</div>
    </div>
    <div class="feauteres__grid col-sm-4">
        <i class="feauteres__icon feauteres__icon_9"></i>
        <div class="feauteres__text">Городской комфорт за<br> городом</div>
        <div class="feauteres__description">Продумаем системы бесперебойного электро и водоснабжения, сохранив городской комфорт.</div>
    </div>
  </div>
</div>

<!-- Project -->
<div class="project container-fluid">
  <div class="project__top-block">
    <div class="section-title section-title_theme-1">Наши проекты</div>
    <div class="project__top-block-description">Мы работаем со всеми стилистическими направлениями и предлагаем оптимальные решения для интерьеров деревянных, кирпичных, блочных и других типов коттеджей.</div>
  </div>
  <div class="project__img-row row gallery-img-post">
    <div class="col-sm-4 col-12 project__img-col"><img src="<?php echo THEME_DIR; ?>/assets/images/service/cottage/project/1.jpg" alt="" class="project__img img-post-gallary"></div>
    <div class="col-sm-4 col-12 project__img-col"><img src="<?php echo THEME_DIR; ?>/assets/images/service/cottage/project/6.jpg" alt="" class="project__img img-post-gallary"></div>
    <div class="col-sm-4 col-12 project__img-col"><img src="<?php echo THEME_DIR; ?>/assets/images/service/cottage/project/3.jpg" alt="" class="project__img img-post-gallary"></div>
    <div class="col-sm-4 col-12 project__img-col"><img src="<?php echo THEME_DIR; ?>/assets/images/service/cottage/project/4.jpg" alt="" class="project__img img-post-gallary"></div>
    <div class="col-sm-4 col-12 project__img-col"><img src="<?php echo THEME_DIR; ?>/assets/images/service/cottage/project/2.jpg" alt="" class="project__img img-post-gallary"></div>
    <div class="col-sm-4 col-12 project__img-col"><img src="<?php echo THEME_DIR; ?>/assets/images/service/cottage/project/5.jpg" alt="" class="project__img img-post-gallary"></div>
  </div>
</div>

<!-- Work pack -->
<div class="cottage-work-pack container">
  <div class="row">
    <div class="cottage-work-pack__top-block col-12">
      <div class="section-title section-title_theme-1">Что входит в комплекс работ:</div>
      <div class="cottage-work-pack__top-block-description">Мы выполняем ремонт любого уровня сложности, укладываемся в заданные сроки, не выходим за рамки бюджета и предоставляем гарантию на все ремонтно-отделочные работы.</div>
    </div>
  </div>
  <div class="feauteres-grids row">
    <div class="feauteres-grids__col col-sm-4">
      <i class="feauteres-grids__col-icon feauteres-grids__col-icon_cottage-1"></i>
      <div class="feauteres-grids__col-title"><span class="feauteres-grids__col-title-count">1.</span> Инженерные<br> коммуникации</div>
      <div class="feauteres-grids__col-description">Разводим инженерные коммуникации по дому, обустраиваем котельные, устанавливаем электрощитовое оборудование, оснащаем объект автономным септиком для очистки сточных вод.</div>
    </div>
    <div class="feauteres-grids__col col-sm-4">
      <i class="feauteres-grids__col-icon feauteres-grids__col-icon_cottage-2"></i>
      <div class="feauteres-grids__col-title"><span class="feauteres-grids__col-title-count">2.</span> Ремонт и декорирование<br> внутренних помещений</div>
      <div class="feauteres-grids__col-description">Проводим весь комплекс работ по дизайну и ремонту жилых пространств в заданной стилистике: от черновой отделки до меблировки. </div>
    </div>
    <div class="feauteres-grids__col col-sm-4">
      <i class="feauteres-grids__col-icon feauteres-grids__col-icon_cottage-3"></i>
      <div class="feauteres-grids__col-title"><span class="feauteres-grids__col-title-count">3.</span> Благоустройство<br> придомового участка</div>
      <div class="feauteres-grids__col-description">Устанавливаем заборы и ограждения, возводим пристройки, беседки и другие малые архитектурные формы. Выполняем полный комплекс работ по ландшафтному дизайну придомовой территории.</div>
    </div>
  </div>
</div>

<!-- Call to action calc -->
<?php

call_to_action( array(
  'title' => 'Решите все проблемы по обустройству дома и участка',
  // feedback form calc
  'feedback-form-calc'   => array(
    'form-place' => 'Коттеджи', // Form name
    'title' => 'Рассчитайте стоимость дизайна и ремонта коттеджа <span class="text-primary">прямо сейчас:</span>', // Title
    'steps' => array( // Step's
      'step-1' => array( // Step 1
        'label' => 'Укажите площадь помещения:',
        'placeholder' => 'площадь помещения, м²'
      ),
      'step-2' => array( // Step 2
        'label' => 'Выберите тип коттеджа:',
        'options' => array( 'Газобетонный', 'Деревянный', 'Кирпичный', 'Блочный' ),
        'radio-label' => 'Нужен ли вам ремонт?'
      ),
    ),
  ),
));

?>

<!-- Algorithm work -->
<div class="algorithm-work container">
  <!-- title -->
  <div class="algorithm-work__title section-title">Алгоритм ремонтных работ</div>
  <div class="algorithm-work__title-sub">Воплощаем дизайн-проект в жизнь, берем на себя все этапы ремонта:</div>
  <!-- grid's -->
  <div class="row">
    <div class="algorithm-work__grid col-sm-4">
      <img src="<?php echo THEME_DIR; ?>/assets/images/service/cottage/algorithm-work/1.jpg" alt="" class="algorithm-work__grid-img">
      <div class="algorithm-work__grid-title">Замер и оценка объекта</div>
      <div class="algorithm-work__grid-description">Выезжаем на загородный объект, на расстояние до 100 км от города. Оцениваем состояние жилого пространства и придомовой территории, производим все необходимые замеры, составляем поэтапный план ремонтных работ.</div>
    </div>
    <div class="algorithm-work__grid col-sm-4">
      <img src="<?php echo THEME_DIR; ?>/assets/images/service/cottage/algorithm-work/3.jpg" alt="" class="algorithm-work__grid-img">
      <div class="algorithm-work__grid-title">Организация работы</div>
      <div class="algorithm-work__grid-description">Организуем рабочее пространство на объекте, закупаем и доставляем строительные и отделочные материалы, устанавливаем временные бытовки.</div>
    </div>
    <div class="algorithm-work__grid col-sm-4">
      <img src="<?php echo THEME_DIR; ?>/assets/images/service/cottage/algorithm-work/2.jpg" alt="" class="algorithm-work__grid-img">
      <div class="algorithm-work__grid-title">Черновые работы</div>
      <div class="algorithm-work__grid-description">Закладываем основы качественного ремонта. Производим весь комплекс черновых работ по стяжке пола, выравниванию стен, обработке потолков, электропроводке, установке систем отопления и проводке коммуникаций.</div>
    </div>
    <div class="algorithm-work__grid col-sm-4">
      <img src="<?php echo THEME_DIR; ?>/assets/images/service/cottage/algorithm-work/4.jpg" alt="" class="algorithm-work__grid-img">
      <div class="algorithm-work__grid-title">Чистовые работы и монтаж</div>
      <div class="algorithm-work__grid-description">Превращаем загородный объект в комфортное пространство для жизни с помощью выбранных вами отделочных материалов. Устанавливаем сантехнику, кухонное оборудование, монтируем межкомнатные двери и другие функциональные элементы интерьера.</div>
    </div>
    <div class="algorithm-work__grid col-sm-4">
      <img src="<?php echo THEME_DIR; ?>/assets/images/service/cottage/algorithm-work/5.jpg" alt="" class="algorithm-work__grid-img">
      <div class="algorithm-work__grid-title">Меблировка и декор</div>
      <div class="algorithm-work__grid-description">Оснащаем пространство внутри и снаружи дома всей необходимой мебелью, подобранной в соответствии со стилем дизайна и вкусом заказчика. Декорируем внутренние помещения и придомовую территорию, расставляем стильные акценты, придаем интерьеру индивидуальность.</div>
    </div>
  </div>
  <!-- bottom -->
  <div class="algorithm-work__bottom row">
    <div class="algorithm-work__bottom-left col-sm-7">
      <div class="algorithm-work__bottom-title">Mossebo сегодня</div>
      <div class="algorithm-work__bottom-description">Компания Mossebo предлагает услуги по дизайну и ремонту интерьеров в 35 городах России, СНГ и во всех прилегающих пригородах. Мы работаем как с городскими квартирами, так и с удаленными объектами загородной недвижимости, расположенными на расстоянии до 50 км от города. На нашем счету 214 проектов, реализованных в загородных домах за 2016 год.</div>
    </div>
    <div class="algorithm-work__bottom-right col-sm-5">
      <img src="<?php echo THEME_DIR; ?>/assets/images/service/cottage/algorithm-work/bottom.svg" alt="" class="algorithm-work__bottom-img">
    </div>
  </div>
</div>

<!-- Call to action calc -->
<?php

call_to_action( array(
  'title' => 'Сделаем ремонт в любой сезон с гарантией по срокам работ',
  // feedback form calc
  'feedback-form-calc'   => array(
    'form-place' => 'Коттеджи', // Form name
    'title' => 'Рассчитайте стоимость дизайна и ремонта коттеджа <span class="text-primary">прямо сейчас:</span>', // Title
    'steps' => array( // Step's
      'step-1' => array( // Step 1
        'label' => 'Укажите площадь помещения:',
        'placeholder' => 'площадь помещения, м²'
      ),
      'step-2' => array( // Step 2
        'label' => 'Выберите тип коттеджа:',
        'options' => array( 'Газобетонный', 'Деревянный', 'Кирпичный', 'Блочный' ),
        'radio-label' => 'Нужен ли вам ремонт?'
      ),
    ),
  ),
));

?>

<?php

get_footer();

?>
