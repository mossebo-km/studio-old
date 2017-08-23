jQuery(function (jQuery) {

    jQuery('.franchise-page-map__btn').on('click', function () {
        jQuery(this).toggleClass('franchise-page-map__btn_open');
        jQuery('.franchise-page-map__info').toggleClass('franchise-page-map__info_close');
    });

});