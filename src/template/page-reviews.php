<?php
/*
Template name: Отзывы
*/
get_header();
?>

<!-- page title -->
<div class="container-fluid">
    <h1 class="reviews__section-title section-title">Отзывы</h1>
</div>


<!-- Reviews about -->
<div class="reviews-about container">
    <div class="reviews-about__row_align-center row">
        <div class="reviews-about__col col-md-4 offset-md-1">
            <img src="<?php echo THEME_DIR; ?>/assets/images/page-reviews/reviews-about__img.svg" alt="Отзывы Mossebo"
                 class="reviews-about__img">
        </div>
        <div class="reviews-about__col col-md-7">
            <div class="reviews-about__title">Реальные отзывы о Mossebo: дизайн и ремонт, который мы сделали</div>
            <div class="reviews-about__text">Мы уверены, что лучшая реклама — это благодарность клиентов. Мы не
                скрываемся за текстовыми отзывами о компании Mossebo — мы делимся честным мнением наших заказчиков и
                публикуем реальные видеоотзывы. Смотрите отзывы о работе Mossebo — международного бренда по дизайну и
                ремонту интерьеров.
            </div>
        </div>
    </div>
</div>

<?php
// Reviews video
$rows = get_field('main_page_youtube_section_option_reviews', 'option');
if ($rows):
    ?>
    <div class="reviews-video container">
        <div class="reviews-video__owl-wrapper row">
            <div class="col-sm-10 offset-sm-1 col-12">
                <div class="owl-carousel">
                    <!-- item's -->
                    <?php foreach ($rows as $row): ?>
                        <div class="reviews-video__item item">
                            <div class="youtube-player"
                                 data-youtube-player-src-img="<?php echo $row['main_page_youtube_section_item_option_img']; ?>"
                                 data-youtube-player-id="<?php echo $row['main_page_youtube_section_item_option_id']; ?>">
                                <div class="youtube-player__img-preview"></div>
                            </div>
                            <div
                                class="reviews-video__item-title"><?php echo $row['main_page_youtube_section_item_option_name']; ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- arrow -->
            <div class="reviews-video__owl-arrow"></div>
        </div>

        <!-- pagination -->
        <div class="reviews-video__pagination">
            <!-- title -->
            <div class="reviews-video__pagination-title">Видео-отзывы по услуге «Дизайн и ремонт интерьера»</div>

            <!-- pagination -->
            <div class="row">
                <?php
                $carouselIndex = 0;
                foreach ($rows as $row): ?>
                    <div class="reviews-video__pagination-grid col-md-4"
                         data-carousel-index="<?php echo $carouselIndex; ?>">
                        <div class="reviews-video__pagination-preview"
                             style="background-image: url(<?php echo $row['main_page_youtube_section_item_option_img']; ?>)"></div>
                        <div
                            class="reviews-video__pagination-grid-title"><?php echo $row['main_page_youtube_section_item_option_name']; ?></div>
                        <div
                            class="reviews-video__pagination-grid-description"><?php echo $row['main_page_youtube_section_item_option_subname']; ?></div>
                    </div>
                    <?php
                    $carouselIndex++;
                endforeach; ?>
                <!-- btn more -->
                <div class="reviews-video__pagination-more col-12">Показать больше отзывов</div>
            </div>
        </div>

        <!-- Descritpion -->
        <div class="reviews-video__article">
            <div class="reviews-video__article-title">Отзывы о Mossebo говорят сами за себя</div>

            <div class="reviews-video__article-text">Завоевать безупречную репутацию и доверие клиентов способна только
                компания, выполняющая свои обещания. Mossebo — одна из таких.
            </div>
            <div class="reviews-video__article-text">Мы высоко подняли планку. Каждый проект Mossebo — это
                профессиональный подход к дизайну и ремонту интерьеров вкупе с безупречным сервисом. Это не просто
                слова, мы готовы доказать их на деле. Реальные отзывы о Mossebo говорят сами за себя.
            </div>
        </div>
    </div>
<?php endif; ?>

<!-- Servise -->
<div class="reviews__service container">
    <!-- title -->
    <h2 class="reviews__section-title section-title">Наши услуги:</h2>

    <!-- Grid's -->
    <div class="row">
        <div class="reviews__service-item col-xl-4 col-12">
            <div class="reviews__service-col"
                 style="background-image: url(<?php echo THEME_DIR; ?>/assets/images/page-reviews/reviews__service/1.jpg);">
                <div class="reviews__service-inner">
                    <div class="reviews__service-link-arrow">
                        <a href="/dizayn-i-remont-kottedzhey/" class="link-arrow link-arrow_white">подробнее</a>
                    </div>
                    <img
                        src="<?php echo THEME_DIR; ?>/assets/images/page-reviews/reviews__service/icons/cottage_renovation.svg"
                        alt="" class="reviews__service-img">
                    <div class="reviews__service-title">Ремонт коттеджей</div>
                    <div class="reviews__service-text">Создаем интерьеры загородных домов в Санкт-Петербурге и
                        Ленинградской области
                    </div>
                </div>
            </div>
        </div>
        <div class="reviews__service-item col-xl-4 col-12">
            <div class="reviews__service-col"
                 style="background-image: url(<?php echo THEME_DIR; ?>/assets/images/page-reviews/reviews__service/2.jpg);">
                <div class="reviews__service-inner">
                    <div class="reviews__service-link-arrow">
                        <a href="/remont-ofisov/" class="link-arrow link-arrow_white">подробнее</a>
                    </div>
                    <img
                        src="<?php echo THEME_DIR; ?>/assets/images/page-reviews/reviews__service/icons/office_renovation.svg"
                        alt="" class="reviews__service-img">
                    <div class="reviews__service-title">Ремонт офисов</div>
                    <div class="reviews__service-text">Создаем интерьеры для офисов, магазинов, банков, гостиниц,
                        салонов красоты и других видов бизнеса
                    </div>
                </div>
            </div>
        </div>
        <div class="reviews__service-item col-xl-4 col-12">
            <div class="reviews__service-col"
                 style="background-image: url(<?php echo THEME_DIR; ?>/assets/images/page-reviews/reviews__service/4.jpg);">
                <div class="reviews__service-inner">
                    <div class="reviews__service-link-arrow">
                        <a href="/pomoshh-v-priemke-kvartiryi-u-zastroyshhika/" class="link-arrow link-arrow_white">подробнее</a>
                    </div>
                    <img
                        src="<?php echo THEME_DIR; ?>/assets/images/page-reviews/reviews__service/icons/help_getting.svg"
                        alt="" class="reviews__service-img">
                    <div class="reviews__service-title">Приемка квартиры</div>
                    <div class="reviews__service-text">Сохрани от 70 000 до 300 000 рублей на новую машину, будущий
                        ремонт или долгожданный отпуск
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Call to action calc
call_to_action(array(
    'title' => 'Убедитесь сами:',
    // feedback form calc
    'feedback-form-calc' => array(
        'form-place' => 'Отзывы', // Form name
        'title' => 'Рассчитайте стоимость дизайна <span class="text-primary">прямо сейчас:</span>', // Title
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
    ),
));
?>

<!-- Portfolio section -->
<section id="main-page-portfolio">
    <div class="container-fluid">

        <!-- Title -->
        <div class="row">
            <div class="col-xl-12 text-center">
                <h2 class="section-title">Портфолио</h2>
            </div>
        </div>

        <!-- More link -->
        <div class="row">
            <div class="col-xl-12 text-right text-center-sm text-center-xs">
                <a href="/portfolio/" class="link-arrow">Посмотреть всё портфолио</a>
            </div>
        </div>

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

    </div> <!-- Container fluid END -->
</section> <!-- Portfolio section END -->

<?php get_footer(); ?>
