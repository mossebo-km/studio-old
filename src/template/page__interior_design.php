<?php
/**
 * Created by IntelliJ IDEA.
 * User: vladstarkovsky
 * Date: 30.10.2017
 * Time: 11:44
 * Template Name: Страница - Дизайн Интерьера
 */

get_header();

$form_office_address = geoInit( 'address' );
$form_city_name_geo = geoInit( 'city' );
#Рандомные числа для id радиокнопок калькулятора,
$radio_id = rand();
$radio_id_2 = rand();
#Рандомное чилсо для id select
$select_id = rand();
?>
<!-- Banner -->
<div class="page-interior-design-main container-fluid">
    <div class="row">
        <!-- title -->
        <div class="col-xl-11 offset-xl-1">
            <h1 class="page-interior-design-main__title">
                <?php $main_title_geo = geoInit( 'title' );
                if ( isset( $main_title_geo ) ) {
                    echo $main_title_geo;
                } else {
                    echo 'Дизайн и ремонт интерьера по всей России и СНГ';
                } ?>
            </h1>
            <h2 class="page-interior-design-main__subtitle">Создаем дизайн квартир, коттеджей и коммерческих помещений</h2>
        </div>

        <!-- Calculator block -->
        <div class="col-12">
            <?php feedback_form_calc( array(
                'form-place' => 'Общая', // Form name
                'title' => 'Рассчитайте стоимость дизайна вашей квартиры <span class="text-primary">прямо сейчас:</span>', // Title
                'steps' => array( // Step's
                    'step-1' => array( // Step 1
                        'label' => 'Укажите площадь помещения:',
                        'placeholder' => 'площадь помещения, м²'
                    ),
                    'step-2' => array( // Step 2
                        'label' => 'Укажите тип помещения:',
                        'options' => array( 'Новостройка', 'Вторичное жилье', 'Загородный дом' ),
                        'radio-label' => 'Нужен ли вам дизайн интерьера?'
                    ),
                ),
            )); ?>
        </div>
    </div>
</div>


<!-- Feauteres -->
<div class="feauteres container-fluid">
    <div class="row">
        <div class="feauteres__grid col-sm-4">
            <i class="feauteres__icon feauteres__icon_1"></i>
            <div class="feauteres__text">Работа по договору</div>
            <div class="feauteres__description">Дизайнер следит за работой строительной бригады на всем протяжении ремонта</div>
        </div>
        <div class="feauteres__grid col-sm-4">
            <i class="feauteres__icon feauteres__icon_2"></i>
            <div class="feauteres__text">Несколько вариантов дизайна</div>
            <div class="feauteres__description">Всю рабочую документацию, скетчи и наглядные 3D визуализации интерьера специалисты Mossebo разработают за 30 дней или быстрее</div>
        </div>
        <div class="feauteres__grid col-sm-4">
            <i class="feauteres__icon feauteres__icon_3"></i>
            <div class="feauteres__text">Дизайн-проект и ремонт в одной компании</div>
            <div class="feauteres__description">Разрабатываем дизайн, отвечающий индивидуальным пожеланиям заказчика, и воплощаем проект в жизнь. Берем на себя все этапы реализации проекта – от идеи до финального декора.</div>
        </div>
    </div>
</div>



<?php get_footer(); ?>
