<?php
/*
Template Name: Вакансии
*/
get_header();
?>

<div class="vacancies container-fluid">
  <!-- Title -->
  <h1 class="section-title vacancies__section-title">Вакансии</h1>
  <!-- Vacancies content -->
  <div class="vacancies-content">

      <!-- Video -->
      <div class="reviews-video container">
          <div class="reviews-video__owl-wrapper row">
              <div class="col-sm-10 offset-sm-1 col-12">
                  <div class="owl-carousel">
                      <!-- item's -->
                          <div class="reviews-video__item item">
                              <div class="youtube-player" data-youtube-player-src-img="/wp-content/uploads/Mark-1.jpg" data-youtube-player-id="fW9mAe1aMG4">
                                  <div class="youtube-player__img-preview"></div>
                              </div>
                              <div class="reviews-video__item-title">Директор отдела маркетинга</div>
                          </div>
                      <!-- item's -->
                          <div class="reviews-video__item item">
                              <div class="youtube-player" data-youtube-player-src-img="/wp-content/uploads/Untitled-4.jpg" data-youtube-player-id="mek0xvs9Obw">
                                  <div class="youtube-player__img-preview"></div>
                              </div>
                              <div class="reviews-video__item-title">Директор отдела продаж</div>
                          </div>
                      <!-- item's -->
                          <div class="reviews-video__item item">
                              <div class="youtube-player" data-youtube-player-src-img="/wp-content/uploads/maxresdefault-1.jpg" data-youtube-player-id="TEyB_dFB9tc">
                                  <div class="youtube-player__img-preview"></div>
                              </div>
                              <div class="reviews-video__item-title">Руководитель отдела маркетинга</div>
                          </div>
                  </div>
              </div>
              <!-- arrow -->
              <div class="reviews-video__owl-arrow"></div>
          </div>

          <!-- pagination -->
          <div class="reviews-video__pagination">
              <!-- title -->
              <div class="reviews-video__pagination-title">Узнай больше о жизни и работе в Mossebo</div>

              <!-- pagination -->
              <div class="row">
                      <div class="reviews-video__pagination-grid col-md-4" data-carousel-index="0">
                          <div class="reviews-video__pagination-preview" style="background-image: url(/wp-content/uploads/Mark-1.jpg)"></div>
                          <div class="reviews-video__pagination-grid-title">Директор отдела маркетинга</div>
                          <div class="reviews-video__pagination-grid-description">Как стать специалистом в digital</div>
                      </div>
                      <div class="reviews-video__pagination-grid col-md-4" data-carousel-index="1">
                          <div class="reviews-video__pagination-preview" style="background-image: url(/wp-content/uploads/Untitled-4.jpg)"></div>
                          <div class="reviews-video__pagination-grid-title">Директор отдела продаж</div>
                          <div class="reviews-video__pagination-grid-description">Работа в продажах — как не впаривать</div>
                      </div>
                      <div class="reviews-video__pagination-grid col-md-4" data-carousel-index="2">
                          <div class="reviews-video__pagination-preview" style="background-image: url(/wp-content/uploads/maxresdefault-1.jpg)"></div>
                          <div class="reviews-video__pagination-grid-title">Руководитель отдела маркетинга</div>
                          <div class="reviews-video__pagination-grid-description">Работа маркетологом — правда и ложь</div>
                      </div>

              </div>
          </div>
      </div>

    <div class="col-xl-10 offset-xl-1">

      <div class="row">

          <?php
          $terms_office = get_terms( array(
              'taxonomy' => 'office', // Имя таксонамии
              'hide_empty' => true, // Скрывать пустые категории
          )); // Вытаскиваем все рубрики из таксономии "Офисы" в массив

          // Перебираем каждый объект массива ( в данном случае рубрика )
          foreach ( $terms_office as $term_single ) {

            // Проверяем, что рубрика является родительской
            if ( $term_single->parent === 0 ) { ?>
              <div class="vacancies-content__row col-12">
                <a href="<?php echo get_term_link($term_single->term_id, 'office'); ?>"><div class="vacancies-content__row-title"><?php echo $term_single->name; ?></div></a>
                <div class="row">

              <?php
              $term_childrens = get_term_children( $term_single->term_id, 'office' ); // Вытаскиваем id всех дочерних рубрик

              // Перебираем каждый объект массива ( в данном случае дочерняя рубрика )
              foreach ( $term_childrens as $child_id ) {
                $term = get_term_by( 'id', $child_id, 'office' ); // Вытаскиваем всю информацию о дочерней рубрике ?>

                  <div class="vacancies-content__row-col col-xl-3">
                    <a href="<?php echo get_term_link($term->term_id, 'office'); ?>"><div class="vacancies-content__row-col-title"><?php echo $term->name; ?></div></a>

                <?php
                // The Query
                $the_query_child_cat = new WP_Query( array(
                  'post_type'=> 'vacancies', // Тип постов
                  'tax_query' => array(
                    array(
                      'taxonomy' => 'office', // Таксономия рубрики
                      'field'    => 'term_id', // тип terms (id)
                      'terms'    => $term->term_id, // id рубрики
                    ),
                  )
                ));

                if ( $the_query_child_cat->have_posts() ) {   // запускаем цикл обхода материалов
                  while ( $the_query_child_cat->have_posts() ) {
                    $the_query_child_cat->the_post(); ?>

                    <div class="vacancies-content__row-col-item">
                      <a class="vacancies-content__row-col-item-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </div>

                  <?php
                  }
                  wp_reset_postdata();
                } // endif; ?>

                  </div>
              <?php
              } // endforeach; ?>
                </div><!-- row END -->
              </div><!-- vacancies-content__row END -->
            <?php
            } //endif;
          } // endforeach; ?>

      </div>
    </div>
  </div><!-- Vacancies block END -->

  <!-- feedback-form block -->
  <?php get_template_part( '/template/vacancies/vacancies-feedback' ); ?>


</div><!-- Container END -->

<?php get_footer(); ?>
