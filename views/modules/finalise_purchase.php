<?php

$url = Route::ctrRoute();

if (!isset($_SESSION["validateSession"])) {

    echo '<script>window.location = "' . $url . '";</script>';

    exit();
}

require "extensions/bootstrap.php";
require_once "models/cart.model.php";

use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;

/** Finalise Payment * */
if (isset($_GET["paypal"]) && $_GET["paypal"] == "true") {

    $products = explode("-", $_GET["products"]);
    $quantity = explode("-", $_GET['quantity']);
    $pay = explode("-", $_GET['payment']);
    
    $paymentId = $_GET["paymentId"];
    
    $payment = Payment::get($paymentId, $apiContext);
    
    $execution = new PaymentExecution();
    $execution->setPayerId($_GET["PayerID"]);
    
    $payment->execute($execution, $apiContext);
    $dataTransaction = $payment->toJSON();                
    
    $dataUser = json_decode($dataTransaction);
    
    $emailBuyer = $dataUser->payer->payer_info->email;
    $dir = $dataUser->payer->payer_info->shipping_address->line1;
    $city = $dataUser->payer->payer_info->shipping_address->city;
    $state = $dataUser->payer->payer_info->shipping_address->state;
    $postalCode = $dataUser->payer->payer_info->shipping_address->postal_code;
    $country = $dataUser->payer->payer_info->shipping_address->country_code;
    
    $address = $dir . ", " . $city . ", " . $state . ", " .$postalCode;
        
    for ($i = 0; $i < count($products); $i++) {
        
        $data = array(
            "idUser" => $_SESSION["id"],
            "idProduct" => $products[$i],
            "payment_method" => "paypal",
            "email_buyer" => $emailBuyer,
            "address" => $address,
            "country" => $country,
            "quantity" => $quantity[$i],
            "detail" => $dataUser->transactions[0]->item_list->items[$i]->name,
            "payment" => $pay[$i]
        );
        
        $response = CartController::ctrNewPurchases($data);
        
        $order = "id";
        $item = "id";
        $valueProduct = $products[$i];
        
        $productsShopping = ProductController::ctrListProducts($order, $item, $valueProduct);
        
        foreach ($productsShopping as $key => $value) {
            
            $item1 = "sales";
            $value1 = $value["sales"] + $quantity[$i];
            $item2 = "id";
            $value2 = $value["id"];
            
            $updateShopping = ProductController::ctrUpdateProduct($item1, $value1, $item2, $value2);
        }
        
        if ($response == "ok" && $updateShopping == "ok") {
            echo '<script>
                localStorage.removeItem("listProducts");
                localStorage.removeItem("quantityBasket");
                localStorage.removeItem("basketPrice");
                window.location = "'.$url.'my_shopping";
            </script>';
        }
    }
}
