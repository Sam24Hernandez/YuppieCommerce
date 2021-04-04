<?php

require __DIR__ . '/vendor/autoload.php';

use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;

// Creating an environment
$table = "trade";

$response = CartModel::mdlShowRates($table);

$clientId = $response["clientIdPaypal"];
$clientSecret = $response["secretIdPaypal"];

$apiContext = getApiContext($clientId, $clientSecret);

function getApiContext($clientId, $clientSecret) {
    
    $apiContext = new ApiContext(        
        new OAuthTokenCredential(
            $clientId,
            $clientSecret
        ) 
    );   
    
    $apiContext->setConfig(
        array(            
            'mode' => "sandbox",
            'log.LogEnable' => true,
            'log.FileName' => '../Paypal.log',
            'log.LogLevel' => 'DEBUG',
            'http.CURLOPT_CONNECTTIMEOUT' => 30
            
        )
    );
    
    return $apiContext;
}


