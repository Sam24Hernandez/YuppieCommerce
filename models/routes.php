<?php

class Route {
    /*== Public Route ==*/
    static public function ctrRoute() {
        return "http://localhost/yuppie_frontend/";
    }
    
    /*== Private Route ==*/
    static public function ctrRouteServer() {
        return "http://localhost/yuppie_backend/";
    }
    
    /*== Public Route Paypal ==*/
    static public function getBaseUrl() {
        return "http://localhost/yuppie_frontend";
    }
}

