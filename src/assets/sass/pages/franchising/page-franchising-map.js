jQuery(function (jQuery) {

    jQuery('.page-franchising-map__btn').on('click', function () {
        jQuery(this).toggleClass('page-franchising-map__btn_open');
        jQuery('.page-franchising-map__info').toggleClass('page-franchising-map__info_close');
    });

});
