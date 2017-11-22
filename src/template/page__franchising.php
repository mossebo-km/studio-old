<?php
/**
 * Created by IntelliJ IDEA.
 * User: vladstarkovsky
 * Date: 23.10.2017
 * Time: 16:39
 * Template Name: Страница - Франчайзинг
 */

get_header();

?>

<div class="page-franchising-main container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="row">

                <div class="col-12">
                    <h1 class="page-franchising-main__title">Франшиза №1 <br>по версии РБК</h1>
                </div>

                <div class="col-md-6 col-12">
                    <!-- Sub title -->
                    <h2 class="page-franchising-main__subtitle">Бизнес - студия по дизайну интерьера с гарантированным
                        клиентопотоком</h2>
                    <!-- YouTube player -->
                    <div class="youtube-player"
                         data-youtube-player-src-img="//mossebo.studio/wp-content/uploads/page__franchising/franchise-page-feedback__youtube-player-img-preview.jpg"
                         data-youtube-player-id="x6H4trs4yDc">
                        <div class="youtube-player__img-preview youtube-player__img-preview_theme-light"></div>
                    </div>
                    <!-- About us write -->
                    <div class="page-franchising-main__brands">
                        <img
                            src="//mossebo.studio/wp-content/uploads/page__franchising/icons/1.png"
                            class="icon__1"
                            alt="РБК">
                        <img
                            src="//mossebo.studio/wp-content/uploads/page__franchising/icons/2.png"
                            class="icon__2"
                            alt="Forbes">
                        <img
                            src="<?php echo THEME_DIR; ?>/assets/images/main_page/abous_us_write/7.svg"
                            class="icon__3"
                            alt="Лучшие световые решения для интерьера">
                        <img
                            src="//mossebo.studio/wp-content/uploads/page__franchising/icons/4.png"
                            class="icon__4"
                            alt="Transformator">
                        <img
                            src="//mossebo.studio/wp-content/uploads/page__franchising/icons/5.png"
                            class="icon__5"
                            alt="ТНТ">
                    </div>
                </div>
                <div class="col">
                    <!-- Feedback form -->
                    <?php feedback_form(array(
                        'feedback-form__id' => 1, // Описание после полей
                        'feedback-form__form-place' => 'Страница Франчайзинг Шапка', // Имя формы
                        'feedback-form__class' => '',
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
            <div class="feauteres__text">Только прибыльные заказы</div>
            <div class="feauteres__description">Вы работаете с клиентами изначально заинтересованными в создании дизайна
                интерьера, покупке дорогих материалов отделки и эксклюзивной мебели.
            </div>
        </div>
        <div class="feauteres__grid col-sm-4 col-12">
            <i class="feauteres__icon feauteres__icon_5"></i>
            <div class="feauteres__text">Не нужно заниматься поиском клиентов</div>
            <div class="feauteres__description">Mossebo создает и находит заявки на дизайн интерьера на собственных
                рекламных площадках
            </div>
        </div>
        <div class="feauteres__grid col-sm-4 col-12">
            <i class="feauteres__icon feauteres__icon_6"></i>
            <div class="feauteres__text">Нет зависимости от сезонности</div>
            <div class="feauteres__description">Mossebo — единственная на рынке франшиза, гарантирующая клиентов по
                договору. Вы получаете их ежемесячно из управляющей компании в Санкт-Петербурге
            </div>
        </div>
    </div>
</div>

<!-- Map -->
<div class="page-franchising-map">
    <div class="container-fluid">
        <div class="page-franchising-map__title">Mossebo в СНГ</div>
    </div>
    <div class="page-franchising-map__info">
        <div class="page-franchising-map__info-inner">
            <div class="page-franchising-map__info-title">Mossebo в СНГ</div>
            <div class="page-franchising-map__info-locations"><span class="text-primary">Россия:</span> Москва,
                Санкт-Петербург, Ростов-на-Дону, Краснодар, Казань, Сочи, Волгоград, Тюмень, Самара, Уссурийск,
                Оренбург, Тула, Уфа, Пенза, Иркутск, Магнитогорск, Рязань, Якутск
            </div>
            <div class="page-franchising-map__info-locations"><span class="text-primary">Киргизия:</span> Бишкек</div>
            <div class="page-franchising-map__info-locations"><span class="text-primary">Беларусь:</span> Минск</div>
            <div class="page-franchising-map__info-locations"><span class="text-primary">Узбекистан:</span> Ташкент
            </div>
            <div class="page-franchising-map__info-locations"><span class="text-primary">Казахстан:</span> Астана,
                Алма-Ата
            </div>
        </div>
        <div class="page-franchising-map__btn"></div>
    </div>
    <div id="yandex-map-claster-office"></div>
</div>


<!-- Feauteres world -->
<div class="page-franchising-world container-fluid">
    <div class="row">
        <div class="page-franchising-world__grid col col-sm-4 col-12">
            <div class="page-franchising-world__grid-title">Лидер отрасли</div>
            <div class="page-franchising-world__grid-description">Крупнейший бренд по дизайну интерьера в мире</div>
        </div>
        <div class="page-franchising-world__grid col col-sm-4 col-12">
            <div class="page-franchising-world__grid-title">8 часовых поясов</div>
            <div class="page-franchising-world__grid-description">Работа call-центра и маркетинга адаптирована для всех
                регионов
            </div>
        </div>
        <div class="page-franchising-world__grid col col-sm-4 col-12">
            <div class="page-franchising-world__grid-title">5 стран</div>
            <div class="page-franchising-world__grid-description">Международный статус открывает двери для любых
                поставщиков
            </div>
        </div>
    </div>
</div>

<!-- Video carousel -->
<div class="video-carousel page-franchising-reviews">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-franchising-reviews__title">Владельцы бизнеса по франшизе Mossebo</div>
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
                                <div class="youtube-player"
                                     data-youtube-player-src-img="<?php echo the_sub_field('franchise-page__reviews-img'); ?>"
                                     data-youtube-player-id="<?php echo the_sub_field('franchise-page__reviews-id'); ?>">
                                    <div class="youtube-player__img-preview"></div>
                                </div>
                                <div
                                    class="reviews-video__item-title"><?php echo the_sub_field('franchise-page__reviews-name'); ?></div>
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
                <div class="reviews-video__pagination-title">Интервью с франчайзи Mossebo</div>

                <!-- pagination -->
                <div class="row">
                    <?php
                    $carouselIndex = 0;
                    while (have_rows('franchise-page__reviews')): the_row(); ?>
                        <div class="reviews-video__pagination-grid col-md-4"
                             data-carousel-index="<?php echo $carouselIndex; ?>">
                            <div class="reviews-video__pagination-preview"
                                 style="background-image: url(<?php echo the_sub_field('franchise-page__reviews-img'); ?>)"></div>
                            <div
                                class="reviews-video__pagination-grid-title"><?php echo the_sub_field('franchise-page__reviews-name'); ?></div>
                            <div
                                class="reviews-video__pagination-grid-description"><?php echo the_sub_field('franchise-page__reviews-description'); ?></div>
                        </div>
                        <?php
                        $carouselIndex++;
                    endwhile; ?>
                    <!-- btn more -->
                    <div class="reviews-video__pagination-more col-12">Показать больше отзывов</div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

<!-- Leadform -->
<div class="page-franchising-leadform container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="row">
                <div class="col-md-6">
                    <strong class="page-franchising-leadform__title">Получите план прибыли/инвестиций</strong>
                    <strong class="page-franchising-leadform__subtitle">На основе фактических финансовых показателей
                        студий Mossebo за последние несколько лет.</strong>
                </div>
                <div class="col-md-6">
                    <!-- Feedback form -->
                    <?php feedback_form(array(
                        'feedback-form__id' => 1, // Описание после полей
                        'feedback-form__form-place' => 'Страница Франчайзинг - Получить план инвестиций', // Имя формы
                        'feedback-form__class' => '',
                        'feedback-form__mail-input' => true, // Поле email
                        'feedback-form__title' => 'Получите план прибыли/инвестиций', // Заголовок
                        'feedback-form__title-sub' => 'Важно: указывайте правильно номер телефона для связи с вами
', // Подзаголовок
                        'feedback-form__text-description' => '', // Описание после полей
                        'feedback-form__btn-value' => 'Получить план прибыли', // Описание после полей
                    )); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Offices Panorama -->
<div class="page-franchising-offices">
    <div class="container-fluid">
        <div class="page-franchising-offices__title">Оформление студий дизайна интерьера Mossebo</div>
        <div class="page-franchising-offices__description">Оснащение целиком приобретается в управляющей компании по
            методу «единого окна» с существенной экономией, в т.ч. на компьютерном оборудовании.
        </div>
    </div>
    <div class="panorama"
         data-pano-mobile-src="//mossebo.studio/wp-content/uploads/page__franchising/__office_mobile.jpg">
        <div class="panorama-view">
            <div class="panorama-container">
                <img src="//mossebo.studio/wp-content/uploads/page__franchising/__office.jpg"
                     usemap="hotspots" data-width="2168" data-height="500" alt="Оформление студий дизайна"/>
            </div>
        </div>
    </div>
</div>

<!-- your profit -->
<div class="page-franchising-profit container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="row align-item-center">
                <div class="col-md-6">
                    <div class="page-franchising-profit__img page-franchising-mobile_show">
                        <img
                            src="//mossebo.studio/wp-content/uploads/page__franchising/icons/franchise-your-profit__img.svg"
                            alt="Сколько вы будете зарабатывать">
                    </div>
                    <div class="page-franchising-profit__title">
                        <span class="text-primary">от</span>
                        1.500.000 р. прибыли в месяц чистыми
                    </div>
                    <div class="page-franchising-profit__numbers">
                        <div class="page-franchising-profit__numbers-inner">
                            <span class="text-primary">* 22 455</span> EUR, <span class="text-primary">25 000</span>
                            USD, <span
                                class="text-primary">8 173 362</span> KZT, <span class="text-primary">650 561</span>
                            UAH, <span
                                class="text-primary">48 025</span> BYN
                        </div>
                    </div>
                    <div class="page-franchising-profit__description">Ежемесячная прибыль каждой студии через 1,5 года
                        при соблюдении стандартов обслуживания в любом городе
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="page-franchising-profit__img page-franchising-mobile_hide">
                        <img
                            src="//mossebo.studio/wp-content/uploads/page__franchising/icons/franchise-your-profit__img.svg"
                            alt="Сколько вы будете зарабатывать">
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>


<!-- Portfolio Panorama -->
<div class="page-franchising-offices page-franchising-offices__bg-gray">
    <div class="page-franchising-offices__title">Портфолио дизайн-проектов Mossebo</div>
    <div class="page-franchising-offices__description">Пополняется каждую неделю.
        Предоставьте клиенту свободу принятия решения о стиле.
    </div>
    <div class="panorama"
         data-pano-mobile-src="//mossebo.studio/wp-content/uploads/page__franchising/__portfolio_mobile.jpg">
        <div class="panorama-view">
            <div class="panorama-container">
                <img src="//mossebo.studio/wp-content/uploads/page__franchising/__portfolio.jpg"
                     usemap="hotspots" data-width="3414" data-height="655" alt="Наши офисы"/>
            </div>
        </div>
    </div>
</div>

<!-- Atmosfera -->
<div class="co-work-production-about container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="row align-item-center">
                <div class="col-md-4">
                    <strong class="co-work-production-about__title">Студия Mossebo - атмосфера доверия и стиля</strong>
                    <p class="co-work-production-about__p">Каждый клиент открывается дизайнеру и рассказывает о своих
                        желаниях и предпочтениях. За счет статуса лидера отрасли бренду доверяют и клиенты премиум
                        класса.
                    </p>
                </div>
                <div class="col-md-8">
                    <img src="//mossebo.studio/wp-content/uploads/page__franchising/atmosfera.jpg" alt=""
                         class="co-work-production-about__photo">
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Bran style -->
<div class="page-franchising-style">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="page-franchising-style__title">Единый фирменный стиль по всему миру
                </div>
                <div class="page-franchising-style__description">Каждая деталь фирменного стиля важна. Готовый комплект
                    брендированной атрибутики заказывается в управляющей компании.
                </div>
                <div class="page-franchising-style__img">
                    <img class="page-franchising-style__img_desctop"
                         src="//mossebo.studio/wp-content/uploads/page__franchising/franchise-brand-style.png"
                         alt="Единый фирменный стиль по всему миру">
                    <img class="page-franchising-style__img_mobile"
                         src="//mossebo.studio/wp-content/uploads/page__franchising/franchise-brand-style_mobile.png"
                         alt="Единый фирменный стиль по всему миру">
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Seasons -->
<div class="co-work-production-about container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">

            <div class="row align-item-center">
                <div class="col-md-6">
                    <strong class="co-work-production-about__title">Mossebo не зависит от кризиса и сезонности</strong>
                    <p class="co-work-production-about__p">Mossebo - единственный бренд, не зависящий от сезонности<br><br>
                        Кризисы не влияют, т.к. нет эконом-аудитории, чувствительной к кризисам</>
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="//mossebo.studio/wp-content/uploads/page__franchising/seasons.svg" alt=""
                         class="co-work-production-about__photo">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Price -->
<div class="page-franchising-price container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="page-franchising-price__title">Получение права открытия студии Mossebo <br>(вступительный взнос)
            </div>
            <div class="row align-item-center">
                <div class="col-md-4">
                    <div class="page-franchising-price__name">Конверсионная лицензия (ребрендинг вашей студии дизайна)
                    </div>
                    <div class="page-franchising-price__bigprice">от 350 000.-</div>
                    <div class="page-franchising-price__description">*для действующих студий, которые нуждаются
                        в кратном увеличении клиентопотока
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="page-franchising-price__name">Лицензия «Стандарт» на открытие одной студии</div>
                    <div class="page-franchising-price__bigprice">от 500 000.-</div>
                    <div class="page-franchising-price__description">*для открытия с нуля студии дизайна
                        интерьера под брендом лидера отрасли
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="page-franchising-price__name">Эксклюзивное право на развитие бренда в городе</div>
                    <div class="page-franchising-price__bigprice">от 1 500 000.-</div>
                    <div class="page-franchising-price__description">*права на всю прибыль новых студий
                        города, которые будут открыты вами
                    </div>
                </div>
            </div>
            <div class="page-franchising-price__subtitle_gray">*цены указаны в рублях РФ</div>
            <div class="page-franchising-price__subtitle">** Подробности об открытии бизнеса по дизайну интерьера и
                ремонту объяснит специалист по франчайзингу Mossebo
            </div>
        </div>
    </div>
</div>


<!-- call to action -->
<div class="page-franchising-call-to-action container-fluid"
     style="background-image: url(//mossebo.studio/wp-content/uploads/page__franchising/call-to-action.jpg);">
    <div class="page-franchising-call-to-action__title">Получите презентацию и пояснения о бизнесе Mossebo по дизайну
        интерьеров
    </div>
    <button class="page-franchising-call-to-action__btn btn btn_1" type="button">Получить</button>
</div>


<div class="page-franchising-musthave container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="page-franchising-musthave__title">Требования к франчайзи</div>
            <div class="row">
                <div class="col-md-6 page-franchising-musthave__have">
                            <strong>Обязательно</strong>
                            <img src="//mossebo.studio/wp-content/uploads/page__franchising/finger_up.svg" alt="">
                            <ul>
                                <li>Способность обеспечивать бизнес финансированием в соответствии с технологией</li>
                                <li>Способность обеспечивать системность развития бизнеса</li>
                                <li>Способность изучить и передать исполнителям бизнес-процессы</li>
                                <li>Понимание, что бизнес по франшизе требует работы по инструкциям и их соблюдения на 100%</li>
                            </ul>
                </div>
                <div class="col-md-6 page-franchising-musthave__need">
                            <strong>Желательно</strong>
                            <img src="//mossebo.studio/wp-content/uploads/page__franchising/ok_icon.svg" alt="">
                            <ul>
                                <li>Опыт в бизнесе, управлении, администрировании и менеджменте</li>
                                <li>Достижения в переговорах, продажах услуг</li>
                                <li>Связи и/или контакты с поставщиками местного значения</li>
                                <li>Опыт ведения бизнеса по франшизам более низкого класса</li>
                            </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- clients find us -->
<div class="page-franchising-find-us container-fluid">
    <div class="row align-item-center">
        <div class="col-xl-4 offset-xl-1">
            <div class="page-franchising-find-us__img page-franchising-mobile_show">
                <img src="//mossebo.studio/wp-content/uploads/page__franchising/education.jpg"
                     alt="Офис">
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="page-franchising-find-us__title-main">Обучение франчайзи</div>
                    <div class="page-franchising-find-us__description-main">Обучение проходит в Санкт-Петербурге. Вы получите всю информацию в нужной форме и сможете запустить студию в работу</div>
                    <div class="page-franchising-find-us__title">День 1</div>
                    <div class="page-franchising-find-us__description">- Как оказывать сервис</div>
                    <div class="page-franchising-find-us__description">- Технология продажи услуг дизайна</div>
                    <div class="page-franchising-find-us__description">- Работа с большими финансовыми потоками</div>
                </div>
                <div class="col-12">
                    <div class="page-franchising-find-us__title">День 2</div>
                    <div class="page-franchising-find-us__description">- Технология контроля качества и исполнения заказов</div>
                    <div class="page-franchising-find-us__description">- Как вести бизнес-процессы и нанимать исполнителей</div>
                    <div class="page-franchising-find-us__description">- Взаимодействие с управляющей компанией и партнерами</div>
                </div>
            </div>
        </div>
        <div class="page-franchising-find-us__img col-xl-7 page-franchising-mobile_hide">
            <img src="//mossebo.studio/wp-content/uploads/page__franchising/education.jpg"
                 alt="Офис">
        </div>
    </div>
</div>


<div class="co-work-production-projects container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="title">Медиа-проекты Mossebo</div>
        </div>
    </div>
    <div id="productionmedia">
        <carousel-3d
            :controls-visible="true"
            :controls-prev-html="'&#10092;'"
            :controls-next-html="'&#10093;'"
            :perspective="35"
            :space="400"
            :display="3"
            :border="0"
            :autoplay="true"
            :autoplay-timeout="6000"
            :autoplay-hover-pause="true"
            width="900px"
            height="800px"
        >
            <slide :index="0">
                <div class="slide-block">
                    <div class="logo">
                        <img src="//mossebo.studio/wp-content/uploads/page__co-work-production/1-logo.png" alt="">
                    </div>
                    <div class="decription">
                        Хайповый бизнес – канал бизнес-интервью с известными и интересными людьми. Бизнесмены, top-менеджеры международных и российских компаний, звезды спорта и шоу-бизнеса – все они есть в выпусках на канале.
                    </div>
                </div>
                <img src="//mossebo.studio/wp-content/uploads/page__co-work-production/1.jpg" class="slide-image">
            </slide>
            <slide :index="1">
                <div class="slide-block">
                    <div class="logo">
                        <img src="//mossebo.studio/wp-content/uploads/page__co-work-production/2-logo.png" alt="">
                    </div>
                    <div class="decription">
                        Канал о дизайне интерьера с элементами fashion, beauty и lifestyle.
                        Ведущая канала и первый в России IKEA-art блогер - Liza Loft.
                    </div>
                </div>
                <img src="//mossebo.studio/wp-content/uploads/page__co-work-production/2.jpg" class="slide-image">
            </slide>
            <slide :index="2">
                <div class="slide-block">
                    <div class="logo">
                        <img src="//mossebo.studio/wp-content/uploads/page__co-work-production/3-logo.png" alt="">
                    </div>
                    <div class="decription">
                        Канал об идеях для бизнеса для предпринимателей и инвесторов.
                    </div>
                </div>
                <img src="//mossebo.studio/wp-content/uploads/page__co-work-production/3.jpg" class="slide-image">
            </slide>
        </carousel-3d>
    </div>
</div>

<div class="co-work-production-friends container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <strong class="co-work-production-pay__title">Наши друзья</strong>
            <div class="row">
                <div class="col-sm-4">
                    <img src="//mossebo.studio/wp-content/uploads/page__co-work-production/friends/1.jpg" alt="">
                    <strong>Вячеслав Малафеев</strong>
                    <p>Российский футболист, владелец агентства недвижимости "М16"</p>
                </div>
                <div class="col-sm-4">
                    <img src="//mossebo.studio/wp-content/uploads/page__co-work-production/friends/2.jpg" alt="">
                    <strong>Руслан Татунашвили</strong>
                    <p>Основатель крупнейшего сервиса коллтрекинга Callbackhunter</p>
                </div>
                <div class="col-sm-4">
                    <img src="//mossebo.studio/wp-content/uploads/page__co-work-production/friends/3.jpg" alt="">
                    <strong>Дмитрий Портнягин</strong>
                    <p>Топ 1 бизнес-блогер в Youtube, создатель канала Трансформатор, основатель экспортно-импортной компании TRANSITplus</p>
                </div>
                <div class="col-sm-4">
                    <img src="//mossebo.studio/wp-content/uploads/page__co-work-production/friends/4.jpg" alt="">
                    <strong>Евгений Гаврилин</strong>
                    <p>Сооснователь boomstarter.ru, MediaToday, и YouTube канала Жизнь Би</p>
                </div>
                <div class="col-sm-4">
                    <img src="//mossebo.studio/wp-content/uploads/page__co-work-production/friends/5.jpg" alt="">
                    <strong>Ольга Блудовская</strong>
                    <p>Президент компании "Subway Россия"</p>
                </div>
                <div class="col-sm-4">
                    <img src="//mossebo.studio/wp-content/uploads/page__co-work-production/friends/6.jpg" alt="">
                    <strong>Артемий Пономарев</strong>
                    <p>Директор по направлению смартфонов в компании Yota</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="co-work-production-brands container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="row">
                <div class="co-work-production-brands__title">Mossebo в медиа и СМИ</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="row co-work-production-brands__icons">
                <div class="col-4 col-md-2">
                    <img src="//mossebo.studio/wp-content/uploads/page__franchising/icons/brands/1.png"
                         alt="РБК">
                </div>
                <div class="col-4 col-md-3">
                    <img src="//mossebo.studio/wp-content/uploads/page__franchising/icons/brands/2.png"
                         alt="Forbes">
                </div>
                <div class="col-4 col-md-2">
                    <img src="//mossebo.studio/wp-content/uploads/page__franchising/icons/brands/3.png"
                         alt="Капиталист">
                </div>
                <div class="col-4 col-md-3">
                    <img src="//mossebo.studio/wp-content/uploads/page__franchising/icons/brands/4.png"
                         alt="ТНТ">
                </div>
                <div class="col-4 col-md-2">
                    <img src="//mossebo.studio/wp-content/uploads/page__franchising/icons/brands/5.png"
                         alt="Трансформатор">
                </div>
                <div class="col-4 col-md-2">
                    <img src="//mossebo.studio/wp-content/uploads/page__franchising/icons/brands/6.png"
                         alt="Лучшая компания россии">
                </div>
                <div class="col-4 col-md-3">
                    <img src="//mossebo.studio/wp-content/uploads/page__franchising/icons/brands/7.png"
                         alt="Аргументы и факты">
                </div>
                <div class="col-4 col-md-2">
                    <img src="//mossebo.studio/wp-content/uploads/page__franchising/icons/brands/8.png"
                         alt="MyHome">
                </div>
                <div class="col-4 col-md-3">
                    <img src="//mossebo.studio/wp-content/uploads/page__franchising/icons/brands/9.png"
                         alt="NOVATE">
                </div>
                <div class="col-4 col-md-2">
                    <img src="//mossebo.studio/wp-content/uploads/page__franchising/icons/brands/10.png"
                         alt="houzz">
                </div>
            </div>
        </div>
    </div>
</div>



<div class="page-franchising-social container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="page-franchising-social__title">4 500 000 касаний с аудиторией в неделю</div>
            <div class="page-franchising-social__description">Статьи, видео, лайки, репосты, комментарии, звонки, встречи, дизайн-проекты, презентации, трансляции и т.п.<br><br>
                Все это - работа Mossebo в социальных сетях </div>
        </div>
    </div>
    <div id="page-franchising-social">
        <carousel-3d
            :controls-visible="true"
            :controls-prev-html="'&#10092;'"
            :controls-next-html="'&#10093;'"
            :perspective="35"
            :space="400"
            :display="7"
            :border="0"
            :autoplay="true"
            :autoplay-timeout="6000"
            :autoplay-hover-pause="true"
            width="514px"
            height="564px"
        >
            <slide :index="0">
                <div class="page-franchising-social__slide-block">
                    <div class="page-franchising-social__logo">
                        <img src="//mossebo.studio/wp-content/themes/mossebo/assets/images/icon/social/inst.svg" alt="">
                    </div>
                    <div class="page-franchising-social__slide-decription">
                        Mossebo в Instagram
                    </div>
                </div>
                <img src="//mossebo.studio/wp-content/uploads/page__franchising/social/1.png" class="page-franchising-social__slide-image">
            </slide>
            <slide :index="1">
                <div class="page-franchising-social__slide-block">
                    <div class="page-franchising-social__logo">
                        <img src="//mossebo.studio/wp-content/themes/mossebo/assets/images/icon/social/youtube-logo.svg" alt="">
                    </div>
                    <div class="page-franchising-social__slide-decription">
                        Mossebo в YouTube
                    </div>
                </div>
                <img src="//mossebo.studio/wp-content/uploads/page__franchising/social/2.png" class="page-franchising-social__slide-image">
            </slide>
            <slide :index="2">
                <div class="page-franchising-social__slide-block">
                    <div class="page-franchising-social__logo">
                        <img src="//mossebo.studio/wp-content/themes/mossebo/assets/images/icon/social/telegram.svg" alt="">
                    </div>
                    <div class="page-franchising-social__slide-decription">
                        Mossebo в Telegram
                    </div>
                </div>
                <img src="//mossebo.studio/wp-content/uploads/page__franchising/social/3.png" class="page-franchising-social__slide-image">
            </slide>
            <slide :index="3">
                <div class="page-franchising-social__slide-block">
                    <div class="page-franchising-social__logo">
                        <img src="//mossebo.studio/wp-content/themes/mossebo/assets/images/icon/social/inst.svg" alt="">
                    </div>
                    <div class="page-franchising-social__slide-decription">
                        Mossebo в Instagram
                    </div>
                </div>
                <img src="//mossebo.studio/wp-content/uploads/page__franchising/social/4.png" class="page-franchising-social__slide-image">
            </slide>
            <slide :index="4">
                <div class="page-franchising-social__slide-block">
                    <div class="page-franchising-social__logo">
                        <img src="//mossebo.studio/wp-content/themes/mossebo/assets/images/icon/social/youtube-logo.svg" alt="">
                    </div>
                    <div class="page-franchising-social__slide-decription">
                        Mossebo в YouTube
                    </div>
                </div>
                <img src="//mossebo.studio/wp-content/uploads/page__franchising/social/5.png" class="page-franchising-social__slide-image">
            </slide>
            <slide :index="5">
                <div class="page-franchising-social__slide-block">
                    <div class="page-franchising-social__logo">
                        <img src="//mossebo.studio/wp-content/themes/mossebo/assets/images/icon/social/vk.svg" alt="">
                    </div>
                    <div class="page-franchising-social__slide-decription">
                        Mossebo в Вконтакте
                    </div>
                </div>
                <img src="//mossebo.studio/wp-content/uploads/page__franchising/social/6.png" class="page-franchising-social__slide-image">
            </slide>
            <slide :index="6">
                <div class="page-franchising-social__slide-block">
                    <div class="page-franchising-social__logo">
                        <img src="//mossebo.studio/wp-content/themes/mossebo/assets/images/icon/social/inst.svg" alt="">
                    </div>
                    <div class="page-franchising-social__slide-decription">
                        Mossebo в Instagram
                    </div>
                </div>
                <img src="//mossebo.studio/wp-content/uploads/page__franchising/social/7.png" class="page-franchising-social__slide-image">
            </slide>
            <slide :index="7">
                <div class="page-franchising-social__slide-block">
                    <div class="page-franchising-social__logo">
                        <img src="//mossebo.studio/wp-content/themes/mossebo/assets/images/icon/social/youtube-logo.svg" alt="">
                    </div>
                    <div class="page-franchising-social__slide-decription">
                        Mossebo в YouTube
                    </div>
                </div>
                <img src="//mossebo.studio/wp-content/uploads/page__franchising/social/8.png" class="page-franchising-social__slide-image">
            </slide>
            <slide :index="8">
                <div class="page-franchising-social__slide-block">
                    <div class="page-franchising-social__logo">
                        <img src="//mossebo.studio/wp-content/themes/mossebo/assets/images/icon/social/odn.svg" alt="">
                    </div>
                    <div class="page-franchising-social__slide-decription">
                        Mossebo в Одноклассниках
                    </div>
                </div>
                <img src="//mossebo.studio/wp-content/uploads/page__franchising/social/9.png" class="page-franchising-social__slide-image">
            </slide>
        </carousel-3d>
    </div>
</div>



<div class="page-franchising-auditory container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="page-franchising-auditory__title">Охват Mossebo с каждым годом повышается <br>в 2,5 - 3 раза
            </div>
            <div class="row align-item-center">
                <div class="col-md-8">
                    <img src="//mossebo.studio/wp-content/uploads/page__franchising/graph.png" alt="">
                </div>
                <div class="col-md-4">
                    <div class="page-franchising-auditory__info_year">2018 год</div>
                    <div class="page-franchising-auditory__info_desc">Поток аудиториии из новых каналов: видеоплатформы и мессенджеры
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Leadform2 -->
<div class="page-franchising-leadform2 container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="row">
                <div class="col-md-8">
                    <div class="page-franchising-leadform2__title">Важное <br>о Mossebo:</div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="page-franchising-leadform2__list-item">
                                <strong>1.</strong>
                                РБК признал Mossebo лидером отрасли по дизайну интерьера
                            </div>
                            <div class="page-franchising-leadform2__list-item">
                                <strong>2.</strong>
                                Ошибки в бизнесе исключены, т.к.
                                поддержка франчайзи - не лимитируется
                            </div>
                            <div class="page-franchising-leadform2__list-item">
                                <strong>3.</strong>
                                Прибыль с любого объекта достигается всегда за счет комплексности заказа
                            </div>
                            <div class="page-franchising-leadform2__list-item">
                                <strong>4.</strong>
                                Моссэбо обладает технологией работы с более чем 30 заказами одновременно
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="page-franchising-leadform2__list-item">
                                <strong>5.</strong>
                                Управляющая компания берет фиксированные платежи со студий
                            </div>
                            <div class="page-franchising-leadform2__list-item">
                                <strong>6.</strong>
                                99% клиентов каждой студии Mossebo передаются напрямую из управляющей компании
                            </div>
                            <div class="page-franchising-leadform2__list-item">
                                <strong>7.</strong>
                                Статус лидера отрасли позволяет получать большие скидки от поставщиков, которые понимают/знают возможности студий Mossebo
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- Feedback form -->
                    <?php feedback_form(array(
                        'feedback-form__id' => 1, // Описание после полей
                        'feedback-form__form-place' => 'Страница Франчайзинг Футер', // Имя формы
                        'feedback-form__class' => '',
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

<script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = 'https://vk.com/rtrg?p=VK-RTRG-187930-ckqja';</script>

<?php get_footer(); ?>
