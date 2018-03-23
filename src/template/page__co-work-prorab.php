<?php

/**
 * Created by IntelliJ IDEA.
 * User: admin
 * Date: 31.08.17
 * Time: 11:31
 * Template Name: Сотрудничество - Строительные бригады
 */

get_header();

?>


<!-- Feedback -->
<div class="co-work-prorab__header container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="row">

                <!-- Title -->
                <div class="col-12">
                    <h1 class="co-work-prorab__header__title">Получай заказы на ремонт <br>квартир от Mossebo</h1>
                    <!-- Sub title -->
                    <h2 class="co-work-prorab__header__subtitle">Бизнес - студия по дизайну интерьера с гарантированным
                        клиентопотоком</h2>
                </div>

                <div class="col-md-6 col-12">
                    <!-- YouTube player -->
                    <div class="youtube-player"
                         data-youtube-player-src-img="//mossebo.studio/wp-content/uploads/Oblozhka_Vyipusk-31_Mossebo-_6.4.jpg"
                         data-youtube-player-id="VIBVyQ8P02M">
                        <div class="youtube-player__img-preview youtube-player__img-preview_theme-light"></div>
                    </div>
                    <!-- About us write -->
                    <div class="co-work-prorab__header__brands">
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
            <i class="feauteres__icon feauteres__icon_20"></i>
            <div class="feauteres__text">Работай по проектам <br>интерьера от Mossebo</div>
            <div class="feauteres__description">Вы работаете с клиентами изначально заинтересованными в создании дизайна
                интерьера, покупке дорогих материалов отделки и эксклюзивной мебели.
            </div>
        </div>
        <div class="feauteres__grid col-sm-4 col-12">
            <i class="feauteres__icon feauteres__icon_21"></i>
            <div class="feauteres__text">Получай заказы <br>вне зависимости от сезона </div>
            <div class="feauteres__description">Mossebo создает и находит заявки на дизайн интерьера на собственных
                рекламных площадках
            </div>
        </div>
        <div class="feauteres__grid col-sm-4 col-12">
            <i class="feauteres__icon feauteres__icon_22"></i>
            <div class="feauteres__text">Фиксированный процент <br>от работ по договору</div>
            <div class="feauteres__description">Mossebo — единственная на рынке франшиза, гарантирующая клиентов по
                договору. Вы получаете их ежемесячно из управляющей компании в Санкт-Петербурге
            </div>
        </div>
    </div>
</div>


<?php get_template_part('template/filial-map'); ?>


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



<div class="co-work-prorab__about container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="row align-item-center">
                <div class="col-md-6">
                    <strong class="co-work-prorab__about__title">Ремонт под ключ</strong>
                    <p class="co-work-prorab__about__p">Вы получаете крупный заказ на ремонт квартиры или дома целиком. Клиенты Mossebo выбирают интересные интерьерные решения, требующие дорогих работ от опытных рабочих.</p>
                </div>
                <div class="col-md-6">
                    <img src="/wp-content/themes/mossebo/assets/images/co-work/prorab/remont.jpg" alt=""
                         class="co-work-prorab__about__photo">
                </div>
            </div>
        </div>
    </div>
</div>



<div class="co-work-prorab__project container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="co-work-prorab__project__title">
                Работа по понятному проекту
            </div>
            <div class="co-work-prorab__project__p">
                Проекты интерьеров от Mossebo не заканчиваются на этапе визуализации и включают все необходимые технические документы. Вы будете работать с пошаговыми схемами и точными расчетами.
            </div>
        </div>
    </div>
</div>


<div class="co-work-prorab__parthner container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <strong class="co-work-prorab__parthner__title">Как стать партнером студии дизайна интерьера Mossebo: </strong>
            <div class="row">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="co-work-prorab__parthner_num">01</div>
                            <div class="co-work-prorab__parthner_text">Пришли портфолио выполненных работ</div>
                        </div>
                        <div class="col-md-4">
                            <div class="co-work-prorab__parthner_num">02</div>
                            <div class="co-work-prorab__parthner_text">Продемонстрируй собственный профессиональный инвентарь</div>
                        </div>
                        <div class="col-md-4">
                            <div class="co-work-prorab__parthner_num">03</div>
                            <div class="co-work-prorab__parthner_text">Пройди проверку в рамках Skype-интервью</div>
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <div class="co-work-prorab__parthner_num">04</div>
                            <div class="co-work-prorab__parthner_text">Докажи умение работать с проектами интерьеров и технической документацией</div>
                        </div>
                        <div class="col-md-4">
                            <div class="co-work-prorab__parthner_num">05</div>
                            <div class="co-work-prorab__parthner_text">Подтверди профильное образование</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<!-- Section social's -->
<?php get_template_part('template/social_section'); ?>

<?php get_footer(); ?>
