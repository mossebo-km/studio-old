<?php
/*
Template Name: Страница франшиза
*/
get_header();
$form_office_address = geoInit( 'address' );
$form_city_name_geo = geoInit( 'city' );
?>

<!-- Feedback -->
<div class="franchise-page-feedback container-fluid">
  <div class="row">
    <div class="col-xl-10 offset-xl-1 col-12">
      <div class="row">

        <!-- Title -->
        <div class="col-12">
          <h1 class="franchise-page-feedback__title">Франшиза №1 по версии<br> РБК</h1>
        </div>

        <div class="col-md-6 col-12">
          <!-- Sub title -->
          <h2 class="franchise-page-feedback__subtitle">Бизнес по дизайну интерьера с гарантией входящих заявок</h2>
          <!-- YouTube player -->
          <div class="franchise-page-feedback__youtube-player">
            <div class="youtube-player" data-youtube-player-src-img="<?php echo get_template_directory_uri(); ?>/assets/images/franchise/frachise-page-feedback/__youtube-player/franchise-page-feedback__youtube-player-img-preview.jpg" data-youtube-player-id="x6H4trs4yDc">
              <div class="youtube-player__img-preview youtube-player__img-preview_theme-light"></div>
            </div>
          </div>
          <!-- About us write -->
          <div class="franchise-page-feedback__about-us-write">
            <div class="row">
              <div class="franchise-page-feedback__about-us-write-col col">
                <img class="franchise-page-feedback__about-us-write-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/franchise/frachise-page-feedback/__about-us-write/franchise-page-feedback__about-us-write-img-1.png" alt="РБК">
                <div class="franchise-page-feedback__about-us-write-text">Победитель конкурса РБК</div>
              </div>
              <div class="franchise-page-feedback__about-us-write-col col">
                <img class="franchise-page-feedback__about-us-write-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/franchise/frachise-page-feedback/__about-us-write/franchise-page-feedback__about-us-write-img-2.png" alt="ТНТ">
                <div class="franchise-page-feedback__about-us-write-text">Реклама Mossebo говорит голосом «Школы ремонта» на ТНТ</div>
              </div>
              <div class="franchise-page-feedback__about-us-write-col col">
                <img class="franchise-page-feedback__about-us-write-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/main_page/abous_us_write/7.svg" alt="Лучшие световые решения для интерьера">
                <div class="franchise-page-feedback__about-us-write-text">Премии “Лидер отрасли” и “Межрегиональное развитие”</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <!-- Feedback form -->
          <?php feedback_form( array(
            'feedback-form__id' => 1, // Описание после полей
            'feedback-form__form-place' => 'Гланый экран', // Имя формы
            'feedback-form__class' => 'franchise-page-feedback__feedback-form',
            'feedback-form__mail-input' => true, // Поле email
            'feedback-form__title' => 'Узнайте подробнее', // Заголовок
            'feedback-form__title-sub' => 'о старте бизнеса под брендом Mossebo у руководителя отдела франчайзинга', // Подзаголовок
            'feedback-form__text-description' => '', // Описание после полей
            'feedback-form__btn-value' => 'Узнать подробнее', // Описание после полей
          )); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Feauteres -->
<div class="feauteres container-fluid">
  <div class="row">
    <div class="feauteres__grid col-sm-4 col-12">
        <i class="feauteres__icon feauteres__icon_4"></i>
        <div class="feauteres__text">Работа только с прибыльными<br> заказами</div>
        <div class="feauteres__description">Вы работаете с клиентами изначально заинтересованными в создании дизайна интерьера, покупке дорогих материалов отделки и эксклюзивной мебели.</div>
    </div>
    <div class="feauteres__grid col-sm-4 col-12">
        <i class="feauteres__icon feauteres__icon_5"></i>
        <div class="feauteres__text">Не нужно заниматься рекламой<br> и поиском клиентов</div>
        <div class="feauteres__description">Mossebo создает и находит заявки на дизайн интерьера на собственных рекламных площадках</div>
    </div>
    <div class="feauteres__grid col-sm-4 col-12">
        <i class="feauteres__icon feauteres__icon_6"></i>
        <div class="feauteres__text">Нет зависимости от сезона<br> и кризиса</div>
        <div class="feauteres__description">Mossebo — единственная на рынке франшиза, гарантирующая клиентов по договору. Вы получаете их ежемесячно из управляющей компании в Санкт-Петербурге</div>
    </div>
  </div>
</div>

<!-- Map -->
<div class="franchise-page-map">
  <div class="container-fluid">
    <div class="franchise-title franchise-page-map__franchise-title">Mossebo в 35 городах</div>
  </div>
  <div class="franchise-page-map__info">
    <div class="franchise-page-map__info-inner">
      <div class="franchise-page-map__info-title">Mossebo в 35 городах</div>
      <div class="franchise-page-map__info-subtitle">Офисы Mossebo открыты уже в 19 городах, 14 в процессе запуска.</div>
      <div class="franchise-page-map__info-locations"><span class="text-primary">Россия:</span> Санкт-Петербург, Москва, Краснодар, Волгоград, Ульяновск, Тюмень, Челябинск, Самара, Ростов-на-Дону, Воронеж, Новосибирск, Владивосток, Иркутск, Орел, Новороссийск, Уссурийск, Калининград, Тула,  Уфа, Оренбург, Пенза</div>
      <div class="franchise-page-map__info-locations"><span class="text-primary">Мир:</span>  Бишкек, Минск</div>
    </div>
    <div class="franchise-page-map__btn"></div>
  </div>
  <div id="yandex-map-claster-office"></div>
</div>

<!-- Feauteres world -->
<div class="franchise-page-feauteres-world container-fluid">
  <div class="row">
    <div class="franchise-page-feauteres-world__grid col col-sm-4 col-12">
      <div class="franchise-page-feauteres-world__grid-title">Огромный охват</div>
      <div class="franchise-page-feauteres-world__grid-description">Крупнейшая компания по дизайну интерьера в России и СНГ</div>
    </div>
    <div class="franchise-page-feauteres-world__grid col col-sm-4 col-12">
      <div class="franchise-page-feauteres-world__grid-title">8 часовых поясов</div>
      <div class="franchise-page-feauteres-world__grid-description">Мы адаптируем работу call-центра и маркетинга для разных часовых поясов</div>
    </div>
    <div class="franchise-page-feauteres-world__grid col col-sm-4 col-12">
      <div class="franchise-page-feauteres-world__grid-title">Работаем в трёх культурах</div>
      <div class="franchise-page-feauteres-world__grid-description">Мы проверили бизнес в разных культурах, народах и этнических местностях</div>
    </div>
  </div>
</div>

<!-- Video carousel -->
<div class="video-carousel">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="franchise-title">Владельцы бизнеса по франшизе Mossebo</div>
      </div>
    </div>
  </div>
  <?php // Reviews video
  if (have_rows('franchise-page__reviews')): ?>
  	<div class="reviews-video container">
  		<div class="reviews-video__owl-wrapper row">
  			<div class="col-sm-10 offset-sm-1 col-12">
  				<div class="owl-carousel">
  					<!-- item's -->
  					<?php while (have_rows('franchise-page__reviews')): the_row(); ?>
  						<div class="reviews-video__item item">
  							<div class="youtube-player" data-youtube-player-src-img="<?php echo the_sub_field('franchise-page__reviews-img'); ?>" data-youtube-player-id="<?php echo the_sub_field('franchise-page__reviews-id'); ?>">
  								<div class="youtube-player__img-preview"></div>
  							</div>
  							<div class="reviews-video__item-title"><?php echo the_sub_field('franchise-page__reviews-name'); ?></div>
  						</div>
  					<?php endwhile; ?>
  				</div>
  			</div>
  			<!-- arrow -->
  			<div class="reviews-video__owl-arrow"></div>
  		</div>

  		<!-- pagination -->
  		<div class="reviews-video__pagination">
  			<!-- title -->
  			<div class="reviews-video__pagination-title">Видео-отзывы от франчайзи Mossebo</div>

  			<!-- pagination -->
  			<div class="row">
  				<?php
  				$carouselIndex = 0;
  				while (have_rows('franchise-page__reviews')): the_row(); ?>
  					<div class="reviews-video__pagination-grid col-md-4" data-carousel-index="<?php echo $carouselIndex; ?>">
  						<div class="reviews-video__pagination-preview" style="background-image: url(<?php echo the_sub_field('franchise-page__reviews-img'); ?>)"></div>
  						<div class="reviews-video__pagination-grid-title"><?php echo the_sub_field('franchise-page__reviews-name'); ?></div>
  						<div class="reviews-video__pagination-grid-description"><?php echo the_sub_field('franchise-page__reviews-description'); ?></div>
  					</div>
  				<?php
  				$carouselIndex++;
  				endwhile; ?>
  				<!-- btn more -->
  				<div class="reviews-video__pagination-more col-12">Показать больше отзывов</div>
  			</div>
  		</div>

  		<!-- Descritpion -->
  		<div class="reviews-video__article">
  			<div class="reviews-video__article-title">Отзывы о Mossebo говорят сами за себя</div>

  			<div class="reviews-video__article-text">Завоевать безупречную репутацию и доверие клиентов способна только компания, выполняющая свои обещания. Mossebo — одна из таких.</div>
  			<div class="reviews-video__article-text">Мы высоко подняли планку. Каждый проект Mossebo — это профессиональный подход к дизайну и ремонту интерьеров вкупе с безупречным сервисом. Это не просто слова, мы готовы доказать их на деле. Реальные отзывы о Mossebo говорят сами за себя. </div>
  		</div>
  	</div>
  <?php endif; ?>
</div>

<!-- call to action -->
<div class="franchise-call-to-action franchise-call-to-action_filials-bg container-fluid">
  <div class="franchise-call-to-action__title"><span class="text-primary">Больше</span> филиалов в городе —<br> <span class="text-primary">лучше</span> владельцу бизнеса и клиентам</div>
  <div class="franchise-call-to-action__description">Технология ведения бизнеса по франшизе Mossebo позволяет открывать несколько филиалов в одном городе</div>
  <button class="franchise-call-to-action__btn franchise-page-feedback-form-modal btn btn_1" type="button">Узнайте подробнее</button>
</div>

<!-- franchise pano -->
<div class="franchise-pano">
  <div class="container-fluid">
    <div class="franchise-pano__title">Офисы Mossebo в городах мира</div>
    <div class="franchise-pano__description">Все офисы Mossebo оформляются в едином стиле и оснащаются оборудованием и мебелью от проверенных поставщиков. У вас будет все необходимое для заключения сделок</div>
  </div>
  <div class="panorama" data-pano-mobile-src="<?php echo get_template_directory_uri(); ?>/assets/images/franchise/franchise-pano/__office_mobile.jpg">
    <div class="panorama-view">
      <div class="panorama-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/franchise/franchise-pano/__office.jpg" usemap="hotspots" data-width="2168" data-height="500" alt="Наши офисы" />
      </div>
    </div>
  </div>
</div>

<!-- your profit -->
<div class="franchise-your-profit container-fluid">
  <div class="franchise-your-profit__title">Прибыль от 1 500 000 рублей в месяц в любом городе</div>
  <div class="franchise-your-profit__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/franchise/franchise-your-profit__img/franchise-your-profit__img.svg" alt="Сколько вы будете зарабатывать"></div>
  <div class="franchise-your-profit__description">Это ваша ежемесячная прибыль через 1 год после запуска студии при условии соблюдения всех регламентов франшизы</div>
  <div class="franchise-your-profit__numbers">
    <span class="franchise-your-profit__numbers-inner">
      <span class="text-primary">* 22 455</span> EUR, <span class="text-primary">25 000</span> USD, <span class="text-primary">8 173 362</span> KZT, <span class="text-primary">650 561</span> UAH, <span class="text-primary">48 025</span> BYN
    </span>
  </div>
</div>

<!-- call to action -->
<div class="franchise-call-to-action franchise-call-to-action_business-plan-bg container-fluid">
  <div class="franchise-call-to-action__title">Получите план доходов-расходов на ваш город</div>
  <div class="franchise-call-to-action__description">Детальная модель расходов и доходов филиала Mossebo с учетом экономических и демографических данных вашего города</div>
  <button class="franchise-call-to-action__btn franchise-page-feedback-form-modal btn btn_1" type="button">Получить</button>
</div>

<!-- clients find us -->
<div class="clients-find-us container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="franchise-title clients-find-us__title-main">Как находим клиентов</div>
    </div>
  </div>
  <div class="row align-item-center">
    <div class="col-xl-4 offset-xl-1">
      <div class="row">
        <div class="clients-find-us__row col-12">
          <div class="clients-find-us__row-img_mobile"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/franchise/clients-find-us/__office/__office-1.jpg" alt="«Выращиваем» клиента"></div>
          <div class="clients-find-us__title"><span class="text-bold">«Выращиваем»</span> клиента</div>
          <div class="clients-find-us__description">Централизованно собираем запросы на дизайн интерьера с собственных площадок и онлайн рекламы</div>
        </div>
        <div class="clients-find-us__row col-12">
          <div class="clients-find-us__row-img_mobile"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/franchise/clients-find-us/__office/__office-2.jpg" alt="«Выращиваем» клиента"></div>
          <div class="clients-find-us__title"><span class="text-bold">«Прогреваем»</span> клиента</div>
          <div class="clients-find-us__description">Вы получаете целевую заявку на дизайн интерьера и готового к встрече в офисе клиента через CRM-систему</div>
        </div>
        <div class="clients-find-us__row col-12">
          <div class="clients-find-us__row-img_mobile"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/franchise/clients-find-us/__office/__office-3.jpg" alt="«Выращиваем» клиента"></div>
          <div class="clients-find-us__title"><span class="text-bold">«Передаём»</span> согласного на встречу клиента вам</div>
          <div class="clients-find-us__description">Вы получите не просто бренд пакет, а уже напечатанную и готовую для работы продукцию со знаком обслуживания Mossebo</div>
        </div>
      </div>
    </div>
    <div class="clients-find-us__img clients-find-us__img_pr-0 col-xl-7">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/franchise/clients-find-us/__office/__office.jpg" alt="Офис">
    </div>
  </div>
</div>

<!-- Bran style -->
<div class="franchise-brand-style">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <div class="franchise-title franchise-brand-style__main-title">Единый фирменный стиль по всему миру</div>
        <div class="franchise-brand-style__description">Каждая деталь фирменного стиля помогает в заключении сделок. Вы получите уже готовый и напечатанный бренд пакет сразу после обучения.</div>
        <div class="franchise-brand-style__img">
          <img class="franchise-brand-style__img_desctop" src="<?php echo get_template_directory_uri(); ?>/assets/images/franchise/franchise-brand-style/franchise-brand-style.png" alt="Единый фирменный стиль по всему миру">
          <img class="franchise-brand-style__img_mobile" src="<?php echo get_template_directory_uri(); ?>/assets/images/franchise/franchise-brand-style/franchise-brand-style_mobile.png" alt="Единый фирменный стиль по всему миру">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Superiority -->
<div class="franchise-superiority container-fluid">
  <!-- Number one -->
  <div class="franchise-superiority__numer-one">
    <div class="franchise-title franchise-superiority__main-title">Превосходство Mossebo над другими</div>
    <div class="row align-item-center">
      <div class="col-md-4 col-12 franchise-superiority__numer-one_col-1 text-right">
        <div class="franchise-superiority__numer-one-row">
          <div class="franchise-superiority__numer-one-row-title">Mеждународный лидер</div>
          <div class="franchise-superiority__numer-one-row-description">Единственная компания дизайна и ремонта с офисами в России и СНГ</div>
        </div>
        <div class="franchise-superiority__numer-one-row">
          <div class="franchise-superiority__numer-one-row-title">Нет сезонности</div>
          <div class="franchise-superiority__numer-one-row-description">Нет зависимости от сезонности и кризиса, даем заявки круглый год</div>
        </div>
        <div class="franchise-superiority__numer-one-row">
          <div class="franchise-superiority__numer-one-row-title">Прибыль от 1 500 000 рублей</div>
          <div class="franchise-superiority__numer-one-row-description">Франчайзи выходит на такую прибыль уже через 1 год работы</div>
        </div>
      </div>
      <div class="col-md-4 col-12 franchise-superiority__numer-one_col-2">
        <div class="franchise-superiority__number-one-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/franchise/franchise-superiority/franchise-superiority__number-one-img.jpg" alt="Превосходство Mossebo над другими">
        </div>
      </div>
      <div class="col-md-4 col-12 franchise-superiority__numer-one_col-3">
        <div class="franchise-superiority__numer-one-row">
          <div class="franchise-superiority__numer-one-row-title">Cоциальные сети</div>
          <div class="franchise-superiority__numer-one-row-description">Самые крупные среди конкурентов площадки в социальных сетях</div>
        </div>
        <div class="franchise-superiority__numer-one-row">
          <div class="franchise-superiority__numer-one-row-title">Поддержка 24/7</div>
          <div class="franchise-superiority__numer-one-row-description">Поддержка в продажах, юридическое и маркетинговое сопровождение</div>
        </div>
        <div class="franchise-superiority__numer-one-row">
          <div class="franchise-superiority__numer-one-row-title">Не берем процент от сделок</div>
          <div class="franchise-superiority__numer-one-row-description">Не ограничиваем рост филиала отчислениями со сделок</div>
        </div>
      </div>
    </div>
  </div>
  <!-- Start price -->
  <div class="franchise-superiority__start-price">
    <div class="franchise-title franchise-superiority__main-title">Пакеты франшизы Mossebo</div>
    <div class="row">
      <div class="franchise-superiority__start-price-col col-lg-4 col-md-4 col-sm-6">
        <div class="franchise-superiority__start-price-col-title">Конверсионная франшиза</div>
        <div class="franchise-superiority__start-price-col-price">350 000.-</div>
        <div class="franchise-superiority__start-price-col-description">обновите свою дизайн-студию до уровня международных стандартов Mossebo</div>
      </div>
      <div class="franchise-superiority__start-price-col col-lg-4 col-md-4 col-sm-6">
        <div class="franchise-superiority__start-price-col-title">Филиал</div>
        <div class="franchise-superiority__start-price-col-price">500 000.-</div>
        <div class="franchise-superiority__start-price-col-description">для открытия новой студии Mossebo</div>
      </div>
      <div class="franchise-superiority__start-price-col col-lg-4 col-md-4 col-sm-6">
        <div class="franchise-superiority__start-price-col-title">Эксклюзив</div>
        <div class="franchise-superiority__start-price-col-price"><span class="franchise-superiority__start-price-col-price_font-min">от</span>1 500 000.-</div>
        <div class="franchise-superiority__start-price-col-description">экскюзивные права в вашем городе или области</div>
      </div>
    </div>
  </div>
  <!-- Business-start -->
  <div class="franchise-superiority__business-start">
    <div class="franchise-title franchise-superiority__main-title">Запуск бизнеса по франшизе</div>
    <div class="row">
      <div class="franchise-superiority__business-start-col col-lg-4 col-md-4 col-sm-6">
        <div class="franchise-superiority__business-start-col-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/franchise/franchise-superiority/__business-start/1.svg" alt="Обучение в Санкт-Петербурге">
        </div>
        <div class="franchise-superiority__business-start-col-title"><span class="franchise-superiority__business-start-col-title-counter">1.</span>Обучение в Санкт-Петербурге</div>
        <ul class="franchise-superiority__business-start-col-list">
          <li>Билеты</li>
          <li>Проживание 5 дней 4 ночи</li>
          <li>Питание</li>
        </ul>
      </div>
      <div class="franchise-superiority__business-start-col col-lg-4 col-md-4 col-sm-6">
        <div class="franchise-superiority__business-start-col-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/franchise/franchise-superiority/__business-start/5.svg" alt="Офис">
        </div>
        <div class="franchise-superiority__business-start-col-title"><span class="franchise-superiority__business-start-col-title-counter">2.</span>Офис</div>
        <ul class="franchise-superiority__business-start-col-list">
          <li>Аренда офиса от 30 м2</li>
          <li>Мебель</li>
          <li>Оргтехника</li>
          <li>Расходные материалы</li>
        </ul>
      </div>
      <div class="franchise-superiority__business-start-col col-lg-4 col-md-4 col-sm-6">
        <div class="franchise-superiority__business-start-col-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/franchise/franchise-superiority/__business-start/2.svg" alt="Брендирование">
        </div>
        <div class="franchise-superiority__business-start-col-title"><span class="franchise-superiority__business-start-col-title-counter">3.</span> Брендирование</div>
        <ul class="franchise-superiority__business-start-col-list">
          <li>Ремонт офиса</li>
          <li>Оформление офиса</li>
          <li>Печатная продукция</li>
          <li>Документы и бланки</li>
        </ul>
      </div>
      <div class="franchise-superiority__business-start-col col-lg-4 col-md-4 col-sm-6">
        <div class="franchise-superiority__business-start-col-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/franchise/franchise-superiority/__business-start/4.svg" alt="Первичный рекламный взнос">
        </div>
        <div class="franchise-superiority__business-start-col-title"><span class="franchise-superiority__business-start-col-title-counter">4.</span>Первичный маркетинговый платеж</div>
        <ul class="franchise-superiority__business-start-col-list">
          <li>100 000 рублей (Направлен на привлечение клиентов, а также на повышение узнаваемости бренда Mossebo и создание органического спроса)</li>
        </ul>
      </div>
      <div class="franchise-superiority__business-start-col col-lg-4 col-md-4 col-sm-6">
        <div class="franchise-superiority__business-start-col-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/franchise/franchise-superiority/__business-start/3.svg" alt="Посещение объектов">
        </div>
        <div class="franchise-superiority__business-start-col-title"><span class="franchise-superiority__business-start-col-title-counter">5.</span>Найм дизайнеров</div>
        <ul class="franchise-superiority__business-start-col-list">
          <li>Расходы на рекрутинг</li>
          <li>Первичные выплаты</li>
          <li>Покупка софта</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Call to action -->
<div class="franchise-call-to-action franchise-call-to-action_skill-bg container-fluid">
  <div class="franchise-call-to-action__title">Не нужен опыт в сфере дизайна интерьера или ремонта</div>
  <div class="franchise-call-to-action__description">Mossebo — это бизнес для тех, кто хочет зарабатывать деньги, а не работать на стройке</div>
  <button class="franchise-call-to-action__btn franchise-page-feedback-form-modal btn btn_1" type="button">Присоединиться к mossebo</button>
</div>

<!-- Require -->
<div class="franchise-require container-fluid">
  <div class="franchise-title franchise-require__main-title">Требования к франчайзи</div>
  <div class="row">

    <div class="franchise-require__col col-sm-6 col-12">
      <div class="franchise-require__col-title">Желательно</div>
      <ul class="franchise-require__col-list">
        <li>Опыт в дизайне, архитектуре, строительстве и подобных сферах</li>
        <li>Опыт в бизнесе или большие достижения в продажах, наличие ИП</li>
        <li>Наличие знаний в области дизайна, закупок, материталов</li>
        <li>Связи и контакты с городскими контрагентами смежной тематики</li>
        <li>Наличие уже работающей студии дизайна или бизнеса по франшизе в другом напрвлении</li>
      </ul>
    </div>

    <div class="franchise-require__col col-sm-6 col-12">
      <div class="franchise-require__col-title franchise-require__col-title_pr">Обязательно</div>
      <ul class="franchise-require__col-list franchise-require__col-list_pr">
        <li>Способность обеспечивать бизнес финансированием на первых этапах в соответствии с технологией запуска</li>
        <li>Желание приумножать свои инвестиции</li>
        <li>Организаторские навыки, опыт или способности</li>
        <li>Общая адекватность, обязательность, способность обеспечивать системность развития бизнеса</li>
        <li>Обучаемость и заинтересованность в изучении бизнес-процессов</li>
        <li>Понимание, что бизнес по франшизе требует работы по инструкциям</li>
      </ul>
    </div>

  </div>
</div>

<!-- franchise pano -->
<div class="franchise-pano franchise-pano_bg-gray">
  <div class="franchise-pano__title">Портфолио Mossebo теперь ваше</div>
  <div class="franchise-pano__description">Потому что вы — лицо бренда Mossebo</div>
  <div class="panorama" data-pano-mobile-src="<?php echo get_template_directory_uri(); ?>/assets/images/franchise/franchise-pano/__portfolio_mobile.jpg">
    <div class="panorama-view">
      <div class="panorama-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/franchise/franchise-pano/__portfolio.jpg" usemap="hotspots" data-width="1887" data-height="600" alt="Наши офисы" />
      </div>
    </div>
  </div>
</div>

<!-- clients find us -->
<div class="clients-find-us container-fluid">
  <div class="row">
    <div class="col-12 text-center">
      <div class="franchise-title clients-find-us__title-main">Открыть бизнес под брендом Mossebo выгодно,<br> <span class="text-primary">потому что мы:</span></div>
    </div>
  </div>
  <div class="row align-item-center">
    <div class="clients-find-us__img clients-find-us__img_pr-0 clients-find-us__img_pl-0 col-xl-7">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/franchise/clients-find-us/__work/__work.jpg" alt="Открыть бизнес под брендом Mossebo выгодно, потому что мы:">
    </div>
    <div class="col-xl-4 offset-xl-1">
      <div class="row">
        <div class="clients-find-us__row col-12">
          <div class="clients-find-us__row-img_mobile"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/franchise/clients-find-us/__work/__work-1.jpg" alt="«Выращиваем» клиента"></div>
          <div class="clients-find-us__title clients-find-us__title_bold">Устранили сезонность</div>
          <div class="clients-find-us__description">Мы находим и передаем вам контакты клиентов каждый месяц, включая летний и зимний сезоны</div>
        </div>
        <div class="clients-find-us__row col-12">
          <div class="clients-find-us__row-img_mobile"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/franchise/clients-find-us/__work/__work-2.jpg" alt="«Выращиваем» клиента"></div>
          <div class="clients-find-us__title clients-find-us__title_bold">Снизили стартовые вложения</div>
          <div class="clients-find-us__description">Технология Mossebo позволяет заработать максимальную прибыль с инвестиций по сравнению с рынками общественного питания, одежды и детских товаров</div>
        </div>
        <div class="clients-find-us__row col-12">
          <div class="clients-find-us__row-img_mobile"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/franchise/clients-find-us/__work/__work-3.jpg" alt="«Выращиваем» клиента"></div>
          <div class="clients-find-us__title clients-find-us__title_bold">Не работаем в сегменте «эконом»</div>
          <div class="clients-find-us__description">В 2015 году в кризис на территории России введено в эксплуатацию рекордное число новостроек, в 2016 году заключено рекордное количество ДДУ. Среди этих людей мы найдем и передадим вам заказы среднего и VIP сегмента</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Write about us -->
<div class="write-about-us write-about-us_bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="section-title">О нас пишут</h2>
      </div>
    </div>
    <div class="write-about-us__row_ai-center row">
      <!-- Item's -->
      <div class="write-about-us__grid col-md col-6">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/main_page/abous_us_write/4.png" alt="РБК">
        <div class="write-about-us__grid-text">Рост компании отмечен премией «Бизнес-успех»</div>
      </div>
      <div class="write-about-us__grid col-md col-6">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/main_page/abous_us_write/2.png" alt="ТНТ">
        <div class="write-about-us__grid-text">Реклама Mossebo говорит голосом ТНТ</div>
      </div>
      <div class="write-about-us__grid col-md col-6">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/main_page/abous_us_write/1.png" alt="Капиталист">
        <div class="write-about-us__grid-text">Наивысшая оценка от ведущего бизнес журнала</div>
      </div>
      <div class="write-about-us__grid col-md col-6">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/main_page/abous_us_write/3.png" alt="Победитель народного голосования">
        <div class="write-about-us__grid-text">Победитель народного голосования</div>
      </div>
      <div class="write-about-us__grid col-md col-6">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/main_page/abous_us_write/5.png" alt="Проекты на ведущем портале о дизайне">
        <div class="write-about-us__grid-text">Проекты отмечены крупнейшим медиа о дизайне интерьера</div>
      </div>
      <div class="write-about-us__grid col-md col-6">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/main_page/abous_us_write/7.svg" alt="Лучшая компания России">
        <div class="write-about-us__grid-text">Премии «Лидер отрасли» и «Межрегиональное развитие»</div>
      </div>
      <div class="write-about-us__grid col-md col-6">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/main_page/abous_us_write/6.svg" alt="Лучшие световые решения для интерьера">
        <div class="write-about-us__grid-text">Лучшие световые решения для интерьеров</div>
      </div>
    </div>
  </div>
</div>

<!-- Franchise social carousel -->
<div class="franchise-social container-fluid">
  <div class="franchise-title franchise-social__title">4 500 000 человек в месяц</div>
  <div class="franchise-social__subtitle">cуммарный охват бренда Mossebo в социальных сетях</div>
  <div class="franchise-social__carousel owl-carousel">
    <!-- Inst -->
    <div class="item">
      <a href="https://www.instagram.com/remont.design/" target="_blank">
        <div class="franchise-social__carousel-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/social/inst.svg" alt="Inst">
        </div>
        <div class="franchise-social__carousel-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/franchise/franchise-social/__carousel-img/inst.jpg" alt="Inst">
        </div>
      </a>
    </div>
    <!-- FaceBook -->
    <div class="item">
      <a href="https://www.facebook.com/mossebodesign/" target="_blank">
        <div class="franchise-social__carousel-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/social/fb.svg" alt="facebook">
        </div>
        <div class="franchise-social__carousel-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/franchise/franchise-social/__carousel-img/fb.jpg" alt="Страница вк">
        </div>
      </a>
    </div>
    <!-- VK -->
    <div class="item">
      <a href="https://vk.com/design_mossebo" target="_blank">
        <div class="franchise-social__carousel-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/social/vk.svg" alt="vk">
        </div>
        <div class="franchise-social__carousel-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/franchise/franchise-social/__carousel-img/vk.jpg" alt="Vkontakte">
        </div>
      </a>
    </div>
    <!-- youtube -->
    <div class="item">
      <a href="https://www.youtube.com/channel/UCmYjYyeZDuFb9hOgEUNYJuQ/featured" target="_blank">
        <div class="franchise-social__carousel-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/social/youtube-logo.svg" alt="youtube">
        </div>
        <div class="franchise-social__carousel-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/franchise/franchise-social/__carousel-img/you.jpg" alt="YouTube">
        </div>
      </a>
    </div>
    <!-- OK -->
    <div class="item">
      <a href="https://ok.ru/group/53291776606394" target="_blank">
        <div class="franchise-social__carousel-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/social/odn.svg" alt="OK">
        </div>
        <div class="franchise-social__carousel-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/franchise/franchise-social/__carousel-img/ok.jpg" alt="OK">
        </div>
      </a>
    </div>
  </div>
</div>

<!-- Social rating -->
<div class="franchise-social-rating container-fluid">
  <div class="franchise-title franchise-social-rating__title">Рост аудитории Mossebo в соцсетях</div>
  <div class="row align-item-center">
    <div class="franchise-social-rating__rate col-sm-6">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/franchise/franchise-social-rating/rate.png" alt="График социальных сетей">
    </div>
    <div class="franchise-social-rating__info col-sm-4">
      <div class="franchise-social-rating__info-year">2019 год</div>
      <div class="franchise-social-rating__info-description">Поток аудиториии из новых каналов: TV и мессенджеров</div>
    </div>
  </div>
</div>

<!-- Seven step's -->
<div class="franchise-seven-steps container-fluid">
  <div class="franchise-title franchise-seven-steps__title">7 причин присоединиться к Mossebo:</div>
    <div class="franchise-seven-steps__row">
      <div class="row">
        <!-- Steps -->
        <div class="col-xl-7">
          <div class="row">
            <div class="col-xl-6 col-md-6">
              <div class="row">
                <div class="franchise-seven-steps__step col-12">
                  <div class="franchise-seven-steps__step-inner">
                    С самого старта работаете в компании лидере рынка
                    <div class="franchise-seven-steps__step-count">1</div>
                  </div>
                </div>
                <div class="franchise-seven-steps__step col-12">
                  <div class="franchise-seven-steps__step-inner">
                    Получайте помощь по всем вопросам при открытии от личного аккаунт менеджера
                    <div class="franchise-seven-steps__step-count">2</div>
                  </div>
                </div>
                <div class="franchise-seven-steps__step col-12">
                  <div class="franchise-seven-steps__step-inner">
                    Работайте с прибыльными сделками на дизайн интерьера и получайте три типа дохода
                    <div class="franchise-seven-steps__step-count">3</div>
                  </div>
                </div>
                <div class="franchise-seven-steps__step col-12">
                  <div class="franchise-seven-steps__step-inner">
                    Не думаете о рекламе и привлечении клиентов
                    <div class="franchise-seven-steps__step-count">4</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-md-6">
              <div class="row">
                <div class="franchise-seven-steps__step col-12">
                  <div class="franchise-seven-steps__step-inner">
                    Ведете до 30 параллельных сделок
                    <div class="franchise-seven-steps__step-count">5</div>
                  </div>
                </div>
                <div class="franchise-seven-steps__step col-12">
                  <div class="franchise-seven-steps__step-inner">
                    Не платите проценты с каждой сделки
                    <div class="franchise-seven-steps__step-count">6</div>
                  </div>
                </div>
                <div class="franchise-seven-steps__step col-12">
                  <div class="franchise-seven-steps__step-inner">
                    Получайте чистую прибыль от 1 500 000 рублей уже через год
                    <div class="franchise-seven-steps__step-count">7</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Feedback form -->
        <div class="col-xl-5 col-lg-8">
          <!-- Feedback form -->
          <?php feedback_form( array(
            'feedback-form__id' => 1, // Описание после полей
            'feedback-form__form-place' => 'Футер', // Имя формы
            'feedback-form__class' => 'franchise-seven-steps__feedback-form',
            'feedback-form__mail-input' => true, // Поле email
            'feedback-form__title' => 'Узнайте подробнее', // Заголовок
            'feedback-form__title-sub' => 'о старте бизнеса под брендом Mossebo у руководителя отдела франчайзинга', // Подзаголовок
            'feedback-form__text-description' => '', // Описание после полей
            'feedback-form__btn-value' => 'Получить', // Описание после полей
          )); ?>
        </div>
      </div>
    </div>
</div>

<?php get_footer(); ?>
