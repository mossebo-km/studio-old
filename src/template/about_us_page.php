<?php
/*
Template Name: О нас
*/
get_header();
?>

<!-- Abous us wrapper -->
<div id="abous-us-page">


    <!-- Section 1 about us -->
    <section id="about-us-section-1">
        <div class="container-fluid">

            <!-- Title -->
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="section-title">О нас</h1>
                </div>
            </div>

            <div class="row align-item-center">

                <!-- Left carousel -->
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
                    <div id="about-us-section-1-carousel" class="owl-carousel">
                        <div><img
                                src="<?php echo THEME_DIR; ?>/assets/images/about_us_page/section_1/3.jpg"
                                alt=""></div>
                        <div><img
                                src="<?php echo THEME_DIR; ?>/assets/images/about_us_page/section_1/4.jpg"
                                alt=""></div>
                        <div><img
                                src="<?php echo THEME_DIR; ?>/assets/images/about_us_page/section_1/2.jpg"
                                alt=""></div>
                        <div><img
                                src="<?php echo THEME_DIR; ?>/assets/images/about_us_page/section_1/1.jpg"
                                alt=""></div>
                        <div><img
                                src="<?php echo THEME_DIR; ?>/assets/images/about_us_page/section_1/5.jpg"
                                alt=""></div>
                    </div>
                </div>

                <!-- Right text block -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <h3>Международная сеть студий дизайна интерьера Mossebo</h3>
                    <p>546 семей сделали ремонт в своих квартирах и коттеджах вместе с Mossebo в 2016 году. Наши филиалы
                        расположены в Москве, Минске, Санкт-Петербурге, Волгограде, Бишкеке, и других городах России и
                        СНГ.</p>
                    <p>Мы создаем дизайн интерьера для всех объектов, от квартиры студии до загородного коттеджа или
                        офиса. Судя по темпам роста и отзывам - мы делаем хорошо.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- Section 2 mission -->
    <section id="about-us-section-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="section-title text-primary"><?php the_field('about_us_block_2_mossebo_title'); ?></h2>
                </div>
                <div class="col-xl-6 offset-xl-3 col-lg-6 offset-xl-3 col-md-6 offset-md-3 col-12 text-center">
                    <?php the_field('about_us_block_2_mossebo_text'); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3 office -->
    <section id="about-us-section-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <h2 class="section-title"><?php the_field('about_us_block_3_office_title'); ?></h2>
                </div>
            </div>
        </div>

        <div class="panorama"
             data-pano-mobile-src="<?php echo THEME_DIR; ?>/assets/images/franchise/franchise-pano/__office_mobile.jpg">
            <div class="panorama-view">
                <div class="panorama-container">
                    <img
                        src="<?php echo THEME_DIR; ?>/assets/images/franchise/franchise-pano/__office.jpg"
                        usemap="hotspots" data-width="1885" data-height="400" alt="Наши офисы"/>
                </div>
            </div>
        </div>

    </section>

    <!-- Section 4 MAP -->
    <section id="about-us-section-4">
        <div class="container-fluid">

            <!-- Title -->
            <div class="row">
                <div class="col-xl-12 text-center">
                    <h2 class="section-title">Филиалы Mossebo на карте</h2>
                </div>
            </div>

            <!-- YaMap -->
            <div class="row">
                <div class="col-12 padding-0">
                    <div id="yandex-map-claster-office"></div>
                </div>
            </div>

            <!-- Office -->
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <p><span class="text-primary text-bold">Россия:</span> Москва, Санкт-Петербург, Волгоград, Тюмень,
                        Самара, Ростов-на-Дону, Уссурийск, Оренбург, Тула, Уфа, Пенза.</p>
                    <p><span class="text-primary text-bold">Мир:</span> Бишкек, Минск, Ташкент, Астана.</p>
                </div>
            </div>

        </div> <!-- Container-fluid END -->
    </section> <!-- Section 4 END -->

    <!-- Section 5 -->
    <section id="about-us-section-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 text-center">
                    <h2 class="section-title text-white">Присоединись к Mossebo — открой<br> филиал в своем городе!</h2>
                    <a href="http://franchiseremont.mossebo.ru/" target="_blank" class="btn btn_1 ya_target_btn_onas">Подробнее</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 6 -->
    <section id="about-us-section-6">

        <!-- Title -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <h2 class="section-title"><?php the_field('about_us_block_4_feauteres_title'); ?></h2>
                </div>
            </div>
        </div>

        <!-- Bottom feautere's -->
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="about-us-sec-5-feauteres-grid">
                        <img
                            src="<?php echo THEME_DIR; ?>/assets/images/about_us_page/section_6/1.svg"
                            alt="">
                        <h3><?php the_field('about_us_block_4_feauteres_title_0'); ?></h3>
                        <p><?php the_field('about_us_block_4_feauteres_text_0'); ?></p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="about-us-sec-5-feauteres-grid">
                        <img
                            src="<?php echo THEME_DIR; ?>/assets/images/about_us_page/section_6/2.svg"
                            alt="">
                        <h3><?php the_field('about_us_block_4_feauteres_title_1'); ?></h3>
                        <p><?php the_field('about_us_block_4_feauteres_text_1'); ?></p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="about-us-sec-5-feauteres-grid">
                        <img
                            src="<?php echo THEME_DIR; ?>/assets/images/about_us_page/section_6/3.svg"
                            alt="">
                        <h3><?php the_field('about_us_block_4_feauteres_title_2'); ?></h3>
                        <p><?php the_field('about_us_block_4_feauteres_text_2'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- Section 6 END -->

    <!-- Section social's -->
    <?php get_template_part('template/social_section') ?>

</div> <!-- About us wrapper END -->

<?php get_footer(); ?>
