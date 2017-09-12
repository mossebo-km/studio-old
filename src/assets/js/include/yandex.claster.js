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
            geoObjects[0] = new ymaps.Placemark([59.903814, 30.300658],
                getPointData('Санкт-Петербург', 'Санкт-Петербург, Митрофаньевское шоссе, 2к2', '8-812-612-48-19'),
                getPointOptions());
            geoObjects[1] = new ymaps.Placemark([59.909567, 30.284220],
                getPointData('Санкт-Петербург', 'Обводного канала, 199 БЦ «Обводный двор»', '8-812-612-48-19'),
                getPointOptions());
            geoObjects[2] = new ymaps.Placemark([59.969493, 30.432571],
                getPointData('Санкт-Петербург', 'Маршала Тухачевского, 22', '8-812-612-48-19'),
                getPointOptions());
            geoObjects[3] = new ymaps.Placemark([59.929926, 30.399914],
                getPointData('Санкт-Петербург', 'Малоохтинский проспект, 61А', '8-812-612-48-19'),
                getPointOptions());

            // Москва
            geoObjects[4] = new ymaps.Placemark([55.650150, 37.540586],
                getPointData('Москва', 'улица Бутлерова, 17', '8 (495) 151-20-89'),
                getPointOptions());

            //Минск
            geoObjects[5] = new ymaps.Placemark([53.908649, 27.432321],
                getPointData('Минск', 'улица Притыцкого, 156', '8 (800) 707-83-47'),
                getPointOptions());

            //Ташкент
            geoObjects[6] = new ymaps.Placemark([41.306802, 69.306886],
                getPointData('Ташкент', 'проспект Мирзо-Улугбека 7м', '+7 (812) 612-48-19'),
                getPointOptions());

            //Бишкек
            geoObjects[7] = new ymaps.Placemark([42.8567465744804, 74.60512949999993],
                getPointData('Бишкек', 'Горького, 142', '9 (963) 129-623-62'),
                getPointOptions());

            //Астана
            geoObjects[8] = new ymaps.Placemark([51.124549, 71.434274],
                getPointData('Астана', 'улица Достык, 18', '+7 (812) 612-48-19'),
                getPointOptions());

            //Тюмень
            geoObjects[9] = new ymaps.Placemark([57.14689156753542, 65.5532105],
                getPointData('Тюмень', 'ул. Республики, д. 81, офис 504.', '8 (3452) 39-71-14'),
                getPointOptions());

            //Волгоград
            geoObjects[10] = new ymaps.Placemark([48.689781, 44.496233],
                getPointData('Волгоград', 'Баррикадная улица, 1Б', '8 (844) 259-13-36'),
                getPointOptions());

            //Самара
            geoObjects[11] = new ymaps.Placemark([53.222043, 50.191191],
                getPointData('Самара', 'Московское шоссе, 41, РДЦ, офис 402', '8 (846) 201-04-23'),
                getPointOptions());

            //Иркутск
            geoObjects[12] = new ymaps.Placemark([52.2510819, 104.352553],
                getPointData('Иркутск', 'Байкальская 280/1, БЦ «Актив», 3 этаж'),
                getPointOptions());
            geoObjects[13] = new ymaps.Placemark([52.276018, 104.289167],
                getPointData('Иркутск', 'Коммунаров 1а'),
                getPointOptions());

            //Уссурийск
            geoObjects[14] = new ymaps.Placemark([43.804007, 131.948699],
                getPointData('Уссурийск', 'Комсомольская, 73 офис 217'),
                getPointOptions());

            //Ростов-на-Дону
            geoObjects[15] = new ymaps.Placemark([47.239282, 39.729564],
                getPointData('Ростов-на-Дону', 'Текучева 183, офис 221', '+7 (863) 310-31-73'),
                getPointOptions());
            geoObjects[16] = new ymaps.Placemark([47.231667, 39.701394],
                getPointData('Ростов-на-Дону', 'Катаева 293, офис 302', '+7 (863) 310-31-73'),
                getPointOptions());

            //Оренбург
            geoObjects[17] = new ymaps.Placemark([51.777567, 55.143209],
                getPointData('Оренбург', 'Туркестанская 161, БЦ «МЕГА», этаж 4, офис 1', '8-800-707-83-47'),
                getPointOptions());
            geoObjects[18] = new ymaps.Placemark([51.842772, 55.119898],
                getPointData('Оренбург', 'Шарлыкское шоссе, 1', '8-800-707-83-47'),
                getPointOptions());

            //Тула
            geoObjects[19] = new ymaps.Placemark([54.186532, 37.617824],
                getPointData('Тула', 'Каминского 1/30', '8-800-707-83-47'),
                getPointOptions());

            //Одинцово
            //geoObjects[20] = new ymaps.Placemark([55.696364, 37.337501],
            //    getPointData('Одинцово', 'Трехгорка, Чистяковой 26 В', '8 (495) 151-20-89 '),
            //    getPointOptions());

            //Уфа
            geoObjects[20] = new ymaps.Placemark([54.177843, 37.599902],
                getPointData('Уфа', 'Ленина 70", 3 эт., оф. 304.', '8-800-707-83-47'),
                getPointOptions());

            //Пенза
            geoObjects[21] = new ymaps.Placemark([53.196531, 45.014516],
                getPointData('Пенза', 'улица Володарского, 70', '8-800-707-83-47'),
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
