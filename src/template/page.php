<?php get_header(); ?>

  <div class="container-fluid">

    <!-- Title -->
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="section-title news-page-title"><?php echo get_the_title(); ?></h1>
      </div>
    </div>

    <!-- Post -->
    <div class="row">
      <div class="news-page-wrapper">
        <div class="col-12">
          <?php
          if ( have_posts() ) {
          	while ( have_posts() ) {
          		the_post();
              the_content();
          	} // end while
          } // end if
          ?>
        </div>
      </div>
    </div>

  </div><!-- Container fluid END -->

<?php get_footer(); ?>
