<?php

class ProductController {
    
    /* SHOW CATEGORIES */
    static public function ctrShowCategories($item, $valueCategory) {
        
        $table = "categories";
        
        $response = ProductModel::mdlShowCategories($table, $item, $valueCategory);
        
        return $response;
        
    }
    
    /* SHOW SUBCATEGORIES */
    static public function ctrShowSubCategories($item, $valueSubCategory) {
        
        $table = "subcategories";
        
        $response = ProductModel::mdlShowSubCategories($table, $item, $valueSubCategory);
        
        return $response;
        
    }
    
}


