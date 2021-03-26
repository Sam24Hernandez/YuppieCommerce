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

}

/* =============================================
  Validate Existing Email
  ============================================= */

if (isset($_POST["validateEmail"])) {

    $valEmail = new UserAjax();
    $valEmail->validateEmail = $_POST["validateEmail"];
    $valEmail->ajaxValidateEmail();
}