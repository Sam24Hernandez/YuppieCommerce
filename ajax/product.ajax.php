<?php

require_once "../controllers/product.controller.php";
require_once "../models/product.model.php";

class ProductAjax {

    public $valueProduct;
    public $item;
    public $route;

    public function productViewAjax() {

        $item1 = $this->item;
        $value1 = $this->valueProduct;
        
        $item2 = "route";
        $value2 = $this->route;

        $response = ProductController::ctrUpdateProduct($item1, $value1, $item2, $value2);

        echo $response;
    }
    
    /** Get the product to id **/
    
    public $id;
    
    public function ajaxGetProduct() {
        
        $item = "id";
        $valueProduct = $this->id;
        
        $response = ProductController::ctrShowInfoProduct($item, $valueProduct);
        
        echo json_encode($response);
    }

}

if (isset($_POST["valueProduct"])) {
    $view = new ProductAjax();
    $view->valueProduct = $_POST["valueProduct"];
    $view->item = $_POST["item"];
    $view->route = $_POST["route"];
    $view->productViewAjax();
}

if (isset($_POST["id"])) {
    
    $product = new ProductAjax();
    $product->id = $_POST["id"];
    $product->ajaxGetProduct();
}



