<?php
/*
Template Name: Форма - Оставить отзыв о встрече с дизайнером
*/

get_header();

$client = $_GET['c'];

?>

<div id="contact-page">
    <div class="container-fluid">

        <form class="feedback-form"
              data-form-id="7"
              style="margin: 20px auto;">

            <!-- title -->
            <div class="feedback-form__title">
                Оставьте анонимный отзыв о встрече
                <div class="feddback-form__title-sub">Вы помогаете нам сделать встречи комфортными и продуктивными</div>
            </div>

            <input class="feedback-form__input"
                   type="text"
                   id="feedback-form__name_1-modal"
                   name="feedback-form__name"
                   value="<?php echo $client; ?>"
                   style="display: none !important">

            <input class="feedback-form__input"
                   type="tel"
                   id="feedback-form__phone_1-modal"
                   value="<?php echo $client; ?>"
                   name="feedback-form__phone"
                   style="display: none !important">

            <div class="feedback-form__input-inner">
                    <textarea class="feedback-form__input feedback-form__input_textarea"
                              id="vacancies-feedback__text"
                              placeholder="Текст сообщения"
                              name="feedback-form__text"
                              rows="8"
                              cols="80"></textarea>
            </div>


            <!-- submit btn -->
            <button class="feedback-form__btn-submit btn btn_1" type="submit">
                <svg class="feedback-form__btn-submit-load-icon" width="20px" height="20px"
                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                    <rect x="0" y="0" width="100" height="100" fill="none" class="bk"></rect>
                    <circle cx="50" cy="50" r="40" stroke-dasharray="163.36281798666926 87.9645943005142" stroke="#ffff"
                            fill="none" stroke-width="20">
                        <animateTransform attributeName="transform" type="rotate" values="0 50 50;180 50 50;360 50 50;"
                                          keyTimes="0;0.5;1" dur="1s" repeatCount="indefinite"
                                          begin="0s"></animateTransform>
                    </circle>
                </svg>
                <span class="feedback-form__btn-submit-text">Отправить</span>
            </button>

        </form>

    </div><!-- Container fluid END -->
</div><!-- Contact page Wrapper END -->

<?php get_footer(); ?>
