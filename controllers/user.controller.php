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
    static public function ctrUpdateUser($id, $item, $valueUser) {

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

    /** Register with Social Medias */
    static public function ctrRegisterSocialMedia($data) {

        $table = "users";
        $item = "email";
        $valueUser = $data["email"];
        $emailRepeated = false;

        $response0 = UserModel::mdlShowUser($table, $item, $valueUser);

        if ($response0) {

            if ($response0["mode"] != $data["mode"]) {

                echo '<script>

                    swal({
                        title: "¡Error!",
                        text: "¡El correo electrónico ' . $data["email"] . ', ya está registrado en el sistema!",
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

                $emailRepeated = false;
            }

            $emailRepeated = true;
        } else {

            $response1 = UserModel::mdlRegisterUser($table, $data);
        }

        if ($emailRepeated || $response1 === "ok") {

            $response2 = UserModel::mdlShowUser($table, $item, $valueUser);

            if ($response2["mode"] === "facebook") {

                session_start();

                $_SESSION["validateSession"] = "ok";
                $_SESSION["id"] = $response2["id"];
                $_SESSION["name"] = $response2["name"];
                $_SESSION["email"] = $response2["email"];
                $_SESSION["password"] = $response2["password"];
                $_SESSION["picture"] = $response2["picture"];
                $_SESSION["mode"] = $response2["mode"];

                echo "ok";
            } elseif ($response2["mode"] === "google") {

                $_SESSION["validateSession"] = "ok";
                $_SESSION["id"] = $response2["id"];
                $_SESSION["name"] = $response2["name"];
                $_SESSION["email"] = $response2["email"];
                $_SESSION["password"] = $response2["password"];
                $_SESSION["picture"] = $response2["picture"];
                $_SESSION["mode"] = $response2["mode"];

                echo "<span style='color:white;'>ok</span>";
            } else {
                echo "";
            }
        }
    }

    /** Update User Picture * */
    /**
     * @todo: Corregir errores
     */
    public function ctrUpdatePictureUser() {

        /** Validate Picture * */
        $path = $_POST["userPicture"];

        if (isset($_FILES["dataPicture"]["tmp_name"]) && !empty($_FILES["dataPicture"]["tmp_name"])) {

            # Create the directory path to save the image on the frontend            
            $dirPath = "views/img/users/" . $_POST["idUser"];

            if (!empty($_POST["userPicture"])) {

                unlink($_POST["userPicture"]);
            } else {

                mkdir($dirPath, 0755);
            }

            /** Save Image on the Dir Path * */
            list($width, $height) = getimagesize($_FILES["dataPicture"]["tmp_name"]);

            $newWidth = 460;
            $newHeight = 460;

            $random = mt_rand(100, 999);

            if ($_FILES["dataPicture"]["type"] === "image/jpeg") {

                $path = "views/img/users/" . $_POST["idUser"] . "/" . $random . ".jpg";

                /** Change the size of the picture * */
                $origin = imagecreatefromjpeg($_FILES["dataPicture"]["tmp_name"]);

                $allocate = imagecreatetruecolor($newWidth, $newHeight);

                imagecopyresized($allocate, $origin, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

                imagejpeg($allocate, $path);
            }

            if ($_FILES["dataPicture"]["type"] === "image/png") {

                $path = "views/img/users/" . $_POST["idUser"] . "/" . $random . ".png";

                /** Change the size of the picture * */
                $origin = imagecreatefrompng($_FILES["dataPicture"]["tmp_name"]);

                $allocate = imagecreatetruecolor($newWidth, $newHeight);

                imagealphablending($allocate, FALSE);

                imagesavealpha($allocate, TRUE);

                $transparent = imagecolorallocatealpha($allocate, 255, 255, 255, 0);

                imagefilledrectangle($allocate, 0, 0, $newWidth, $newHeight, $transparent);

                # Cut the image with the new measurements

                imagecopyresized($allocate, $origin, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

                /* send the image to the route */

                imagepng($allocate, $path);
            }
        }

        $data = array("picture" => $path);

        $table = "users";

        $response = UserModel::mdlUpdatePictureUser($table, $data);

        if (response === "ok") {

            $_SESSION["validateSession"] = "ok";
            $_SESSION["picture"] = $data["picture"];

            echo '<script> 
                swal({
                    title: "¡Foto Actualizada!",
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
    }

}
