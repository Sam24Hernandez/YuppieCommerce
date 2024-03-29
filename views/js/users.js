/** Get the Route **/
var actualRoute = location.href;

$(".btn-login, .facebook, .google").click(function () {

    localStorage.setItem("actualRoute", actualRoute);

});

/* Remove alert from input */

$("input").focus(function () {
    $(".alert").fadeOut();
});

/** Validate Repeated Email **/

var validateEmailRepeated = false;

$("#regEmail").change(function () {

    var email = $("#regEmail").val();

    var data = new FormData();
    data.append("validateEmail", email);

    $.ajax({

        url: hidePath + "ajax/user.ajax.php",
        method: "POST",
        data: data,
        cache: false,
        contentType: false,
        processData: false,
        principal: function (response) {

            if (response === "false") {

                $(".alert").remove();
                validateEmailRepeated = false;

            } else {

                var mode = JSON.parse(response).mode;

                if (mode === "directo") {

                    mode = "esta página";
                }

                $("#regEmail").parent().before('<div class="alert alert-warning"><strong>ERROR:</strong> El correo electrónico ya existe en la base de datos, fue registrado a través de ' + mode + ', por favor ingrese otro diferente</div>')

                validateEmailRepeated = true;

            }

        }

    });

});


/** Validation to User Register **/

function registerUser() {
    
    $(".alert").fadeOut();

    // Validated name

    var name = $("#regUser").val();

    if (name !== "") {

        // name id expression code
        var expression = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/;

        if (!expression.test(name)) {
            $("#regUser").parent().before('<div class="alert alert-warning"><strong>ERROR:</strong> No se permiten números ni caracteres especiales</div>');

            return false;
        }

    } else {
        $("#regUser").parent().before('<div class="alert alert-warning"><strong>ATENCIÓN:</strong> Ingresa tu nombre completo.</div>');

        return false;
    }

    // Validated email

    var email = $("#regEmail").val();

    if (email !== "") {

        // email id expression code
        var expression = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

        if (!expression.test(email)) {
            $("#regEmail").parent().before('<div class="alert alert-warning"><strong>ERROR:</strong> Ingrese un correo electrónico válido.</div>');

            return false;
        }

        if (validateEmailRepeated) {
            $("#regEmail").parent().before('<div class="alert alert-danger"><strong>ERROR:</strong> El correo electrónico ya existe en la base de datos, por favor ingrese otro diferente</div>');

            return false;
        }

    } else {
        $("#regEmail").parent().before('<div class="alert alert-warning"><strong>ATENCIÓN:</strong> Ingresa tu correo electrónico.</div>');

        return false;
    }

    // Validated password

    var password = $("#regPassword").val();

    if (password !== "") {

        // password id expression code
        var expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;

        if (!expression.test(password)) {
            $("#regPassword").parent().before('<div class="alert alert-warning"><strong>ATENCIÓN:</strong> Se requieren mayúsculas, minúsculas, caracteres especiales y letras numéricas en la contraseña.</div>');

            return false;
        }

    } else {
        $("#regPassword").parent().before('<div class="alert alert-warning"><strong>ATENCIÓN:</strong> Ingresa tu contraseña.</div>');

        return false;
    }

    return true;

}

/** Change Picture **/

$("#dataPicture").change(function () {

    var picture = this.files[0];

    if (picture["type"] !== "image/jpeg" && picture["type"] !== "image/png") {

        $("#dataPicture").val("");

        swal({
            title: "¡Error al subir la imagen!",
            text: "¡La imagen debe estar en formato JPG o PNG!",
            type: "error",
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Cerrar",
            closeOnConfirm: false,
        },
                function (isConfirm) {
                    if (isConfirm) {
                        window.location = hidePath + "profile";
                    }
                });

    } else if (Number(picture["size"]) > 2000000) {

        $("#dataPicture").val("");

        swal({
            title: "¡Error al subir la imagen!",
            text: "¡El tamaño de la imagen no puede ser mayor a 2MB!",
            type: "error",
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Cerrar",
            closeOnConfirm: false,
        },
                function (isConfirm) {
                    if (isConfirm) {
                        window.location = hidePath + "profile";
                    }
                });

    }

});

/** Comment ID **/

$(".rateProduct").click(function () {
    var idComment = $(this).attr("idComment");

    $("#idComment").val(idComment);
});

/** Change Stars Value **/
$("input[name='rating']").change(function () {

    var rating = $(this).val();

    switch (rating) {

        case "0.5":
            $("#ratingStars").html('<i class="fa fa-star-half-o fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i>');
            break;

        case "1.0":
            $("#ratingStars").html('<i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i>');
            break;

        case "1.5":
            $("#ratingStars").html('<i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star-half-o fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i>');
            break;

        case "2.0":
            $("#ratingStars").html('<i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i>');
            break;

        case "2.5":
            $("#ratingStars").html('<i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star-half-o fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i>');
            break;

        case "3.0":
            $("#ratingStars").html('<i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i>');
            break;

        case "3.5":
            $("#ratingStars").html('<i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star-half-o fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i>');
            break;

        case "4.0":
            $("#ratingStars").html('<i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i>');
            break;

        case "4.5":
            $("#ratingStars").html('<i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star-half-o fa-2x text-principal" aria-hidden="true"></i>');
            break;

        case "5.0":
            $("#ratingStars").html('<i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i> ' +
                    '<i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i>');
            break;

    }

});

/** Validate Comment **/

function validateComment() {

    var comment = $("#comment").val();

    if (comment == "") {

        $("#comment").parent().before('<div class="alert alert-warning"><strong>ERROR:</strong> Debes escribir una reseña.</div>');

        return false;
    }

    return true;

}

/** Wish List **/

$(".wishes").click(function () {

    var idProduct = $(this).attr("idProduct");
    // console.log("ID del Producto: ", idProduct);

    var idUser = localStorage.getItem("user");
    // console.log("ID del Usuario: ", idUser);

    if (idUser === null) {

        swal({
            title: '¡Debes iniciar sesión!',
            text: '¡Para agregar un producto a la lista de deseos, debes primero iniciar sesión!',
            type: "warning",
            html: '<a href="#modalLogin" data-toggle="modal" data-dismiss="modal">Iniciar sesión</a>'
        });

    } else {        

        var data = new FormData();
        data.append("idUser", idUser);
        data.append("idProduct", idProduct);

        $.ajax({
            url: hidePath + "ajax/user.ajax.php",
            method: "POST",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                // console.log(response);
                if (response === "existe") {
                    
                    swal({
                       title: "Producto en la Lista de Deseos" ,
                       text: "¡Este producto ya fue añadido recientemente a la lista de deseos!",
                       type: "warning",
                       confirmButtonText: "Cerrar",
                       closeOnConfirm: false
                    }, function(isConfirm) {
                        if (isConfirm) {
                            window.location = actualRoute;
                        }
                    });
                    
                } else if (response === "ok") {
                    
                    swal({
                       title: "Añadido" ,
                       text: "¡Producto añadido a la lista de deseos!",
                       type: "success",
                       confirmButtonText: "Cerrar",
                       closeOnConfirm: false
                    }, function(isConfirm) {
                        if (isConfirm) {
                            window.location = actualRoute;
                        }
                    });
                    
                }
            }
        });
    }

});

/** Add wish list in info product **/

$(".addToWishList").click(function() {
    
    var idProduct = $(this).attr("idProduct");    
    var idUser = localStorage.getItem("user");
    
    if (idUser === null) {
        
        swal({
            title: '¡Debes iniciar sesión!',
            text: '¡Para agregar un producto a la lista de deseos, debes primero iniciar sesión!',
            type: "warning",
            html: '<a href="#modalLogin" data-toggle="modal" data-dismiss="modal">Iniciar sesión</a>'
        });
        
    } else {    
    
        $(this).addClass("wish-fav");       
        
        var data = new FormData();
        data.append("idUser", idUser);
        data.append("idProduct", idProduct);
        
        $.ajax({
            url: hidePath + "ajax/user.ajax.php",
            method: "POST",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                // console.log(response);
                if (response === "existe") {                                        
                    
                    swal({
                       title: "Producto en la Lista de Deseos" ,
                       text: "¡Este producto ya fue añadido recientemente a la lista de deseos!",
                       type: "warning",
                       confirmButtonText: "Cerrar"
                    });                                        
                    
                } else if (response === "ok") {
                    
                    swal({
                       title: "Añadido" ,
                       text: "¡Producto añadido a la lista de deseos!",
                       type: "success",
                       confirmButtonText: "Cerrar",
                       closeOnConfirm: false
                    }, function(isConfirm) {
                        if (isConfirm) {
                            window.location = actualRoute;
                        }
                    });
                    
                }
            }
        });
    }      
   
});

/** Remove Producto To Wish List **/

$(".removeWish").click(function() {
   
   var idWish = $(this).attr("idWish");
   
   $(this).parent().parent().parent().parent().parent().remove();
   
   var data = new FormData();
   data.append("idWish", idWish);
   
   $.ajax({
      
      url: hidePath + "ajax/user.ajax.php",
      method: "POST",
      data: data,
      cache: false,
      contentType: false,
      processData: false,
      success: function(response){}
        
   });
   
});