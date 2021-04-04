<?php

require_once "database.php";

class CartModel {
    
    /* Show Rates */
    
    static public function mdlShowRates($table) {
        
        $stmt = Database::connect()->prepare("SELECT * FROM $table");
        
        $stmt->execute();
        
        return $stmt->fetch();
        
        $stmt->close();
        
        $stmt = NULL;
    }
}
