<?php

require_once "../models/routes.php";
require_once "../models/cart.model.php";

use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;

class Paypal {

    static public function ctrPaypalPayment($data) {

        require __DIR__ . '/bootstrap.php';

        $titleArray = explode(",", $data["titleArray"]);
        $quantityArray = explode(",", $data["quantityArray"]);
        $valueItemArray = explode(",", $data["valueItemArray"]);
        $idProducts = str_replace(",", "-", $data["idProductArray"]);
        $quantityProducts = str_replace(",", "-", $data["quantityArray"]);
        $paymentProducts = str_replace(",", "-", $data["valueItemArray"]);
        
        # Payer - Representing a Payer that funds a payment
        $payer = new Payer();
        $payer->setPaymentMethod("paypal");
        
        # Itemized information - Information
        $item = array();
        $allItems = array();
        
        for ($i = 0; $i < count($titleArray); $i++) {
            
            $item[$i] = new Item();
            $item[$i]->setName($titleArray[$i])
                      ->setCurrency($data["currency"])
                      ->setQuantity($quantityArray[$i])
                      ->setPrice($valueItemArray[$i] / $quantityArray[$i]);
            array_push($allItems, $item[$i]);
        }
        
        # Group Items List
        $itemList = new ItemList();
        $itemList->setItems($allItems);
        
        # Additional payment details - Payment information such as tax, shipping(delievery)
        $details = new Details();
        $details->setShipping($data["shipping"])
                ->setTax($data["tax"])
                ->setSubtotal($data["subtotal"]);
        
        # Amount - Specify a payment amount
        $amount = new Amount();
        $amount->setCurrency($data["currency"])
               ->setTotal($data["total"])
               ->setDetails($details);
        
        # Transaction - Defines the contract of a payment
        $transaction = new Transaction();
        $transaction->setAmount($amount)
                    ->setItemList($itemList)
                    ->setDescription("Payment description")
                    ->setInvoiceNumber(uniqid());
        
        # Redirect urls - Set the urls that the buyer must be redirected to after payment approval/cancellation
        
        $baseUrl = Route::getBaseUrl();        
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl("$baseUrl/index.php?route=finalise_purchase&paypal=true&products=" . $idProducts . "&quantity=" . $quantityProducts . "&payment=" . $paymentProducts)
                     ->setCancelUrl("$baseUrl/shopping_cart");
        
        # Payment - Payment Resource
        $payment = new Payment();
        $payment->setIntent("sale")
                ->setPayer($payer)
                ->setRedirectUrls($redirectUrls)
                ->setTransactions(array($transaction));
        
        # Create Payment - Valid ApiContext and return object contains
        try {
            
            $payment->create($apiContext);            
        } catch (Exception $ex) {
            
            echo $ex->getCode();
            echo $ex->getData();
            die($ex);
            return "$baseUrl/error";
        }
        
        # Get redirect url - API response provides the url that you must redirect the buyer to
        foreach ($payment->getLinks() as $link) {
            
            if ($link->getRel() == "approval_url") {
                
                $redirectUrl = $link->getHref();
            }
            
        }
        
        return $redirectUrl;        
    }

}
