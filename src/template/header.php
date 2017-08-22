<!DOCTYPE html>
<html lang="ru">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
  <meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="yandex-verification" content="9ab0ea495752e5b0" />
	<title><?php wp_title('-', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>
  <body <?php body_class(); ?>>
    <!-- Main wrapper -->
    <div id="main-wrapper" class="wrapper">
      <!-- Main-header -->
      <header id="main-header">
        <div class="logo-header">
          <a href="<?php echo get_home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/logo.svg" alt="Mossebo дизайн и ремонт">
          </a>
        </div>
        <!-- Main navigation -->
        <nav id="main-nav">
          <?php wp_nav_menu( 'menu=main' ); ?>
        </nav>
        <div class="header-btn-block">

          <?php if ( is_page( 979 ) ) { ?>
            <button type="button" class="franchise-page-feedback-form-modal btn btn_1">Подробнее о франшизе</button>
          <?php } else { ?>
            <button type="button" id="modal_btn_modal" class="btn btn_1">Рассчитать онлайн</button>
          <?php } ?>

        </div>

        <!-- Contact block -->
        <div class="heade-contact-block">
          <address>
            <?php
            $header_addres_geo = geoInit( 'address' );
            $header_phone_geo = geoInit( 'phone' );

            if ( isset( $header_addres_geo ) ) {
              echo '<div class="adress">' . $header_addres_geo . '</div>';
            }

            if ( isset( $header_phone_geo ) ) {
              echo '<div class="header-phone phone-geo"><div class="phone-number"><a href="tel:' . $header_phone_geo . '">' . $header_phone_geo . '</a></div><div class="phone-info">10:00-19:00 пн-пт</div></div>';
            }
            ?>
            <div class="header-phone">
              <div class="phone-number"><a href="tel:8-800-707-83-47">8-800-707-83-47</a></div>
              <div class="phone-info">служба контроля качества</div>
            </div>
          </address>
        </div>

        <!-- Social link -->
        <div class="icon-social-link">
          <div class="item-social-link-icon text-left">
            <a href="https://www.facebook.com/mossebodesign/" target="_blank"><i class="footer-soc-icon fb"></i></a>
            <a href="https://vk.com/design_mossebo" target="_blank"><i class="footer-soc-icon vk"></i></a>
            <a href="https://ok.ru/group/53291776606394" target="_blank"><i class="footer-soc-icon odn"></i></a>
            <a href="https://www.instagram.com/remont.design/" target="_blank"><i class="footer-soc-icon inst"></i></a>
            <a href="https://www.youtube.com/channel/UCmYjYyeZDuFb9hOgEUNYJuQ/featured" target="_blank"><i class="footer-soc-icon you"></i></a>
          </div>
        </div>

      </header><!-- Main header END -->

      <!-- MAIN content -->
      <main id="main-container">
