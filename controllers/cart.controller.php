<?php

class CartController {
    
    /* Show Rates **/
    
    static public function ctrShowRates() {
        
        $table = "trade";
        
        $response = CartModel::mdlShowRates($table);
        
        return $response;
    }
}

