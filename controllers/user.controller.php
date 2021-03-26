<?php

class UserController {
    /* User Register */

    public function ctrRegisterUser() {

        if (isset($_POST["regUser"])) {

            if (preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["regUser"]) &&
                    preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["regEmail"]) &&
                    preg_match('/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/', $_POST["regPassword"])) {

                // The hash of the password that
                // can be stored in the database
                $hash = crypt($_POST["regPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

                $encryptEmail = md5($_POST["regEmail"]);

                $data = array(
                    "name" => $_POST["regUser"],
                    "email" => $_POST["regEmail"],
                    "password" => $hash,
                    "mode" => "directo",
                    "picture" => "",
                    "email_verification" => 0,
                    "encrypted_email" => $encryptEmail);

                $table = "users";

                $response = UserModel::mdlRegisterUser($table, $data);

                if ($response == "ok") {

                    echo '<script> 
                            swal({
                                title: "¡Registrado!",
                                text: "¡Cuenta verificada, bienvenido a Yuppie ' . $_POST["regUser"] . '! Para comprar en Yuppie debes iniciar sesión!",
                                type:"success",
                                confirmButtonText: "Cerrar",
                                closeOnConfirm: false
                            },

                            function(isConfirm){
                                if(isConfirm){
                                    history.back();
                                }
                            });

                        </script>';
                }
            } else {
                echo '<script>

                    swal({
                        title: "¡Error!",
                        text: "¡Ha ocurrido un error durante el registro, verifica tus datos!",
                        type: "error",
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false,
                      },
                      function(isConfirm){
                        if (isConfirm) {
                            history.back();
                        } 
                      });
                </script>';
            }
        }
    }

    /** Show User */
    static public function ctrShowUser($item, $valueUser) {

        $table = "users";

        $response = UserModel::mdlShowUser($table, $item, $valueUser);

        return $response;
    }

    /** Update User */
    static public function ctrActualizarUsuario($id, $item, $valueUser) {

        $table = "users";

        $response = UserModel::mdlUpdateUser($table, $id, $item, $valueUser);

        return $response;
    }

    /** Login User */
    public function ctrLoginUser() {

        if (isset($_POST["logEmail"])) {

            if (preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["logEmail"]) &&
                    preg_match('/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/', $_POST["logPassword"])) {

                // The hash of the password that
                // can be stored in the database
                $hash = crypt($_POST["logPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

                $table = "users";
                $item = "email";
                $valueUser = $_POST["logEmail"];

                $response = UserModel::mdlShowUser($table, $item, $valueUser);

                if ($response["email"] == $_POST["logEmail"] && $response["password"] == $hash) {

                    $_SESSION["validateSession"] = "ok";
                    $_SESSION["id"] = $response["id"];
                    $_SESSION["name"] = $response["name"];
                    $_SESSION["email"] = $response["email"];
                    $_SESSION["password"] = $response["password"];
                    $_SESSION["picture"] = $response["picture"];
                    $_SESSION["mode"] = $response["mode"];

                    echo '<script>                              
                            window.location = localStorage.getItem("actualRoute");
                        </script>';
                } else {
                    echo '<script>

                    swal({
                        title: "¡Error!",
                        text: "¡Por favor revisa tus credenciales, que el email sea válido y que la contraseña coincida con la registrada!",
                        type: "error",
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false,
                      },
                      function(isConfirm){
                        if (isConfirm) {
                            window.location = localStorage.getItem("actualRoute");
                        } 
                      });
                </script>';
                }
            } else {
                echo '<script>

                    swal({
                        title: "¡Error!",
                        text: "¡Error en la validación de las credenciales, vuelva a intentarlo!",
                        type: "error",
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false,
                      },
                      function(isConfirm){
                        if (isConfirm) {
                            history.back();
                        } 
                      });
                </script>';
            }
        }
    }

}
