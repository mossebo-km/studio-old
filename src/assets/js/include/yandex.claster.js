/* -----------------------------------------*/
// Инициализируем Яндекс.Карты на главной странеце
jQuery(function (jQuery) {
    if (document.getElementById('map-main-page') !== null) {
        ymaps.ready(function () {
            var testCoorLat = jQuery('#map-main-page').attr('data-coordinates-lat'),
                testCoorLot = jQuery('#map-main-page').attr('data-coordinates-lot');
            var myMap = new ymaps.Map('map-main-page', {
                    center: [+(testCoorLat), +(testCoorLot)],
                    zoom: 16,
                    controls: ['zoomControl']
                }, {
                    searchControlProvider: 'yandex#search'
                }),
                myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
                    balloonContentHeader: jQuery('#map-main-page').attr('data-geo-city'),
                    balloonContent: jQuery('#map-main-page').attr('data-geo-address'),
                    hintContent: jQuery('#map-main-page').attr('data-geo-city')
                }, {
                    iconLayout: 'default#image',
                    iconImageHref: '/wp-content/themes/mossebo/assets/images/icon/map-pin-silhouette.png',
                    iconImageSize: [30, 42],
                    iconImageOffset: [-5, -38]
                });
            myMap.geoObjects.add(myPlacemark);
            myMap.behaviors.disable('scrollZoom');
            if (jQuery(window).width() <= 991) {
                myMap.behaviors.disable('drag');
            }
        });
    }
});
/* -----------------------------------------*/


/* -----------------------------------------*/
// Инициализируем карту с кластерами
jQuery(function (jQuery) {

    if (document.getElementById('yandex-map-claster-office') !== null) {
        ymaps.ready(function () {
            var myMap = new ymaps.Map('yandex-map-claster-office', {
                    center: [50, 50],
                    zoom: 15,
                    controls: ['zoomControl']
                }, {
                    searchControlProvider: 'yandex#search'
                }),
                /**
                 * Создадим кластеризатор, вызвав функцию-конструктор.
                 * Список всех опций доступен в документации.
                 * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/Clusterer.xml#constructor-summary
                 */
                clusterer = new ymaps.Clusterer({
                    /**
                     * Через кластеризатор можно указать только стили кластеров,
                     * стили для меток нужно назначать каждой метке отдельно.
                     * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/option.presetStorage.xml
                     */
                    preset: 'islands#invertedOrangeClusterIcons',
                    /**
                     * Ставим true, если хотим кластеризовать только точки с одинаковыми координатами.
                     */
                    groupByCoordinates: false,
                    /**
                     * Опции кластеров указываем в кластеризаторе с префиксом "cluster".
                     * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/ClusterPlacemark.xml
                     */
                    clusterDisableClickZoom: true,
                    clusterHideIconOnBalloonOpen: false,
                    geoObjectHideIconOnBalloonOpen: false
                }),
                /**
                 * Функция возвращает объект, содержащий данные метки.
                 * Поле данных clusterCaption будет отображено в списке геообъектов в балуне кластера.
                 * Поле balloonContentBody - источник данных для контента балуна.
                 * Оба поля поддерживают HTML-разметку.
                 * Список полей данных, которые используют стандартные макеты содержимого иконки метки
                 * и балуна геообъектов, можно посмотреть в документации.
                 * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/GeoObject.xml
                 */
                getPointData = function (city, address, phone) {
                    return {
                        balloonContentHeader: city,
                        balloonContentBody: address,
                        clusterCaption: city,
                        balloonContentFooter: phone
                    };
                },
                /**
                 * Функция возвращает объект, содержащий опции метки.
                 * Все опции, которые поддерживают геообъекты, можно посмотреть в документации.
                 * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/GeoObject.xml
                 */
                getPointOptions = function () {
                    return {
                        iconLayout: 'default#image',
                        iconImageHref: '/wp-content/themes/mossebo/assets/images/icon/map-pin-silhouette.png',
                        iconImageSize: [31, 42],
                        iconImageOffset: [-17, -42]
                    };
                },
                geoObjects = [];

            // Санкт-Петербург
            //// 1
            geoObjects[0] = new ymaps.Placemark([59.903814, 30.300658],
                getPointData('Санкт-Петербург', 'Санкт-Петербург, Обводного канала наб, дом 118а, литера Х', '8-812-612-48-19'),
                getPointOptions());

            // Волгоград
            //// 1
            geoObjects[1] = new ymaps.Placemark([48.689781, 44.496233],
                getPointData('Волгоград', 'Волгоградц, Баррикадная улица, 1Б', '+7 (844) 259-13-36'),
                getPointOptions());

            //Ташкент
            ////1
            geoObjects[2] = new ymaps.Placemark([41.347841, 69.349556],
                getPointData('Ташкент', 'Мирзо-Улугбекский район, проспект Мирзы Улугбека 7м.','8-800-707-83-47'),
                getPointOptions());

            //Новосибирск
            ////1
            geoObjects[3] = new ymaps.Placemark([55.016523, 82.948358],
                getPointData('Новосибирск', 'ул.Кирова, д.29, оф.303, БЦ Ново-Николаевск', '8-800-707-83-47'),
                getPointOptions());

            //Саратов
            ////1
            geoObjects[4] = new ymaps.Placemark([51.534874, 46.011272],
                getPointData('Саратов', 'Вавилова 28/34 БЦ, Атлант, офис 404','8-800-707-83-47'),
                getPointOptions());

            //Краснодар
            ////1
            geoObjects[5] = new ymaps.Placemark([45.043087, 38.959118],
                getPointData('Краснодар', 'г. Краснодар, ул. Северная 247, 6 этаж, офис 602. Бизнес центр "Gold"', '+7 (861) 204-07-63'),
                getPointOptions());

            //Ярославль
            ////1
            geoObjects[6] = new ymaps.Placemark([57.625441, 39.864142],
                getPointData('Ярославль', 'ул. Свободы, д. 71а', '+7 (485) 228-00-44'),
                getPointOptions());


            //Комсомольск-на-Амуре
            ////1
            geoObjects[7] = new ymaps.Placemark([50.539459, 137.024270],
                getPointData('Комсомольск-на-Амуре', 'улица Осоавиахима, 11', '8 (800) 707-83-47'),
                getPointOptions());

            //Владивосток
            ////1
            geoObjects[8] = new ymaps.Placemark([43.119260, 131.902876],
                getPointData('Владивосток', 'улица Осоавиахима, 11', '8 (800) 707-83-47'),
                getPointOptions());

            //Латвия/Рига
            ////1
            geoObjects[9] = new ymaps.Placemark([56.991229, 24.127305],
                getPointData('Рига', 'Duntes iela 23a, Rīga, LV-1005', '+371 66 55 50 81'),
                getPointOptions());

            //Москва
            //// 1
            geoObjects[10] = new ymaps.Placemark([55.779287, 37.633347],
                getPointData('Москва', 'проспект Мира, 36с1', '+7 (495) 104-67-00'),
                getPointOptions());

            //Тверь
            //// 1
            geoObjects[11] = new ymaps.Placemark([56.850703, 35.933896],
                getPointData('Тверь', 'Московская улица, 63', '8 (800) 707-83-47'),
                getPointOptions());

            //Екб
            ////1
            geoObjects[12] = new ymaps.Placemark([56.820114, 60.591590],
                getPointData('Екатеринбург', 'улица Шейнкмана, 119', '8-800-707-83-47'),
                getPointOptions());

            //Нижний Новгород
            ////1
            geoObjects[13] = new ymaps.Placemark([56.322005, 44.032550],
                getPointData('Нижний Новгород', 'улица Максима Горького, 260', '8-800-707-83-47'),
                getPointOptions());

            //Москва
            ////1
            geoObjects[14] = new ymaps.Placemark([55.786380, 37.241219],
                getPointData('Москва', '26-й км автодороги «Балтия», бизнес-центр «Riga Land», Строение 3', '+7 (495) 104-67-00'),
                getPointOptions());

            //Ижевск
            ////1
            geoObjects[15] = new ymaps.Placemark([56.866583, 53.207295],
                getPointData('Ижевск', 'Пушкинская улица, 277', '8-800-707-83-47'),
                getPointOptions());

            /**
             * Можно менять опции кластеризатора после создания.
             */
            clusterer.options.set({
                gridSize: 80,
                clusterDisableClickZoom: true
            });

            /**
             * В кластеризатор можно добавить javascript-массив меток (не геоколлекцию) или одну метку.
             * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/Clusterer.xml#add
             */
            clusterer.add(geoObjects);
            myMap.geoObjects.add(clusterer);

            /**
             * Спозиционируем карту так, чтобы на ней были видны все объекты.
             */

            myMap.setBounds(clusterer.getBounds(), {
                checkZoomRange: true
            });

            myMap.behaviors.disable('scrollZoom');
            if (jQuery(window).width() <= 991) {
                myMap.behaviors.disable('drag');
            }
        });
    }

});
/* -----------------------------------------*/
