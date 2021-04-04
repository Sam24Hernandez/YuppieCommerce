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
    
    /** New Purchases **/
    
    static public function mdlNewPurchases($table, $data) {
        
        $stmt = Database::connect()->prepare("INSERT INTO $table (user_id, product_id, payment_method, email_buyer, address, country, quantity, detail, payment) VALUES (:user_id, :product_id, :payment_method, :email_buyer, :address, :country, :quantity, :detail, :payment)");
        
        $stmt->bindParam(":user_id", $data["idUser"], PDO::PARAM_INT);
        $stmt->bindParam(":product_id", $data["idProduct"], PDO::PARAM_INT);
        $stmt->bindParam(":payment_method", $data["payment_method"], PDO::PARAM_STR);
        $stmt->bindParam(":email_buyer", $data["email_buyer"], PDO::PARAM_STR);
        $stmt->bindParam(":address", $data["address"], PDO::PARAM_STR);
        $stmt->bindParam(":country", $data["country"], PDO::PARAM_STR);
        $stmt->bindParam(":quantity", $data["quantity"], PDO::PARAM_INT);
        $stmt->bindParam(":detail", $data["detail"], PDO::PARAM_STR);
        $stmt->bindParam(":payment", $data["payment"], PDO::PARAM_STR);
        
        if ($stmt->execute()) {
            
            return "ok";
        } else {
            
            return "error";
        }
        
        $stmt->close();
        
        $stmt = NULL;
     }
}
