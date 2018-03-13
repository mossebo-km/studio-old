<?php

/*
Template Name: Услуги - Ремонт офисов
*/
get_header();

?>

<!-- Banner -->
<div class="page-banner page-banner_office container-fluid">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="row">
                <!-- title -->
                <div class="col-12">
                    <h1 class="page-banner__title">Дизайн и ремонт офисов и коммерческих<br> помещений в
                        Санкт-Петербурге</h1>
                    <h2 class="page-banner__sub-title page-banner__sub-title_theme-color-black">Создаем интерьеры для
                        офисов, магазинов, банков,<br> гостиниц, салонов красоты и других видов бизнеса</h2>
                </div>
                <!-- Feedback form -->
                <div class="col-12">
                    <?php feedback_form_calc(array(
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

<!-- Portfolio -->
<div class="office-design-portfolio container-fluid">
    <div class="office-design-portfolio__title">Портфолио</div>

    <section id="main-page-portfolio" class="page-interior-design-portfolio">
    <div id="portfolio" class="container-fluid">
    <div class="page-interior-design-portfolio__style">
        <a @click="CategoryName = 'Все'">Все стили</a>
        <a @click="CategoryName = 'Скандинавский'">Скандинавский</a>
        <a @click="CategoryName = 'Классический'">Классический</a>
        <a @click="CategoryName = 'Hi-Tech'">Hi-Tech</a>
        <a @click="CategoryName = 'Современный'">Современный</a>
        <a @click="CategoryName = 'Фьюжн'">Фьюжн</a>
        <a @click="CategoryName = 'Бохо'">Бохо</a>
        <a @click="CategoryName = 'Необарокко'">Необарокко</a>
        <a @click="CategoryName = 'Лофт'">Лофт</a>
        <a @click="CategoryName = 'Рустика'">Рустика</a>
        <a @click="CategoryName = 'Ар-нуво'">Ар-нуво</a>
        <!--<a @click="CategoryName = 'Ар-деко'">Ар-деко</a>-->
        <a @click="CategoryName = 'Поп-арт'">Поп-арт</a>
        <a @click="CategoryName = 'Эко'">Эко</a>
        <a @click="CategoryName = 'Средиземноморский'">Средиземноморский</a>
        <a @click="CategoryName = 'Сталинский ампир'">Сталинский ампир</a>
        <a @click="CategoryName = 'Ретро'">Ретро</a>
        <a @click="CategoryName = 'Английский'">Английский</a>
        <a @click="CategoryName = 'Прованс'">Прованс</a>
        <a @click="CategoryName = 'Неоклассика'">Неоклассика</a>
    </div>

    <?php
    $query_portfolio = new WP_Query([
        'post_type' => 'portfolio',
        'posts_per_page' => -1
    ]);
    if ($query_portfolio->have_posts()) {
        ?>
        <div class="row">
            <div class="portfolio-mobile-carousel">
                <?php
                while ($query_portfolio->have_posts()) {
                    $query_portfolio->the_post(); ?>
                    <div class="col-md-3 col-sm-12 padding-5 padding-50-sm-portfolio"
                         :key="<?php the_ID(); ?>"
                         v-if="('Все,<?php the_field('port_project_sidebar_row'); ?>').includes(CategoryName)"
                    >
                        <div class="grid">
                            <figure class="effect-roxy">
                                <div class="roxy-grid-img-bg"
                                     style="background: url(<?php the_field('port_img_header') ?>) 50% 50% no-repeat; background-size: cover;"></div>
                                <figcaption>
                                    <p class="text-center"><?php the_field('port_title'); ?></p>
                                    <span class="link-arrow">Подробнее</span>
                                    <a class="main-link" href="<?php the_permalink(); ?>">Перейти</a>
                                </figcaption>
                            </figure>
                            <!-- Only mobile -->
                            <div class="mobile-row-portfolio-info text-left text-center-sm">
                                <span class="mobile-geid-title"><?php the_field('port_title'); ?></span>
                                <a href="<?php the_permalink(); ?>" class="link-arrow">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <?php
    } else {
        echo 'В данной категории постов нет';
    }
    ?>
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
            <i class="feauteres-grids__col-icon feauteres-grids__col-icon_office-2"></i>
            <div class="feauteres-grids__col-title"><span class="feauteres-grids__col-title-count">2.</span>
                Самостоятельно реализуем и сдаем проект
            </div>
            <div class="feauteres-grids__col-description">Вашего присутствия на объекте не потребуется на протяжении
                всего ремонта. Мы самостоятельно осуществляем все необходимые закупки, поддерживаем чистоту, действуем
                согласно прописанным срокам и вовремя сдаем объект.
            </div>
        </div>
        <div class="feauteres-grids__col col-sm-4">
            <i class="feauteres-grids__col-icon feauteres-grids__col-icon_office-3"></i>
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
            <img src="<?php echo THEME_DIR; ?>/assets/images/service/office/work-happy/image.jpg" alt=""
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
    'title' => 'Создайте уникальный дизайн и доверьте ремонт и обустройство офиса опытной компании:',
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
