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

    /** Add to Wish List * */
    public $idUser;
    public $idProduct;

    public function ajaxAddToWishList() {

        $data = array(
            "idUser" => $this->idUser,
            "idProduct" => $this->idProduct
        );

        $response = UserController::ctrAddToWishList($data);

        echo $response;
    }

    /** Remove Product To Wish List * */
    public $idWish;

    public function ajaxRemoveToWishList() {

        $data = $this->idWish;

        $response = UserController::ctrRemoveToWishList($data);

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

/* =============================================
  Add Product To Wish List
  ============================================= */

if (isset($_POST["idUser"])) {

    $wish = new UserAjax();
    $wish->idUser = $_POST["idUser"];
    $wish->idProduct = $_POST["idProduct"];
    $wish->ajaxAddToWishList();
}

/* =============================================
  Remove Product To Wish List
  ============================================= */

if (isset($_POST["idWish"])) {

    $removeWish = new UserAjax();
    $removeWish->idWish = $_POST["idWish"];
    $removeWish->ajaxRemoveToWishList();
}
