<?php

require_once "database.php";

class TemplateModel {
    
    static public function mdlGetHeadings($table, $route) {
        
        $stmt = Database::connect()->prepare("SELECT * FROM $table WHERE route = :route");
        
        $stmt->bindParam(":route", $route, PDO::PARAM_STR);
        
        $stmt->execute();
        
        return $stmt->fetch();
        
        $stmt->close();
        
        $stmt = NULL;
    }
}
