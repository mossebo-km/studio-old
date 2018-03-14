<?php
/**
 * Created by IntelliJ IDEA.
 * User: vladstarkovsky
 * Date: 11.10.2017
 * Time: 12:22
 * Template Name: Страница - Все вакансии - Дизайнер Интерьера
 */

get_header();

?>

<!-- Feedback -->
<div class="page-vacant-designer-interiera__header container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="row">

                <!-- Title -->
                <div class="col-12">
                    <div class="page-vacant-designer-interiera__header__smalltitle">Вакансия</div>
                    <h1 class="page-vacant-designer-interiera__header__title">Дизайнер интерьеров</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7 col-12">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <span class="page-vacant-designer-interiera__header_list_name">Уровень зарплаты</span>
                            <span class="page-vacant-designer-interiera__header_list_value">з/п не указана</span>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <span class="page-vacant-designer-interiera__header_list_name">Город</span>
                            <span class="page-vacant-designer-interiera__header_list_value">Все города</span>
                        </div>
                        <div class="col-md-5 col-sm-12">
                            <span class="page-vacant-designer-interiera__header_list_name">Требуемый опыт работы</span>
                            <span class="page-vacant-designer-interiera__header_list_value">от 3-х лет</span>
                        </div>
                    </div>

                    <div class="youtube-player"
                         data-youtube-player-src-img="//mossebo.studio/wp-content/uploads/Oblozhka-SubwayMossebo_2.jpg"
                         data-youtube-player-id="H469n3PCpYU">
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
                    <!-- feedback-form block -->
                    <?php get_template_part('/template/vacancies/vacancies-feedback'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-vacant-designer-interiera__feauteres container-fluid">
    <div class="row">
        <div class="col-md-4 col-sm-12">
            <img src="/wp-content/themes/mossebo/assets/images/vacancies/designer-interiera/f-1.png" alt="">
            <div class="page-vacant-designer-interiera__feauteres__name">Обустроенный<br>офис</div>
        </div>
        <div class="col-md-4 col-sm-12">
            <img src="/wp-content/themes/mossebo/assets/images/vacancies/designer-interiera/f-2.png" alt="">
            <div class="page-vacant-designer-interiera__feauteres__name">Конкурентноспособная<br>зарплата</div>
        </div>
        <div class="col-md-4 col-sm-12">
            <img src="/wp-content/themes/mossebo/assets/images/vacancies/designer-interiera/f-3.png" alt="">
            <div class="page-vacant-designer-interiera__feauteres__name">Интересные<br>проекты</div>
        </div>
    </div>
</div>

<div class="co-work-production-leadform2 container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="row">
                <div class="col-md-6">
                    <strong class="co-work-production-leadform2__title">Получите подробную
                        презентацию
                        о наших медиа</strong>
                </div>
                <div class="col-md-6">
                    <!-- Feedback form -->
                    <?php feedback_form(array(
                        'feedback-form__id' => 5, // Описание после полей
                        'feedback-form__form-place' => 'Страница продакшн', // Имя формы
                        'feedback-form__class' => 'franchise-page-feedback__feedback-form',
                        'feedback-form__mail-input' => true, // Поле email
                        'feedback-form__title' => 'Получите медиа-кит', // Заголовок
                        'feedback-form__title-sub' => 'с ценами и рекламными возможностями на площадках Mossebo', // Подзаголовок
                        'feedback-form__text-description' => '', // Описание после полей
                        'feedback-form__btn-value' => 'Получить', // Описание после полей
                    )); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
