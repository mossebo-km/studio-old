<?php
/**
 * Created by IntelliJ IDEA.
 * User: admin
 * Date: 31.08.17
 * Time: 11:31
 * Template Name: Сотрудничество - Поставщики
 */

get_header();

?>


<!-- Feedback -->
<div class="co-work-suppliers container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="row">

                <!-- Title -->
                <div class="col-12">
                    <h1 class="co-work-suppliers__title">Станьте поставщиком <br>
                        для проектов Mossebo</h1>
                </div>
                <div class="col-md-6 col-12">
                    <!-- Sub title -->
                    <h2 class="co-work-suppliers__subtitle">Продавайте товары в крупнейшей сети студий дизайна</h2>
                </div>
                <div class="col">
                    <!-- Feedback form -->
                    <?php feedback_form(array(
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




<!-- Section social's -->
<?php get_template_part( 'template/social_section' ); ?>

<?php get_footer(); ?>
