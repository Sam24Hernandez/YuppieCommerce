<?php

require_once "../controllers/product.controller.php";
require_once "../models/product.model.php";

class ProductAjax {

    public $valueProduct;
    public $item;
    public $route;

    public function productViewAjax() {

        $data = array("valueProduct" => $this->valueProduct,
        "route" => $this->route);
        
        $item = $this->item;

        $response = ProductController::ctrUpdateProduct($data, $item);

        echo $response;
    }

}

if (isset($_POST["valueProduct"])) {
    $view = new ProductAjax();
    $view->valueProduct = $_POST["valueProduct"];
    $view->item = $_POST["item"];
    $view->route = $_POST["route"];
    $view->productViewAjax();
}



