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

    /* SHOW PRODUCTS */

    static public function ctrShowProducts($order, $item, $valueProduct, $base, $limit, $mode) {

        $table = "products";

        $response = ProductModel::mdlShowProducts($table, $order, $item, $valueProduct, $base, $limit, $mode);

        return $response;
    }

    /* SHOW INFOPRODUCT */

    static public function ctrShowInfoProduct($item, $valueProduct) {

        $table = "products";

        $response = ProductModel::mdlShowInfoProduct($table, $item, $valueProduct);

        return $response;
    }
    
    /* PRODUCTS LIST */
    
    static public function ctrListProducts($order, $item, $valueProduct) {
        
        $table = "products";
        
        $response = ProductModel::mdlListProducts($table, $order, $item, $valueProduct);
        
        return $response;
        
    }

}
