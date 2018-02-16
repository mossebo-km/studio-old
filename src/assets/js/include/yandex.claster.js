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
            //// 1
            geoObjects[1] = new ymaps.Placemark([59.909567, 30.284220],
                getPointData('Санкт-Петербург', 'Обводного канала, 199 БЦ «Обводный двор»', '8-812-612-48-19'),
                getPointOptions());

            // Москва
            //// 1
            geoObjects[2] = new ymaps.Placemark([55.708354, 37.652705],
                getPointData('Москва', 'Ленинская Слобода, 19. БЦ «Омега Плаза», офис 701', '+7 (495) 104-67-00'),
                getPointOptions());

            //Астана
            ////1
            geoObjects[3] = new ymaps.Placemark([51.140534, 71.415104],
                getPointData('Астана', 'Кабанбай батыр, 11, ЖК Триумф Астана (вход со стороны Цирка) ', '+7 (7172) 69-62-31'),
                getPointOptions());


            //Волгоград
            ////1
            geoObjects[4] = new ymaps.Placemark([48.689781, 44.496233],
                getPointData('Волгоград', 'Баррикадная улица, 1Б', '8 (844) 259-13-36'),
                getPointOptions());


            //Иркутск
            ////1
            geoObjects[5] = new ymaps.Placemark([52.285467, 104.303612],
                getPointData('Иркутск', 'ул. Фридриха Энгельса, 17 Деловой центр "Сотня", офис 603','+7 (3952) 79-93-25'),
                getPointOptions());
            ////1
            geoObjects[6] = new ymaps.Placemark([52.276001, 104.289158],
                getPointData('Иркутск', 'г.Иркутск, ул. Коммунаров, 1а','+7 (3952) 79-93-25'),
                getPointOptions());


            //Ростов-на-Дону
            ////1
            geoObjects[7] = new ymaps.Placemark([47.239282, 39.729564],
                getPointData('Ростов-на-Дону', 'Текучева 183, офис 221', '+7 (863) 310-31-73'),
                getPointOptions());
            ////1
            geoObjects[8] = new ymaps.Placemark([47.231667, 39.701394],
                getPointData('Ростов-на-Дону', 'Катаева 293, офис 302', '+7 (863) 310-31-73'),
                getPointOptions());

            //Оренбург
            ////1
            geoObjects[9] = new ymaps.Placemark([51.777567, 55.143209],
                getPointData('Оренбург', 'Туркестанская 161, БЦ «МЕГА», этаж 4, офис 1', '8-800-707-83-47'),
                getPointOptions());

            //Уфа
            ////1
            geoObjects[10] = new ymaps.Placemark([54.733021, 55.951172],
                getPointData('Уфа', 'улица Ленина, 70, 3 эт., оф. 304.', '8-800-707-83-47'),
                getPointOptions());

            //Казань
            ////1
            geoObjects[11] = new ymaps.Placemark([55.799143, 49.123266],
                getPointData('Казань', 'улица Касаткина 11', '8-800-707-83-47'),
                getPointOptions());

            //Рязань
            ////1
            geoObjects[12] = new ymaps.Placemark([54.635308, 39.734111],
                getPointData('Рязань', 'ул. Нижне-Трубежная, д. 2', '+7 (4912) 77-28-86'),
                getPointOptions());

            //Краснодар
            ////1
            geoObjects[13] = new ymaps.Placemark([45.040719, 38.967363],
                getPointData('Краснодар', 'Ул. Фрунзе 186/2', '+7 (861) 204-07-63'),
                getPointOptions());
            ////1
            geoObjects[14] = new ymaps.Placemark([45.043087, 38.959118],
                getPointData('Краснодар', 'г. Краснодар, ул. Северная 247, 6 этаж, офис 602. Бизнес центр "Gold"', '+7 (861) 204-07-63'),
                getPointOptions());

            //Алматы
            ////1
            geoObjects[15] = new ymaps.Placemark([43.231639, 76.960090],
                getPointData('Алматы', 'проспект Достык 192/2, БЦ Green Tower'),
                getPointOptions());

            //Саратов
            ////1
            geoObjects[16] = new ymaps.Placemark([51.534874, 46.011272],
                getPointData('Саратов', 'Вавилова 28/34 БЦ, Атлант, офис 404'),
                getPointOptions());

            //Ташкент
            ////1
            geoObjects[17] = new ymaps.Placemark([41.313772, 69.313926],
                getPointData('Ташкент', 'Мирзо-Улугбекский район, проспект Мирзо-Улугбека 7м.'),
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
