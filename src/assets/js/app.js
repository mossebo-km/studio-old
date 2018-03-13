/**
 * Created by Vlad Starkovsky on 28.06.2017.
 */

"use strict";

//
// Import Libs
//

import Vue from 'vue';
//import axios from 'axios';
import { Carousel3d, Slide } from 'vue-carousel-3d';

// До лучших времен
//import PortfolioOffice from './vue/portfolio-office';


new Vue({
    el: '#main-wrapper',
    components: {
        //'portfolio-office': PortfolioOffice,
        'carousel-3d': Carousel3d,
        'slide': Slide
    },
    data: {
        CategoryName: 'Все'
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


