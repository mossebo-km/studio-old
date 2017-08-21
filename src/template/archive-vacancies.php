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
                <div class="vacancies-content__row-title"><?php echo $term_single->name; ?></div>
                <div class="row">

              <?php
              $term_childrens = get_term_children( $term_single->term_id, 'office' ); // Вытаскиваем id всех дочерних рубрик

              // Перебираем каждый объект массива ( в данном случае дочерняя рубрика )
              foreach ( $term_childrens as $child_id ) {
                $term = get_term_by( 'id', $child_id, 'office' ); // Вытаскиваем всю информацию о дочерней рубрике ?>

                  <div class="vacancies-content__row-col col-xl-3">
                    <div class="vacancies-content__row-col-title"><?php echo $term->name; ?></div>

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

  <!-- Vacancies feedback -->
  <div class="vacancies-feedback row">
    <div class="col-12">
      <form class="feedback-form vacancies-feedback__feedback-form" method="post">
        <div class="feedback-form__title">Хотите работать у нас?</div>
        <div class="feedback-form__subtitle">Оставьте заявку</div>
        <div class="feedback-form__input-inner">
          <label class="feedback-form__label" for="vacancies-feedback__name">Ваше имя</label>
          <input class="feedback-form__input" type="text" placeholder="введите ваше имя" id="vacancies-feedback__name" name="feedback-form__name">
        </div>
        <div class="feedback-form__input-inner">
          <label class="feedback-form__label" for="vacancies-feedback__email">E-mail</label>
          <input class="feedback-form__input" type="email" placeholder="mail@mail.ru" id="vacancies-feedback__email" name="feedback-form__email">
        </div>
        <div class="feedback-form__input-inner feedback-form__input-inner-margin-bottom-big">
          <label class="feedback-form__label" for="vacancies-feedback__phone">Телефон</label>
          <input class="feedback-form__input" type="text" placeholder="+7 (___) ___–__–__" id="vacancies-feedback__phone" name="feedback-form__phone">
        </div>
        <div class="feedback-form__input-inner">
          <label class="feedback-form__label feedback-form__label_textarea" for="vacancies-feedback__text">Сопроводительное письмо</label>
          <textarea class="feedback-form__input feedback-form__input_textarea" id="vacancies-feedback__text" placeholder="Текст сообщения" name="feedback-form__text" rows="8" cols="80"></textarea>
        </div>
        <div class="feedback-form__input-inner feedback-form__input-inner-margin-bottom-big">
          <label class="feedback-form__label feedback-form__label_textarea" for="vacancies-feedback__file">Прикрепить резюме</label>
          <input id="vacancies-feedback__file" type="file">
        </div>
        <button class="feedback-form__btn-submit btn btn_1" type="submit">Отправить</button>
      </form>
    </div>
  </div>


</div><!-- Container END -->

<?php get_footer(); ?>
