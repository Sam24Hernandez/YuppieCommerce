<?php

require_once "database.php";

class SlideModel {
    
    static public function mdlShowslide($table) {
        
        $stmt = Database::connect()->prepare("SELECT * FROM $table");
        
        $stmt->execute();
        
        return $stmt->fetchAll();
        
        $stmt->close();
        
        $stmt = null;
        
    }
    
}

