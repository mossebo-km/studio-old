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
            <div class="page-franchising-map__info-locations"><span class="text-primary">Россия:</span> Москва, Санкт-Петербург, Ростов-на-Дону, Краснодар, Казань, Сочи, Волгоград, Тюмень, Самара, Уссурийск, Оренбург, Тула, Уфа, Пенза, Иркутск, Магнитогорск, Рязань, Якутск
            </div>
            <div class="page-franchising-map__info-locations"><span class="text-primary">Киргизия:</span> Бишкек</div>
            <div class="page-franchising-map__info-locations"><span class="text-primary">Беларусь:</span> Минск</div>
            <div class="page-franchising-map__info-locations"><span class="text-primary">Узбекистан:</span> Ташкент</div>
            <div class="page-franchising-map__info-locations"><span class="text-primary">Казахстан:</span> Астана, Алма-Ата</div>
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
            <div class="page-franchising-world__grid-description">Работа call-центра и маркетинга адаптирована для всех регионов</div>
        </div>
        <div class="page-franchising-world__grid col col-sm-4 col-12">
            <div class="page-franchising-world__grid-title">5 стран</div>
            <div class="page-franchising-world__grid-description">Международный статус открывает двери для любых поставщиков</div>
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
                <div class="reviews-video__pagination-title">Видео-отзывы от франчайзи Mossebo</div>

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


<div class="page-franchising-leadform container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="row">
                <div class="col-md-6">
                    <strong class="page-franchising-leadform__title">Получите план прибыли/инвестиций</strong>
                    <strong class="page-franchising-leadform__subtitle">На основе фактических финансовых показателей студий Mossebo за последние несколько лет.</strong>
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

<!-- franchise Offices -->
<div class="page-franchising-offices">
    <div class="container-fluid">
        <div class="page-franchising-offices__title">Оформление студий дизайна интерьера Mossebo</div>
        <div class="page-franchising-offices__description">Оснащение целиком приобретается в управляющей компании по методу «единого окна» с существенной экономией, в т.ч. на компьютерном оборудовании.
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

<?php get_footer(); ?>
