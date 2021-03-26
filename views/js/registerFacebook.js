/** Facebook Button **/

$(".facebook").click(function () {

    FB.login(function (response) {

        validateUser();

    }, {scope: 'public_profile, email'});

});

/** Validate User **/

function validateUser() {

    FB.getLoginStatus(function (response) {

        statusChangeCallback(response);

    });

}

/** Validate Status Change on Facebook **/

/**
 * 
 *  Call FB.getLoginStatus() to get the most recent login status (statusChangeCallback() is a 
 *  function that is part of the example that processes the response). 
 * 
 */
function statusChangeCallback(response) {

    // if the person is logged into Facebook and your application.
    if (response.status === 'connected') {

        testApi();

    } else {

        swal({

            title: "¡Error!",
            text: "¡Ha ocurrido un error al iniciar sesión con Facebook, vuelve a intentarlo!",
            type: "error",
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Cerrar",
            closeOnConfirm: false

        },
                function (isConfirm) {

                    if (isConfirm) {
                        window.location = localStorage.getItem("actualRoute");
                    }

                });

    }

}

/** Facebook Api **/

function testApi() {

    FB.api('/me?fields=id,name,email,picture.width(150).height(150)', function (response) {

        if (response.email == null) {

            swal({

                title: "¡Oops!",
                text: "¡Debes proporcionar el correo electrónico de Facebook para poder iniciar sesión!",
                type: "error",
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Cerrar",
                closeOnConfirm: false

            },
                    function (isConfirm) {

                        if (isConfirm) {
                            window.location = localStorage.getItem("actualRoute");
                        }

                    });

        } else {

            var name = response.name;
            var email = response.email;
            // var picture = "http://graph.facebook.com/" + response.id + "/picture?type=large";
            var picture = response.picture.data.url;

            var data = new FormData();
            data.append("name", name);
            data.append("email", email);
            data.append("picture", picture);

            $.ajax({

                url: hidePath + "ajax/user.ajax.php",
                method: "POST",
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {

                    if (response === "ok") {

                        window.location = localStorage.getItem("actualRoute");

                    } else {

                        swal({

                            title: "¡Error!",
                            text: "¡El correo electrónico " + email + " ya está registrado con un método diferente a Facebook!",
                            type: "error",
                            confirmButtonColor: "#DD6B55",
                            confirmButtonText: "Cerrar",
                            closeOnConfirm: false

                        },
                                function (isConfirm) {

                                    if (isConfirm) {

                                        FB.getLoginStatus(function (response) {

                                            if (response.status === 'connected') {

                                                FB.logout(function (response) {

                                                    deleteCookie("fblo_179926760461889");

                                                    setTimeout(function () {

                                                        window.location = hidePath + "signout";

                                                    }, 500);

                                                });

                                                function deleteCookie(name) {

                                                    document.cookie = name + '=; Path/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';

                                                }

                                            }

                                        });

                                    }

                                });

                    }

                }
            });

        }

    });

}

/** Facebook Logout **/

$(".signout").click(function (e) {

    e.preventDefault();

    FB.getLoginStatus(function (response) {

        if (response.status === 'connected') {

            FB.logout(function (response) {

                deleteCookie("fblo_179926760461889");

                console.log("signout from Yuppie");

                setTimeout(function () {

                    window.location = hidePath + "signout";

                }, 500);

            });

            function deleteCookie(name) {

                document.cookie = name + '=; Path/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';

            }


        }

    });


});
