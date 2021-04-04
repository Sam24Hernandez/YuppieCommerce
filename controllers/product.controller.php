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
    
    /** SHOW RANDOM PRODUCT */
    
    static public function ctrRandomProduct($limit) {
        
        $table = "products";
        
        $response = ProductModel::mdlRandomProducts($table, $limit);
        
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

    /* SHOW OFFER BANNER */

    static public function ctrShowOfferBanner() {

        $table = "offer_banner";

        $response = ProductModel::mdlShowOfferBanner($table);

        return $response;
    }

    /* SHOW BANNER PRODUCT */

    static public function ctrShowBanner($route) {

        $table = "banner";

        $response = ProductModel::mdlShowBanner($table, $route);

        return $response;
    }

    /* SEARCH PRODUCT */

    static public function ctrSearchProducts($search, $order, $mode, $base, $limit) {

        $table = "products";

        $response = ProductModel::mdlSearchProducts($table, $search, $order, $mode, $base, $limit);

        return $response;
    }

    /* LIST SEARCH PRODUCT */

    static public function ctrListSearchProducts($search) {

        $table = "products";

        $response = ProductModel::mdlListSearchProducts($table, $search);

        return $response;
    }
    
    /* UPDATE VIEW COUNTER FOR PRODUCTS */
    
    static public function ctrUpdateProduct($item1, $value1, $item2, $value2) {
        
        $table = "products";
        
        $response = ProductModel::mdlUpdateProduct($table, $item1, $value1, $item2, $value2);
        
        return $response;
        
    }

}
