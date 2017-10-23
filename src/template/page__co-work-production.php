<?php
/**
 * Created by IntelliJ IDEA.
 * User: vladstarkovsky
 * Date: 11.10.2017
 * Time: 12:22
 * Template Name: Сотрудничество - Продакшен
 */

get_header();

?>

<!-- Feedback -->
<div class="co-work-production container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="row">

                <!-- Title -->
                <div class="col-12">
                    <h1 class="co-work-production__title">MOSSEBO<br>
                        Production</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-12">
                    <!-- Sub title -->
                    <h2 class="co-work-production__subtitle">Получайте новых клиентов через наши площадки</h2>

                    <div class="youtube-player"
                         data-youtube-player-src-img="//mossebo.studio/wp-content/uploads/Oblozhka-SubwayMossebo_2.jpg"
                         data-youtube-player-id="H469n3PCpYU">
                        <div class="youtube-player__img-preview youtube-player__img-preview_theme-light"></div>
                    </div>

                    <strong class="co-work-production__lastvideo">Смотрите последний выпуск<br>
                        Хайпового бизнеса</strong>
                </div>
                <div class="col">
                    <!-- Feedback form -->
                    <?php feedback_form(array(
                        'feedback-form__id' => 5, // Описание после полей
                        'feedback-form__form-place' => 'Страница продакшн', // Имя формы
                        'feedback-form__class' => 'franchise-page-feedback__feedback-form',
                        'feedback-form__mail-input' => true, // Поле email
                        'feedback-form__title' => 'Получите медиа-кит', // Заголовок
                        'feedback-form__title-sub' => 'с ценами и рекламными возможностями на площадках Mossebo', // Подзаголовок
                        'feedback-form__text-description' => '', // Описание после полей
                        'feedback-form__btn-value' => 'Получить', // Описание после полей
                    )); ?>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="co-work-production-about container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="row align-item-center">
                <div class="col-md-6">
                    <strong class="co-work-production-about__title">Mossebo Production</strong>
                    <p class="co-work-production-about__p">Production – подразделение бренда Mossebo</strong>,
                        компании лидера в сфере дизайна интерьера
                        cо студиями в России и СНГ.
                        Команда Mossebo <strong>обладает уникальным опытом
                        в упаковке франшиз.</strong>
                        <br><br>
                        Мы развиваем несколько медиа проектов,
                        на которых продвигаем собственный бизнес
                        на взрослую и платежеспособную аудиторию.</p>
                    <p class="co-work-production-about__p"><strong>На площадках Mossebo в Youtube, Instagram и ВК доступны
                        рекламные интеграции и прямая реклама для вашего бренда.</strong></p>
                </div>
                <div class="col-md-6">
                    <img src="//mossebo.studio/wp-content/uploads/marketing.jpg" alt=""
                         class="co-work-production-about__photo">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="co-work-production-projects container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="title">Медиа-проекты Mossebo</div>
        </div>
    </div>
    <div id="productionmedia">
        <carousel-3d
            :perspective="35"
            :space="400"
            :display="3"
            :border="0"
            :autoplay="true"
            :autoplay-timeout="6000"
            :autoplay-hover-pause="true"
            width="900px"
            height="800px"
        >
            <slide :index="0">
                <div class="slide-block">
                    <div class="logo">
                        <img src="//mossebo.studio/wp-content/uploads/original/1-logo.png" alt="">
                    </div>
                    <div class="decription">
                        Хайповый бизнес – канал бизнес-интервью с известными и интересными людьми. Бизнесмены, top-менеджеры международных и российских компаний, звезды спорта и шоу-бизнеса – все они есть в выпусках на канале.
                    </div>
                </div>
                <img src="//mossebo.studio/wp-content/uploads/original/1.jpg" class="slide-image">
            </slide>
            <slide :index="1">
                <div class="slide-block">
                    <div class="logo">
                        <img src="//mossebo.studio/wp-content/uploads/original/2-logo.png" alt="">
                    </div>
                    <div class="decription">
                        Канал о дизайне интерьера с элементами fashion, beauty и lifestyle.
                        Ведущая канала и первый в России IKEA-art блогер - Liza Loft.
                    </div>
                </div>
                <img src="//mossebo.studio/wp-content/uploads/original/2.jpg" class="slide-image">
            </slide>
            <slide :index="2">
                <div class="slide-block">
                    <div class="logo">
                        <img src="//mossebo.studio/wp-content/uploads/original/3-logo.png" alt="">
                    </div>
                    <div class="decription">
                        Канал об идеях для бизнеса для предпринимателей и инвесторов.
                    </div>
                </div>
                <img src="//mossebo.studio/wp-content/uploads/original/3.jpg" class="slide-image">
            </slide>
        </carousel-3d>
    </div>
</div>

<div class="co-work-production-leadform container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="row">
                <div class="col-md-6">
                    <strong class="co-work-production-leadform__title">Получите подробную презентацию о наших медиа</strong>
                </div>
                <div class="col-md-6">
                    <!-- Feedback form -->
                    <?php feedback_form(array(
                        'feedback-form__id' => 5, // Описание после полей
                        'feedback-form__form-place' => 'Страница продакшн', // Имя формы
                        'feedback-form__class' => 'franchise-page-feedback__feedback-form',
                        'feedback-form__mail-input' => true, // Поле email
                        'feedback-form__title' => 'Получите медиа-кит', // Заголовок
                        'feedback-form__title-sub' => 'с ценами и рекламными возможностями на площадках Mossebo', // Подзаголовок
                        'feedback-form__text-description' => '', // Описание после полей
                        'feedback-form__btn-value' => 'Получить', // Описание после полей
                    )); ?>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="co-work-production-brands container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="row">
                <div class="co-work-production-brands__title">В выпусках уже были:</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="row co-work-production-brands__icons">
                <div class="col-4 col-md-2">
                    <img src="//mossebo.studio/wp-content/uploads/original/logos/1-yota.png"
                         alt="Yota">
                </div>
                <div class="col-4 col-md-3">
                    <img src="//mossebo.studio/wp-content/uploads/original/logos/1-audi.png"
                         alt="Audi">
                </div>
                <div class="col-4 col-md-2">
                    <img src="//mossebo.studio/wp-content/uploads/original/logos/1-dost.png"
                         alt="Dostayevsky">
                </div>
                <div class="col-4 col-md-3">
                    <img src="//mossebo.studio/wp-content/uploads/original/logos/1-hh.png"
                         alt="HeadHunter">
                </div>
                <div class="col-4 col-md-2">
                    <img src="//mossebo.studio/wp-content/uploads/original/logos/1-subway.png"
                         alt="SubWay">
                </div>
                <div class="col-4 col-md-2">
                    <img src="//mossebo.studio/wp-content/uploads/original/logos/1-benua.png"
                         alt="Benua">
                </div>
                <div class="col-4 col-md-3">
                    <img src="//mossebo.studio/wp-content/uploads/original/logos/1-painty.png"
                         alt="Painty">
                </div>
                <div class="col-4 col-md-2">
                    <img src="//mossebo.studio/wp-content/uploads/original/logos/1-kwakinn.png"
                         alt="Kwakinn">
                </div>
                <div class="col-4 col-md-3">
                    <img src="//mossebo.studio/wp-content/uploads/original/logos/1-eus.png"
                         alt="Единая Юридическая Служба">
                </div>
                <div class="col-4 col-md-2">
                    <img src="//mossebo.studio/wp-content/uploads/original/logos/1-ilocked.png"
                         alt="iLocked">
                </div>
                <div class="col-4 col-md-2">
                    <img src="//mossebo.studio/wp-content/uploads/original/logos/1-shulz.png"
                         alt="Shulz">
                </div>
                <div class="col-4 col-md-3">
                    <img src="//mossebo.studio/wp-content/uploads/original/logos/1-igooods.png"
                         alt="Igooods">
                </div>
                <div class="col-4 col-md-2">
                    <img src="//mossebo.studio/wp-content/uploads/original/logos/1-kreslo.png"
                         alt="Kreslo">
                </div>
                <div class="col-4 col-md-3">
                    <img src="//mossebo.studio/wp-content/uploads/original/logos/1-moguta.png"
                         alt="MOGUTA CMS">
                </div>
                <div class="col-4 col-md-2">
                    <img src="//mossebo.studio/wp-content/uploads/original/logos/1-pitas.png"
                         alt="Pitas">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="co-work-production-spaces container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="title">Instagram площадки Mossebo</div>
            <div class="subtitle">Получайте новых клиентов через наши площадки</div>
                <div class="row instagrams">
                    <div class="col-md-4">
                        <img src="//mossebo.studio/wp-content/uploads/original/logos/2-1.png" alt="">
                    </div>
                    <div class="col-md-4">
                        <img src="//mossebo.studio/wp-content/uploads/original/logos/2-2.png" alt="">
                    </div>
                    <div class="col-md-4">
                        <img src="//mossebo.studio/wp-content/uploads/original/logos/2-3.png" alt="">
                    </div>
                </div>
            <div class="co-work-production-spaces__mobile" id="production-spaces">
                <carousel-3d
                    :perspective="35"
                    :space="100"
                    :display="3"
                    :border="0"
                    :autoplay="true"
                    :autoplay-timeout="6000"
                    :autoplay-hover-pause="true"
                    width="260px"
                    height="320px"
                >
                    <slide :index="0">
                        <img src="//mossebo.studio/wp-content/uploads/original/logos/2-1.png">
                    </slide>
                    <slide :index="1">
                        <img src="//mossebo.studio/wp-content/uploads/original/logos/2-2.png">
                    </slide>
                    <slide :index="2">
                        <img src="//mossebo.studio/wp-content/uploads/original/logos/2-3.png">
                    </slide>
                </carousel-3d>
            </div>
        </div>
    </div>
</div>


<div class="co-work-production-about container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="row align-item-center">
                <div class="col-md-6">
                    <div>
                        <strong class="co-work-production-about__title">Современное оборудование</strong>
                        <p class="co-work-production-about__p">Снимаем сюжеты о вашем бренде на лучшую технику.
                            <br><br>

                            Камеры Panasonic GH-4 и Sony α7 II с набором объективов, электронный трехосевой стадикам
                            Beholder и звук Rode… Можно долго перечислять, но главное, что финальная картинка вас впечатлит.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <img src="//mossebo.studio/wp-content/uploads/inv-1.jpg" alt=""
                             class="co-work-production-about__photo">
                        <img src="//mossebo.studio/wp-content/uploads/inv-2.jpg" alt=""
                             class="co-work-production-about__photo">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="co-work-production-stats container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
                <div class="title">Статистика аудитории бренда Mossebo</div>
            <div class="stat-1"><span> > </span>4 500 000<small>просмотров</small></div>
            <div class="row stat-2">
                <!--
                <div class="col-md-1">
                    <img src="//mossebo.studio/wp-content/uploads/original/logos/3-1.png" alt="">
                </div> -->
                <div class="col-md-4">
                    <strong>80%</strong>
                    <span>аудитории находится в России</span>
                </div>
                <!-- <div class="col-md-1">
                    <img src="//mossebo.studio/wp-content/uploads/original/logos/3-2.png" alt="">
                </div> -->
                <div class="col-md-4">
                    <strong>90%</strong>
                    <span>видео выходит в тренды YouTube</span>
                </div>
                <!-- <div class="col-md-1">
                    <img src="//mossebo.studio/wp-content/uploads/original/logos/3-3.png" alt="">
                </div> -->
                <div class="col-md-4">
                    <strong>72.5%</strong>
                    <span>аудитории в возрасте от 18 до 34 лет</span>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="co-work-production-gallery container-fluid">
    <div class="panorama"
         data-pano-mobile-src="//mossebo.studio/wp-content/uploads/original/gallery_mobile.jpg">
        <div class="panorama-view">
            <div class="panorama-container">
                <img src="//mossebo.studio/wp-content/uploads/original/gallery.jpg"
                     usemap="hotspots" data-width="2430" data-height="500" alt=""/>
            </div>
        </div>
    </div>
</div>


<div class="co-work-production-person container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="title">Медийные лица Mossebo</div>
            <div class="row mobile_hide">
                <div class="col-md-3">
                    <div class="person_name">Марк <br>Еремин</div>
                    <img src="//mossebo.studio/wp-content/uploads/original/mark.png" alt="">
                </div>
                <div class="col-md-3">
                    <div class="person_name">Юрий <br>Еремин</div>
                    <img src="//mossebo.studio/wp-content/uploads/original/yury.png" alt="">
                </div>
                <div class="col-md-3">
                    <div class="person_name">Владислав <br>Туржанский</div>
                    <img src="//mossebo.studio/wp-content/uploads/original/vlad.png" alt="">
                </div>
                <div class="col-md-3">
                    <div class="person_name">Liza <br>Loft</div>
                    <img src="//mossebo.studio/wp-content/uploads/original/liza.png" alt="">
                </div>
            </div>
            <div id="person_mobile">
                <carousel-3d
                    :perspective="35"
                    :space="100"
                    :display="3"
                    :border="0"
                    :autoplay="true"
                    :autoplay-timeout="6000"
                    :autoplay-hover-pause="true"
                    width="200px"
                    height="360px"
                >
                    <slide :index="0">
                        <div class="person_name">Марк <br>Еремин</div>
                        <img src="//mossebo.studio/wp-content/uploads/original/mark.png" alt="">
                    </slide>
                    <slide :index="1">
                        <div class="person_name">Юрий <br>Еремин</div>
                        <img src="//mossebo.studio/wp-content/uploads/original/yury.png" alt="">
                    </slide>
                    <slide :index="2">
                        <div class="person_name">Владислав <br>Туржанский</div>
                        <img src="//mossebo.studio/wp-content/uploads/original/vlad.png" alt="">
                    </slide>
                    <slide :index="3">
                        <div class="person_name">Liza <br>Loft</div>
                        <img src="//mossebo.studio/wp-content/uploads/original/liza.png" alt="">
                    </slide>
                </carousel-3d>
            </div>
        </div>
    </div>
</div>

<div class="co-work-production-friends container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <strong class="co-work-production-pay__title">Наши друзья</strong>
            <div class="row">
                <div class="col-sm-4">
                    <img src="//mossebo.studio/wp-content/uploads/original/friends/1.jpg" alt="">
                    <strong>Вячеслав Малафеев</strong>
                    <p>Российский футболист, владелец агентства недвижимости "М16"</p>
                </div>
                <div class="col-sm-4">
                    <img src="//mossebo.studio/wp-content/uploads/original/friends/2.jpg" alt="">
                    <strong>Руслан Татунашвили</strong>
                    <p>Основатель крупнейшего сервиса коллтрекинга Callbackhunter</p>
                </div>
                <div class="col-sm-4">
                    <img src="//mossebo.studio/wp-content/uploads/original/friends/3.jpg" alt="">
                    <strong>Дмитрий Портнягин</strong>
                    <p>Топ 1 бизнес-блогер в Youtube, создатель канала Трансформатор, основатель экспортно-импортной компании TRANSITplus</p>
                </div>
                <div class="col-sm-4">
                    <img src="//mossebo.studio/wp-content/uploads/original/friends/4.jpg" alt="">
                    <strong>Евгений Гаврилин</strong>
                    <p>Сооснователь boomstarter.ru, MediaToday, и YouTube канала Жизнь Би</p>
                </div>
                <div class="col-sm-4">
                    <img src="//mossebo.studio/wp-content/uploads/original/friends/5.jpg" alt="">
                    <strong>Ольга Блудовская</strong>
                    <p>Президент компании "Subway Россия"</p>
                </div>
                <div class="col-sm-4">
                    <img src="//mossebo.studio/wp-content/uploads/original/friends/6.jpg" alt="">
                    <strong>Артемий Пономарев</strong>
                    <p>Директор по направлению смартфонов в компании Yota</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="co-work-production-about container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="row align-item-center">
                <div class="col-md-6">
                    <div>
                        <strong class="co-work-production-about__title">Лайв-трансляции</strong>
                        <p class="co-work-production-about__p">В офисе Mossebo в Санкт-Петербурге оборудована студия для прямых трансляций. В конце каждого месяца мы разыгрываем все подарки от гостей за месяц. </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <img src="//mossebo.studio/wp-content/uploads/live-1.jpg" alt=""
                             class="co-work-production-about__photo">
                        <img src="//mossebo.studio/wp-content/uploads/live-2.jpg" alt=""
                             class="co-work-production-about__photo">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="co-work-production-pay container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <strong class="co-work-production-pay__title">Все формы оплаты</strong>
            <p class="co-work-production-pay__subtitle">Оплата рекламы и интеграций возможны на расчетный счет, карту Сбербанка или на другой удобный для вас формат.</p>
            <div class="row">
                <div class="col-md-6">
                    <img src="//mossebo.studio/wp-content/uploads/original/pay-1.png" alt="" style="margin-top: 25px;">
                </div>
                <div class="col-md-6">
                    <img src="//mossebo.studio/wp-content/uploads/original/pay-2.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="co-work-production-no-promotion container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="row align-item-center">
                <div class="col-md-6">
                    <div>
                        <strong class="co-work-production-no-promotion__title">Мы не продвигаем</strong>
                        <p class="co-work-production-no-promotion__subtitle">Для сохранения доверия к нашим проектам
                            мы не рекламируем:</p>
                        <ul class="no-promotion">
                            <li>Казино, покер, азартные игры</li>
                            <li>Бинарные опционы, форекс, финансовые пирамиды и другой “легкий заработок”</li>
                            <li>Букмекерские конторы, ставки, заработок
                                на спорте</li>
                            <li>Запрещенные к продаже и распространению на территории РФ и СНГ товары</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <img src="//mossebo.studio/wp-content/uploads/original/5-1.jpg" alt=""
                             class="co-work-production-inventary__photo">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="co-work-production-leadform2 container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="row">
                <div class="col-md-6">
                    <strong class="co-work-production-leadform2__title">Получите подробную
                        презентацию
                        о наших медиа</strong>
                </div>
                <div class="col-md-6">
                    <!-- Feedback form -->
                    <?php feedback_form(array(
                        'feedback-form__id' => 5, // Описание после полей
                        'feedback-form__form-place' => 'Страница продакшн', // Имя формы
                        'feedback-form__class' => 'franchise-page-feedback__feedback-form',
                        'feedback-form__mail-input' => true, // Поле email
                        'feedback-form__title' => 'Получите медиа-кит', // Заголовок
                        'feedback-form__title-sub' => 'с ценами и рекламными возможностями на площадках Mossebo', // Подзаголовок
                        'feedback-form__text-description' => '', // Описание после полей
                        'feedback-form__btn-value' => 'Получить', // Описание после полей
                    )); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
