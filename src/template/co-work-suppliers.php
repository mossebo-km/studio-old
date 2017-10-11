<?php

/**
 * Created by IntelliJ IDEA.
 * User: admin
 * Date: 31.08.17
 * Time: 11:31
 * Template Name: Сотрудничество - Поставщики
 */

get_header();

?>


<!-- Feedback -->
<div class="co-work-suppliers container-fluid">
    <div class="row">
        <div class="col-xl-10 offset-xl-1 col-12">
            <div class="row">

                <!-- Title -->
                <div class="col-12">
                    <h1 class="co-work-suppliers__title">Станьте поставщиком <br>
                        для проектов Mossebo</h1>
                </div>
                <div class="col-md-6 col-12">
                    <!-- Sub title -->
                    <h2 class="co-work-suppliers__subtitle">Продавайте товары в крупнейшей сети студий дизайна</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <!-- Feedback form -->
                    <?php feedback_form(array(
                        'feedback-form__id' => 5, // Описание после полей
                        'feedback-form__form-place' => 'Страница продакшен', // Имя формы
                        'feedback-form__class' => 'franchise-page-feedback__feedback-form',
                        'feedback-form__mail-input' => true, // Поле email
                        'feedback-form__title' => 'Узнайте подробнее', // Заголовок
                        'feedback-form__title-sub' => 'Оставьте свой номер и с вами свяжется специалист по закупкам Mossebo и обсудит формат сотрудничества', // Подзаголовок
                        'feedback-form__text-description' => '', // Описание после полей
                        'feedback-form__btn-value' => 'Узнать подробнее', // Описание после полей
                    )); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="co-work-block container-fluid">
        <div class="co-work-block__title">Присоединитесь к базе поставщиков Mossebo</div>
        <div class="co-work-block__subtitle">Ваши товары купят в сотни интерьеров по всей России и СНГ</div>
    <div class="row">
        <div class="col-md-4">
            <img src="/wp-content/themes/mossebo/assets/images/co-work/1.png" alt="" class="co-work-icon">
            <div class="icon-title">
                <span>от <strong>150</strong></span>
                новых проектов интерьера создают в Mossebo в месяц
            </div>
        </div>
        <div class="col-md-4">
            <img src="/wp-content/themes/mossebo/assets/images/co-work/2.png" alt="" class="co-work-icon">
            <div class="icon-title">
                <span>более<strong>70</strong></span>
                закупочных позиций в каждом дизайне интерьера
            </div>
        </div>
        <div class="col-md-4">
            <img src="/wp-content/themes/mossebo/assets/images/co-work/3.png" alt="" class="co-work-icon">
            <div class="icon-title">
                <span><strong>10 000</strong> возможностей</span>
                продать свои товары вместе с Mossebo
            </div>
        </div>
    </div>
</div>

<div class="co-work-mossebo-big container-fluid">
    <div class="co-work-mossebo-big__title">Mossebo — крупнейшая сеть студий дизайна интерьера
        в России и СНГ
    </div>
    <div class="co-work-mossebo-big__subtitle">Получите доступ к точкам продаж и контакт
        с клиентами в 40 городах
    </div>
    <button class="btn btn_1 scroll-top" type="button">Начать сотрудничество</button>
</div>

<div class="co-work-where container-fluid">
    <div class="co-work-where__title">Где покупатели смогут купить ваш товар?</div>
    <div class="row">
        <div class="col-md-4">
            <img src="/wp-content/themes/mossebo/assets/images/co-work/where/1.png" alt="" class="co-work-where__image">
            <strong class="co-work-where__ititle">В каждом из 40 офисах Mossebo в России и СНГ</strong>
        </div>
        <div class="col-md-4">
            <img src="/wp-content/themes/mossebo/assets/images/co-work/where/2.png" alt="" class="co-work-where__image">
            <strong class="co-work-where__ititle">В интернет магазине mossebo.market</strong>
        </div>
        <div class="col-md-4">
            <img src="/wp-content/themes/mossebo/assets/images/co-work/where/3.png" alt="" class="co-work-where__image">
            <strong class="co-work-where__ititle">По запросу в Instagram, Youtube, Вконтакте и других площадках
                компании</strong>
        </div>
    </div>
</div>

<div class="co-work-list container-fluid">
    <div class="co-work-list__title">Как стать партнером сети студий дизайна интерьера Mossebo?</div>
    <ul class="co-work-list__ul">
        <li>Соблюдайте сроки поставки товара до 1 месяца</li>
        <li>Гарантируйте возможность удобного возврата некачественных товаров</li>
        <li>Оперативно заменяйте товары по рекламациям</li>
        <li>Предоставьте полную информации о своих товарах вместе с фотографиями в хорошем разрешении без надписей,
            логотипов и водяных знаков
        </li>
        <li>Передайте xml выгрузку - это значительно упростит сотрудничество</li>
        <li>Предоставьте специальные условия для Mossebo</li>
    </ul>
</div>


<div class="co-work-reklama container-fluid">
    <div class="co-work-reklama__title">Как Mossebo будет продвигать ваш товар?</div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-8">
            <div class="co-work-reklama__item">
                <div class="row">
                    <div class="col-3">
                        <strong class="co-work-reklama__num">1</strong>
                    </div>
                    <div class="col-8">Включаем ваши товары в проекты интерьеров наших клиентов</div>
                </div>
            </div>
            <div class="co-work-reklama__item">
                <div class="row">
                    <div class="col-3">
                        <strong class="co-work-reklama__num">2</strong>
                    </div>
                    <div class="col-8">Добавляем их в каталог интернет магазина mossebo.market</div>
                </div>
            </div>
            <div class="co-work-reklama__item">
                <div class="row">
                    <div class="col-3">
                        <strong class="co-work-reklama__num">3</strong>
                    </div>
                    <div class="col-8">Продвигаем ваш бренд в соцсетях и площадках Mossebo</div>
                </div>
            </div>
            <div class="co-work-reklama__item">
                <div class="row">
                    <div class="col-3">
                        <strong class="co-work-reklama__num">4</strong>
                    </div>
                    <div class="col-8">Ваши товары добавляются на рендеры интерьеров Mossebo и продвигаются в онлайн
                        и офлайн продукции компании
                    </div>
                </div>
            </div>
            <div class="co-work-reklama__item">
                <div class="row">
                    <div class="col-3">
                        <strong class="co-work-reklama__num">5</strong>
                    </div>
                    <div class="col-8">Дизайнеры Mossebo рекомендуют ваши товары клиентам по всей России</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section social's -->
<?php get_template_part('template/social_section'); ?>

<?php get_footer(); ?>
