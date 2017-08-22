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
                        iconImageSize: [30, 42]
                    };
                },
                geoObjects = [];

            geoObjects[0] = new ymaps.Placemark([59.944196564155796, 30.324895999999967], getPointData('Санкт-Петербург', 'Санкт-Петербург, ул. Миллионная, 11', '8-812-612-48-19'), getPointOptions());
            geoObjects[1] = new ymaps.Placemark([55.16833106954609, 61.40502399999996], getPointData('Челябинск', 'ул. Труда 84, БЦ " Петровский", 3 эт., оф. 304.', '8 (3452) 39-71-14'), getPointOptions());
            geoObjects[2] = new ymaps.Placemark([55.70835406903361, 37.652705499999996], getPointData('Москва', 'Ленинская Слобода, 19. БЦ «Омега Плаза», офис 701', '8 (495) 151-20-89'), getPointOptions());
            geoObjects[3] = new ymaps.Placemark([53.936937070612615, 27.591304499999943], getPointData('Минск', 'ул. Гало 76, оф.113', '8 (800) 707-83-47'), getPointOptions());
            geoObjects[4] = new ymaps.Placemark([48.72236257381487, 44.53574099999996], getPointData('Волгоград', '7-я Гвардейская, 11 Б, ТРЦ «Арго»', '8 (844) 259-13-36'), getPointOptions());
            geoObjects[5] = new ymaps.Placemark([44.722898, 37.774857], getPointData('Новороссийск', 'Губернского 2а, офис 108', '+7 (861) 730-60-10'), getPointOptions());
            // geoObjects[ 5 ] = new ymaps.Placemark( [ 45.0411987, 41.9813695 ], getPointData( 'Ставрополь', 'ул. Ленина, 441/6', '8 (865) 220-53-18' ), getPointOptions());
            // geoObjects[ 5 ] = new ymaps.Placemark( [ 45.0304765746082, 41.975937499999965 ], getPointData( 'Ставрополь', 'ул. Партизанская, 2', '8 (865) 220-53-18' ), getPointOptions());
            geoObjects[6] = new ymaps.Placemark([45.03809457457659, 38.9821849999999], getPointData('Краснодар', 'ул. Митрофана Седина, д. 164/1', '8 (861) 204-07-63'), getPointOptions());
            geoObjects[7] = new ymaps.Placemark([57.14689156753542, 65.5532105], getPointData('Тюмень', 'ул. Республики, д. 81, офис 504.', '8 (3452) 39-71-14'), getPointOptions());
            geoObjects[8] = new ymaps.Placemark([53.222043, 50.191191], getPointData('Самара', 'Московское шоссе, 41, РДЦ, офис 402', '8 (846) 201-04-23'), getPointOptions());
            geoObjects[9] = new ymaps.Placemark([54.32039907031191, 48.39727499999996], getPointData('Ульяновск', 'Карла Маркса, 13А К2, БЦ «Мираж»', '8 (800) 707-83-47'), getPointOptions());
            geoObjects[10] = new ymaps.Placemark([42.8567465744804, 74.60512949999993], getPointData('Бишкек', 'Горького, 142', '9 (963) 129-623-62'), getPointOptions());
            geoObjects[11] = new ymaps.Placemark([51.670223, 39.1968831], getPointData('Воронеж', 'ул. Карла Маркса 67/1, БЦ "Контора", 2 эт., оф. 203.', '8-800-707-83-47'), getPointOptions());
            geoObjects[12] = new ymaps.Placemark([55.037505, 82.934591], getPointData('Новосибирск', 'Фрунзе 88, 13 этаж, офис 1306', '8 (383) 284-00-65'), getPointOptions());
            geoObjects[13] = new ymaps.Placemark([55.696364, 37.337501], getPointData('Одинцово', 'Трехгорка, Чистяковой 26 В', '8 (495) 151-20-89 '), getPointOptions());
            geoObjects[14] = new ymaps.Placemark([43.114272074527626, 131.90874199999996], getPointData('Владивосток', 'Светланская 78Б, БЦ «Фрегат»  3 этаж, офис 307', '8 (423) 206-02-94'), getPointOptions());
            geoObjects[15] = new ymaps.Placemark([47.239282, 39.729564], getPointData('Ростов-на-Дону', 'ул. Текучева, 183<br> офис 221, БЦ "Квартал Событий"', '+7 (863) 310-31-73'), getPointOptions());
            geoObjects[16] = new ymaps.Placemark([52.9843222, 36.0630838], getPointData('Орел', 'ул. Ломоносова, д. 6, офис 415а', '+7 (4862) 22-23-81'), getPointOptions());
            geoObjects[17] = new ymaps.Placemark([55.5902841, 37.4728748], getPointData('Москва', 'Калужское шоссе 14, стр.3, офис 32 ', '+7 (495) 151-20-89'), getPointOptions());
            geoObjects[18] = new ymaps.Placemark([55.813965, 37.694655], getPointData('Москва', 'Краснобогатырская 6, стр.1, БЦ «Вилла Рива», Офис 406', '+7 (495) 151-20-89'), getPointOptions());
            geoObjects[19] = new ymaps.Placemark([52.2510819, 104.352553], getPointData('Иркутск', 'Байкальская 280/1, БЦ «Актив», 3 этаж'), getPointOptions());
            geoObjects[20] = new ymaps.Placemark([52.276018, 104.289167], getPointData('Иркутск', 'Коммунаров 1а'), getPointOptions());
            geoObjects[21] = new ymaps.Placemark([43.8040433, 131.9486233], getPointData('Уссурийск', 'Комсомольская, 73 офис 217'), getPointOptions());

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
