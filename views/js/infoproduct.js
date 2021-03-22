/** Single Product Carousel with Flexslider **/

/*-----------------------
 Product Single Slider
 -------------------------*/
$(".ps-slider").owlCarousel({
    loop: false,
    margin: 10,
    nav: true,
    items: 5,
    dots: false,
    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    smartSpeed: 1200,
    autoHeight: false,
    autoplay: false
});

/*------------------
 Single Product
 --------------------*/
$('.product-thumbs-track .pt').on('click', function () {
    $('.product-thumbs-track .pt').removeClass('active');
    $(this).addClass('active');
    var imgurl = $(this).data('imgbigurl');
    var bigImg = $('.product-big-img').attr('src');
    if (imgurl != bigImg) {
        $('.product-big-img').attr({src: imgurl});
        $('.zoomImg').attr({src: imgurl});
    }
});

$(".product-pic-zoom").zoom();

