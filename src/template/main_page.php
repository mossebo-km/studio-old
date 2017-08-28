<?php
/*
Template Name: Главная страница
*/
get_header();

$form_office_address = geoInit( 'address' );
$form_city_name_geo = geoInit( 'city' );
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
      <img src="<?php echo THEME_DIR; ?>/assets/images/header/logo.svg" alt="Mossebo дизайн и ремонт">
    </div>
    <!-- title -->
    <div class="col-xl-11 offset-xl-1 col-12">
      <h1 class="page-banner__title">
        <?php $main_title_geo = geoInit( 'title' );
        if ( isset( $main_title_geo ) ) {
          echo $main_title_geo;
        } else {
          echo 'Дизайн и ремонт интерьера по всей России и СНГ';
        } ?>
      </h1>
      <h2 class="page-banner__sub-title">делаем дизайн и ремонт в квартирах, коттеджах и<br> коммерческих помещениях</h2>
    </div>

    <!-- Calculator block -->
    <div class="col-12">
      <?php feedback_form_calc( array(
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
      )); ?>
    </div>
  </div>
</div>

<!-- Feauteres -->
<div class="feauteres container-fluid">
  <div class="row">
    <div class="feauteres__grid col-sm-4">
        <i class="feauteres__icon feauteres__icon_1"></i>
        <div class="feauteres__text">Бесплатный <br>авторский надзор</div>
        <div class="feauteres__description">Дизайнер следит за работой строительной бригады на всем протяжении ремонта</div>
    </div>
    <div class="feauteres__grid col-sm-4">
        <i class="feauteres__icon feauteres__icon_2"></i>
        <div class="feauteres__text">Дизайн интерьера <br>за один месяц</div>
        <div class="feauteres__description">Всю рабочую документацию, скетчи и наглядные 3D визуализации интерьера специалисты Mossebo разработают за 30 дней или быстрее</div>
    </div>
    <div class="feauteres__grid col-sm-4">
        <i class="feauteres__icon feauteres__icon_3"></i>
        <div class="feauteres__text">Эксклюзивные <br>материалы и мебель</div>
        <div class="feauteres__description">Вы получаете доступ к базе поставщиков Mossebo и покупаете все для своего интерьера по специальным ценам</div>
    </div>
  </div>
</div>

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

        <?php $main_page_portfolio_section_option = get_field( 'main_page_portfolio_section_option', 'option' );
        if ( $main_page_portfolio_section_option ): ?>
        		<?php foreach( $main_page_portfolio_section_option as $post): // variable must be called $post (IMPORTANT) ?>
        				<?php setup_postdata( $post ); ?>

                  <div class="col-md-3 col-sm-12 padding-5 padding-50-sm-portfolio">
                    <div class="grid">
                      <figure class="effect-roxy">
                        <div class="roxy-grid-img-bg" style="background: url(<?php the_field( 'port_img_header' ) ?>) 50% 50% no-repeat; background-size: cover;"></div>
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
        <?php endif;  ?>
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
        <h2 class="section-title">О нас пишут</h2>
      </div>
    </div>
    <div class="write-about-us__row_ai-center row">
      <!-- Item's -->
      <div class="write-about-us__grid col-md col-6">
        <img src="<?php echo THEME_DIR; ?>/assets/images/main_page/abous_us_write/4.png" alt="РБК">
        <div class="write-about-us__grid-text">Рост компании отмечен премией «Бизнес-успех»</div>
      </div>
      <div class="write-about-us__grid col-md col-6">
        <img src="<?php echo THEME_DIR; ?>/assets/images/main_page/abous_us_write/2.png" alt="ТНТ">
        <div class="write-about-us__grid-text">Реклама Mossebo говорит голосом ТНТ</div>
      </div>
      <div class="write-about-us__grid col-md col-6">
        <img src="<?php echo THEME_DIR; ?>/assets/images/main_page/abous_us_write/1.png" alt="Капиталист">
        <div class="write-about-us__grid-text">Наивысшая оценка от ведущего бизнес журнала</div>
      </div>
      <div class="write-about-us__grid col-md col-6">
        <img src="<?php echo THEME_DIR; ?>/assets/images/main_page/abous_us_write/3.png" alt="Победитель народного голосования">
        <div class="write-about-us__grid-text">Победитель народного голосования</div>
      </div>
      <div class="write-about-us__grid col-md col-6">
        <img src="<?php echo THEME_DIR; ?>/assets/images/main_page/abous_us_write/5.png" alt="Проекты на ведущем портале о дизайне">
        <div class="write-about-us__grid-text">Проекты отмечены крупнейшим медиа о дизайне интерьера</div>
      </div>
      <div class="write-about-us__grid col-md col-6">
        <img src="<?php echo THEME_DIR; ?>/assets/images/main_page/abous_us_write/7.svg" alt="Лучшая компания России">
        <div class="write-about-us__grid-text">Премии «Лидер отрасли» и «Межрегиональное развитие»</div>
      </div>
      <div class="write-about-us__grid col-md col-6">
        <img src="<?php echo THEME_DIR; ?>/assets/images/main_page/abous_us_write/6.svg" alt="Лучшие световые решения для интерьера">
        <div class="write-about-us__grid-text">Лучшие световые решения для интерьеров</div>
      </div>
      <div class="write-about-us__grid col-md col-6">
        <img src="<?php echo THEME_DIR; ?>/assets/images/main_page/abous_us_write/7.png" alt="Новый взгляд на дизайн дома">
        <div class="write-about-us__grid-text">Новый взгляд на дизайн дома</div>
      </div>
    </div>
  </div>
</div>

<!-- Section new's -->
<section id="main-page-news">
  <div class="container">

    <!-- Title -->
    <div class="row">
      <div class="col-xl-12 text-center">
        <h2 class="section-title">Блог</h2>
      </div>
      <div class="col-xl-12 text-right text-center-sm text-center-xs">
        <a href="/novosti/" class="link-arrow">Посмотреть все новости</a>
      </div>
    </div>

    <!-- Mews carousel -->
    <div class="row">
      <div class="col-xl-10 offset-xl-1 col-lg-12 p-l-r-30">

        <div class="owl-carousel owl-theme">
          <?php
          $args = array(
          	 'numberposts' => 5,
             'post_status' => 'publish'
          );
          $result = wp_get_recent_posts( $args );
          foreach ( $result as $news_post_elements ){ ?>
            <div class="item">
                <!-- Left block -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-12 carousel-item-block-news-left">
                  <div class="data-news-carousel text-right hidde-sm hidde-xs"><?php echo get_the_date( 'd.m.Y', $news_post_elements[ 'ID' ] ) ?></div>
                  <h3 class="title-news-carousel text-center-sm text-center-xs"><?php echo $news_post_elements[ 'post_title' ] ?></h3>

                  <img class="img-news-carousel-mobile hidden-block visible-sm visible-xs" src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $news_post_elements['ID'] ), 'full', true)[0];  ?>" alt="<?php echo $news_post_elements[ 'post_title' ] ?>">

                  <div class="data-news-carousel text-right hidden-block visible-sm visible-xs"><?php echo get_the_date( 'd.m.Y', $news_post_elements[ 'ID' ] ) ?></div>
                  <p class="expert-text-news-carousel text-center-sm text-center-xs"><?php echo wp_trim_words( $news_post_elements['post_content'], 30, '...'); ?></p>
                  <div class="arrow-permalink text-right text-center-sm text-center-xs">
                    <a href="<?php echo get_permalink( $news_post_elements['ID'] ) ?>" class="link-arrow text-right">Подробнее</a>
                  </div>
                </div>
                <!-- Right block -->
                <div class="carousel-item-block-img" style="background: url(<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $news_post_elements['ID'] ), 'full', true)[0];  ?>) 50% 0% no-repeat; background-size: cover;"></div>
            </div>
          <?php } ?>
        </div>

      </div>
    </div> <!-- News carousel END -->

  </div> <!-- Container-fluid END -->
</section> <!-- Section news END -->

<!-- Section social's -->
<?php get_template_part( 'template/social_section' ); ?>

<?php get_footer(); ?>
