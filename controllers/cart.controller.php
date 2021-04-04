<?php

class CartController {
    
    /* Show Rates **/
    
    static public function ctrShowRates() {
        
        $table = "trade";
        
        $response = CartModel::mdlShowRates($table);
        
        return $response;
    }
    
    /* New purchases ***/
    
    static public function ctrNewPurchases($data) {
        
        $table = "shopping";
        
        $response = CartModel::mdlNewPurchases($table, $data);
        
        if ($response == "ok") {
            
            $table = "comments";
            
            UserModel::mdlInsertComments($table, $data);            
        }
        
        return $response;
    }
}

