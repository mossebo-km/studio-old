jQuery(function (jQuery) {

    var owlVideoCarousel = jQuery('.franchise-social__carousel.owl-carousel');

    owlVideoCarousel.owlCarousel({
        loop: true,
        margin: 15,
        // items: 3,
        navContainer: '.franchise-social__carousel.owl-carousel',
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            576: {
                items: 3,
                nav: false
            }
        }
    });

});
