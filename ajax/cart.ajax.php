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

    /** Verify if the user already have the free product * */
    public $idUser;
    public $idProduct;

    public function ajaxVerifyProduct() {

        $data = array(
            "idUser" => $this->idUser,
            "idProduct" => $this->idProduct
        );

        $response = CartController::ctrVerifyProduct($data);

        echo json_encode($response);
    }

}

/** Paypal Method Payment * */
if (isset($_POST["currency"])) {

    $idProducts = explode(",", $_POST["idProductArray"]);
    $quantityProducts = explode(",", $_POST["quantityArray"]);
    $priceProducts = explode(",", $_POST["valueItemArray"]);

    $item = "id";

    for ($i = 0; $i < count($idProducts); $i++) {

        $valueProduct = $idProducts[$i];

        $verifyProducts = ProductController::ctrShowInfoProduct($item, $valueProduct);

        if ($verifyProducts["offer_price"] == 0) {

            $price = $verifyProducts["price"];
        } else {

            $price = $verifyProducts["offer_price"];
        }

        $verifySubTotal = $quantityProducts[$i] * $price;

//        echo number_format($verifySubTotal,2)."<br>";
//        echo number_format($priceProducts[$i],2)."<br>";        

        if (number_format($verifySubTotal, 2) != number_format($priceProducts[$i], 2)) {

            echo 'shopping_cart';

            return;
        }
    }

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

if (isset($_POST["idProduct"])) {

    $purchase = new CartAjax();
    $purchase->idUser = $_POST["idUser"];
    $purchase->idProduct = $_POST["idProduct"];
    $purchase->ajaxVerifyProduct();
}

