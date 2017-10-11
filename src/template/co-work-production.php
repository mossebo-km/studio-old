<?php
/**
 * Created by IntelliJ IDEA.
 * User: vladstarkovsky
 * Date: 11.10.2017
 * Time: 12:22
 * Template Name: Сотрудничество - Продакшен
 */

get_header();

?>

<!-- Feedback -->
<div class="co-work-production container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="row">

                <!-- Title -->
                <div class="col-12">
                    <h1 class="co-work-production__title">MOSSEBO<br>
                        Production</h1>
                </div>
                <div class="col-md-6 col-12">
                    <!-- Sub title -->
                    <h2 class="co-work-production__subtitle">Получайте новых клиентов через наши площадки</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">

                    <iframe class="co-work-production__iframe" width="100%" height="330"
                            src="https://www.youtube.com/embed/H469n3PCpYU" frameborder="0" allowfullscreen></iframe>

                    <strong class="co-work-production__lastvideo">Смотрите последний выпуск<br>
                        Хайпового бизнеса</strong>
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


<div class="co-work-production-about container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="row">
                <div class="col-md-6">
                    <strong class="co-work-production-about__title">Mossebo Production</strong>
                    <p class="co-work-production-about__subtitle">Production – подразделение бренда Mossebo,
                        компании лидера в сфере дизайна интерьера
                        c 40 студиями в России и СНГ.
                        Команда Mossebo обладает уникальным опытом
                        в упаковке франшиз.
                        <br><br>
                        Мы развиваем несколько медиа проектов,
                        на которых продвигаем собственный бизнес
                        на взрослую и платежеспособную аудиторию.</p>
                    <p class="co-work-production-about__p">На площадках Mossebo в Youtube, Instagram и ВК доступны
                        рекламные интеграции и прямая реклама для вашего бренда.</p>
                </div>
                <div class="col-md-6">

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section social's -->
<?php get_template_part('template/social_section'); ?>

<?php get_footer(); ?>
