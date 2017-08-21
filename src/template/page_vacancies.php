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

    <!-- panorama -->
    <div class="panorama vacancies__panorama">
      <div class="panorama-view">
        <div class="panorama-container" style="margin-left: 0px; width: 3770px; height: 400px;">
          <img src="<?php echo get_template_directory_uri(); ?>/dir/img/vacancies/vacancies-panorama/panorama.jpg" data-width="1885" data-height="400" alt="Наши офисы" style="left: 0px;">
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
