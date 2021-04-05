<?php

class TemplateController {

    public function template() {

        include "views/template.php";
    }
    
    static public function ctrGetHeadings($route) {
        
        $table = "headings";
        
        $response = TemplateModel::mdlGetHeadings($table, $route);
        
        return $response;
        
    }

}
