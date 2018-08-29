<?php

/*
Template Name: Услуги - Ремонт офисов
*/
get_header();

$form_city_name_geo = geoInit('city');

?>

<!-- Banner -->
<div class="page-banner page-banner_office container-fluid">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="row">
                <!-- title -->
                <div class="col-12">
                    <h1 class="page-banner__title">Дизайн и ремонт офисов и коммерческих<br> помещений в городе
                        <?php echo $form_city_name_geo ?></h1>
                    <h2 class="page-banner__sub-title page-banner__sub-title_theme-color-black">Создаем интерьеры для
                        офисов, магазинов, банков,<br> гостиниц, салонов красоты и других видов бизнеса</h2>
                </div>
                <!-- Feedback form -->
                <div class="col-12">
                    <?php feedback_form_calc(array(
                        'form-place' => 'Офисы', // Form name
                        'title' => 'Рассчитайте стоимость дизайна и ремонта помещения <span class="text-primary">прямо сейчас:</span>', // Title
                        'steps' => array( // Step's
                            'step-1' => array( // Step 1
                                'label' => 'Введите площадь вашего помещения:',
                                'placeholder' => 'площадь помещения, м²'
                            ),
                            'step-2' => array( // Step 2
                                'label' => 'Выберите тип помещения:',
                                'options' => array('Бары и кафе', 'Офисы', 'Салоны красоты', 'Гостиницы', 'Другое'),
                                'radio-label' => 'Нужен ли вам дизайн интерьера?'
                            ),
                        ),
                    )); ?>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Feauteres -->
<div class="feauteres feauteres_theme-background-white container-fluid">
    <div class="row">
        <div class="feauteres__grid col-sm-4">
            <i class="feauteres__icon feauteres__icon_10"></i>
            <div class="feauteres__text">Точное соблюдение сроков</div>
            <div class="feauteres__description">Вы ограничены арендными каникулами? Завершим все работы вовремя и не
                сдвинем дату старта вашего бизнеса.
            </div>
        </div>
        <div class="feauteres__grid col-sm-4">
            <i class="feauteres__icon feauteres__icon_11"></i>
            <div class="feauteres__text">Грамотная смета</div>
            <div class="feauteres__description">Предлагаем доступные и функциональные решения и не превышаем бюджет по
                утвержденной смете.
            </div>
        </div>
        <div class="feauteres__grid col-sm-4">
            <i class="feauteres__icon feauteres__icon_12"></i>
            <div class="feauteres__text">Любая площадь</div>
            <div class="feauteres__description">Работаем с помещениями от 20-ти квадратных метров любого назначения.
            </div>
        </div>
    </div>
</div>

<!-- Portfolio -->
<div class="office-design-portfolio container-fluid">
    <div class="office-design-portfolio__title">Портфолио</div>

    <section id="main-page-portfolio" class="page-interior-design-portfolio">
        <div id="portfolio" class="container-fluid">
            <div class="page-interior-design-portfolio__style">
                <a @click="CategoryName = 'Все'">Все</a>
                <a @click="CategoryName = 'Бары и кафе'">Бары и кафе</a>
                <a @click="CategoryName = 'Офисы'">Офисы</a>
                <a @click="CategoryName = 'Салоны красоты'">Салоны красоты</a>
                <a @click="CategoryName = 'Гостиницы'">Гостиницы</a>
            </div>


            <div class="row">
                <div class="portfolio-mobile-carousel">


                    <div class="col-md-3 col-sm-12 padding-5 padding-50-sm-portfolio"
                         :key="1"
                         v-if="('Все, Бары и кафе').includes(CategoryName)"
                    >
                        <div class="grid">
                            <figure class="effect-roxy">
                                <div class="roxy-grid-img-bg"
                                     style="background: url(//mossebo.studio/wp-content/uploads/Kopiya-IMG_7800.jpg) 50% 50% no-repeat; background-size: cover;"
                                >
                                </div>
                                <figcaption>
                                    <p class="text-center">Кафе-бар в стиле эко-лофт, 250 м²</p>
                                </figcaption>
                            </figure>
                            <!-- Only mobile -->
                            <div class="mobile-row-portfolio-info text-left text-center-sm">
                                <span class="mobile-geid-title">Кафе-бар в стиле эко-лофт, 250 м²</span>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 col-sm-12 padding-5 padding-50-sm-portfolio"
                         :key="2"
                         v-if="('Все, Бары и кафе').includes(CategoryName)"
                    >
                        <div class="grid">
                            <figure class="effect-roxy">
                                <div class="roxy-grid-img-bg"
                                     style="background: url(//mossebo.studio/wp-content/uploads/Kopiya-bar_2.jpg) 50% 50% no-repeat; background-size: cover;"
                                >
                                </div>
                                <figcaption>
                                    <p class="text-center">Бар-лофт в стиле ар-деко, 230м²</p>
                                </figcaption>
                            </figure>
                            <!-- Only mobile -->
                            <div class="mobile-row-portfolio-info text-left text-center-sm">
                                <span class="mobile-geid-title">Бар-лофт в стиле ар-деко, 230м²</span>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 col-sm-12 padding-5 padding-50-sm-portfolio"
                         :key="3"
                         v-if="('Все, Бары и кафе').includes(CategoryName)"
                    >
                        <div class="grid">
                            <figure class="effect-roxy">
                                <div class="roxy-grid-img-bg"
                                     style="background: url(//mossebo.studio/wp-content/uploads/qgq0kQaAsoE.jpg) 50% 50% no-repeat; background-size: cover;"
                                >
                                </div>
                                <figcaption>
                                    <p class="text-center">Кафе-ресторан в скандинавском стиле, 165м²</p>
                                </figcaption>
                            </figure>
                            <!-- Only mobile -->
                            <div class="mobile-row-portfolio-info text-left text-center-sm">
                                <span class="mobile-geid-title">Кафе-ресторан в скандинавском стиле, 165м²</span>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 col-sm-12 padding-5 padding-50-sm-portfolio"
                         :key="4"
                         v-if="('Все, Офисы').includes(CategoryName)"
                    >
                        <div class="grid">
                            <figure class="effect-roxy">
                                <div class="roxy-grid-img-bg"
                                     style="background: url(//mossebo.studio/wp-content/uploads/Vid-008.jpg) 50% 50% no-repeat; background-size: cover;"
                                >
                                </div>
                                <figcaption>
                                    <p class="text-center">Двухэтажный офис в стиле лофт, 280м²</p>
                                </figcaption>
                            </figure>
                            <!-- Only mobile -->
                            <div class="mobile-row-portfolio-info text-left text-center-sm">
                                <span class="mobile-geid-title">Двухэтажный офис в стиле лофт, 280м²</span>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 col-sm-12 padding-5 padding-50-sm-portfolio"
                         :key="5"
                         v-if="('Все, Офисы').includes(CategoryName)"
                    >
                        <div class="grid">
                            <figure class="effect-roxy">
                                <div class="roxy-grid-img-bg"
                                     style="background: url(//mossebo.studio/wp-content/uploads/2-2-----kopiya.jpg) 50% 50% no-repeat; background-size: cover;"
                                >
                                </div>
                                <figcaption>
                                    <p class="text-center">Офис-лофт с элементами эко-стиля, 220м²</p>
                                </figcaption>
                            </figure>
                            <!-- Only mobile -->
                            <div class="mobile-row-portfolio-info text-left text-center-sm">
                                <span class="mobile-geid-title">Офис-лофт с элементами эко-стиля, 220м²</span>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 col-sm-12 padding-5 padding-50-sm-portfolio"
                         :key="6"
                         v-if="('Все, Салоны красоты').includes(CategoryName)"
                    >
                        <div class="grid">
                            <figure class="effect-roxy">
                                <div class="roxy-grid-img-bg"
                                     style="background: url(//mossebo.studio/wp-content/uploads/Kopiya-image4.jpg) 50% 50% no-repeat; background-size: cover;"
                                >
                                </div>
                                <figcaption>
                                    <p class="text-center">Салон красоты в стиле эко, 210м²</p>
                                </figcaption>
                            </figure>
                            <!-- Only mobile -->
                            <div class="mobile-row-portfolio-info text-left text-center-sm">
                                <span class="mobile-geid-title">Салон красоты в стиле эко, 210м²</span>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 col-sm-12 padding-5 padding-50-sm-portfolio"
                         :key="7"
                         v-if="('Все, Гостиницы').includes(CategoryName)"
                    >
                        <div class="grid">
                            <figure class="effect-roxy">
                                <div class="roxy-grid-img-bg"
                                     style="background: url(//mossebo.studio/wp-content/uploads/Bezyimyannyii--5.jpg) 50% 50% no-repeat; background-size: cover;"
                                >
                                </div>
                                <figcaption>
                                    <p class="text-center">Гостиница в стиле контемпорари. 450м²</p>
                                </figcaption>
                            </figure>
                            <!-- Only mobile -->
                            <div class="mobile-row-portfolio-info text-left text-center-sm">
                                <span class="mobile-geid-title">Гостиница в стиле контемпорари. 450м²</span>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

</div>

<!-- Section Write about us -->
<div class="write-about-us container">
    <div class="row">
        <div class="col-12">
            <h2 class="section-title">Эти компании уже доверили Mossebo дизайн<br> и ремонт офисов</h2>
        </div>
        <!-- Item's -->
        <div class="write-about-us__grid col-md col-sm-6 col-12">
            <img src="<?php echo THEME_DIR; ?>/assets/images/service/office/abous-us-write/1.png" alt="">
        </div>
        <div class="write-about-us__grid col-md col-sm-6 col-12">
            <img src="<?php echo THEME_DIR; ?>/assets/images/service/office/abous-us-write/2.png" alt="">
        </div>
        <div class="write-about-us__grid col-md col-sm-6 col-12">
            <img src="<?php echo THEME_DIR; ?>/assets/images/service/office/abous-us-write/3.png" alt="">
        </div>
        <div class="write-about-us__grid col-md col-sm-6 col-12">
            <img src="<?php echo THEME_DIR; ?>/assets/images/service/office/abous-us-write/4.png" alt="">
        </div>
    </div>
</div>

<!-- Office feauteres grids -->
<div class="office-feauteres-grids container">
    <div class="section-title section-title_theme-1 office-feauteres-grids__title">Ремонт офиса с нами – это просто. Как
        мы работаем:
    </div>
    <div class="feauteres-grids row">
        <div class="feauteres-grids__col col-sm-4">
            <i class="feauteres-grids__col-icon feauteres-grids__col-icon_office-1"></i>
            <div class="feauteres-grids__col-title"><span class="feauteres-grids__col-title-count">1.</span> Встречаемся
                на объекте
            </div>
            <div class="feauteres-grids__col-description">Фиксируем ваши пожелания, знакомимся с особенностями
                помещения, делаем все необходимые замеры, определяемся с бюджетом и материалами, составляем смету и всю
                стартовую документацию.
            </div>
        </div>
        <div class="feauteres-grids__col col-sm-4">
            <i class="feauteres-grids__col-icon feauteres-grids__col-icon_office-3"></i>
            <div class="feauteres-grids__col-title"><span class="feauteres-grids__col-title-count">2.</span>
                Создаем проект интерьера и документацию
            </div>
            <div class="feauteres-grids__col-description">Разрабатываем проект современного интерьера и следим за его воплощением.  Бесплатный авторский надзор на всех этапах стройки гарантирует создание задуманного дизайна
            </div>
        </div>
        <div class="feauteres-grids__col col-sm-4">
            <i class="feauteres-grids__col-icon feauteres-grids__col-icon_office-2"></i>
            <div class="feauteres-grids__col-title"><span class="feauteres-grids__col-title-count">3.</span>
                Предоставляем выходной пакет документов
            </div>
            <div class="feauteres-grids__col-description">Передаем вам на руки всю необходимую сопроводительную
                документацию для государственных органов и бухгалтерии.
            </div>
        </div>
    </div>
</div>

<!-- Call to action calc -->
<?php

call_to_action(array(
    'title' => 'Успейте сделать ремонт и дизайн за арендные каникулы и с фиксированной сметой:',
    // feedback form calc
    'feedback-form-calc' => array(
        'form-place' => 'Офисы', // Form name
        'title' => 'Рассчитайте стоимость дизайна и ремонта офиса <span class="text-primary">прямо сейчас:</span>', // Title
        'steps' => array( // Step's
            'step-1' => array( // Step 1
                'label' => 'Введите площадь вашего помещения:',
                'placeholder' => 'площадь помещения, м²'
            ),
            'step-2' => array( // Step 2
                'label' => 'Выберите тип помещения:',
                'options' => array('Офис', 'Магазин', 'Кафе', 'Сфера услуг'),
                'radio-label' => 'Нужен ли вам ремонт?'
            ),
        ),
    ),
));

?>

<!-- Work happy -->
<div class="office-work-happy container">
    <div class="office-work-happy__row row">
        <div class="col-sm-6">
            <img src="//mossebo.studio/wp-content/uploads/IMG_9252-1.jpg" alt=""
                 class="office-work-happy__img">
        </div>
        <div class="col-sm-6">
            <div class="office-work-happy__title">Когда работа в радость</div>
            <div class="office-work-happy__description">Вы и ваши сотрудники проводите на работе куда больше, чем 8
                часов. От качества организации рабочего места зависит продуктивность сотрудника и успех компании. Мы
                создаем современные рабочие пространства с рациональной эргономикой и соблюдением всех норм по
                вентиляции, освещению и безопасности.
            </div>
        </div>
    </div>
</div>

<!-- Add feauteres -->
<div class="office-add-feauteres container">
    <div class="section-title section-title_theme-1 office-add-feauteres__title">Дополнительные возможности:</div>
    <!-- feauteres -->
    <div class="feauteres-grids row">
        <div class="feauteres-grids__col col-sm-3">
            <i class="feauteres-grids__col-icon feauteres-grids__col-icon_office-2-1"></i>
            <div class="feauteres-grids__col-title">Оборудованная зона кухни</div>
            <div class="feauteres-grids__col-description">Организуем зону для приема пищи и оснастим необходимой бытовой
                техникой.
            </div>
        </div>
        <div class="feauteres-grids__col col-sm-3">
            <i class="feauteres-grids__col-icon feauteres-grids__col-icon_office-2-2"></i>
            <div class="feauteres-grids__col-title">Офисная мебель со скидкой</div>
            <div class="feauteres-grids__col-description">Закупим мебель и предоставим индивидуальные решения по цене
                масс-маркета.
            </div>
        </div>
        <div class="feauteres-grids__col col-sm-3">
            <i class="feauteres-grids__col-icon feauteres-grids__col-icon_office-2-3"></i>
            <div class="feauteres-grids__col-title">Системы безопасности</div>
            <div class="feauteres-grids__col-description">Установим системы видеонаблюдения, сигнализации, контроля
                доступа и пассивной безопасности.
            </div>
        </div>
        <div class="feauteres-grids__col col-sm-3">
            <i class="feauteres-grids__col-icon feauteres-grids__col-icon_office-2-4"></i>
            <div class="feauteres-grids__col-title">Продуманная электрика</div>
            <div class="feauteres-grids__col-description">Оснастим помещение всей необходимой электрикой для решения
                задач IT-инфраструктуры.
            </div>
        </div>
    </div>
</div>

<!-- Call to action calc -->
<?php

call_to_action(array(
    'title' => 'Сделайте уникальный дизайн пространства для своего бизнеса',
    // feedback form calc
    'feedback-form-calc' => array(
        'form-place' => 'Офисы', // Form name
        'title' => 'Рассчитайте стоимость дизайна и ремонта офиса <span class="text-primary">прямо сейчас:</span>', // Title
        'steps' => array( // Step's
            'step-1' => array( // Step 1
                'label' => 'Введите площадь вашего помещения:',
                'placeholder' => 'площадь помещения, м²'
            ),
            'step-2' => array( // Step 2
                'label' => 'Выберите тип помещения:',
                'options' => array('Офис', 'Магазин', 'Кафе', 'Сфера услуг'),
                'radio-label' => 'Нужен ли вам ремонт?'
            ),
        ),
    ),
));

?>

<?php

get_footer();

?>
