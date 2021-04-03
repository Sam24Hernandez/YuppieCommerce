/** Shopping Cart **/

if (localStorage.getItem("quantityBasket") !== null) {
    
    $(".quantity-basket").html(localStorage.getItem("quantityBasket"));
    $(".basket-price").html(localStorage.getItem("basketPrice"));
} else {
    
    $(".quantity-basket").html("0");
    $(".basket-price").html("0");
}

/* Display the products in the shopping cart page **/
if (localStorage.getItem("listProducts") !== null) {

    var listCart = JSON.parse(localStorage.getItem("listProducts"));        
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

for (var i = 0; i < index.length; i++) {
    
    if (index[i] === "shopping_cart") {
        
        listCart.forEach(forEachFunction);
    
        function forEachFunction(item, index) {                       

            $(".bodyCart").append(
              '<tr>'+
                '<td class="cart-pic first-row"><img src="'+item.product_image+'" class="img-thumbnail" width="180" height="180" alt=""></td>'+
                '<td class="cart-title first-row"><h5 class="titleCartPurchase">'+item.product_title+'</h5></td>'+
                '<td class="p-price first-row">$<span>'+Number(item.price).toFixed(2)+'</span></td>'+
                '<td class="qua-col first-row">'+
                    '<div class="quantity">'+
                        '<div class="pro-qty">'+
                            '<input class="form-control quantityItem" type="number" min="1" value="'+item.quantity+'" sort="'+item.sort+'" price="'+item.price+'" idProduct="'+item.idProduct+'" item="'+index+'">'+
                        '</div>'+
                    '</div>'+
                '</td>'+
                '<td class="total-price first-row subtotal'+index+' subtotals">$<span>'+(Number(item.quantity)*Number(item.price)).toFixed(2)+'</span></td>'+
                '<td class="close-td first-row"><button type="button" class="removeItemCart" idProduct="'+item.idProduct+'" weight="'+item.product_weight+'"><i class="fa fa-times fa-2x"></i></button></td>'+
            '</tr>');

            // Avoid to manipulate the quantity on virtual products
            $(".quantityItem[sort='virtual']").attr("readonly", "true");

            // Update subtotal
            var priceShoppingCart = $(".bodyCart .p-price span");

            // console.log(priceShoppingCart);
            basketQuantity(priceShoppingCart.length);
            sumSubtotals();

        }
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

/** Remove Product To Shopping Cart **/

$(document).on("click", ".removeItemCart", function(){
   
   $(this).parent().parent().remove();
   
   var idProduct = $(".bodyCart button");
   var image = $(".bodyCart img");
   var title = $(".bodyCart .titleCartPurchase");
   var price = $(".bodyCart .p-price span");
   var quantity = $(".bodyCart .quantityItem");
   
   listCart = [];
   
   if (idProduct.length !== 0) {
       
       for (var i = 0; i < idProduct.length; i++) {
           
           var idProductArray = $(idProduct[i]).attr("idProduct");
           var imageArray = $(image[i]).attr("src");
           var titleArray = $(title[i]).html();
           var priceArray = $(price[i]).html();
           var weightArray = $(idProduct[i]).attr("weight");
           var sortArray = $(quantity[i]).attr("sort");
           var quantityArray = $(quantity[i]).val();
           
           listCart.push({
                "idProduct": idProductArray,
                "product_image": imageArray,
                "product_title": titleArray,
                "price": priceArray,
                "sort": sortArray,
                "product_weight": weightArray,
                "quantity": quantityArray
            });   
            
            // console.log("Carrito de Compras: ", listCart);
           
       }
             
        localStorage.setItem("listProducts", JSON.stringify(listCart));
        
        sumSubtotals();
        basketQuantity(listCart.length);
   } else {
       
        localStorage.removeItem("listProducts");
       
        localStorage.setItem("quantityBasket", "0");
       
        localStorage.setItem("basketPrice", "0");
       
        $(".quantity-basket").html("0");
        $(".basket-price").html("0");
        
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
});

/** Generate subtotal after change the quantity **/

$(document).on("change", ".quantityItem", function() {
   
   var quantity = $(this).val();
   var price = $(this).attr("price");
   var idProduct = $(this).attr("idProduct");
   var item = $(this).attr("item");
   
   $(".subtotal"+item).html('$<span>'+(quantity*price).toFixed(2)+'</span>');
   
   // Update LocalStorage
   var idProduct = $(".bodyCart button");
   var image = $(".bodyCart img");
   var title = $(".bodyCart .titleCartPurchase");
   var price = $(".bodyCart .p-price span");
   var quantity = $(".bodyCart .quantityItem");
   
   listCart = [];
   
   for (var i = 0; i < idProduct.length; i++) {
           
        var idProductArray = $(idProduct[i]).attr("idProduct");
        var imageArray = $(image[i]).attr("src");
        var titleArray = $(title[i]).html();
        var priceArray = $(price[i]).html();
        var weightArray = $(idProduct[i]).attr("weight");
        var sortArray = $(quantity[i]).attr("sort");
        var quantityArray = $(quantity[i]).val();

        listCart.push({
            "idProduct": idProductArray,
            "product_image": imageArray,
            "product_title": titleArray,
            "price": priceArray,
            "sort": sortArray,
            "product_weight": weightArray,
            "quantity": quantityArray
         });   

         // console.log("Carrito de Compras: ", listCart);

    }
    
    localStorage.setItem("listProducts", JSON.stringify(listCart));
    
    sumSubtotals();
    basketQuantity(listCart.length);
    
});

/** Sum of All SubTotal **/

function sumSubtotals() {
    
    var subtotals = $(".subtotals span");
    var arraySumSubtotals = [];
    
    for (var i = 0; i < subtotals.length; i++) {
        
        var subtotalsArray = $(subtotals[i]).html();
        arraySumSubtotals.push(Number(subtotalsArray));
    }
    
    function sumArraySubtotals(total, num) {
        
        return total + num;
    }
    
    var sumTotal = arraySumSubtotals.reduce(sumArraySubtotals, 0);
    
    $(".sumSubtotal").html('Subtotal <span>$'+(sumTotal).toFixed(2)+'</span>');
    $(".cart-total").html('Total <span>$'+(sumTotal).toFixed(2)+'</span>');
    
    $(".basket-price").html((sumTotal).toFixed(2));
    
    localStorage.setItem("basketPrice", (sumTotal).toFixed(2));
    
}

/** Update the Shopping Basket Item */

function basketQuantity(quantityProducts) {
    
    if (quantityProducts !== 0) {
        
        var quantityItem = $(".bodyCart .quantityItem");
        
        var arraySumQuantities = [];
        
        for (var i = 0; i < quantityItem.length; i++) {
            
            var quantityItemArray = $(quantityItem[i]).val();
            arraySumQuantities.push(Number(quantityItemArray));
        }
        
        function sumArrayQuantities(total, num) {
            
            return total + num;
        }
        
        var sumTotalQuantities = arraySumQuantities.reduce(sumArrayQuantities, 0);
        
        $(".quantity-basket").html(sumTotalQuantities);
        localStorage.setItem("quantityBasket", sumTotalQuantities);
    }
    
}

/** Checkout **/
$("#btnCheckout").click(function() {
   
    $(".listProducts table.tableProducts tbody").html("");

    var idUser = $(this).attr("idUser");
    var weight = $(".bodyCart button");
    var title = $(".bodyCart .titleCartPurchase");
    var quantity = $(".bodyCart .quantityItem");
    var subtotal = $(".bodyCart .subtotals span");
    var sortArray = [];
    var quantityWeight = [];   

    /** Sum subtotal **/

    var sumSubTotal = $(".sumSubtotal span");
    
    $(".valueSubtotal").html($(sumSubTotal).html());
    $(".valueSubtotal").attr("valueTotal", $(sumSubTotal).html());
    
    
    for (var i = 0; i < title.length; i++) {
        
        var weightArray = $(weight[i]).attr("weight");
        var titleArray = $(title[i]).html();
        var quantityArray = $(quantity[i]).val();
        var subtotalArray = $(subtotal[i]).html();
        
        quantityWeight[i] = weightArray * quantityArray;
        
        function sumArrayWeight(total, num) {
            
            return total + num;
        }
        
        var sumTotalWeight = quantityWeight.reduce(sumArrayWeight, 0);
        
        $(".listProducts table.tableProducts tbody").append(
                '<tr>'+
                    '<td class="valueTitle">'+titleArray+'</td>'+
                    '<td class="valueQuantity">'+quantityArray+'</td>'+
                    '<td>$<span class="valueItem" valueTotal="'+subtotalArray+'">'+subtotalArray+'</span></td>'+
                '</tr>');
        
        sortArray.push($(quantity[i]).attr("sort"));
        
        function checkSort(sort) {
            
            return sort === "fisico";
        }
    }
    
    if (sortArray.find(checkSort) === "fisico") {
        
        $(".selectState").html(
            '<select id="selectState" class="form-control" required>'+
                '<option value="">Seleccion el estado</option>'+
            '</select>');

        $(".formDelivery").show();
        
        $(".btnPay").attr("sort", "fisico");
        
        $.ajax({
            url: hidePath + "views/js/plugins/states.json",
            type: "GET",
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function(response) {
                
                response.forEach(selectState);
                
                function selectState(item, index) {
                    
                    var state = item.name;
                    var numState = item.id;
                    
                    $("#selectState").append('<option value="'+numState+'">'+state+'</option>');
                }
            }
        });
    }
   
});


