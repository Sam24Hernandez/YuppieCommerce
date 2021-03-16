<!DOCTYPE html> 
<!-- [if IE 9]> <html class="ie9"> <![endif] -->
<!-- [if (gt IE 9)|!(IE)]><!-->
<html lang="es">
    <!--<![endif] -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes, minimum-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Compra y venta de artículos electrónicos, ropa, calzado, artículos deportivos, cursos digitales, cámaras digitales, artículos para bebé, cupones y muchos artículos más en Yuppie, la plataforma de comercio electrónico en México.">
        <meta name="keywords" content="Yuppie, Yuppie.com.mx, artículos electrónicos, cursos digitales, compras por Internet, compras en linea, yuppie méxico, ropa, cámaras digitales, bebé, herramientas, belleza, relojes, deportes y entretenimiento">
        <title>Yuppie | Comercio electrónico - Electrónicos - Ropa de Moda - Tecnología</title>
        
        <?php
        
        $server = Route::ctrRouteServer();
        
        echo '<link rel="icon" href="'.$server.'views/img/template/icono.png">';
        
        /* == Maintaining the project's fixed route ==*/
        
        $url = Route::ctrRoute();
        
        ?>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

        <link rel="stylesheet" href="<?php echo $url; ?>views/css/plugins/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="<?php echo $url; ?>views/css/plugins/font-awesome.min.css" type="text/css">
        
        <link rel="stylesheet" href="<?php echo $url; ?>views/css/template.css" type="text/css">
        <link rel="stylesheet" href="<?php echo $url; ?>views/css/header.css" type="text/css">
        <link rel="stylesheet" href="<?php echo $url; ?>views/css/slide.css" type="text/css">
    </head>
    <body>
        
        <!-- ==  Preloader Section == -->
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <!-- == End Preloader == -->

        <?php
        /* == Header Section Block  == */

        include "modules/header.php";
        
        /* == Dynamic Content  == */
        
        $routes = array();
        $route = null;
        
        if(isset($_GET["route"])) {
            $routes = explode("/", $_GET["route"]);
            
            $item = "route";
            $valueCategory = $routes[0];
            $valueSubCategory = $routes[0];
            
            /* == Category Friendly URLs  == */
            
            $routeCategories = ProductController::ctrShowCategories($item, $valueCategory);
            
            if(is_array($routeCategories)){
                if($routes[0] == $routeCategories["route"]) {
                    $route = $routes[0]; 
                }
            }
            
            /* == SubCategory Friendly URLs  == */
            
            $routeSubCategories = ProductController::ctrShowSubCategories($item, $valueSubCategory);
            
            foreach ($routeSubCategories as $key => $value) {
                if(is_array($value)){
                    if($routes[0] == $value["route"]) {   
                        $route = $routes[0]; 
                    }
                }
            }
            
            /* == White List of Friendly URLs  == */
            
            if ($route != null) {
                include "modules/products.php";
            } else {
                include "modules/error404.php";
            }
        } else {
            include "modules/slide.php";
        }

        /* == End Header Section  == */
        ?>
        
        <script src="<?php echo $url; ?>views/js/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo $url; ?>views/js/plugins/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo $url; ?>views/js/plugins/jquery.easing.js" type="text/javascript"></script>

        <script src="<?php echo $url; ?>views/js/header.js" type="text/javascript"></script>
        <script src="<?php echo $url; ?>views/js/slide.js" type="text/javascript"></script>
        
    </body>
</html>

