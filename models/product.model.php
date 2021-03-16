<?php

require_once "database.php";

class ProductModel {
    
    /* SHOW CATEGORIES */
    static public function mdlShowCategories($table, $item, $valueCategory) {
        
        if($item != null) {
            
            $stmt = Database::connect()->prepare("SELECT * FROM $table WHERE $item = :$item");
            
            $stmt->bindParam(":".$item, $valueCategory, PDO::PARAM_STR);
            
            $stmt->execute();

            return $stmt->fetch();
            
        } else {
            $stmt = Database::connect()->prepare("SELECT * FROM $table");
        
            $stmt->execute();

            return $stmt->fetchAll();
        }                            
        
        $stmt->close();

        $stmt = null;   
    }
    
    /* SHOW SUBCATEGORIES */
    static public function mdlShowSubCategories($table, $item, $valueSubCategory) {
        
        $stmt = Database::connect()->prepare("SELECT * FROM $table WHERE $item = :$item");
        
        $stmt->bindParam(":".$item, $valueSubCategory, PDO::PARAM_STR);
        
        $stmt->execute();
        
        return $stmt->fetchAll();
        
        $stmt->close();
        
        $stmt = null;
    }
    
}

