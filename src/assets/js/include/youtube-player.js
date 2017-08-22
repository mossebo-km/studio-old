function playerInit(elem) {
    var youtubePlayer = jQuery(elem);

    // Получаем ссылку на изображения из атрибута родителя и добавляем ее к стилю background дочернего блока.
    youtubePlayer.find('.youtube-player__img-preview').css({
        'background': 'url(' + youtubePlayer.attr('data-youtube-player-src-img') + ') 50% 50% no-repeat',
        'background-size': 'cover'
    });

    // Создаем блок play.
    youtubePlayer.append(jQuery('<div/>', {'class': 'youtube-player__btn-play'}));

    // Формируем iFrame при клике на плеер.
    youtubePlayer.on('click', function () {

        var iframe_url = "https://www.youtube.com/embed/" + youtubePlayer.attr('data-youtube-player-id') + "?autoplay=1&autohide=1&fs=1&controls=2&playsinline=0";

        if (youtubePlayer.data('params')) iframe_url += '&' + youtubePlayer.data('params');

        var iframe = jQuery('<iframe/>', {
            'class': 'youtube-player-iframe',
            'frameborder': '0',
            'id': youtubePlayer.attr('data-youtube-player-id'),
            'img': youtubePlayer.attr('data-youtube-player-src-img'),
            'src': iframe_url,
            'width': youtubePlayer.width(),
            'height': youtubePlayer.height(),
            'allowfullscreen': true,
            'autoplay': 1
        });

        youtubePlayer.fadeOut('slow', function () {
            youtubePlayer.replaceWith(iframe);
        });
    });
}
window.playerInit = playerInit;

// Инициализируем плееры
jQuery('.youtube-player').each(function () {
    var self = this;
    playerInit(self);
});
