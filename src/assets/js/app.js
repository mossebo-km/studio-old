/**
 * Created by Vlad Starkovsky on 28.06.2017.
 */

"use strict";

//
// Import Libs
//

window.Vue = require('vue');
import { Carousel3d, Slide } from 'vue-carousel-3d';


    var ProductionMedia = new Vue({
        el: '#productionmedia',
        components: {
            'carousel-3d': Carousel3d,
            'slide': Slide
        }
    });
    var ProductionSpaces = new Vue({
        el: '#production-spaces',
        components: {
            'carousel-3d': Carousel3d,
            'slide': Slide
        }
    });
    var ProductionPerson = new Vue({
        el: '#person_mobile',
        components: {
            'carousel-3d': Carousel3d,
            'slide': Slide
        }
    });
    var FranchsingPage = new Vue({
        el: '#page-franchising-social',
        components: {
            'carousel-3d': Carousel3d,
            'slide': Slide
        }
    });


new Vue({
    el: '#portfolio',
    data: {
        categorys: [
            {
                name: 'Лофт'
            },
            {
                name: 'Хай-Тек'
            }
        ],
        items: [
            {
                title: 'Четырехкомнатная квартира в стиле скандинавский минимализм, 74 м²1',
                subtitle: 'Прохладные тона, современные мебельные решения и грамотная организация пространства.',
                url: 'https://mossebo.dev/portfolio/trehkomnatnaya-kvartira-s-evroplanirovkoy-v-stile-sovremennaya-klassika/',
                image: 'https://mossebo.dev/wp-content/uploads/18-Cropped-Cropped.jpg',
                category: ['Лофт', 'Хай-Тек']
            },
            {
                title: 'Четырехкомнатная квартира в стиле скандинавский минимализм, 74 м²2',
                subtitle: 'Прохладные тона, современные мебельные решения и грамотная организация пространства.',
                url: 'https://mossebo.dev/portfolio/trehkomnatnaya-kvartira-s-evroplanirovkoy-v-stile-sovremennaya-klassika/',
                image: 'https://mossebo.dev/wp-content/uploads/18-Cropped-Cropped.jpg',
                category: ['Лофт']
            },
            {
                title: 'Четырехкомнатная квартира в стиле скандинавский минимализм, 74 м²3',
                subtitle: 'Прохладные тона, современные мебельные решения и грамотная организация пространства.',
                url: 'https://mossebo.dev/portfolio/trehkomnatnaya-kvartira-s-evroplanirovkoy-v-stile-sovremennaya-klassika/',
                image: 'https://mossebo.dev/wp-content/uploads/18-Cropped-Cropped.jpg',
                category: ['Лофт', 'Хай-Тек']
            },
            {
                title: 'Четырехкомнатная квартира в стиле скандинавский минимализм, 74 м²4',
                subtitle: 'Прохладные тона, современные мебельные решения и грамотная организация пространства.',
                url: 'https://mossebo.dev/portfolio/trehkomnatnaya-kvartira-s-evroplanirovkoy-v-stile-sovremennaya-klassika/',
                image: 'https://mossebo.dev/wp-content/uploads/18-Cropped-Cropped.jpg',
                category: ['Хай-Тек']
            }
        ]
    }
});


import $ from 'jquery';
import 'magnific-popup/dist/jquery.magnific-popup';
import 'owl.carousel/dist/owl.carousel';


//
// Import Scripts
//

import './include/common';
import './include/use_https';
import './include/feedback-form';
import './include/feedback-form-calc';
import './include/feedback-form-calc-2';
import './include/yandex.claster';
import './include/youtube-player';
import './include/jquery.panorama360';
import './include/back-top';
import './include/cookie';

import './include/share';

import '../sass/pages/reviews/reviews-video/reviews-video';


import '../sass/pages/franchising/page-franchising-map';


