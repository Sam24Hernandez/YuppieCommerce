/** Add Producto To Shopping Cart **/

var listCart = [];

$(".addToCart").click(function () {

    var idProduct = $(this).attr("idProduct");
    var image = $(this).attr("product_image");
    var title = $(this).attr("product_title");
    var price = $(this).attr("price");
    var sort = $(this).attr("sort");
    var weight = $(this).attr("product_weight");

    /** Save new productos on the Local Storage */

    listCart.push({
        "idProduct": idProduct,
        "product_image": image,
        "product_title": title,
        "price": price,
        "sort": sort,
        "product_weight": weight
    });
    
    console.log("Carrito de Compras: ", listCart);

    localStorage.setItem("listProducts", JSON.stringify(listCart));
  
    
});


