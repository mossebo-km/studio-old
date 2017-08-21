<div class="vacancies-content__row col-12">
  <div class="vacancies-content__row-title"><?php single_cat_title(); ?></div>
  <div class="row">


    <div class="vacancies-content__row-col col-xl-3">
      <div class="vacancies-content__row-col-title"><?php echo category_description(); ?></div>

      <?php if (have_posts()): ?>
        <?php while (have_posts()) : the_post(); ?>


          <div class="vacancies-content__row-col-item">
            <a class="vacancies-content__row-col-item-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>

    </div>
  </div><!-- row END -->
</div><!-- vacancies-content__row END -->
