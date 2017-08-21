jQuery( function( jQuery ) {

  var owlVideoCarousel  = jQuery( '.video-carousel__carousel.owl-carousel' );

  owlVideoCarousel.owlCarousel({
      loop: true,
      margin: 15,
      items: 1,
      nav: true,1
      navContainer: '.video-carousel__nav',
      onTranslate: carouselPagination
  });

  function carouselPagination( event ) {
    var carouselPageIndex = ( event.page.index + 1 ),
    carouselPageCount = '/' + event.page.count;

    if ( carouselPageIndex <= 9 ) {
      jQuery( '.video-carousel__nav-active-count' ).html( '0' + carouselPageIndex );
    } else {
      jQuery( '.video-carousel__nav-active-count' ).html( carouselPageIndex );
    }
    jQuery( '.video-carousel__nav-total-count' ).html( carouselPageCount );
  }

});
