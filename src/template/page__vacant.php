<?php
/*
Template Name: Страница - Все вакансии
*/
get_header();
?>


<div class="page-vacant-header container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="row">

                <div class="col-12">
                    <h1 class="page-vacant-header__title">Вакансии</h1>
                </div>

                <div class="col-md-6 col-12">
                    <!-- Sub title -->
                    <h2 class="page-vacant-header__subtitle">
                        Вы можете познакомиться с нашей компанией с помощью  HR-видео
                    </h2>
                    <!-- YouTube player -->
                    <div class="youtube-player"
                         data-youtube-player-src-img="/wp-content/uploads/Mark-1.jpg"
                         data-youtube-player-id="fW9mAe1aMG4">
                        <div class="youtube-player__img-preview youtube-player__img-preview_theme-light"></div>
                    </div>
                    <!-- About us write -->
                    <!--<div class="page-vacant-header__subtitle">Приветственное слово директора отдела маркетинга
                    </div> -->
                </div>
                <div class="col">
                    <!-- feedback-form block -->
                    <?php get_template_part('/template/vacancies/vacancies-feedback'); ?>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Feauteres -->
<div class="page-vacant-head-office container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="page-vacant-head-office__title">Управляющая компания</div>
            <div class="page-vacant-head-office__subtitle">Санкт-Петербург</div>
            <div class="page-vacant-head-office__desc">К нам в команду требуется:</div>
            <div class="row">
                <?php
                if( have_rows('vacant_list') ):
                    while ( have_rows('vacant_list') ) : the_row(); ?>
                    <?php if(get_sub_field('vacant_on') == true) { ?>
                        <div class="col-md-3">
                            <div class="page-vacant-head-office__item"
                                 style="background-image: url(<?php the_sub_field('vacant_image'); ?>);"
                                 onclick="location.href='<?php the_sub_field('vacant_url'); ?>'">
                                <div class="page-vacant-head-office__item_bg">
                                    <a href="<?php the_sub_field('vacant_url'); ?>">
                                        <?php the_sub_field('vacant_name'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    endwhile;
                else :
                    // no rows found
                endif;
                ?>
            </div>
            <div class="row page-vacant-head-office__filials">
                <div class="col-12">
                    <div class="page-vacant-head-office__title">Филиалы</div>
                </div>
            </div>
            <div class="row page-vacant-head-office__filials">
                <!-- Contact's -->
                <?php if(get_field('contact_page_second_address_repeator', 39)): ?>
                    <?php while(has_sub_field('contact_page_second_address_repeator', 39)): ?>
                        <div class="col-md-3">
                            <div class="page-vacant-head-office__filials-name">
                                <?php the_sub_field('contact_page_second_address_city'); ?>
                            </div>
                            <a href="/interior-designer/">Дизайнер интерьера</a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <!-- Contact's row END -->
            </div>
        </div>
    </div>
</div>


<?php get_template_part('template/filial-map'); ?>


<!-- Feauteres world -->
<div class="page-franchising-world container-fluid">
    <div class="row">
        <div class="page-franchising-world__grid col col-sm-4 col-12">
            <div class="page-franchising-world__grid-title">Лидер отрасли</div>
            <div class="page-franchising-world__grid-description">Крупнейший бренд по дизайну интерьера в мире</div>
        </div>
        <div class="page-franchising-world__grid col col-sm-4 col-12">
            <div class="page-franchising-world__grid-title">8 часовых поясов</div>
            <div class="page-franchising-world__grid-description">Работа call-центра и маркетинга адаптирована для всех
                регионов
            </div>
        </div>
        <div class="page-franchising-world__grid col col-sm-4 col-12">
            <div class="page-franchising-world__grid-title">5 стран</div>
            <div class="page-franchising-world__grid-description">Международный статус открывает двери для любых
                поставщиков
            </div>
        </div>
    </div>
</div>


<!-- Offices Panorama -->
<div class="page-franchising-offices">
    <div class="container-fluid">
        <div class="page-franchising-offices__title">Студии дизайна интерьера Mossebo</div>
        <div class="page-franchising-offices__description">Наши студии оформлены в едином стиле и созданы для работы творческих людей.
        </div>
    </div>
    <div class="panorama"
         data-pano-mobile-src="/wp-content/themes/mossebo/assets/images/vacancies/vacant_office_mobile.jpg">
        <div class="panorama-view">
            <div class="panorama-container">
                <img src="/wp-content/themes/mossebo/assets/images/vacancies/vacant_office.jpg"
                     usemap="hotspots" data-width="1927" data-height="580" alt="Оформление студий дизайна"/>
            </div>
        </div>
    </div>
</div>


<!-- Feauteres -->
<div class="page-vacant-structure container-fluid">
    <div class="page-vacant-structure__title">Руководители компании</div>
    <div class="page-vacant-structure__subtitle">Три сооснователя компании Mossebo руководят отделами компании, в каждом из которых возможен вертикальный и горизонтальный карьерный рост.
    </div>
    <div class="row">
        <div class="col-12">
            <img src="/wp-content/themes/mossebo/assets/images/vacancies/structure.png" alt="" class="mobile_hide">
            <img src="/wp-content/themes/mossebo/assets/images/vacancies/structure_mobile.png" alt="" class="mobile_show">
        </div>
    </div>
</div>





<div class="page-vacant__footer-form">
    <!-- feedback-form block -->
    <?php get_template_part( '/template/vacancies/vacancies-feedback' ); ?>
</div>

<?php get_footer(); ?>
