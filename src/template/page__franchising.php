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
                         data-youtube-player-src-img="<?php echo THEME_DIR; ?>/assets/images/franchise/frachise-page-feedback/__youtube-player/franchise-page-feedback__youtube-player-img-preview.jpg"
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
                    <div class="page-franchising-profit__img">
                        <img
                            src="<?php echo THEME_DIR; ?>/assets/images/franchise/franchise-your-profit__img/franchise-your-profit__img.svg"
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
        Предоставьте клиенту свободу принятия решения о стиле.</div>
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
                    <p class="co-work-production-about__p">Каждый клиент открывается дизайнеру и рассказывает о своих желаниях и предпочтениях. За счет статуса лидера отрасли бренду доверяют и клиенты премиум класса.
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
                <div class="page-franchising-style__description">Каждая деталь фирменного стиля важна. Готовый комплект брендированной атрибутики заказывается в управляющей компании.
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
                    <p class="co-work-production-about__strong">Mossebo - единственный бренд, не зависящий от сезонности<br><br>
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
            <div class="page-franchising-price__title">Получение права открытия студии Mossebo (вступительный взнос)</div>
            <div class="row align-item-center">
                <div class="col-md-4">
                    <div class="page-franchising-price__name">Конверсионная лицензия (ребрендинг вашей студии дизайна)</div>
                    <div class="page-franchising-price__bigprice">от 350 000.-</div>
                    <div class="page-franchising-price__description">*для действующих студий, которые нуждаются
                        в кратном увеличении клиентопотока</div>
                </div>
                <div class="col-md-4">
                    <div class="page-franchising-price__name">Лицензия «Стандарт» на открытие одной студии</div>
                    <div class="page-franchising-price__bigprice">от 500 000.-</div>
                    <div class="page-franchising-price__description">*для открытия с нуля студии дизайна
                        интерьера под брендом лидера отрасли</div>
                </div>
                <div class="col-md-4">
                    <div class="page-franchising-price__name">Эксклюзивное право на развитие бренда в городе</div>
                    <div class="page-franchising-price__bigprice">от 1 500 000.-</div>
                    <div class="page-franchising-price__description">*права на всю прибыль новых студий
                        города, которые будут открыты вами</div>
                </div>
            </div>
            <div class="page-franchising-price__subtitle_gray">*цены указаны в рублях РФ</div>
            <div class="page-franchising-price__subtitle">** Подробности об открытии бизнеса по дизайну интерьера и ремонту объяснит специалист по франчайзингу Mossebo</div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
