<?php get_header(); ?>
<div class="posrtfolio-single-header-img" style="background: url(<?php the_field( 'port_img_header' ); ?>) 50% 50% no-repeat; -webkit-background-size: cover;background-size: cover;"></div>

<div class="portfolio-single-page-container container-fluid">
  <div class="row">
    <!-- Portfolio left-top content -->
    <div class="col-xl-8 col-lg-7 col-md-7">
      <h1 class="portfolio-single-title text-center"><?php the_field( 'port_title' ); ?></h1>
      <div class="portfolio-top-paragraph">
        <?php the_field( 'port_header_text' ) ?>
      </div>
      <div class="ya-share2" data-services="vkontakte,facebook,gplus,odnoklassniki,telegram" data-counter="" data-image="<?php echo THEME_DIR; ?>/assets/images/header/logo.jpg"></div>
    </div>
    <!-- Portfolio right sidebar -->
    <?php get_template_part( 'template/sidebar-portfolio-single' ) ?>
  </div>

  <!-- editor -->
  <div class="portfolio-bottom-paragraph gallery-img-post">
    <?php get_template_part( 'template/editor/editor-loop' ); ?>
  </div>

</div>


<!-- Call to action calc -->
<?php call_to_action( array(
  'title' => 'Хотите подобный проект?',
  // feedback form calc
  'feedback-form-calc'   => array(
    'form-place' => 'Общая', // Form name
    'title' => 'Рассчитайте стоимость дизайна и ремонта вашей квартиры <span class="text-primary">прямо сейчас:</span>', // Title
    'steps' => array( // Step's
      'step-1' => array( // Step 1
        'label' => 'Укажите площадь помещения:',
        'placeholder' => 'площадь помещения, м²'
      ),
      'step-2' => array( // Step 2
        'label' => 'Укажите тип помещения:',
        'options' => array( 'Новостройка', 'Вторичное жилье', 'Загородный дом' ),
        'radio-label' => 'Нужен ли вам дизайн интерьера?'
      ),
    ),
  ),
)); ?>


<!-- Hypercomments -->
<?php get_template_part( 'template/hypercomments' ); ?>

<!-- Section other project section -->
<section id="portfolio-single-other-profect">

  <div class="container-fluid">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="section-title">Другие проекты</h2>
      </div>
      <div class="col-12 text-right text-center-sm text-center-xs"><a href="/portfolio/" class="link-arrow">Посмотреть все портфолио</a></div>
    </div>
    <div class="row">
      <?php $post_objects = get_field( 'port_post_object_item' );

      if ( $post_objects ): ?>
          <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
              <?php setup_postdata( $post ); ?>

              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 grid-col-port-single">
                <div class="grid">
                  <figure class="effect-roxy">
                    <div class="roxy-grid-img-bg" style="background: url(<?php the_field( 'port_img_header' ) ?>) 50% 50% no-repeat; background-size: cover;"></div>
                    <figcaption>
                      <p class="text-center"><?php the_field( 'port_title' ); ?></p>
                      <span class="link-arrow">Подробнее</span>
                      <a class="main-link" href="<?php the_permalink(); ?>">Перейти</a>
                    </figcaption>
                  </figure>
                  <!-- Only mobile -->
                  <div class="mobile-row-portfolio-info text-left">
                    <span class="mobile-geid-title"><?php the_field('port_title'); ?></span>
                    <a href="<?php the_permalink(); ?>" class="link-arrow">Подробнее</a>
                  </div>
                </div>
              </div>
          <?php endforeach; ?>
          <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
      <?php endif;  ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
