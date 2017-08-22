// document.querySelector('.back-top').style.display = 'none';

jQuery(function (jQuery) {

    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 200) {
            jQuery('.back-top').fadeIn();
        } else {
            jQuery('.back-top').fadeOut();
        }
    });

    jQuery('.back-top').click(function (event) {
        event.preventDefault();
        jQuery('body,html').animate({
            scrollTop: 0
        }, 1500);
    });

});
