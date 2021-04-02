if (localStorage.getItem("listProducts") !== null) {

    var listCart = JSON.parse(localStorage.getItem("listProducts"));
    
    listCart.forEach(forEachFunction);
    
    function forEachFunction(item, index) {
        console.log("item", item.idProduct);
    }
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
            "product_weight": weight
        });

        // console.log("Carrito de Compras: ", listCart);

        localStorage.setItem("listProducts", JSON.stringify(listCart));

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



