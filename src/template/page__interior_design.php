<?php
/**
 * Created by IntelliJ IDEA.
 * User: vladstarkovsky
 * Date: 30.10.2017
 * Time: 11:44
 * Template Name: Страница - Дизайн Интерьера
 */

get_header();

$form_office_address = geoInit('address');
$form_city_name_geo = geoInit('city');
#Рандомные числа для id радиокнопок калькулятора,
$radio_id = rand();
$radio_id_2 = rand();
#Рандомное чилсо для id select
$select_id = rand();
?>
<!-- Banner -->
<div class="page-interior-design-main container-fluid">
    <div class="row">
        <!-- title -->
        <div class="col-xl-11 offset-xl-1">
            <h1 class="page-interior-design-main__title">
                <?php $main_title_geo = geoInit('title');
                if (isset($main_title_geo)) {
                    echo $main_title_geo;
                } else {
                    echo 'Дизайн и ремонт интерьера по всей России и СНГ';
                } ?>
            </h1>
            <h2 class="page-interior-design-main__subtitle">Создаем дизайн квартир, коттеджей и коммерческих
                помещений</h2>
        </div>

        <!-- Calculator block -->
        <div class="col-12">
            <?php feedback_form_calc(array(
                'form-place' => 'Общая', // Form name
                'title' => 'Рассчитайте стоимость дизайна вашей квартиры <span class="text-primary">прямо сейчас:</span>', // Title
                'steps' => array( // Step's
                    'step-1' => array( // Step 1
                        'label' => 'Укажите площадь помещения:',
                        'placeholder' => 'площадь помещения, м²'
                    ),
                    'step-2' => array( // Step 2
                        'label' => 'Укажите тип помещения:',
                        'options' => array('Новостройка', 'Вторичное жилье', 'Загородный дом'),
                        'radio-label' => 'Нужен ли вам дизайн интерьера?'
                    ),
                ),
            )); ?>
        </div>
    </div>
</div>


<!-- Feauteres -->
<div class="feauteres container-fluid">
    <div class="row">
        <div class="feauteres__grid col-sm-4">
            <i class="feauteres__icon feauteres__icon_1"></i>
            <div class="feauteres__text">Работа по договору</div>
            <div class="feauteres__description">Строго соблюдаем сроки выполнения работ, прописанные в договоре, не
                выходим за рамки оговоренного бюджета и разбиваем платежи на удобные этапы.
            </div>
        </div>
        <div class="feauteres__grid col-sm-4">
            <i class="feauteres__icon feauteres__icon_2"></i>
            <div class="feauteres__text">Несколько вариантов дизайна</div>
            <div class="feauteres__description">Предлагаем от 3 до 5 вариантов дизайна Вашего будущего интерьера,
                демонстрирующие разные стили, концепции и цветовые решения. Вам точно будет из чего выбирать.
            </div>
        </div>
        <div class="feauteres__grid col-sm-4">
            <i class="feauteres__icon feauteres__icon_3"></i>
            <div class="feauteres__text">Дизайн-проект и ремонт в одной компании</div>
            <div class="feauteres__description">Разрабатываем дизайн, отвечающий индивидуальным пожеланиям заказчика, и
                воплощаем проект в жизнь. Берем на себя все этапы реализации проекта – от идеи до финального декора.
            </div>
        </div>
    </div>
</div>


<section id="main-page-portfolio" class="page-interior-design-portfolio">
    <div id="portfolio">
        <div class="page-interior-design-portfolio__title">Портфолио</div>

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
            <a @click="CategoryName = 'Ар-деко'">Ар-деко</a>
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
                        $current_post_id++;
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

<!-- call to action -->
<div class="page-franchising-call-to-action container-fluid"
     style="background-image: url(//mossebo.studio/wp-content/uploads/page__franchising/call-to-action.jpg);">
    <div class="page-franchising-call-to-action__title">Хотите увидеть больше?</div>
    <div class="page-franchising-call-to-action__subtitle"> У нас в офисе вы можете ознакомиться
        с полной базой дизайна интерьера </div>
    <button class="page-franchising-call-to-action__btn btn btn_1" type="button">Назначить встречу</button>
</div>


<div class="page-interior-design-steps container-fluid">
    <div class="page-interior-design-steps__grid">
        <div class="page-interior-design-steps__item page-interior-design-steps__item_first">
            Этапы<br>
            разработки<br>
            дизайн-проекта
        </div>
        <div class="page-interior-design-steps__item step_1">
            <div class="page-interior-design-steps__step_image"></div>
            <div class="page-interior-design-steps__step_num">1</div>
            <div class="page-interior-design-steps__step_text">Встречаемся на объекте</div>
        </div>
        <div class="page-interior-design-steps__item step_2">
            <div class="page-interior-design-steps__step_image"></div>
            <div class="page-interior-design-steps__step_num">2</div>
            <div class="page-interior-design-steps__step_text">Фиксируем ваши пожелания</div>
        </div>
        <div class="page-interior-design-steps__item step_3">
            <div class="page-interior-design-steps__step_image"></div>
            <div class="page-interior-design-steps__step_num">3</div>
            <div class="page-interior-design-steps__step_text">Ищем возможные решения</div>
        </div>
    </div>
    <div class="page-interior-design-steps__grid page-interior-design-steps__grid_revers">
        <div class="page-interior-design-steps__item step_4">
            <div class="page-interior-design-steps__step_image"></div>
            <div class="page-interior-design-steps__step_num">4</div>
            <div class="page-interior-design-steps__step_text">Рисуем первые скетчи</div>
        </div>
        <div class="page-interior-design-steps__item step_5">
            <div class="page-interior-design-steps__step_image"></div>
            <div class="page-interior-design-steps__step_num">5</div>
            <div class="page-interior-design-steps__step_text">Создаем 3D рендеры</div>
        </div>
        <div class="page-interior-design-steps__item step_6">
            <div class="page-interior-design-steps__step_image"></div>
            <div class="page-interior-design-steps__step_num">6</div>
            <div class="page-interior-design-steps__step_text">Подготавливаем информацию</div>
        </div>
        <div class="page-interior-design-steps__item step_7">
            <div class="page-interior-design-steps__step_image"></div>
            <div class="page-interior-design-steps__step_num">7</div>
            <div class="page-interior-design-steps__step_text">Формируем дизайн-проект</div>
        </div>
    </div>
</div>

<!-- Bran style -->
<div class="page-franchising-style">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="page-franchising-style__title">Что вы получаете в итоге?</div>
                <div class="page-franchising-style__description">Визуальные материалы и всю необходимую документацию, руководствуясь которой ремонтная бригада сможет воплотить в жизнь вашу мечту об идеальном интерьере
                </div>
                <div class="page-franchising-style__img">
                    <img class="page-franchising-style__img_desctop"
                         src="//mossebo.studio/wp-content/uploads/page__interior_design/bg_pc.png"
                         alt="Единый фирменный стиль по всему миру">
                    <img class="page-franchising-style__img_mobile"
                         src="//mossebo.studio/wp-content/uploads/page__interior_design/bg_mobile.png"
                         alt="Единый фирменный стиль по всему миру">
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
