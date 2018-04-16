<?php
/*
Template Name: Главная страница - LV
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
<div class="page-banner page-banner_main-page container-fluid">
    <div class="row">
        <!-- logo mobile -->
        <div class="page-banner__logo-mobile col-12">
            <img src="<?php echo THEME_DIR; ?>/assets/images/header/logo-mossebo.svg" alt="Mossebo дизайн и ремонт">
        </div>
        <!-- title -->
        <div class="col-xl-11 offset-xl-1 col-12">
            <h1 class="page-banner__title">
                Interjera dizains un remonts Latvijā
            </h1>
            <h2 class="page-banner__sub-title">Izstrādam dizainu dzīvokļiem, mājām un komerctelpām </h2>
        </div>

        <!-- Calculator block -->
        <div class="col-12">
            <?php feedback_form_calc(array(
                'form-place' => 'Общая', // Form name
                'title' => 'Aprēķināt dizaina un remonta cenu jūsu dzīvoklim tieši tagad', // Title
                'steps' => array( // Step's
                    'step-1' => array( // Step 1
                        'label' => 'Norādiet telpas laukumu:',
                        'placeholder' => 'telpas laukums, m²'
                    ),
                    'step-2' => array( // Step 2
                        'label' => 'Norādiet telpas tipu:',
                        'options' => array('Jaunbūve', 'Sekundārais mājoklis', 'Ārpilsētas māja'),
                        'radio-label' => 'Нужен ли вам дизайн интерьера?'
                    ),
                    'step-3' => array( // Step 3
                        'label' => 'Norādiet jūsu tālruņa numuru:',
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
            <div class="feauteres__text">Bezmaksas autoruzraudzība</div>
            <div class="feauteres__description">
                Dizainers seko būvbrigādes darbiem visa remonta gaitā
            </div>
        </div>
        <div class="feauteres__grid col-sm-4">
            <i class="feauteres__icon feauteres__icon_2"></i>
            <div class="feauteres__text">
                Interjera dizains par vienu mēnesi
            </div>
            <div class="feauteres__description">
                Mossebo specialisti izstrādās visu darbu dokumentāciju, skices un 3D interjera vizualizācijas par 30 dienu vai atrāk
            </div>
        </div>
        <div class="feauteres__grid col-sm-4">
            <i class="feauteres__icon feauteres__icon_3"></i>
            <div class="feauteres__text">
                Eksluzīvie materiāli un mēbeles
            </div>
            <div class="feauteres__description">Jūs saņemat Mossebo piegādātāju bazes piekļuvi un pērkat visu jūsu interjeram specialājās cenās
            </div>
        </div>
    </div>
</div>

<!-- Portfolio section -->
<section id="main-page-portfolio">
    <div class="container-fluid">

        <!-- Title -->
        <div class="row">
            <div class="col-xl-12 text-center">
                <h2 class="section-title">Mūsu darbi</h2>
            </div>
        </div>

        <!-- More link -->
        <div class="row">
            <div class="col-xl-12 text-right text-center-sm text-center-xs">
                <a href="/portfolio/" class="link-arrow">Skatīt visus darbus</a>
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
                                        <span class="link-arrow">Uzziniet vairāk</span>
                                        <a class="main-link" href="<?php the_permalink(); ?>">Iet uz</a>
                                    </figcaption>
                                </figure>
                                <!-- Only mobile -->
                                <div class="mobile-row-portfolio-info text-left text-center-sm">
                                    <span class="mobile-geid-title"><?php the_field('port_title'); ?></span>
                                    <a href="<?php the_permalink(); ?>" class="link-arrow">Uzziniet vairāk</a>
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

<!-- Write about us -->
<div class="write-about-us write-about-us_bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title">Par mums rakstīt</h2>
            </div>
        </div>
        <div class="write-about-us__row_ai-center row">
            <!-- Item's -->
            <div class="write-about-us__grid col-md col-6">
                <img src="<?php echo THEME_DIR; ?>/assets/images/main_page/abous_us_write/4.png" alt="РБК">
                <div class="write-about-us__grid-text"></div>
            </div>
            <div class="write-about-us__grid col-md col-6">
                <img src="<?php echo THEME_DIR; ?>/assets/images/main_page/abous_us_write/2.png" alt="ТНТ">
                <div class="write-about-us__grid-text"></div>
            </div>
            <div class="write-about-us__grid col-md col-6">
                <img src="<?php echo THEME_DIR; ?>/assets/images/main_page/abous_us_write/1.png" alt="Капиталист">
                <div class="write-about-us__grid-text"></div>
            </div>
            <div class="write-about-us__grid col-md col-6">
                <img src="<?php echo THEME_DIR; ?>/assets/images/main_page/abous_us_write/3.png"
                     alt="Победитель народного голосования">
                <div class="write-about-us__grid-text"></div>
            </div>
            <div class="write-about-us__grid col-md col-6">
                <img src="<?php echo THEME_DIR; ?>/assets/images/main_page/abous_us_write/5.png"
                     alt="Проекты на ведущем портале о дизайне">
                <div class="write-about-us__grid-text"></div>
            </div>
            <div class="write-about-us__grid col-md col-6">
                <img src="<?php echo THEME_DIR; ?>/assets/images/main_page/abous_us_write/7.svg"
                     alt="Лучшая компания России">
                <div class="write-about-us__grid-text"></div>
            </div>
            <div class="write-about-us__grid col-md col-6">
                <img src="<?php echo THEME_DIR; ?>/assets/images/main_page/abous_us_write/6.svg"
                     alt="Лучшие световые решения для интерьера">
                <div class="write-about-us__grid-text"></div>
            </div>
            <div class="write-about-us__grid col-md col-6">
                <img src="<?php echo THEME_DIR; ?>/assets/images/main_page/abous_us_write/7.png"
                     alt="Новый взгляд на дизайн дома">
                <div class="write-about-us__grid-text"></div>
            </div>
        </div>
    </div>
</div>


<!-- Section social's -->
<?php get_template_part('template/social_section'); ?>

<?php get_footer(); ?>
