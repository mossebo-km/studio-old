</main> <!-- Main container EMD -->

<!-- Main footer -->
<footer id="main-footer">

    <!-- Yandex.Map -->
    <?php
    $footer_map_lat = geoInit('location-lat');
    $footer_map_lot = geoInit('location-lon');
    $footer_map_city = geoInit('city');
    $footer_map_address = geoInit('address');

    if (is_front_page() && isset($footer_map_lat) && isset($footer_map_lot) && isset($footer_map_city) && isset($footer_map_address)) {
        echo '<div id="map-main-page" data-coordinates-lat="' . $footer_map_lat . '" data-coordinates-lot="' . $footer_map_lot . '" data-geo-city="' . $footer_map_city . '" data-geo-address="' . $footer_map_address . '"></div>';
    }
    ?>

    <div class="container-fluid footer-top-container-wrapper">

        <!-- Footer top -->
        <div class="footer-top">
            <div class="row">

                <!-- Logo -->
                <div class="col-xl-3 col-lg-2 col-md-2">
                    <a href="<?php echo get_home_url(); ?>">
                        <img src="<?php echo THEME_DIR; ?>/assets/images/header/logo-mossebo.svg"
                             alt="Mossebo" class="footer-logo">
                    </a>
                </div>

                <!-- Address -->
                <div class="col-xl-2 col-lg-3 col-md-3 footer-col-contacts">
                    <div class="footer-col-contact__wrapper text-bold">

                        <?php
                        $addres_footer = geoInit('address');
                        $phone_footer = geoInit('phone');
                        if (isset($addres_footer) && isset($phone_footer)) { ?>
                            <address
                                class="footer-adress text-center-sm text-center-xs footer-col-contacts-sm-3"><?php echo geoInit('address'); ?></address>
                            <div
                                class="footer-phone-block text-center-sm text-center-xs footer-col-contacts-sm-3 phone-geo ">
                                <div class="footer-phone"><a
                                        href="tel:<?php echo geoInit('phone'); ?>"><?php echo geoInit('phone'); ?></a>
                                </div>
                                <div class="footer-phone-info">10:00-19:00 пн-пт</div>
                            </div>
                        <?php } ?>

                        <div class="footer-phone-block text-center-sm text-center-xs footer-col-contacts-sm-3">
                            <div class="footer-phone"><a href="tel:8-800-707-83-47">8-800-707-83-47</a></div>
                            <div class="footer-phone-info">служба контроля качества</div>
                        </div>
                    </div>
                </div>

                <!-- Subscribe form-->
                <div class="col-xl-3 col-lg-4 col-md-4">
                    <div class="footer-form-col text-center">
                        <h3>Подписаться на новости</h3>
                        <form class="footer-subscribe" method="POST">
                            <input class="subscribe-email-input" type="text" placeholder="введите ваш e-mail">
                            <button class="btn btn_1" type="submit">Подписаться</button>
                        </form>
                    </div>
                </div>

                <!-- Social link's -->
                <div class="col-xl-4 col-lg-3 col-md-3">
                    <div class="icon-social-link">
                        <h3>Присоединяйтесь</h3>
                        <div class="item-social-link-icon">
                            <a href="https://www.facebook.com/mossebodesign/" target="_blank"><i
                                    class="footer-soc-icon fb"></i></a>
                            <a href="https://vk.com/design_mossebo" target="_blank"><i
                                    class="footer-soc-icon vk"></i></a>
                            <a href="https://ok.ru/group/53291776606394" target="_blank"><i
                                    class="footer-soc-icon odn"></i></a>
                            <a href="https://www.instagram.com/remont.design/" target="_blank"><i
                                    class="footer-soc-icon inst"></i></a>
                            <a href="https://www.youtube.com/channel/UCmYjYyeZDuFb9hOgEUNYJuQ/featured" target="_blank"><i
                                    class="footer-soc-icon you"></i></a>
                        </div>
                        <iframe src="/wp-content/themes/mossebo/template/yell.html" frameborder="0" width="160"
                                height="60" style="margin-top: 15px;"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer bottom -->
    <div class="footer-bottom">
        <div class="container-fluid footer-bottom-container-wrapper">
            <div class="row">
                <div class="col-xl-10 offset-xl-1 col-md-12">
                    <div class="row">
                        <div class="col-xl-8">
                    <nav class="footer">
                        <?php wp_nav_menu('menu=footer'); ?>
                    </nav>
                        </div>
                        <div class="col-xl-4 text-right">
                            <!-- Yandex.Metrika informer -->
                            <a href="https://metrika.yandex.ru/stat/?id=42716444&amp;from=informer"
                               target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/42716444/3_1_FFFFECFF_FFFFCCFF_0_pageviews"
                                                                   style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="42716444" data-lang="ru" /></a>
                            <!-- /Yandex.Metrika informer -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="copyright">
                                <div class="copyright__row">Copyright &copy; 2017 MOSSEBO | <a
                                        href="/politika-konfidentsialnosti/">Политика конфиденциальности</a> | <a
                                        href="/polozhenie-o-poryadke-hraneniya-i-zashhityi-personalnyih-dannyih-polzovateley/">Защита персональных данных</a></div>
                                <div class="copyright__row">Информация на сайте не является публичной офертой</div>
                            </div>
                        </div>
                        <!-- Share BTN's -->
                        <div class="col-xl-4 text-right">
                            <div class="ya-share2" data-services="vkontakte,facebook,gplus,odnoklassniki,telegram"
                                 data-counter=""
                                 data-image="<?php echo THEME_DIR; ?>/assets/images/header/logo.jpg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Menu BTN -->
<div id="nav-icon3">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
</div>

<!-- Menu overlay -->
<div class="mobile-menu-overlay" data-overlay="close" style="display:none;"></div>

</div>

<!-- Back top -->
<div class="back-top"></div>

<?php get_template_part('template/header-modal-form/modal-form'); ?>
<?php get_template_part('template/tnxpage/modal_tnx'); ?>

<?php // franchise page
if (is_page(979)) { ?>
    <!-- feeedback-forom modal  -->
    <div class="feedback-form-modal mfp-hide">
        <?php feedback_form(array(
            'feedback-form__id' => 1, // Описание после полей
            'feedback-form__form-place' => 'В модально окне', // Имя формы
            'feedback-form__class' => 'franchise-page-feedback__feedback-form', // class
            'feedback-form__mail-input' => true, // Поле email
            'feedback-form__title' => 'Узнайте подробнее', // Заголовок
            'feedback-form__title-sub' => 'о старте бизнеса под брендом Mossebo у руководителя отдела франчайзинга', // Подзаголовок
            'feedback-form__text-description' => '', // Описание после полей
            'feedback-form__btn-value' => 'Отправить', // Описание после полей
        )); ?>
    </div>
    <!-- feeedback forom thank modal  -->
    <div class="feedback-form-modal-thank-page white-popup-block mfp-hide">
        <h3 class="section-title text-center">Спасибо за заявку!</h3>
        <div class="tnx-descr">Смотрите YouTube канал основателей Mossebo Хайповый Бизнес</div>
        <div class="tnx-vido">
            <div class="youtube-player feedback-form-modal-thank-page__youtube-player"
                 data-youtube-player-src-img="/wp-content/uploads/Zaglushka-Prezentatsiya-franshizyi-1920h1080-2-1.jpg"
                 data-youtube-player-id="VIBVyQ8P02M">
                <div class="youtube-player__img-preview youtube-player__img-preview_theme-bnw"></div>
            </div>
        </div>
        <div class="tnx-descr">А также скачайте нашу презентацию:</div>
        <a href="<?php echo THEME_DIR; ?>/assets/mossebo.pdf" download
           class="btn btn_1 feedback-form-modal-thank-page__btn">Скачать презентацию</a>
    </div>

<?php } else if (is_page(1671)) {  // page-service__help-getting ?>
    <!-- feeedback-forom modal  -->
    <div class="feedback-form-modal mfp-hide">
        <?php feedback_form(array(
            'feedback-form__id' => 2, // Id формы
            'feedback-form__form-place' => 'В модально окне', // Имя формы
            'feedback-form__class' => 'franchise-page-feedback__feedback-form', // class
            'feedback-form__title' => 'Получите <span class="text-primary">бесплатную</span> помощь при приемке квартиры в новостройке:', // Заголовок
            'feedback-form__text-description' => '* Вам перезвонят и согласуют встречу', // Описание после полей
            'feedback-form__btn-value' => 'Получить помощь', // Описание после полей
        )); ?>
    </div>
    <!-- feeedback forom thank modal  -->
    <div class="feedback-form-modal-thank-page white-popup-block mfp-hide">
        <h3 class="section-title text-center">Спасибо за заявку!</h3>
        <div class="tnx-descr">Смотрите YouTube канал основателей Mossebo Хайповый Бизнес</div>
        <div class="tnx-vido">
            <div class="youtube-player feedback-form-modal-thank-page__youtube-player"
                 data-youtube-player-src-img="/wp-content/uploads/Vyipusk-26-Skolkovo_3.jpg"
                 data-youtube-player-id="xYLQzjrT5AI">
                <div class="youtube-player__img-preview youtube-player__img-preview_theme-bnw"></div>
            </div>
        </div>
        <div class="tnx-descr">А также скачайте нашу презентацию:</div>
        <a href="<?php echo THEME_DIR; ?>/assets/mossebo.pdf" download
           class="btn btn_1 feedback-form-modal-thank-page__btn">Скачать презентацию</a>
    </div>
<?php } ?>

<?php wp_footer(); ?>

<?php get_template_part('template/cookie'); ?>
<img src="//code.directadvert.ru/track/316797.gif" width="1" height="1" />
</body>
</html>
