<?php
/**
 * Created by IntelliJ IDEA.
 * User: vladstarkovsky
 * Date: 30.10.2017
 * Time: 11:44
 * Template Name: Страница - Дизайн Интерьера
 */

get_header();

$form_office_address = geoInit('address');
$form_city_name_geo = geoInit('city');
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
                <?php $main_title_geo = geoInit('title');
                if (isset($main_title_geo)) {
                    echo $main_title_geo;
                } else {
                    echo 'Дизайн и ремонт интерьера по всей России и СНГ';
                } ?>
            </h1>
            <h2 class="page-interior-design-main__subtitle">Создаем дизайн квартир, коттеджей и коммерческих
                помещений</h2>
        </div>

        <!-- Calculator block -->
        <div class="col-12">
            <?php feedback_form_calc(array(
                'form-place' => 'Общая', // Form name
                'title' => 'Рассчитайте стоимость дизайна вашей квартиры <span class="text-primary">прямо сейчас:</span>', // Title
                'steps' => array( // Step's
                    'step-1' => array( // Step 1
                        'label' => 'Укажите площадь помещения:',
                        'placeholder' => 'площадь помещения, м²'
                    ),
                    'step-2' => array( // Step 2
                        'label' => 'Укажите тип помещения:',
                        'options' => array('Новостройка', 'Вторичное жилье', 'Загородный дом'),
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
            <div class="feauteres__description">Строго соблюдаем сроки выполнения работ, прописанные в договоре, не
                выходим за рамки оговоренного бюджета и разбиваем платежи на удобные этапы.
            </div>
        </div>
        <div class="feauteres__grid col-sm-4">
            <i class="feauteres__icon feauteres__icon_2"></i>
            <div class="feauteres__text">Несколько вариантов дизайна</div>
            <div class="feauteres__description">Предлагаем от 3 до 5 вариантов дизайна Вашего будущего интерьера,
                демонстрирующие разные стили, концепции и цветовые решения. Вам точно будет из чего выбирать.
            </div>
        </div>
        <div class="feauteres__grid col-sm-4">
            <i class="feauteres__icon feauteres__icon_3"></i>
            <div class="feauteres__text">Дизайн-проект и ремонт в одной компании</div>
            <div class="feauteres__description">Разрабатываем дизайн, отвечающий индивидуальным пожеланиям заказчика, и
                воплощаем проект в жизнь. Берем на себя все этапы реализации проекта – от идеи до финального декора.
            </div>
        </div>
    </div>
</div>


<section id="main-page-portfolio" class="page-interior-design-portfolio">
    <div id="portfolio" class="container-fluid">
        <div class="page-interior-design-portfolio__title">Портфолио</div>

        <div class="page-interior-design-portfolio__style">
            <a @click="CategoryName = 'Все'">Все стили</a>
            <a @click="CategoryName = 'Скандинавский'">Скандинавский</a>
            <a @click="CategoryName = 'Классический'">Классический</a>
            <a @click="CategoryName = 'Hi-Tech'">Hi-Tech</a>
            <a @click="CategoryName = 'Современный'">Современный</a>
            <a @click="CategoryName = 'Фьюжн'">Фьюжн</a>
            <a @click="CategoryName = 'Бохо'">Бохо</a>
            <a @click="CategoryName = 'Необарокко'">Необарокко</a>
            <a @click="CategoryName = 'Лофт'">Лофт</a>
            <a @click="CategoryName = 'Рустика'">Рустика</a>
            <a @click="CategoryName = 'Ар-нуво'">Ар-нуво</a>
            <a @click="CategoryName = 'Ар-деко'">Ар-деко</a>
            <a @click="CategoryName = 'Поп-арт'">Поп-арт</a>
            <a @click="CategoryName = 'Эко'">Эко</a>
            <a @click="CategoryName = 'Средиземноморский'">Средиземноморский</a>
            <a @click="CategoryName = 'Сталинский ампир'">Сталинский ампир</a>
            <a @click="CategoryName = 'Ретро'">Ретро</a>
            <a @click="CategoryName = 'Английский'">Английский</a>
            <a @click="CategoryName = 'Прованс'">Прованс</a>
            <a @click="CategoryName = 'Неоклассика'">Неоклассика</a>
        </div>

        <?php
        $query_portfolio = new WP_Query([
            'post_type' => 'portfolio',
            'posts_per_page' => -1
        ]);
        if ($query_portfolio->have_posts()) {
            ?>
            <div class="row">
                <div class="portfolio-mobile-carousel">
                    <?php
                    while ($query_portfolio->have_posts()) {
                        $query_portfolio->the_post(); ?>
                        <div class="col-md-3 col-sm-12 padding-5 padding-50-sm-portfolio"
                             :key="<?php the_ID(); ?>"
                             v-if="('Все,<?php the_field('port_project_sidebar_row'); ?>').includes(CategoryName)"
                        >
                            <div class="grid">
                                <figure class="effect-roxy">
                                    <div class="roxy-grid-img-bg"
                                         style="background: url(<?php the_field('port_img_header') ?>) 50% 50% no-repeat; background-size: cover;"></div>
                                    <figcaption>
                                        <p class="text-center"><?php the_field('port_title'); ?></p>
                                        <span class="link-arrow">Подробнее</span>
                                        <a class="main-link" href="<?php the_permalink(); ?>">Перейти</a>
                                    </figcaption>
                                </figure>
                                <!-- Only mobile -->
                                <div class="mobile-row-portfolio-info text-left text-center-sm">
                                    <span class="mobile-geid-title"><?php the_field('port_title'); ?></span>
                                    <a href="<?php the_permalink(); ?>" class="link-arrow">Подробнее</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <?php
        } else {
            echo 'В данной категории постов нет';
        }
        ?>
    </div>
</section>

<!-- call to action -->
<div class="page-franchising-call-to-action container-fluid"
     style="background-image: url(//mossebo.studio/wp-content/uploads/page__franchising/call-to-action.jpg);">
    <div class="page-franchising-call-to-action__title">Хотите увидеть больше?</div>
    <div class="page-franchising-call-to-action__subtitle"> У нас в офисе вы можете ознакомиться
        с полной базой дизайна интерьера </div>
    <button class="page-franchising-call-to-action__btn btn btn_1" type="button">Назначить встречу</button>
</div>


<div class="page-interior-design-steps container-fluid">
    <div class="page-interior-design-steps__grid">
        <div class="page-interior-design-steps__item page-interior-design-steps__item_first">
            Этапы<br>
            разработки<br>
            дизайн-проекта
        </div>
        <div class="page-interior-design-steps__item step_1">
            <div class="page-interior-design-steps__step_image"></div>
            <div class="page-interior-design-steps__step_num">1</div>
            <div class="page-interior-design-steps__step_text">Встречаемся на объекте</div>
        </div>
        <div class="page-interior-design-steps__item step_2">
            <div class="page-interior-design-steps__step_image"></div>
            <div class="page-interior-design-steps__step_num">2</div>
            <div class="page-interior-design-steps__step_text">Фиксируем ваши пожелания</div>
        </div>
        <div class="page-interior-design-steps__item step_3">
            <div class="page-interior-design-steps__step_image"></div>
            <div class="page-interior-design-steps__step_num">3</div>
            <div class="page-interior-design-steps__step_text">Ищем возможные решения</div>
        </div>
    </div>
    <div class="page-interior-design-steps__grid page-interior-design-steps__grid_revers">
        <div class="page-interior-design-steps__item step_4">
            <div class="page-interior-design-steps__step_image"></div>
            <div class="page-interior-design-steps__step_num">4</div>
            <div class="page-interior-design-steps__step_text">Рисуем первые скетчи</div>
        </div>
        <div class="page-interior-design-steps__item step_5">
            <div class="page-interior-design-steps__step_image"></div>
            <div class="page-interior-design-steps__step_num">5</div>
            <div class="page-interior-design-steps__step_text">Создаем 3D рендеры</div>
        </div>
        <div class="page-interior-design-steps__item step_6">
            <div class="page-interior-design-steps__step_image"></div>
            <div class="page-interior-design-steps__step_num">6</div>
            <div class="page-interior-design-steps__step_text">Подготавливаем информацию</div>
        </div>
        <div class="page-interior-design-steps__item step_7">
            <div class="page-interior-design-steps__step_image"></div>
            <div class="page-interior-design-steps__step_num">7</div>
            <div class="page-interior-design-steps__step_text">Формируем дизайн-проект</div>
        </div>
    </div>
</div>

<!-- Bran style -->
<div class="page-franchising-style">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="page-franchising-style__title">Что вы получаете в итоге?</div>
                <div class="page-franchising-style__description">Визуальные материалы и всю необходимую документацию, руководствуясь которой ремонтная бригада сможет воплотить в жизнь вашу мечту об идеальном интерьере
                </div>
                <div class="page-franchising-style__img">
                    <img class="page-franchising-style__img_desctop"
                         src="//mossebo.studio/wp-content/uploads/page__interior_design/bg_pc.png"
                         alt="Единый фирменный стиль по всему миру">
                    <img class="page-franchising-style__img_mobile"
                         src="//mossebo.studio/wp-content/uploads/page__interior_design/bg_mobile.png"
                         alt="Единый фирменный стиль по всему миру">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Seasons -->
<div class="page-franchising-musthave container-fluid">
    <div class="page-franchising-musthave__title">В готовый дизайн-проект входит:</div>
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="row">
                <div class="col-md-6 page-franchising-musthave__have">
                    <ul>
                        <li>Эскизная часть (от 3-х до 5-ти вариантов перепланировки)</li>
                        <li>Визуализация первоначальных эскизов планировок</li>
                        <li>Техническое задание</li>
                        <li>Обмерный план</li>
                        <li>План демонтажа</li>
                        <li>План монтажа возводимых перегородок</li>
                        <li>Сводный план (Демонтаж + Монтаж)</li>
                        <li>План напольных покрытий</li>
                        <li>План потолка</li>
                        <li>План возводимых перегородок с маркировкой оконных и дверных проемов</li>
                        <li>План расстановки мебели</li>
                        <li>План помещения после перепланировки с указанием площадей помещений и их функционального назначения</li>
                        <li>План расстановки мебели </li>
                        <li>График движения денежных средств</li>
                        <li>Спецификация на все инженерные сети (электричество, водоснабжение, канализация, отопление, вентиляция)</li>
                    </ul>
                </div>
                <div class="col-md-6 page-franchising-musthave__have">
                    <ul>
                        <li>Обмерный план с привязкой инженерных коммуникаций, оконных и дверных проемов</li>
                        <li>План демонтажа перегородок и инженерных коммуникаций</li>
                        <li>Фотореалистичные визуализации из 3х разных точек в помещении, с возможностью смотреть по сторонам (на проекторе или в 3D-очках)</li>
                        <li>План размещения санитарно-технического оборудования с привязкой выпусков</li>
                        <li>План потолка с указанием типа используемого материала, отдельных узлов и сечений</li>
                        <li>План размещения розеток, выключателей, электровыводов и выводов слаботочных сетей привязкой геометрических размеров</li>
                        <li>План полов (с указанием отметки уровня пола и площади)</li>
                        <li>Спецификации всех материалов и оборудования, без указания цен, количества и мест приобретения</li>
                        <li>Смета на ремонтно-строительные работы, без указания стоимости работ (указываются только объемы и наименование работ)</li>
                        <li>Технологические карты на производство основных отделочных работ</li>
                        <li>График выполнения ремонтно-строительных работ</li>
                        <li>График закупки основных материалов и оборудования</li>
                        <li>Спецификация на все инженерные сети (электричество, водоснабжение, канализация, отопление, вентиляция)</li>
                        <li>Спецификация на черновые отделочные материалы</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="page-interior-design-economy container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="row">
                <div class="col-md-8">
                    <div class="page-interior-design-economy__title">Дизайн интерьера экономит на ремонте от 300 000 рублей</div>
                    <div class="page-interior-design-economy__subtitle">Создание дизайна интерьера – это не только красивые финальные визуализации и советы дизайнера.</div>
                    <div class="row">
                        <div class="col-md-6 page-interior-design-economy__items">
                            <ul>
                                <li>Список чистовых и черновых материалов точно рассчитан для вашего ремонта и вы не купите лишнего </li>
                                <li>Чертежи и схемы позволяют строителям не допустить ошибок при ремонте и вы не платите за их исправление </li>
                                <li>Продуманность дизайна не требует дополнительных покупок после ремонта</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
</div>


<div class="page-interior-design-zamer container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="row">
                <div class="col-md-8">
                    <div class="page-interior-design-zamer__title">Замер вашей квартиры  необходим для оценки стоимости ремонта</div>
                    <div class="row">
                        <div class="col-md-6 page-interior-design-zamer__items">
                            <ul>
                                <li>Точный обмерный план квартиры может сделать только специалист при использовании лазерной рулетки и трехосевого уровня</li>
                                <li>На основе обмерного плана и визуального осмотра дизайнер сможет сделать воплотимый в реальность дизайн интерьера</li>
                                <li>Оценка стоимости ремонта и дизайна интерьера только по метражу необъективна и завышена</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="//mossebo.studio/wp-content/uploads/page__interior_design/zamer.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
