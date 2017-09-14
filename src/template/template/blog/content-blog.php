<!-- Blog item -->
<section class="news-page-item">

  <!-- Blog img -->
  <div class="img-top-block">
    <a href="<?php echo get_permalink(); ?>">
      <div class="news-img-inner-bg" style="background: url( <?php the_post_thumbnail_url(); ?> ) 50% 0% no-repeat; background-size: cover;"></div>
    </a>
  </div>

  <!-- Blog content -->
  <div class="news-page-text-block">

    <!-- Blog data/category -->
    <div class="row news-page-ifo-row">
      <div class="col-xl-6 text-left cat-info"><?php echo get_the_category_list(); ?></div>
      <div class="col-xl-6 text-right data-news"><img src="<?php echo THEME_DIR; ?>/assets/images/icon/ic_access_time_black_24px.svg" alt=""> <?php echo the_date(); ?> &nbsp;&nbsp;&nbsp; <img src="<?php echo THEME_DIR; ?>/assets/images/icon/ic_remove_red_eye_black_24px.svg" alt=""> <?php the_field('count-views'); ?></div>
    </div>

    <!-- Blog title -->
    <a href="<?php echo get_permalink(); ?>" class="news-page-title-link">
      <h2><?php echo get_the_title(); ?></h2>
    </a>

    <!-- Blog quote -->
    <p><?php the_excerpt(); ?></p>

    <!-- Blog more link -->
    <div class="row">
      <div class="col-xl-12 text-right">
        <a href="<?php echo get_permalink(); ?>" class="link-arrow">Подробнее</a>
      </div>
    </div>

  </div> <!-- Blog content END -->
</section> <!-- Blog item END -->
