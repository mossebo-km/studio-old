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
                    <h2 class="co-work-prorab__header__subtitle">Крупнейшая сеть студий дизайна интерьера ищет квалифицированных партнеров по строительству</h2>
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
                        'feedback-form__id' => 6, // Описание после полей
                        'feedback-form__form-place' => 'Страница Прорабы Шапка', // Имя формы
                        'feedback-form__class' => '',
                        'feedback-form__mail-input' => true, // Поле email
                        'feedback-form__title' => 'Оставьте заявку', // Заголовок
                        'feedback-form__title-sub' => 'С вами свяжется специалист по работе со строительными бригадами', // Подзаголовок
                        'feedback-form__text-description' => '', // Описание после полей
                        'feedback-form__btn-value' => 'Отправить', // Описание после полей
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
            <div class="feauteres__description">Получай полный комплект технической документации и работай по продуманному проекту интерьера
            </div>
        </div>
        <div class="feauteres__grid col-sm-4 col-12">
            <i class="feauteres__icon feauteres__icon_21"></i>
            <div class="feauteres__text">Получай заказы <br>вне зависимости от сезона</div>
            <div class="feauteres__description">Каждая студия Mossebo готова передать на ремонт от 5 до 15 проектов каждый месяц
            </div>
        </div>
        <div class="feauteres__grid col-sm-4 col-12">
            <i class="feauteres__icon feauteres__icon_22"></i>
            <div class="feauteres__text">Фиксированный процент <br>от работ по договору</div>
            <div class="feauteres__description">С каждой бригадой заключается прозрачный договор и оговаривается фиксированный платеж – 10% от стоимости договора
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
                    <p class="co-work-prorab__about__p">Вы получаете крупный заказ на ремонт квартиры или дома целиком.
                        Клиенты Mossebo выбирают интересные интерьерные решения, требующие дорогих работ от опытных
                        рабочих.</p>
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
                Проекты интерьеров от Mossebo не заканчиваются на этапе визуализации и включают все необходимые
                технические документы. Вы будете работать с пошаговыми схемами и точными расчетами.
            </div>
        </div>
    </div>
</div>


<div class="co-work-prorab__parthner container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <strong class="co-work-prorab__parthner__title">Как стать партнером студии дизайна интерьера
                Mossebo: </strong>
            <div class="row">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="co-work-prorab__parthner_num">01</div>
                            <div class="co-work-prorab__parthner_text">Пришли портфолио выполненных работ</div>
                        </div>
                        <div class="col-md-4">
                            <div class="co-work-prorab__parthner_num">02</div>
                            <div class="co-work-prorab__parthner_text">Продемонстрируй собственный профессиональный
                                инвентарь
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="co-work-prorab__parthner_num">03</div>
                            <div class="co-work-prorab__parthner_text">Пройди проверку в рамках Skype-интервью</div>
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <div class="co-work-prorab__parthner_num">04</div>
                            <div class="co-work-prorab__parthner_text">Докажи умение работать с проектами интерьеров и
                                технической документацией
                            </div>
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


<div class="co-work-prorab__webest container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="co-work-prorab__webest__title">
                Что вы получаете от работы с Mossebo:
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="co-work-prorab__webest_item">
                        <strong>Заявки на ремонт</strong>
                        <span>под ключ после завершения работ по дизайну интерьера</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="co-work-prorab__webest_item">
                        <strong>Авторский надзор дизайнеров</strong>
                        <span>Mossebo — сопровождение ремонта на всех этапах</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="co-work-prorab__webest_item">
                        <strong>Встречу с клиентом</strong>
                        <span>в офисе Mossebo</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Portfolio Panorama -->
<div class="page-franchising-offices page-franchising-offices__bg-gray">
    <div class="page-franchising-offices__title">Портфолио дизайн-проектов Mossebo</div>
    <div class="page-franchising-offices__description">Ваши проекты войдут в крупнейшее портфолио проектов интерьера в России, странах СНГ и Прибалтики
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


<!-- Leadform2 -->
<div class="co-work-prorab-leadform2 container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="co-work-prorab-leadform2__title">Важное <br>о Mossebo:</div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="co-work-prorab-leadform2__list-item">
                                <strong>1.</strong>
                                Mossebo – признанный лидер рынка и бренд, которому доверяют
                            </div>
                            <div class="co-work-prorab-leadform2__list-item">
                                <strong>2.</strong>
                                В Mossebo поступает непрерывный поток заявок на дизайн, которые могут стать вашими заказами на ремонт
                            </div>
                            <div class="co-work-prorab-leadform2__list-item">
                                <strong>3.</strong>
                                Mossebo берет всего 10% от стоимости договора на ремонт
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Feedback form -->
                    <?php feedback_form(array(
                        'feedback-form__id' => 6, // Описание после полей
                        'feedback-form__form-place' => 'Страница Прорабы Подвал', // Имя формы
                        'feedback-form__class' => '',
                        'feedback-form__mail-input' => true, // Поле email
                        'feedback-form__title' => 'Оставьте заявку', // Заголовок
                        'feedback-form__title-sub' => 'С вами свяжется специалист по работе со строительными бригадами', // Подзаголовок
                        'feedback-form__text-description' => '', // Описание после полей
                        'feedback-form__btn-value' => 'Отправить', // Описание после полей
                    )); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
