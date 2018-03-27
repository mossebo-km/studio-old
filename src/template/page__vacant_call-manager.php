<?php
/**
 * Created by IntelliJ IDEA.
 * User: vladstarkovsky
 * Date: 11.10.2017
 * Time: 12:22
 * Template Name: Страница - Все вакансии - Колл менеджер
 */

get_header();

?>

<!-- Feedback -->
<div class="page-vacant-call__header container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="row">

                <!-- Title -->
                <div class="col-12">
                    <div class="page-vacant-call__header__smalltitle">Стань голосом Mossebo</div>
                    <h1 class="page-vacant-call__header__title">Оператор колл-центра</h1>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <span class="page-vacant-call__header_list_name">Уровень зарплаты</span>
                            <span class="page-vacant-call__header_list_value">до 100 000 руб.</span>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <span class="page-vacant-call__header_list_name">Город</span>
                            <span class="page-vacant-call__header_list_value">Санкт-Петербург</span>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <span class="page-vacant-call__header_list_name">Требуемый опыт работы</span>
                            <span class="page-vacant-call__header_list_value">от 3-х лет</span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-7 col-12">

                    <div class="youtube-player"
                         data-youtube-player-src-img="//mossebo.studio/wp-content/uploads/Oblozhka_Vyipusk-31_Mossebo-_6.4.jpg"
                         data-youtube-player-id="VIBVyQ8P02M">
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


<!-- Feauteres -->
<div class="feauteres container-fluid">
    <div class="row">
        <div class="feauteres__grid col-sm-4 col-12">
            <i class="feauteres__icon feauteres__icon_13"></i>
            <div class="feauteres__text">Обустроенный<br>офис</div>
            <div class="feauteres__description">Удобное пространство в стиле лофт с Macbook для работы всех сотрудников
            </div>
        </div>
        <div class="feauteres__grid col-sm-4 col-12">
            <i class="feauteres__icon feauteres__icon_17"></i>
            <div class="feauteres__text">Зарплата + бонусы</div>
            <div class="feauteres__description">Лучшие сотрудники получают ежедневные, еженедельные и ежемесячные премии
            </div>
        </div>
        <div class="feauteres__grid col-sm-4 col-12">
            <i class="feauteres__icon feauteres__icon_19"></i>
            <div class="feauteres__text">Только входящие заявки</div>
            <div class="feauteres__description">Никаких холодных звонков. Вы общаетесь с клиентами, которые сами оставляют заявки на разработку дизайна интерьера
            </div>
        </div>
    </div>
</div>


<div class="page-vacant-call__youdo">
    <div class="row">
        <div class="col-md-6">
            <div class="title">Чем будете заниматься:</div>
            <ul class="co-work-list__ul">
                <li>Обработка входящих обращений</li>
                <li>Осуществление записи на замер</li>
                <li>Осуществление звонков контроля качества</li>
                <li>Занесение информации в базу и обработка данных на ПК</li>
            </ul>
        </div>
        <div class="col-md-6 page-vacant-call__youdo_bg">
        </div>
    </div>
</div>


<div class="page-vacant-call__weneed container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">Что потребуется от Вас:</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <img src="/wp-content/themes/mossebo/assets/images/vacancies/call/n-1.png" alt=""
                         class="page-vacant-call__weneed__icon">
                    <div class="page-vacant-call__weneed__item">Приятный голос, четкая дикция, грамотная устная и
                        письменная речь
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="/wp-content/themes/mossebo/assets/images/vacancies/call/n-2.png" alt=""
                         class="page-vacant-call__weneed__icon">
                    <div class="page-vacant-call__weneed__item">Опыт работы оператором колл-центра от 6 месяцев</div>
                </div>
                <div class="col-md-3">
                    <img src="/wp-content/themes/mossebo/assets/images/vacancies/call/n-3.png" alt=""
                         class="page-vacant-call__weneed__icon">
                    <div class="page-vacant-call__weneed__item">Коммуникабельность, уверенность в себе,
                        доброжелательность
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="/wp-content/themes/mossebo/assets/images/vacancies/call/n-4.png" alt=""
                         class="page-vacant-call__weneed__icon">
                    <div class="page-vacant-call__weneed__item">Владение ПК на уровне уверенного пользователя</div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="page-vacant-call__leadform container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="row">
                <div class="col-md-6">
                    <strong class="page-vacant-call__leadform__title">Что мы предлагаем:</strong>
                    <ul class="co-work-list__ul">
                        <li>Оформление согласно ТК РФ</li>
                        <li>Привлекательная система мотивации</li>
                        <li>Перспективы профессионального и карьерного роста</li>
                        <li>Лучшая возможность строить карьеру и при этом хорошо зарабатывать!</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <!-- Feedback form -->
                    <?php get_template_part('/template/vacancies/vacancies-feedback'); ?>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="page-vacant-call__best container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="page-vacant-call__best_flex">
            <div class="page-vacant-call__best_photo"
                 style="background-image: url(/wp-content/themes/mossebo/assets/images/vacancies/call/ph-1.jpg);">

            </div>
            <div class="page-vacant-call__best_item">
                <div>
                    <div class="title">Удобный график 2/2</div>
                    <p>Работа в колл-центре Mossebo – это удобный сменный график для тех кому нужно больше свободного
                        времени</p>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="page-vacant-call__best_flexrev">
                <div class="page-vacant-call__best_photo"
                     style="background-image: url(/wp-content/themes/mossebo/assets/images/vacancies/call/ph-2.jpg);">

                </div>
                <div class="page-vacant-call__best_item">
                    <div>
                        <div class="title">Общение по готовым скриптам</div>
                        <p>Вам не придется экспериментировать в поисках подхода к клиенту. Вы работаете только по
                            готовым выверенным скриптам, доказавшим свою эффективность</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="page-vacant-call__best_flex">
            <div class="page-vacant-call__best_photo"
                 style="background-image: url(/wp-content/themes/mossebo/assets/images/vacancies/call/ph-3.jpg);">

            </div>
            <div class="page-vacant-call__best_item">
                <div>
                    <div class="title">Работа с клиентами, заинтересованными в услуге</div>
                    <p>У нас нет холодных звонков, только входящие заявки. Вы не будете объяснять клиенту, почему ему
                        нужна наша услуга – он уже заинтересован в ней</p>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>


<!-- Feauteres -->
<div class="page-vacant-structure container-fluid">
    <div class="page-vacant-structure__title">Руководители компании</div>
    <div class="page-vacant-structure__subtitle">Три сооснователя компании Mossebo руководят отделами компании, в каждом
        из которых возможен вертикальный и горизонтальный карьерный рост.
    </div>
    <div class="row">
        <div class="col-12">
            <img src="/wp-content/themes/mossebo/assets/images/vacancies/structure.png" alt="" class="mobile_hide">
            <img src="/wp-content/themes/mossebo/assets/images/vacancies/structure_mobile.png" alt=""
                 class="mobile_show">
        </div>
    </div>
</div>


<?php get_template_part('template/filial-map'); ?>



<div class="page-vacant-call__leadform2 container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="row">
                <div class="col-md-6">
                    <strong class="page-vacant-call__leadform__title">
                        Присоединяйтесь к <br>Отделу поддержки Mossebo
                    </strong>
                </div>
                <div class="col-md-6">
                    <!-- Feedback form -->
                    <?php get_template_part('/template/vacancies/vacancies-feedback'); ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
