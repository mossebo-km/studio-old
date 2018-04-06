<section id="main-page-social">
  <div class="container-fluid">

    <!-- Inctagram -->
    <div class="social-inst">
      <div class="row">
        <div class="col-xl-12 text-center">
          <h2 class="section-title">Мы в соцсетях</h2>
        </div>
        <div class="col-xl-6 text-left"><img class="inst-icon" height="50" width="50" src="<?php echo THEME_DIR; ?>/assets/images/icon/instagram_section.svg" alt="instagram"></div>
        <div class="col-xl-6 text-right text-center-sm text-center-xs"><a href="https://www.instagram.com/remont.design/" target="_blank" class="link-arrow">Перейти  в Instagram</a></div>
      </div>
      <!-- Inctagram item -->
      <?php
        $rows = get_field( 'main_page_instagram_section_option', 'option');
        if ( $rows ) {
        	echo '<a href="https://www.instagram.com/remont.design/" target="_blank"><div class="row inst-photo-row">';
        	foreach( $rows as $row ) {
        		echo '<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-3 main-page-social-item" style="background: url(' . $row[ 'main_page_instagram_section_item_option' ] . ') no-repeat scroll 50% 50% / cover content-box;"></div>';
        	}
        	echo '</div></a>';
        }
      ?>
    </div><!-- Inctagram END -->

    <!-- YouTube -->
    <div class="social-youtube">

      <!-- Title -->
      <div class="row">
        <div class="col-xl-6 text-left"><img class="inst-icon" height="50" width="50" src="<?php echo THEME_DIR; ?>/assets/images/icon/social/youtube-logo.svg" alt="YouTube"></div>
        <div class="col-xl-6 text-right text-center-sm text-center-xs"><a href="https://www.youtube.com/channel/UCmYjYyeZDuFb9hOgEUNYJuQ/featured" target="_blank" class="link-arrow">Больше наших видео на YouTube</a></div>
      </div>

      <!-- Yotube item -->
      <?php
        $rows = get_field( 'main_page_youtube_section_option', 'option');
        if ( $rows ) { ?>
        	<div class="row youtube-row-fix">
          	<?php foreach( $rows as $row ) { ?>
              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 main-page-social-item-youtube">

                <div class="youtube-player" data-youtube-player-src-img="<?php echo $row[ 'main_page_youtube_section_item_option_img' ]; ?>" data-youtube-player-id="<?php echo $row[ 'main_page_youtube_section_item_option_id' ]; ?>">
                  <div class="youtube-player__img-preview youtube-player__img-preview_theme-bnw"></div>
                </div>

                <h3 class="text-description"><?php echo $row[ 'main_page_youtube_section_item_option_name' ]; ?></h3>
              </div>
          	<?php } ?>
        	</div>
        <?php }
      ?>

    </div> <!-- YouTube END -->

  </div> <!-- container-fluid END -->
</section> <!-- Section social END -->
