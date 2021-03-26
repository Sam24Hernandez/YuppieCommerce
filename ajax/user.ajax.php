<?php

require_once "../controllers/user.controller.php";
require_once "../models/user.model.php";

class UserAjax {
    /* Validate Existing Email */

    public $validateEmail;

    public function ajaxValidateEmail() {

        $data = $this->validateEmail;

        $response = UserController::ctrShowUser("email", $data);

        echo json_encode($response);
    }

    /** Facebook Register * */
    public $name;
    public $email;
    public $picture;

    public function ajaxFacebookRegsiter() {

        $data = array(
            "name" => $this->name,
            "email" => $this->email,
            "picture" => $this->picture,
            "password" => "null",
            "mode" => "facebook",
            "email_verification" => 0,
            "encrypted_email" => "null"
        );

        $response = UserController::ctrRegisterSocialMedia($data);

        echo $response;
    }

}

/* =============================================
  Validate Existing Email
  ============================================= */

if (isset($_POST["validateEmail"])) {

    $valEmail = new UserAjax();
    $valEmail->validateEmail = $_POST["validateEmail"];
    $valEmail->ajaxValidateEmail();
}

/* =============================================
  Register with Facebook Account
  ============================================= */

if (isset($_POST["email"])) {

    $regFacebook = new UserAjax();
    $regFacebook->name = $_POST["name"];
    $regFacebook->email = $_POST["email"];
    $regFacebook->picture = $_POST["picture"];
    $regFacebook->ajaxFacebookRegsiter();
}