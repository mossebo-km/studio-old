function destroyPlayer(playerId) {
    var player = jQuery('#' + playerId),
        img = player.attr('img'),
        youtubePlayer = jQuery('<div/>', {
            'class': 'youtube-player',
            'data-youtube-player-src-img': img,
            'data-youtube-player-id': playerId,
        })
            .append('<div class="youtube-player__img-preview"></div>');

    player.replaceWith(youtubePlayer);
}

jQuery(function (jQuery) {
    var reviewsVideoOwl = jQuery('.reviews-video .owl-carousel');

    reviewsVideoOwl.owlCarousel({
        items: 1,
        loop: true,
        // dots: false,
        margin: 15,
        nav: true,
        navContainer: '.reviews-video__owl-arrow',
        navText: [
            '<img src="/wp-content/themes/mossebo/../images/icon/back.svg" />', // prev
            '<img src="/wp-content/themes/mossebo/../images/icon/next.svg" />' // next
        ],
        // callback's
        onTranslated: function (event) {
            var currentPage = event.page.index;     // Position of the current item
            jQuery('.reviews-video__pagination-grid_active').removeClass('reviews-video__pagination-grid_active');
            jQuery('.reviews-video__pagination-grid[data-carousel-index="' + currentPage + '"]').addClass('reviews-video__pagination-grid_active');
        },
        onTranslated: function (event) {
            var videoId = jQuery('.youtube-player-iframe').attr('id');
            destroyPlayer(videoId);
            playerInit('.youtube-player[data-youtube-player-id="' + videoId + '"]')
        }
    });

    jQuery('.reviews-video__pagination-grid').on('click', function () {
        var elem = jQuery(this);
        var index = elem.attr('data-carousel-index');
        // Переходим на страницу
        reviewsVideoOwl.trigger('to.owl.carousel', [index, 300, true]);

        jQuery('html,body').animate({
            scrollTop: jQuery('.reviews-video').offset().top - 20
        }, 400);
    });
});

// load more btn
jQuery(function (jQuery) {
    jQuery('.reviews-video__pagination-grid').slice(0, 6).show();

    jQuery('.reviews-video__pagination-more').on('click', function (event) {
        event.preventDefault();
        jQuery('.reviews-video__pagination-grid:hidden').slice(0, 3).slideDown();

        if (jQuery('.reviews-video__pagination-grid:hidden').length === 0) {
            jQuery('.reviews-video__pagination-more').fadeOut('slow');
        }

        jQuery('html,body').animate({
            scrollTop: jQuery(this).offset().top - 60
        }, 400);
    });
});
