<?php
$server = Route::ctrRouteServer();
?>

<!-- == Banner Section == -->
<div class="banner-section spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="<?php echo $server; ?>views/img/hero/hero-1.jpg" alt="">
                    <div class="inner-text">
                        <h4>Para Hombres</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="<?php echo $server; ?>views/img/hero/hero-2.jpg" alt="">
                    <div class="inner-text">
                        <h4>Para Mujeres</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="<?php echo $server; ?>views/img/hero/hero-3.jpg" alt="">
                    <div class="inner-text">
                        <h4>Para Niños</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- == End Banner Section == -->

<section class="women-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="product-large set-bg">
                    <h2>Tendencia</h2>
                    <a href="#">Descubre Más</a>
                </div>
            </div>
            <div class="col-lg-8 offset-lg-1">
                <div class="filter-control">
                    <ul>
                        <li class="active">Esto te puede interesar</li>
                    </ul>
                </div>
                <div class="product-slider owl-carousel">
                    <!-- item 1 -->
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="<?php echo $server; ?>views/img/products/ropa/ropa01.jpg">
                            <div class="icon">
                                <a href="#" class="wishes" title="Agregar a mi lista de deseos"><i class="fa fa-heart-o"></i></a>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#" title="Agregar al carrito de compras"><i class="fa fa-shopping-bag"></i></a></li>
                                <li class="quick-view"><a href="#" title="Ver producto">+ Ver</a></li>
                                <li class="w-icon"><a href="#" title="Productos relacionados"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <a href="#">
                                <h5>Nombre del Producto</h5>
                            </a>
                            <div class="product-price">
                                MXN $14.00 
                            </div>
                        </div>
                    </div>
                    <!-- item 2 -->
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="<?php echo $server; ?>views/img/products/ropa/ropa03.jpg">
                            <div class="icon">
                                <a href="#" class="wishes" title="Agregar a mi lista de deseos"><i class="fa fa-heart-o"></i></a>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#" title="Agregar al carrito de compras"><i class="fa fa-shopping-bag"></i></a></li>
                                <li class="quick-view"><a href="#" title="Ver producto">+ Ver</a></li>
                                <li class="w-icon"><a href="#" title="Productos relacionados"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <a href="#">
                                <h5>Nombre del Producto</h5>
                            </a>
                            <div class="product-price">
                                MXN $14.00
                            </div>
                        </div>
                    </div>
                    <!-- item 3 -->
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="<?php echo $server; ?>views/img/products/ropa/ropa04.jpg">
                            <div class="icon">
                                <a href="#" class="wishes" title="Agregar a mi lista de deseos"><i class="fa fa-heart-o"></i></a>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#" title="Agregar al carrito de compras"><i class="fa fa-shopping-bag"></i></a></li>
                                <li class="quick-view"><a href="#" title="Ver producto">+ Ver</a></li>
                                <li class="w-icon"><a href="#" title="Productos relacionados"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <a href="#">
                                <h5>Nombre del Producto</h5>
                            </a>
                            <div class="product-price">
                                MXN $14.00 
                            </div>
                        </div>
                    </div>
                    <!-- item 4 -->
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="<?php echo $server; ?>views/img/products/ropa/ropa05.jpg">
                            <div class="icon">
                                <a href="#" class="wishes" title="Agregar a mi lista de deseos"><i class="fa fa-heart-o"></i></a>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#" title="Agregar al carrito de compras"><i class="fa fa-shopping-bag"></i></a></li>
                                <li class="quick-view"><a href="#" title="Ver producto">+ Ver</a></li>
                                <li class="w-icon"><a href="#" title="Productos relacionados"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <a href="#">
                                <h5>Nombre del Producto</h5>
                            </a>
                            <div class="product-price">
                                MXN $14.00
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="deal-of-week set-bg spad" data-setbg="<?php echo $server; ?>views/img/banner/time-bg.jpg">
    <div class="container">
        <div class="col-lg-6 text-center">
            <div class="section-title">
                <h2>Oferta De La Semana</h2>
                <p>Abre tu cuenta con nosotros y empieza a ganar totalmente gratis.</p>                
                <div class="product-price">
                    $35.00
                    <span>/ Mochila de Viaje</span>
                </div>                              
            </div>
            <div class="countdown-timer" id="countdown">
                <div class="cd-item">
                    <span>56</span>
                    <p>Días</p>
                </div>
                <div class="cd-item">
                    <span>12</span>
                    <p>Hrs</p>
                </div>
                <div class="cd-item">
                    <span>40</span>
                    <p>Mins</p>
                </div>
                <div class="cd-item">
                    <span>52</span>
                    <p>Segs</p>
                </div>
            </div>
            <a href="#" class="primary-btn">Conoce más <i class="fa fa-chevron-right"></i></a>
        </div>
    </div>
</section>

<?php

/*=============================================
FEATURED PRODUCTS
=============================================*/

$titleModules = array("Artículos Gratuitos", "Lo Más Vendido", "Lo Más Visto");
$routeModules = array("articulos-gratis", "lo-mas-vendido", "lo-mas-visto");

$base = 0;
$limit = 4;

if($titleModules[0] === "Artículos Gratuitos") {
    
    $order = "id";
    $item = "price";
    $valueProduct = 0;
    $mode = "DESC";
    
    $free = ProductController::ctrShowProducts($order, $item, $valueProduct, $base, $limit, $mode);
}

if($titleModules[1] === "Lo Más Vendido") {
    
    $order = "sales";
    $item = NULL;
    $valueProduct = NULL;
    $mode = "DESC";
    
    $sales = ProductController::ctrShowProducts($order, $item, $valueProduct, $base, $limit, $mode);
}

if($titleModules[2] === "Lo Más Visto") {
    
    $order = "views";
    $item = NULL;
    $valueProduct = NULL;
    $mode = "DESC";
    
    $views = ProductController::ctrShowProducts($order, $item, $valueProduct, $base, $limit, $mode);
}

$modules = array($free, $sales, $views);

for($i = 0; $i < count($titleModules); $i++) {
    echo '<section class="bar-products-section spad-sec">
        <div class="container-fluid well well-lg product-bar">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 organise-products"></div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="container-fluid products spad-featured">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 title-featured">
                    <div class="featured-header-title">
                        <h1>
                            '.$titleModules[$i].'                      
                        </h1>                                      
                    </div>
                    <div class="featured-seeall">
                        <a href="'.$routeModules[$i].'">Ver Todo <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>            
                <div class="clearfix"></div> 
            </div>
            
            <div class="row grid'.$i.'">';
    
            foreach ($modules[$i] as $key => $value) {
               
                echo '<div class="col-lg-3 col-md-6">
                    <div class="single-grid-product">
                        <a href="'.$value["route"].'" class="pixelProduct">
                            <img src="'.$server.$value["product_image"].'">
                        </a>

                        <div class="links-text">';

                            if ($value["offer"] != 0 && $value["price"] != 0) {
                                echo '<div class="discount-name">'.$value["offer_discount"].'% de Descuento</div>';
                            }

                            echo '<a href="'.$value["route"].'" class="pixelProduct">
                                <h5>'.$value["product_title"].'</h5>
                            </a>
                            
                            <p class="price">';
                            
                                if($value["price"] == 0) {
                                    echo 'Gratis';
                                } else {
                                    if($value["offer"] != 0) {
                                        echo 'MXN $'.$value["offer_price"].''
                                        . '<span>$'.$value["price"].'</span>';
                                    } else {
                                        echo 'MXN $'.$value["price"].'';
                                    }
                                }
                            
                            echo '</p>

                            <div class="tag-list links">
                                <div class="tag-item">
                                    <button type="button" class="btn btn-warning btn-sm wishes" idProduct="'.$value["id"].'" data-toggle="tooltip" title="Agregar a mi lista de deseos">
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    </button>&nbsp;';
                            
                                    if ($value["sort"] == "virtual" && $value["price"] != 0) {
                                        if ($value["offer"] != 0) {
                                            echo '<button type="button" class="btn btn-warning btn-sm addCart" idProduct="'.$value["id"].'" image="'.$server.$value["product_image"].'" product_title="'.$value["product_title"].'" price="'.$value["offer_price"].'" sort="'.$value["sort"].'" product_weight="'.$value["product_weight"].'" data-toggle="tooltip" title="Agregar a mi carrito de compras">
                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>                                            
                                            </button>&nbsp;';
                                        } else {
                                            echo '<button type="button" class="btn btn-warning btn-sm addCart" idProduct="'.$value["id"].'" image="'.$server.$value["product_image"].'" product_title="'.$value["product_title"].'" price="'.$value["price"].'" sort="'.$value["sort"].'" product_weight="'.$value["product_weight"].'" data-toggle="tooltip" title="Agregar a mi carrito de compras">
                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>                                            
                                            </button>&nbsp;';
                                        }
                                    }
                                    
                                    if ($value["sort"] == "fisico" && $value["price"] != 0) {
                                        if ($value["offer"] != 0) {
                                            echo '<button type="button" class="btn btn-warning btn-sm addCart" idProduct="'.$value["id"].'" image="'.$server.$value["product_image"].'" product_title="'.$value["product_title"].'" price="'.$value["offer_price"].'" sort="'.$value["sort"].'" product_weight="'.$value["product_weight"].'" data-toggle="tooltip" title="Agregar a mi carrito de compras">
                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>                                            
                                            </button>&nbsp;';
                                        } else {
                                            echo '<button type="button" class="btn btn-warning btn-sm addCart" idProduct="'.$value["id"].'" image="'.$server.$value["product_image"].'" product_title="'.$value["product_title"].'" price="'.$value["price"].'" sort="'.$value["sort"].'" product_weight="'.$value["product_weight"].'" data-toggle="tooltip" title="Agregar a mi carrito de compras">
                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>                                            
                                            </button>&nbsp;';
                                        }
                                    }
                                              
                                    echo '<button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" title="Ver producto">
                                        <a href="'.$value["route"].'" class="pixelProduct">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
                
            }
            
            echo '</div>
        </div>
    </section>';
}

?>

<section class="delivery-section">
    <div class="container">
        <div class="benefit-items">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="<?php echo $server; ?>views/img/template/icon-1.png">
                        </div>
                        <div class="sb-text">
                            <h6>Envíos Gratis</h6>
                            <p>Envios Locales</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="<?php echo $server; ?>views/img/template/icon-2.png">
                        </div>
                        <div class="sb-text">
                            <h6>Entregas a tiempo</h6>
                            <p>Si el bien tiene prolemas</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="<?php echo $server; ?>views/img/template/icon-3.png">
                        </div>
                        <div class="sb-text">
                            <h6>Métodos de Pago</h6>
                            <p>100% Seguros</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
