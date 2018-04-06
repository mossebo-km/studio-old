<?php
/*
Template Name: Контакты - LV
*/

get_header();

?>

<div id="contact-page">
    <div class="container-fluid">

        <!-- Title -->
        <div class="text-center">
            <h1 class="section-title">KONTAKTI</h1>
            <h2 class="sub-title">Visas studijas Mossebo pasaulē</h2>
        </div>

        <!-- Yandex.Map -->
        <?php
        $footer_map_lat = geoInit('location-lat');
        $footer_map_lot = geoInit('location-lon');
        $footer_map_city = geoInit('city');
        $footer_map_address = geoInit('address');
        $phone_footer = geoInit('phone');

        if (isset($footer_map_lat) && isset($footer_map_lot) && isset($footer_map_city) && isset($footer_map_address)) : ?>
            <h3 class="contact-sub-title-page text-center-sm text-center-xs">Офис Mossebo в вашем городе</h3>
            <div class="row">
                <div class="col-xl-5">
                    <div class="contact-page-item-adress">
                        <span class="contact-page-city-name text-primary"><?php echo $footer_map_city; ?></span>
                        <address class="contact-page-adress-item">
                            <?php echo $footer_map_address; ?><br>
                            <a href="tel:<?php echo $phone_footer; ?>"><?php echo $phone_footer; ?></a>
                        </address>
                    </div>
                </div>
            </div>
            <!-- YaMap -->
            <div class="row">
                <div class="yandex-map"
                     id="map-main-page"
                     data-coordinates-lat="<?php echo $footer_map_lat; ?>"
                     data-coordinates-lot="<?php echo $footer_map_lot; ?>"
                     data-geo-city="<?php echo $footer_map_city; ?>"
                     data-geo-address="<?php echo $footer_map_address; ?>">

                </div>
            </div>
        <?php endif; ?>


        <!-- Contact section block -->
        <h3 class="contact-sub-title-page text-center-sm text-center-xs">Galvenais ofiss</h3>

        <div class="row">
            <div class="col-xl-5">
                <div class="contact-page-item-adress">
                    <span
                        class="contact-page-city-name text-primary"><?php the_field('contact_page_main_address_city') ?></span>
                    <address class="contact-page-adress-item">
                        <?php the_field('contact_page_main_address_address') ?>
                    </address>
                </div>
            </div>

            <div class="col-xl-7 contact-page-item-email">
                <p>
                    <a href="mailto:franchise@mossebo.ru">franchise@mossebo.ru</a> — jautājumiem par Mossebo studijas atklāšanu <br>
                    <a href="mailto:support@mossebo.ru">support@mossebo.ru</a> — atbalsta daļa<br>
                    <a href="mailto:hr@mossebo.ru">hr@mossebo.ru</a> — kadru daļa<br>
                    <a href="mailto:marketing@mossebo.ru">marketing@mossebo.ru</a> — mārketinga un reklāmas daļa<br>
                    <a href="mailto:lawyer@mossebo.ru">lawyer@mossebo.ru</a> — juridiskā daļa<br>
                    <a href="mailto:info@mossebo.ru">info@mossebo.ru</a> — sadarbība un pārējie jautājumi<br>
                    <a href="mailto:product@mossebo.market">product@mossebo.market</a> — mēbeļu, apdares materiālu un dekora ražotājiem
                </p>
            </div>
        </div>


        <!-- Contact section block -->
        <h3 class="contact-sub-title-page text-center-sm text-center-xs">Studijas</h3>

        <!-- YaMap -->
        <div class="row">
            <div id="yandex-map-claster-office"></div>
        </div>

        <!-- Contact's -->
        <?php if (get_field('contact_page_second_address_repeator')): ?>
            <?php while (has_sub_field('contact_page_second_address_repeator')) : ?>
                <div class="row">
                    <!-- Contact item -->
                    <div class="col-xl-6">
                        <div class="contact-page-item-adress">
                            <span
                                class="contact-page-city-name"><?php the_sub_field('contact_page_second_address_city'); ?></span>
                            <address class="contact-page-adress-item">
                                <?php the_sub_field('contact_page_main_second_address'); ?>
                            </address>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <!-- Contact's row END -->

    </div>  <!-- Container fluid END -->
</div> <!-- Contact page Wrapper END -->

<?php get_footer(); ?>
