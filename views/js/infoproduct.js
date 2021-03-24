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

/*------------------
 Counter Views
 --------------------*/

var counter = 0;

$(window).on("load", function() {
   
   var views = $("span.views").html();
   var price = $("span.views").attr("sort");   
   
   counter = Number(views) + 1;
   
   $("span.views").html(counter);
   
   if (price == 0) {
       var item = "free_views";
   } else {
       var item = "views";
   }
   
   // EVALUATE THE ROUTE TO DEFINE THE PRODUCT TO BE UPGRADED
   
   var actualUrl = location.pathname;
   var route = actualUrl.split("/");
   
   var data = new FormData();
   
   data.append("valueProduct", counter);
   data.append("item", item);
   data.append("route", route.pop());  
   
   $.ajax({
      
      url: hidePath+"ajax/product.ajax.php",
      method: "POST",
      data: data,
      cache: false,
      contentType: false,
      processData: false,
      success: function(response){console.log("Respuesta:", response);}
        
   });
    
});

