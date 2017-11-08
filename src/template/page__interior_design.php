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
<section id="main-page-portfolio">
    <div id="portfolio">
        <div>Портфолио</div>

        <!-- Portfolio item's -->
        <div class="row">
            <div class="portfolio-mobile-carousel">

                <?php $main_page_portfolio_section_option = get_field('main_page_portfolio_section_option', 'option');
                if ($main_page_portfolio_section_option): ?>
                    <?php foreach ($main_page_portfolio_section_option as $post): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>

                        <div class="col-md-3 col-sm-12 padding-5 padding-50-sm-portfolio">
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

                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php endif; ?>
                <!-- Carousel nav -->
            </div>
        </div><!-- Portfolio item's END -->


        <?php
        // vars
        $colors = get_field('port_project_sidebar_row');
        // check
        if ($colors): ?>
            <ul>
                <li @click="CategoryName = 'Все'">Все</li>
                <?php foreach ($colors as $color): ?>
                    <li><?php echo $color; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <div class="portfolio-item"
             v-if="('Все, Лофт, Хай-Тек').includes(CategoryName)"
        >
            <div class="title">Заголовок 1</div>
            <div class="subtitle">Описание 1</div>
        </div>

        <div class="portfolio-item"
             v-if="('Все, Хай-Тек').includes(CategoryName)"
        >
            <div class="title">Заголовок 2</div>
            <div class="subtitle">Описание 2</div>
        </div>

        <div class="portfolio-item"
             v-if="('Все, Лофт').includes(CategoryName)"
        >
            <div class="title">Заголовок 3</div>
            <div class="subtitle">Описание 3</div>
        </div>

        <div class="portfolio-item"
             v-if="('Все, Лофт, Хай-Тек').includes(CategoryName)"
        >
            <div class="title">Заголовок 4</div>
            <div class="subtitle">Описание 4</div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
