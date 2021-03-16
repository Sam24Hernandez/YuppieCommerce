<?php

class SlideController {
    
    static public function ctrShowSlide() {
        
        $table = "slide";
        
        $response = SlideModel::mdlShowslide($table);
        
        return $response;
        
    }
    
}

