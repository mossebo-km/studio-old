<?php

  get_header();

  while ( have_posts() ) {  the_post();

?>
  <!-- banner -->
  <div class="news-single-page-header">
    <div class="news-img-inner-bg" style="background: url( <?php the_post_thumbnail_url( $size ); ?> ) 50% 50% no-repeat; background-size: cover;"></div>
  </div>

  <!-- Content -->
  <div class="news-page-wrapper">
    <div class="container-fluid">
      <div class="row">

        <div class="col-xl-8">
          <div class="content-left">
            <div class="cingle-page-news-main">
              <div class="row top-info-row">
                <div class="col-xl-6 text-left"><span class="data-news"><?php echo the_date(); ?></span></div>
                <div class="col-xl-6 text-right text-left-xs"><a href="/novosti/" class="link-arrow">Посмотреть всё новости</a></div>
              </div>

              <!-- Title -->
              <div class="row">
                <div class="col-xl-12">
                  <h1 class="single-page-title"><?php echo get_the_title(); ?></h1>
                  <span class="cat-info"><?php echo get_the_category_list(); ?></span>
                </div>
              </div>

              <div class="single-page-main-news-text gallery-img-post">
                <?php

                  // ACF editor loop
                  get_template_part( 'template/editor/editor-loop' );

                ?>
              </div>
              <div class="ya-share2" data-services="vkontakte,facebook,gplus,odnoklassniki,telegram" data-counter="" data-image="<?php echo get_template_directory_uri(); ?>/assets/images/header/logo.jpg"></div>
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
          get_template_part( 'template/sidebar' );

        ?>

      </div> <!-- Row END -->
    </div>  <!-- Container fluid END -->
  </div> <!-- News page wrapper END -->

<?

  } //endwhile;

  get_footer();

?>
