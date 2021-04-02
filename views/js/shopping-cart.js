/** Shopping Cart **/

if (localStorage.getItem("quantityBasket") !== null) {
    $(".quantity-basket").html(localStorage.getItem("quantityBasket"));
    $(".basket-price").html(localStorage.getItem("basketPrice"));
} else {
    $(".quantity-basket").html("0");
    $(".basket-price").html("0");
}

if (localStorage.getItem("listProducts") !== null) {

    var listCart = JSON.parse(localStorage.getItem("listProducts"));
    
    listCart.forEach(forEachFunction);
    
    function forEachFunction(item, index) {
        
        $(".bodyCart").append(
          '<tr>'+
            '<td class="cart-pic first-row"><img src="'+item.product_image+'" class="img-thumbnail" width="180" height="180" alt=""></td>'+
            '<td class="cart-title first-row">'+                
                '<h5>'+item.product_title+'</h5>'+                
            '</td>'+
            '<td class="p-price first-row">$'+item.price+'</td>'+
            '<td class="qua-col first-row">'+
                '<div class="quantity">'+
                    '<div class="pro-qty">'+
                        '<input class="form-control quantityItem" type="number" min="1" value="'+item.quantity+'" sort="'+item.sort+'" price="'+item.price+'" idProduct="'+item.idProduct+'">'+
                    '</div>'+
                '</div>'+
            '</td>'+
            '<td class="total-price first-row">$100</td>'+
            '<td class="close-td first-row"><i class="fa fa-times fa-2x"></i></td>'+
        '</tr>');

        // Avoid to manipulate the quantity on virtual products
        $(".quantityItem[sort='virtual']").attr("readonly", "true");
                        
    }
} else {        
    $(".sc-content-section").html(
        '<div class="sc-section maple-banner">'+
            '<a class="sc-link aok-block align-content-lg-center" href="#">'+
                '<img src="https://images-na.ssl-images-amazon.com/images/G/33/PAE/PayCode/MX/Onsite/MAPLE/PayCode_MX_MAPLE_Desktop_664X87._CB416544705_.png">'+
            '</a>'+
        '</div>'+
        '<div class="sc-cardui sc-card-style sc-list">'+
            '<div class="sc-cardui-body">'+
                '<div class="sc-row sc-cart-header">'+
                    '<div class="sc-row">'+
                        '<h1 class="sc-spacing-mini sc-spacing-top-base">Tu carrito de Yuppie está vacío.</h1>'+
                    '</div>'+
                '</div>'+
                '<div class="sc-empty-cart">'+
                    '<p>'+
                        'Tu carrito de compras estará disponible. Dale un propósito, llénalo de provisiones.'+
                        '<br>'+
                        'Continúa comprando en '+
                        '<a class="sc-first-link" href="#">Yuppie</a> o visita tu <a class="sc-second-link" href="#">Wish List</a>.'+
                    '</p>'+
                '</div>'+
            '</div>'+
        '</div>');
    $(".cart-table").hide();
    $(".final-checkout").hide();
}

/** Add Producto To Shopping Cart **/

$(".addToCart").click(function () {

    var idProduct = $(this).attr("idProduct");
    var image = $(this).attr("product_image");
    var title = $(this).attr("product_title");
    var price = $(this).attr("price");
    var sort = $(this).attr("sort");
    var weight = $(this).attr("product_weight");

    var addProductToCart = false;

    /** Details */

    if (sort === "virtual") {

        addProductToCart = true;
    } else {

        var selectDetail = $(".selectDetail");

        for (var i = 0; i < selectDetail.length; i++) {

            // console.log("selectDetail", $(selectDetail[i]).val());

            if ($(selectDetail[i]).val() === "") {

                swal({
                    title: "Selecciona un color y talla",
                    text: "Escoge un color preferible y disponible y una talla a tu medida.",
                    type: "info",
                    showCancelButton: false,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Seleccionar",
                    closeOnConfirm: false
                });

                return;
            } else {
                title = title + "-" + $(selectDetail[i]).val();

                addProductToCart = true;
            }
        }
    }

    /** Save new productos on the Local Storage */

    if (addProductToCart) {

        /*** Get the producto from LocalStorage */

        if (localStorage.getItem("listProducts") === null) {

            listCart = [];
        } else {

            var listProducts = JSON.parse(localStorage.getItem("listProducts"));

            for (var i = 0; i < listProducts.length; i++) {

                if (listProducts[i]["idProduct"] === idProduct) {

                    swal({
                        title: "Este producto ya está en el carrito de compras",
                        text: "",
                        type: "warning",
                        showCancelButton: false,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Volver",
                        closeOnConfirm: false
                    });

                    return;
                }

            }

            listCart.concat(localStorage.getItem("listProducts"));
        }

        listCart.push({
            "idProduct": idProduct,
            "product_image": image,
            "product_title": title,
            "price": price,
            "sort": sort,
            "product_weight": weight,
            "quantity": "1"
        });

        // console.log("Carrito de Compras: ", listCart);

        localStorage.setItem("listProducts", JSON.stringify(listCart));
        
        /** Update the Basket **/
        
        var quantityBasket = Number($(".quantity-basket").html()) + 1;
        var basketPrice = Number($(".basket-price").html()) + Number(price);
        
        $(".quantity-basket").html(quantityBasket);
        $(".basket-price").html(basketPrice);
        
        localStorage.setItem("quantityBasket", quantityBasket);
        localStorage.setItem("basketPrice", basketPrice);

        /*=============================================
         SHOW ALERT THAT THE PRODUCT HAS ALREADY BEEN ADDED
         =============================================*/

        swal({
            title: "¡Producto agregado al carrito de compras!",
            text: "",
            type: "success",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            cancelButtonText: "¡Continuar comprando!",
            confirmButtonText: "¡Ir a mi carrito de compras!",
            closeOnConfirm: false
        },function (isConfirm) {
            if (isConfirm) {
                window.location = hidePath + "shopping_cart";
            }
        });
    }


});



