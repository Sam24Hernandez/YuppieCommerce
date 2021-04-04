<?php

require_once "../extensions/paypal.controller.php";

require_once "../controllers/cart.controller.php";
require_once "../models/cart.model.php";

require_once "../controllers/product.controller.php";
require_once "../models/product.model.php";

class CartAjax {

    /** Payment Method with Paypal * */
    public $currency;
    public $total;
    public $encryptTotal;
    public $tax;
    public $shipping;
    public $subtotal;
    public $titleArray;
    public $quantityArray;
    public $valueItemArray;
    public $idProductArray;

    public function ajaxSendToPaypal() {

        if (md5($this->total) == $this->encryptTotal) {
            $data = array(
                "currency" => $this->currency,
                "total" => $this->total,
                "tax" => $this->tax,
                "shipping" => $this->shipping,
                "subtotal" => $this->subtotal,
                "titleArray" => $this->titleArray,
                "quantityArray" => $this->quantityArray,
                "valueItemArray" => $this->valueItemArray,
                "idProductArray" => $this->idProductArray
            );
        }

        $response = Paypal::ctrPaypalPayment($data);

        echo $response;
    }

}

if (isset($_POST["currency"])) {

    $paypal = new CartAjax();
    $paypal->currency = $_POST["currency"];
    $paypal->total = $_POST["total"];
    $paypal->encryptTotal = $_POST["encryptTotal"];
    $paypal->tax = $_POST["tax"];
    $paypal->shipping = $_POST["shipping"];
    $paypal->subtotal = $_POST["subtotal"];
    $paypal->titleArray = $_POST["titleArray"];
    $paypal->quantityArray = $_POST["quantityArray"];
    $paypal->valueItemArray = $_POST["valueItemArray"];
    $paypal->idProductArray = $_POST["idProductArray"];
    $paypal->ajaxSendToPaypal();
}

