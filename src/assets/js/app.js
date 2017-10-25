/**
 * Created by Vlad Starkovsky on 28.06.2017.
 */

"use strict";

//
// Import Libs
//

import Vue from 'vue';
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

import './include/share'

import '../sass/pages/reviews/reviews-video/reviews-video';
//import '../sass/pages/franchise/franchise-page-map/franchise-page-map';
//import '../sass/pages/franchise/franchise-social/franchise-social';
//import '../sass/pages/franchise/video-carousel/video-carousel';


import '../sass/pages/franchising/page-franchising-map';
