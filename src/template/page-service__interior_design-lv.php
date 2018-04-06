<?php
/**
 * Created by IntelliJ IDEA.
 * User: vladstarkovsky
 * Date: 30.10.2017
 * Time: 11:44
 * Template Name: Страница - Услуги - Дизайн Интерьера LV
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
                Interjera dizains un remonts Latvijā
            </h1>
            <h2 class="page-interior-design-main__subtitle">Izstrādam dizainu dzīvokļiem, mājām un komerctelpām </h2>
        </div>

        <!-- Calculator block -->
        <div class="col-12">
            <?php feedback_form_calc(array(
                'form-place' => 'Общая', // Form name
                'title' => 'Aprēķināt dizaina un remonta cenu jūsu dzīvoklim tieši tagad', // Title
                'steps' => array( // Step's
                    'step-1' => array( // Step 1
                        'label' => 'Norādiet telpas laukumu:',
                        'placeholder' => 'telpas laukums, m²'
                    ),
                    'step-2' => array( // Step 2
                        'label' => 'Norādiet telpas tipu:',
                        'options' => array('Jaunbūve', 'Sekundārais mājoklis', 'Ārpilsētas māja'),
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
            <div class="feauteres__text">Darbs pēc līguma</div>
            <div class="feauteres__description">Ievērojam darbu izpildīšanas termiņus, neizejot no apspriestā budžeta ietvariem, un sadalam maksājumus izdevīgos posmos.
            </div>
        </div>
        <div class="feauteres__grid col-sm-4">
            <i class="feauteres__icon feauteres__icon_2"></i>
            <div class="feauteres__text">Daži dizaina varianti</div>
            <div class="feauteres__description">Piedāvājam no 3 līdz 5 jūsu nākamā interjera dizaina variantiem, kas demonstrē dažādus stilus, koncepcijas un krāsu risinājumus. Jums tieši būs ko izvēlēties.
            </div>
        </div>
        <div class="feauteres__grid col-sm-4">
            <i class="feauteres__icon feauteres__icon_3"></i>
            <div class="feauteres__text">Interjera projekts un remonts ar vienu kompāniju</div>
            <div class="feauteres__description">
                Izstrādam dizainu, kas atbilst pasūtītāja individulāliem vēlējumiem, un iedzīvinām projektu dzīvē. Istenojam visus projekta realizācijas posmus – no idejas līdz pēdējam dekorām.
            </div>
        </div>
    </div>
</div>


<section id="main-page-portfolio" class="page-interior-design-portfolio">
    <div id="portfolio" class="container-fluid">
        <div class="page-interior-design-portfolio__title">Portfolio</div>

        <div class="page-interior-design-portfolio__style">
            <a @click="CategoryName = 'Все'">Visi stili</a>
            <a @click="CategoryName = 'Скандинавский'">Skandināvu stils</a>
            <a @click="CategoryName = 'Классический'">Klasiskais stils</a>
            <a @click="CategoryName = 'Hi-Tech'">Hi-Tech</a>
            <a @click="CategoryName = 'Современный'">Mūsdienu stils</a>
            <a @click="CategoryName = 'Фьюжн'">Fusion</a>
            <a @click="CategoryName = 'Бохо'">Boho</a>
            <a @click="CategoryName = 'Необарокко'">Neobaroks</a>
            <a @click="CategoryName = 'Лофт'">Loft</a>
            <a @click="CategoryName = 'Рустика'">Rustik</a>
            <a @click="CategoryName = 'Ар-нуво'">Ar-nuvo</a>
            <!--<a @click="CategoryName = 'Ар-деко'">Ар-деко</a>-->
            <a @click="CategoryName = 'Поп-арт'">Popārts</a>
            <a @click="CategoryName = 'Эко'">Ekostils</a>
            <a @click="CategoryName = 'Средиземноморский'">Vidusjūras stils</a>
            <a @click="CategoryName = 'Ретро'">Retro stils</a>
            <a @click="CategoryName = 'Английский'">Angļu stils</a>
            <a @click="CategoryName = 'Прованс'">Provansas stils</a>
            <a @click="CategoryName = 'Неоклассика'">Neoklasiskais stils</a>
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
    <div class="page-franchising-call-to-action__title">Gribat redzēt vairāk? </div>
    <div class="page-franchising-call-to-action__subtitle">Mūsu ofisā Jūs varat iepazīties ar pilnu interjera projektu bāzi</div>
    <button class="page-franchising-call-to-action__btn btn btn_1" type="button">Ieplānot tikšanos</button>
</div>


<div class="page-interior-design-steps container-fluid">
    <div class="page-interior-design-steps__grid">
        <div class="page-interior-design-steps__item page-interior-design-steps__item_first">
            Dizaina <br>
            interjera <br>
            īstenošanas <br>
            posmi
        </div>
        <div class="page-interior-design-steps__item step_1">
            <div class="page-interior-design-steps__step_image"></div>
            <div class="page-interior-design-steps__step_num">1</div>
            <div class="page-interior-design-steps__step_text">Tiekamies objektā</div>
        </div>
        <div class="page-interior-design-steps__item step_2">
            <div class="page-interior-design-steps__step_image"></div>
            <div class="page-interior-design-steps__step_num">2</div>
            <div class="page-interior-design-steps__step_text">Fiksējam Jūsu vēlmes</div>
        </div>
        <div class="page-interior-design-steps__item step_3">
            <div class="page-interior-design-steps__step_image"></div>
            <div class="page-interior-design-steps__step_num">3</div>
            <div class="page-interior-design-steps__step_text">Meklējam iespējamus risināumus</div>
        </div>
    </div>
    <div class="page-interior-design-steps__grid page-interior-design-steps__grid_revers">
        <div class="page-interior-design-steps__item step_4">
            <div class="page-interior-design-steps__step_image"></div>
            <div class="page-interior-design-steps__step_num">4</div>
            <div class="page-interior-design-steps__step_text">Izstrādam pirmas skices</div>
        </div>
        <div class="page-interior-design-steps__item step_5">
            <div class="page-interior-design-steps__step_image"></div>
            <div class="page-interior-design-steps__step_num">5</div>
            <div class="page-interior-design-steps__step_text">3D vizualizācija</div>
        </div>
        <div class="page-interior-design-steps__item step_6">
            <div class="page-interior-design-steps__step_image"></div>
            <div class="page-interior-design-steps__step_num">6</div>
            <div class="page-interior-design-steps__step_text">Sagatavojam informāciju</div>
        </div>
        <div class="page-interior-design-steps__item step_7">
            <div class="page-interior-design-steps__step_image"></div>
            <div class="page-interior-design-steps__step_num">7</div>
            <div class="page-interior-design-steps__step_text">Izveidojam dizaina projektu</div>
        </div>
    </div>
</div>

<!-- Bran style -->
<div class="page-franchising-style">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="page-franchising-style__title">Ko Jūs saņemat rezultātā?</div>
                <div class="page-franchising-style__description">Vizuālos materiālus un visu nepieciešamo dokumentāciju, ar kuru palīdzību remontbrigāde varēs iedzīvināt jūsu sapni par ideālo interjeru
                </div>
                <div class="page-franchising-style__img">
                    <img class="page-franchising-style__img_desctop"
                         src="//mossebo.studio/wp-content/uploads/page__interior_design/bg_pc.png"
                         alt="Vienotais firmas stils">
                    <img class="page-franchising-style__img_mobile"
                         src="//mossebo.studio/wp-content/uploads/page__interior_design/bg_mobile.png"
                         alt="Vienotais firmas stils">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Seasons -->
<div class="page-franchising-musthave container-fluid">
    <div class="page-franchising-musthave__title">Gatavs dizaina projekts iekļauj:</div>
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


<!-- Portfolio Panorama -->
<div class="page-franchising-offices page-franchising-offices__bg-gray">
    <div class="page-franchising-offices__title">Мебель – основа долговечного и комфортного интерьера</div>
    <div class="page-franchising-offices__description">Качественная мебель в ярком дизайне задает тон всему интерьеру. Широкий выбор среди эксклюзивных для России поставщиков и цены ниже розничных получает каждый клиент Mossebo при заказе дизайна интерьера. Отдельные предметы интерьера вы можете купить в нашей группе Вконтакте.</div>
    <div class="panorama"
         data-pano-mobile-src="//mossebo.studio/wp-content/uploads/page__interior_design/tovars_mobile.png">
        <div class="panorama-view">
            <div class="panorama-container">
                <img src="//mossebo.studio/wp-content/uploads/page__interior_design/tovars.png"
                     usemap="hotspots" data-width="2704" data-height="400" alt="Наши офисы"/>
            </div>
        </div>
    </div>
</div>

<!-- Banner -->
<div class="page-banner page-banner_main-page container-fluid" style="background-image: url(//mossebo.studio/wp-content/uploads/page__interior_design/lead-form-footer.jpg);min-height: auto; padding-top: 120px;padding-bottom: 120px;">
    <div class="row">
        <!-- title -->
        <div class="col-xl-11 offset-xl-1 col-12">
            <h1 class="page-banner__title">
                <?php $main_title_geo = geoInit('title');
                if (isset($main_title_geo)) {
                    echo $main_title_geo;
                } else {
                    echo 'Дизайн и ремонт интерьера по всей России и СНГ';
                } ?>
            </h1>
            <h2 class="page-banner__sub-title">Создаем дизайн квартир, коттеджей и коммерческих помещений</h2>
        </div>

        <!-- Calculator block -->
        <div class="col-12">
            <?php feedback_form_calc(array(
                'form-place' => 'Общая', // Form name
                'title' => 'Рассчитайте стоимость дизайна <br><span class="text-primary">прямо сейчас:</span>', // Title
                'steps' => array( // Step's
                    'step-1' => array( // Step 1
                        'label' => 'Укажите площадь помещения:',
                        'placeholder' => 'площадь помещения, м²'
                    ),
                    'step-2' => array( // Step 2
                        'label' => 'Укажите тип помещения:',
                        'options' => array('Новостройка', 'Вторичное жилье', 'Загородный дом')
                    ),
                ),
            )); ?>
        </div>
    </div>
</div>



<?php get_footer(); ?>
