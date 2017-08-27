/* -----------------------------------------*/
// Owl-carousel NEW's
jQuery(function (jQuery) {
    jQuery('section#main-page-news .owl-carousel').owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        nav: true,
    });
});
/* -----------------------------------------*/


/* -----------------------------------------*/
// Owl-carousel NEW's
jQuery(function (jQuery) {
    jQuery('#about-us-section-1-carousel').owlCarousel({
        loop: true,
        margin: 15,
        items: 1,
        nav: false
    });
});
/* -----------------------------------------*/


/* -----------------------------------------*/
// Owl-carousel Portfolio section
jQuery(function (jQuery) {

    if (jQuery(window).width() <= 767 && !jQuery('.portfolio-mobile-carousel').hasClass('owl-carousel')) {
        jQuery('#main-page-portfolio .portfolio-mobile-carousel').addClass('owl-carousel').after('<div class="grid__effect-roxy_nav"></div>');
        jQuery('#main-page-portfolio .owl-carousel').owlCarousel({
            loop: true,
            margin: 0,
            items: 1,
            nav: true,
            dots: false,
            navContainer: '#main-page-portfolio .grid__effect-roxy_nav'
        });
    }

    jQuery(window).resize(function () {
        if (jQuery(window).width() >= 768) {
            jQuery('#main-page-portfolio .owl-carousel').trigger('destroy.owl.carousel').removeClass('owl-carousel owl-loaded');
            jQuery('#main-page-portfolio .owl-carousel').find('.owl-stage-outer').children().unwrap();
            jQuery('#main-page-portfolio grid__effect-roxy_nav').remove();
        } else if (jQuery(window).width() <= 767 && !jQuery('.portfolio-mobile-carousel').hasClass('owl-carousel')) {
            jQuery('.portfolio-mobile-carousel').addClass('owl-carousel').after('<div class="grid__effect-roxy_nav"></div>');
            jQuery('#main-page-portfolio .owl-carousel').owlCarousel({
                loop: true,
                margin: 0,
                items: 1,
                nav: true,
                dots: false,
                navContainer: '#main-page-portfolio .grid__effect-roxy_nav'
            });
        }
    });

});
/* -----------------------------------------*/


/* -----------------------------------------*/
// Маска на телефон.
//jQuery(function (jQuery) {
//    jQuery.mask.definitions['~'] = '[+-]';
//    jQuery('.phone-mask').mask('+7 (999)999-99-99');
//});
/* -----------------------------------------*/


/* -----------------------------------------*/
// Modal calc window
jQuery(function (jQuery) {
    jQuery('#modal_btn_modal').magnificPopup({
        items: {
            src: '#modal-calc-header',
        },
        removalDelay: 300,
        callbacks: {
            beforeOpen: function () {
                if (jQuery(window).width() <= 991) {
                    toggleMenu();
                }
            }
        }
    });
});
/* -----------------------------------------*/


/* -----------------------------------------*/
// Подписаться на E-mail рассылку
jQuery(function (jQuery) {
    jQuery('.footer-subscribe').submit(function (event) {
        event.preventDefault();

        if (validateEmail(jQuery(this).find('.subscribe-email-input').val())) {
            jQuery.ajax({
                method: 'POST',
                url: '/wp-content/themes/mossebo/contacts.php',
                data: {
                    emailForm: jQuery(this).find('.subscribe-email-input').val()
                }
            })
                .done(function () {

                    // Clear form's
                    for (i = 0; i < jQuery('.footer-subscribe').length; i++) {
                        jQuery('.footer-subscribe')[i].reset();
                    }

                    // Modal Thank you page
                    thnModal();

                    // Yandex reachGoal
                    yaCounter42716444.reachGoal('news-form');
                });

        } else {
            jQuery(this).find('.subscribe-email-input').focus();
        } // elseif END;
    });
});

// Проверка правильности заполнено опля E-mail
function validateEmail(email) {
    var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i,
        resultLog = pattern.test(email);
    return resultLog;
}

window.validateEmail = validateEmail;

/* -----------------------------------------*/


/* -----------------------------------------*/
// Авто высота 1x1
jQuery(function (jQuery) {

    resizeContent('.grid figure.effect-roxy', '1');
    resizeContent('.main-page-social-item', '1');

    jQuery(window).resize(function () {
        resizeContent('.grid figure.effect-roxy', '1');
        resizeContent('.main-page-social-item', '1');
    });
});

function resizeContent(selectorEl, rate) {
    jQuery(selectorEl).height(( jQuery(selectorEl).width() * rate ));
}

window.resizeContent = resizeContent;

/* -----------------------------------------*/


/* -----------------------------------------*/
// Центруем заголовок по вретикали roxy block grid
jQuery(function (jQuery) {

    jQuery('.grid figure.effect-roxy').each(function () {
        var gridRoxyElemHeight = jQuery(this).find('.portfolio-page-block').height();
        jQuery(this).find('.portfolio-page-block').css('margin-top', +-(gridRoxyElemHeight / 2 ) + 'px');
    });

    // При изменении размера окна
    jQuery(window).resize(function () {
        jQuery('.grid figure.effect-roxy').each(function () {
            var gridRoxyElemHeight = jQuery(this).find('.portfolio-page-block').height();
            jQuery(this).find('.portfolio-page-block').css('margin-top', +-(gridRoxyElemHeight / 2 ) + 'px');
        });
    });

});
/* -----------------------------------------*/


/* -----------------------------------------*/
// Panorama ( страница о нас, блок наши офисы ).
jQuery(function (jQuery) {
    if (document.querySelector('.panorama-view') !== null && jQuery(window).width() > 768) {
        jQuery('.panorama-view').panorama360();
    } else {
        jQuery('.panorama')
            .each(function (i, elem) {
                jQuery(elem).append(jQuery('<img />', {
                    src: jQuery(elem).attr('data-pano-mobile-src'),
                    class: 'img-responsive'
                })).css({height: 'auto'});
            })
            .find('.panorama-view').hide();
    }
});
/* -----------------------------------------*/


/* -----------------------------------------*/
// Яндекс цели
// Цель на кнопку на странице 'о нас', переход на франшизу
jQuery('.ya_target_btn_onas').click(function () {
    yaCounter42716444.reachGoal('franchise');
});
/* -----------------------------------------*/


/* -----------------------------------------*/
// Mobile menu
jQuery(function (jQuery) {

    // Open menu
    var flagMenu = false;
    jQuery('#nav-icon3').on('touchstart click', function () {
        if (!flagMenu) {
            flagMenu = true;
            setTimeout(function () {
                flagMenu = false;
            }, 350);
            toggleMenu();
        }

        return false;
    });

    // On touchstart remove menu
    jQuery('.mobile-menu-overlay').on('touchstart', toggleMenu);

    // On resize - close menu
    jQuery(window).resize(function () {
        if (jQuery(window).width() >= 992 && document.querySelector('.mobile-menu-overlay').getAttribute('data-overlay') === 'open') {
            toggleMenu();
        }
    });
});
/* -----------------------------------------*/

// Mobile menu function's
function toggleMenu() {
    var bodyElem = document.querySelector('body'),
        mainWrapper = document.querySelector('#main-wrapper.wrapper'),
        mobileMenuBtn = document.querySelector('#nav-icon3');

    bodyElem.classList.toggle('overflow-hidden');
    mainWrapper.classList.toggle('open');
    mobileMenuBtn.classList.toggle('open');

    overlayToggle();
}

function overlayToggle() {
    openMenuOverlay = document.querySelector('.mobile-menu-overlay');

    if (openMenuOverlay.getAttribute('data-overlay') === 'close') {
        openMenuOverlay.setAttribute('data-overlay', 'open');
        openMenuOverlay.style.display = 'block';
        setTimeout(showOverlay, 300);
    }

    else if (openMenuOverlay.getAttribute('data-overlay') === 'open') {
        openMenuOverlay.setAttribute('data-overlay', 'close');
        openMenuOverlay.style.opacity = '0';
        setTimeout(hideOverlay, 300);
    }

}

function showOverlay() {
    document.querySelector('.mobile-menu-overlay').style.opacity = '.5';
}

function hideOverlay() {
    openMenuOverlay.style.display = 'none';
}

/* -----------------------------------------*/


/* -----------------------------------------*/
// Footer address responsive
jQuery(function (jQuery) {

    var myDiv2Para;

    if (jQuery(window).width() <= 767 && jQuery('.footer-col-contacts').children('.footer-col-contact__wrapper').length !== 0) {
        myDiv2Para = jQuery('.footer-col-contact__wrapper').detach();
        jQuery('.footer-col-contacts').hide();
        myDiv2Para.appendTo('.footer-top .row');
    }

    jQuery(window).resize(function () {
        if (jQuery(window).width() <= 767 && jQuery('.footer-col-contacts').children('.footer-col-contact__wrapper').length !== 0) {
            myDiv2Para = jQuery('.footer-col-contact__wrapper').detach();
            jQuery('.footer-col-contacts').hide();
            myDiv2Para.appendTo('.footer-top .row');
        } else if (jQuery(window).width() >= 767 && jQuery('.footer-col-contacts').children('.footer-col-contact__wrapper').length === 0) {
            myDiv2Para = jQuery('.footer-col-contact__wrapper').detach();
            myDiv2Para.appendTo('.footer-col-contacts');
            jQuery('.footer-col-contacts').show();
        }
    });

});
/* -----------------------------------------*/


/* -----------------------------------------*/
// Magnific-popup init
jQuery(function (jQuery) {

    if (jQuery(window).width() >= 576) {

        // Add wrapp for img item gellary
        jQuery('.gallery-img-post img.img-post-gallary').each(function () {
            var srcImg = jQuery(this).attr('src');
            jQuery(this).wrap('<a class="img-post-gallary__link" href="' + srcImg + '"></a>');
        });

        // Init magnificPopup
        jQuery('.gallery-img-post').find('.img-post-gallary__link').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            },
            removalDelay: 300,
            overflowY: 'hidden'
        });
    }

});
/* -----------------------------------------*/


/* -----------------------------------------*/

// Init widgets
function initWidgets() {

    if (jQuery(window).width() >= 767) {

        // Инициализируем виджет vk
        var urlVk = '//vk.com/js/api/openapi.js?139';
        jQuery.getScript(urlVk, function () {
            VK.Widgets.Group("vk_groups", {mode: 0, width: "auto", height: "214"}, 76599685);
        });

        // Инициализируем виджет ОК
        !function (d, id, did, st) {
            var js = d.createElement("script");
            js.src = "https://connect.ok.ru/connect.js";
            js.onload = js.onreadystatechange = function () {
                if (!this.readyState || this.readyState == "loaded" || this.readyState == "complete") {
                    if (!this.executed) {
                        this.executed = true;
                        setTimeout(function () {
                            OK.CONNECT.insertGroupWidget(id, did, st);
                        }, 0);
                    }
                }
            };
            d.documentElement.appendChild(js);
        }(document, "ok_group_widget", " 53291776606394", '{"width":200,"height":214}');

        // Инициализируем виджет FB
        var iframeFB = document.createElement('iframe');
        iframeFB.src = 'https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fmossebodesign%2F&tabs&width=220&height=214&small_heade­r=false&adapt_container_width=true&hide_cover=false&show_fac­epile=true&appId';
        iframeFB.width = '100%';
        iframeFB.height = '214';
        iframeFB.style.border = 'none';
        iframeFB.style.overflow = 'hidden';
        iframeFB.scrolling = 'no';
        iframeFB.setAttribute('frameborder', 0);
        iframeFB.setAttribute('allowTransparency', true);
        document.querySelector('.fcbook-iframe').appendChild(iframeFB);
    }
}

window.initWidgets = initWidgets;

/* -----------------------------------------*/


/* -----------------------------------------*/

// Show modal Thank you page
function thnModal() {
    jQuery.magnificPopup.open({
        items: {
            src: '.modal-tnx'
        },
        removalDelay: 300,
        // Callbacck функция, инициализация пикселей
        callbacks: {
            open: function () {
                initWidgets();
            }
        }
    });
}

window.thnModal = thnModal;
/* -----------------------------------------*/


/* -----------------------------------------*/
// Sub menu

jQuery(function (jQuery) {

    jQuery('.menu-item-has-children > a').on('click', function (event) {
        event.preventDefault();
        jQuery(this).parent().toggleClass('current-menu-ancestor');
    });

});
/* -----------------------------------------*/


/* -----------------------------------------*/

// Взять куки по имени
function getCookie(name) {
    var matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ))
    return matches ? decodeURIComponent(matches[1]) : undefined
}

window.getCookie = getCookie;

/* -----------------------------------------*/


/* -----------------------------------------*/
// Цель на кнопку политика конфедициальности на 3 шаге калькулятора

jQuery(function (jQuery) {
    jQuery('#feedback-form-calc__privacy-policy').click(function () {
        yaCounter42716444.reachGoal('feedback-form-calc__privacy-policy');
    });

});
/* -----------------------------------------*/
