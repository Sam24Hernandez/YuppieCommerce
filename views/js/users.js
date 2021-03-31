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
        success: function (response) {

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
               window.location = hidePath+"profile";
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
               window.location = hidePath+"profile";
            }
        });
        
    } 

});