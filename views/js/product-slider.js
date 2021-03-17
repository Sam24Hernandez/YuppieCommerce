
/* == Product Slider with Carousel == */

$(".product-slider").owlCarousel({
    loop: true,
    margin: 25,
    nav: true,
    items: 4,
    dots: true,
    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    smartSpeed: 1200,
    autoHeight: false,
    autoplay: true,
    responsive: {
        0: {
            items: 1
        },
        576: {
            items: 2
        },
        992: {
            items: 2
        },
        1200: {
            items: 3
        }
    }
});


