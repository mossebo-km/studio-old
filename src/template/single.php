<?php

get_header();

while (have_posts()) {
    the_post();

    get_template_part('template/count-views');

    ?>

    <!-- Content -->
    <div class="news-page-wrapper">
        <div class="container-fluid">
            <div class="row">

                <div class="col-xl-6">
                    <div class="content-left">
                        <div class="cingle-page-news-main">
                            <div class="row top-info-row">
                                <div class="col-xl-6 text-left">
                                    <span class="data-news"><img src="<?php echo THEME_DIR; ?>/assets/images/icon/ic_access_time_black_24px.svg" alt=""> <?php echo the_date(); ?> &nbsp;&nbsp;&nbsp; <img src="<?php echo THEME_DIR; ?>/assets/images/icon/ic_remove_red_eye_black_24px.svg" alt=""> <?php the_field('count-views'); ?></span>
                                </div>
                                <div class="col-xl-6 text-right text-left-xs">
                                    <a href="/novosti/" class="link-arrow">Посмотреть всё новости</a>
                                </div>
                            </div>

                            <!-- Title -->
                            <div class="row">
                                <div class="col-xl-12">
                                    <h1 class="single-page-title"><?php echo get_the_title(); ?></h1>
                                </div>
                                <div class="col-xl-12">
                                    <span class="cat-info"><?php echo get_the_category_list(); ?></span>
                                </div>
                            </div>

                            <div class="ya-share2" data-services="vkontakte,facebook,gplus,odnoklassniki,telegram"
                                 data-counter=""
                                 data-image="<?php echo THEME_DIR; ?>/assets/images/header/logo.jpg"></div>

                            <div class="single-page-main-news-text gallery-img-post">
                                <?php
                                // ACF editor loop
                                get_template_part('template/editor/editor-loop');
                                ?>
                            </div>
                            <div class="ya-share2" data-services="vkontakte,facebook,gplus,odnoklassniki,telegram"
                                 data-counter=""
                                 data-image="<?php echo THEME_DIR; ?>/assets/images/header/logo.jpg"></div>

                            <!-- Hypercomments -->
                            <?php get_template_part('template/hypercomments'); ?>

                            <!-- Single page nav prev/next -->
                            <div class="single-page-nav-prev-next">
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <?php previous_post_link('%link'); ?>
                                    </div>
                                    <div class="col-6 text-right">
                                        <?php next_post_link('%link'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                // Sidebar right
                get_template_part('template/sidebar');
                ?>

            </div> <!-- Row END -->
        </div>  <!-- Container fluid END -->
    </div> <!-- News page wrapper END -->

    <?php

} //endwhile;

get_footer();

?>
