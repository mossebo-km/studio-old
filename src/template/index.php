<?php get_header(); ?>

  <!-- Title -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-12 text-center">
        <h1 class="section-title news-page-title">Новости</h1>
      </div>
    </div>
  </div>

  <!-- News page wrapper -->
  <div class="news-page-wrapper">

    <div class="container-fluid">
      <div class="row">

        <!-- Left side content -->
        <div class="col-xl-8 col-lg-12">
          <div class="content-left">

            <?php if (have_posts()) {
            // Цикл вывода записей
            while (have_posts()) {
            	the_post();
            	get_template_part('template/blog/content', 'blog');
            } // Конец цикла вывода записей

            // Пагинация
            echo paginate_links( $args_pagination );
            } else {
              get_template_part('no-results', 'index');
            } // Конец условия ?>

          </div>
        </div> <!-- Left side content END -->

        <!-- Right sidebar -->
        <?php get_template_part( 'template/sidebar' ) ?>

      </div> <!-- Row END -->
    </div> <!-- Container fluid END -->
  </div> <!-- News page wrapper END -->

<?php get_footer(); ?>
