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
                    <h1 class="page-franchising-main__title">Франшиза №1 по версии<br> РБК</h1>
                </div>

                <div class="col-md-6 col-12">
                    <!-- Sub title -->
                    <h2 class="page-franchising-main__subtitle">Бизнес по дизайну интерьера с гарантией входящих
                        заявок</h2>
                    <!-- YouTube player -->
                    <div class="youtube-player"
                         data-youtube-player-src-img="<?php echo THEME_DIR; ?>/assets/images/franchise/frachise-page-feedback/__youtube-player/franchise-page-feedback__youtube-player-img-preview.jpg"
                         data-youtube-player-id="x6H4trs4yDc">
                        <div class="youtube-player__img-preview youtube-player__img-preview_theme-light"></div>
                    </div>
                    <!-- About us write -->
                    <div class="page-franchising__brands">
                        <div class="row">
                            <div class="col">
                                <img
                                    src="<?php echo THEME_DIR; ?>/assets/images/franchise/frachise-page-feedback/__about-us-write/franchise-page-feedback__about-us-write-img-1.png"
                                    alt="РБК">
                            </div>
                            <div class="col">
                                <img
                                    src="<?php echo THEME_DIR; ?>/assets/images/franchise/frachise-page-feedback/__about-us-write/franchise-page-feedback__about-us-write-img-2.png"
                                    alt="ТНТ">
                            </div>
                            <div class="col">
                                <img src="<?php echo THEME_DIR; ?>/assets/images/main_page/abous_us_write/7.svg"
                                     alt="Лучшие световые решения для интерьера">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <!-- Feedback form -->
                    <?php feedback_form(array(
                        'feedback-form__id' => 1, // Описание после полей
                        'feedback-form__form-place' => 'Страница Франчайзинг', // Имя формы
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

<?php get_footer(); ?>
