<?php
get_header();

// Получаем информацию о родительской категории
$top_term = get_top_term( 'office' );

// Получаем id категории
$cat_id = get_queried_object()->term_id;
?>

<div class="vacancies container-fluid">
  <h1 class="section-title vacancies__section-title"><?php echo 'Вакансии: ' . $top_term->name; ?></h1>
  <div class="vacancies-content">
    <!-- panorama -->
    <div class="panorama vacancies__panorama">
      <div class="panorama-view">
        <div class="panorama-container" style="margin-left: 0px; width: 3770px; height: 400px;">
          <img src="<?php echo get_template_directory_uri(); ?>/dir/img/vacancies/vacancies-panorama/panorama.jpg" data-width="1885" data-height="400" alt="Наши офисы" style="left: 0px;"><img src="http://mossebo.studio/wp-content/themes/mossebo-remont/dir/img/franchise/franchise-pano/__office.jpg" data-width="1885" data-height="400" alt="Наши офисы" style="left: 1885px;">
        </div>
      </div>
    </div>

    <div class="col-xl-10 offset-xl-1">
      <div class="row">
        <?php
        if ( has_Children( $cat_id ) ) {
          get_template_part( 'taxonomy-office/perent-cat' );
        } else {
          get_template_part( 'taxonomy-office/child-cat' );
        }
        ?>
      </div>
    </div>
  </div>

  <!-- feedback-form block -->
  <?php get_template_part( '/template/vacancies/vacancies-feedback' ); ?>

</div>

<?php get_footer(); ?>
