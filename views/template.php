<!DOCTYPE html> 
<html lang="es">
    <head>
        <meta charset="utf-8">        
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes, minimum-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">        

        <?php
        session_start();

        $server = Route::ctrRouteServer();

        echo '<link rel="icon" href="' . $server . 'views/img/template/icono.png">';

        /* == Maintaining the project's fixed route == */

        $url = Route::ctrRoute();

        /* == Heading Section == */

        $routes = array();

        if (isset($_GET["route"])) {

            $routes = explode("/", $_GET["route"]);

            $route = $routes[0];
        } else {

            $route = "inicio";
        }

        $headings = TemplateController::ctrGetHeadings($route);

        if (!$headings["route"]) {

            $route = "inicio";

            $headings = TemplateController::ctrGetHeadings($route);
        }
        ?>    

        <!-- === META HTML5 === -->
        <meta name="title" content="<?php echo $headings["heading_title"]; ?>">
        <meta name="description" content="<?php echo $headings["heading_description"]; ?>">
        <meta name="keywords" content="<?php echo $headings["key_words"]; ?>">
        <meta name="author" content="Sam Hernández">
        <title><?php echo $headings["heading_title"]; ?></title>

        <!-- === OPEN GRAPH FACEBOOK META === -->
        <meta property="og:title"              content="<?php echo $headings["heading_title"]; ?>">
        <meta property="og:url"                content="<?php echo $url . $headings["route"]; ?>">
        <meta property="og:description"        content="<?php echo $headings["heading_description"]; ?>">                
        <meta property="og:image"              content="<?php echo $server . $headings["cover"]; ?>">
        <meta property="og:type"               content="website">
        <meta property="og:site_name"          content="Yuppie">
        <meta property="og:locale"             content="es_MX">

        <!-- === METADATA TWITTER === -->        
        <meta name="twitter:card"              content="summary">
        <meta name="twitter:title"             content="<?php echo $headings['heading_title']; ?>">
        <meta name="twitter:url"               content="<?php echo $url . $headings['route']; ?>">
        <meta name="twitter:description"       content="<?php echo $headings['heading_description']; ?>">
        <meta name="twitter:image"             content="<?php echo $server . $headings['cover']; ?>">
        <meta name="twitter:site"              content="@SamHernandezDev">

        <!-- === CSS PLUGINS === -->
        <link rel="stylesheet" href="<?php echo $url; ?>views/css/plugins/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="<?php echo $url; ?>views/css/plugins/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="<?php echo $url; ?>views/css/plugins/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="<?php echo $url; ?>views/css/plugins/jquery-ui.min.css" type="text/css">
        <link rel="stylesheet" href="<?php echo $url; ?>views/css/plugins/nice-select.css" type="text/css">
        <link rel="stylesheet" href="<?php echo $url; ?>views/css/plugins/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="<?php echo $url; ?>views/css/plugins/sweetalert.css" type="text/css">         

        <!-- === GOOGLE FONTS === -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

        <!-- === CSS CUSTOM STYLES === -->
        <link rel="stylesheet" href="<?php echo $url; ?>views/css/template.css" type="text/css">
        <link rel="stylesheet" href="<?php echo $url; ?>views/css/header.css" type="text/css">
        <link rel="stylesheet" href="<?php echo $url; ?>views/css/slide.css" type="text/css">
        <link rel="stylesheet" href="<?php echo $url; ?>views/css/products.css" type="text/css">
        <link rel="stylesheet" href="<?php echo $url; ?>views/css/search.css" type="text/css">
        <link rel="stylesheet" href="<?php echo $url; ?>views/css/infoproduct.css" type="text/css">
        <link rel="stylesheet" href="<?php echo $url; ?>views/css/profile.css" type="text/css">
        <link rel="stylesheet" href="<?php echo $url; ?>views/css/my_account.css" type="text/css">
        <link rel="stylesheet" href="<?php echo $url; ?>views/css/my_shopping.css" type="text/css">
        <link rel="stylesheet" href="<?php echo $url; ?>views/css/my_list.css" type="text/css">
        <link rel="stylesheet" href="<?php echo $url; ?>views/css/shopping_cart.css" type="text/css">
        <link rel="stylesheet" href="<?php echo $url; ?>views/css/offers.css" type="text/css">
        <link rel="stylesheet" href="<?php echo $url; ?>views/css/footer.css" type="text/css">

        <!-- ============================================================== -->
        <!-- All Jquery Plugins -->
        <!-- ============================================================== -->
        <script src="<?php echo $url; ?>views/js/plugins/jquery.min.js" type="text/javascript"></script>
        <!-- Bootstrap popper Core JavaScript -->
        <script src="<?php echo $url; ?>views/js/plugins/popper.min.js" type="text/javascript"></script>
        <script src="<?php echo $url; ?>views/js/plugins/bootstrap/bootstrap.min.js" type="text/javascript"></script>        
        <script src="<?php echo $url; ?>views/js/plugins/jquery.easing.js" type="text/javascript"></script>
        <script src="<?php echo $url; ?>views/js/plugins/jquery-ui.min.js" type="text/javascript"></script>
        <script src="<?php echo $url; ?>views/js/plugins/owl.carousel.min.js" type="text/javascript"></script>
        <script src="<?php echo $url; ?>views/js/plugins/jquery.countdown.min.js" type="text/javascript"></script>
        <script src="<?php echo $url; ?>views/js/plugins/jquery.nice-select.min.js" type="text/javascript"></script>
        <script src="<?php echo $url; ?>views/js/plugins/sweetalert.min.js" type="text/javascript"></script>
        <script src="<?php echo $url; ?>views/js/plugins/jquery.slicknav.js" type="text/javascript"></script>
        <script src="<?php echo $url; ?>views/js/plugins/jquery.zoom.min.js" type="text/javascript"></script>
        <script src="<?php echo $url; ?>views/js/plugins/jquery.scrollUp.js" type="text/javascript"></script>
        <script src="<?php echo $url; ?>views/js/plugins/md5-min.js" type="text/javascript"></script>        
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
        $route = NULL;
        $infoProduct = NULL;

        if (isset($_GET["route"])) {
            $routes = explode("/", $_GET["route"]);

            $item = "route";
            $valueCategory = $routes[0];
            $valueSubCategory = $routes[0];
            $valueProduct = $routes[0];

            /* == Category Friendly URLs  == */

            $routeCategories = ProductController::ctrShowCategories($item, $valueCategory);

            if (is_array($routeCategories)) {
                if ($routes[0] == $routeCategories["route"]) {
                    $route = $routes[0];
                }
            }

            /* == SubCategory Friendly URLs  == */

            $routeSubCategories = ProductController::ctrShowSubCategories($item, $valueSubCategory);

            foreach ($routeSubCategories as $key => $value) {
                if (is_array($value)) {
                    if ($routes[0] == $value["route"]) {
                        $route = $routes[0];
                    }
                }
            }

            /* == Product Friendly URLs  == */

            $routeProducts = ProductController::ctrShowInfoProduct($item, $valueProduct);

            if ($routes[0] == $routeProducts["route"]) {
                $infoProduct = $routes[0];
            }


            /* == White List of Friendly URLs  == */

            if ($route != null || $routes[0] === "articulos-gratis" || $routes[0] === "lo-mas-vendido" || $routes[0] === "lo-mas-visto") {

                include "modules/products.php";
            } elseif ($infoProduct != NULL) {

                include "modules/infoproduct.php";
            } elseif ($routes[0] === "all-categories" || $routes[0] === "search" || $routes[0] === "signout" || $routes[0] === "profile" || $routes[0] === "my_account" || $routes[0] === "my_shopping" || $routes[0] === "my_list" || $routes[0] === "shopping_cart" || $routes[0] === "error" || $routes[0] === "finalise_purchase" || $routes[0] === "course" || $routes[0] === "offers") {

                include "modules/" . $routes[0] . ".php";
            } elseif ($routes[0] === "inicio") {

                include "modules/slide.php";

                include "modules/featured.php";
            } else {

                include "modules/error404.php";
            }
        } else {

            include "modules/slide.php";

            include "modules/featured.php";
        }

        include "modules/footer.php";

        /* == End Header Section  == */
        ?>       

        <input type="hidden" value="<?php echo $url; ?>" id="hidePath">               

        <!-- ============================================================== -->
        <!-- All Javascript Custom -->
        <!-- ============================================================== -->
        <script src="<?php echo $url; ?>views/js/header.js" type="text/javascript"></script>
        <script src="<?php echo $url; ?>views/js/template.js" type="text/javascript"></script>
        <script src="<?php echo $url; ?>views/js/slide.js" type="text/javascript"></script>
        <script src="<?php echo $url; ?>views/js/products.js" type="text/javascript"></script>
        <script src="<?php echo $url; ?>views/js/product-slider.js" type="text/javascript"></script>
        <script src="<?php echo $url; ?>views/js/search.js" type="text/javascript"></script>
        <script src="<?php echo $url; ?>views/js/infoproduct.js" type="text/javascript"></script>
        <script src="<?php echo $url; ?>views/js/users.js" type="text/javascript"></script>
        <script src="<?php echo $url; ?>views/js/registerFacebook.js" type="text/javascript"></script>
        <script src="<?php echo $url; ?>views/js/shopping-cart.js" type="text/javascript"></script>

        <!--=====================================
        https://developers.facebook.com/
        ======================================-->
        <script>
            window.fbAsyncInit = function () {
                FB.init({
                    appId: '179926760461889',
                    cookie: true,
                    xfbml: true,
                    version: 'v10.0'
                });

                FB.AppEvents.logPageView();

            };

            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {
                    return;
                }
                js = d.createElement(s);
                js.id = id;
                js.src = "https://connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>   

        <script>

            $(".shareFacebook").click(function () {

                FB.ui({
                    method: 'share',
                    href: '<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>'
                }, function (response) {});

            });            

        </script>                

    </body>
</html>

