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

<section class="bar-products-section spad-sec">
    <div class="container-fluid well well-sm product-bar">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 organise-products"></div>
            </div>
        </div>
    </div>
</section>

<!-- == Free Products == -->

<section class="container-fluid products spad-featured">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 title-featured">
                <div class="featured-header-title">
                    <h1>
                        Artículos Gratuitos                        
                    </h1>                                      
                </div>
                <div class="featured-seeall">
                    <a href="articulos-gratis">Ver Todo <i class="fa fa-chevron-right"></i></a>
                </div>
            </div>            
            <div class="clearfix"></div> 
        </div>

        <div class="row grid0">
            <div class="col-lg-3 col-md-6">
                <div class="single-grid-product">
                    <a href="#" class="pixelProduct">
                        <img src="<?php echo $server; ?>views/img/products/accesorios/accesorio04.jpg">
                    </a>

                    <div class="links-text">
                        <a href="#" class="pixelProduct">
                            <h5>Collar de Diamantes</h5>
                        </a>
                        <p class="price">
                            Gratis
                        </p>

                        <div class="tag-list links">
                            <div class="tag-item">
                                <button type="button" class="btn btn-warning btn-sm wishes" idProduct="470" data-toggle="tooltip" title="Agregar a mi lista de deseos">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                </button>

                                <button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" title="Ver producto">
                                    <a href="#" class="pixelProduct">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-grid-product">
                    <a href="#" class="pixelProduct">
                        <img src="<?php echo $server; ?>views/img/products/accesorios/accesorio03.jpg">
                    </a>

                    <div class="links-text">
                        <a href="#" class="pixelProduct">
                            <h5>Mochila Antirobo Color Gris</h5>
                        </a>
                        <p class="price">
                            Gratis
                        </p>

                        <div class="tag-list links">
                            <div class="tag-item">
                                <button type="button" class="btn btn-warning btn-sm wishes" idProduct="470" data-toggle="tooltip" title="Agregar a mi lista de deseos">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                </button>

                                <button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" title="Ver producto">
                                    <a href="#" class="pixelProduct">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-grid-product">
                    <a href="#" class="pixelProduct">
                        <img src="<?php echo $server; ?>views/img/products/accesorios/accesorio02.jpg">
                    </a>

                    <div class="links-text">
                        <a href="#" class="pixelProduct">
                            <h5>Mochila Militar</h5>
                        </a>
                        <p class="price">
                            Gratis
                        </p>

                        <div class="tag-list links">
                            <div class="tag-item">
                                <button type="button" class="btn btn-warning btn-sm wishes" idProduct="470" data-toggle="tooltip" title="Agregar a mi lista de deseos">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                </button>

                                <button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" title="Ver producto">
                                    <a href="#" class="pixelProduct">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-grid-product">
                    <a href="#" class="pixelProduct">
                        <img src="<?php echo $server; ?>views/img/products/accesorios/accesorio01.jpg">
                    </a>

                    <div class="links-text">
                        <a href="#" class="pixelProduct">
                            <h5>Pulsera de Diamantes</h5>
                        </a>
                        <p class="price">
                            Gratis
                        </p>

                        <div class="tag-list links">
                            <div class="tag-item">
                                <button type="button" class="btn btn-warning btn-sm wishes" idProduct="470" data-toggle="tooltip" title="Agregar a mi lista de deseos">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                </button>

                                <button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" title="Ver producto">
                                    <a href="#" class="pixelProduct">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bar-products-section spad-sec">
    <div class="container-fluid well well-sm product-bar">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 organise-products"></div>
            </div>
        </div>
    </div>
</section>

<!-- == Top Selling Products == -->

<section class="container-fluid products spad-featured">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 title-featured">
                <div class="featured-header-title">
                    <h1>
                        Lo Más Vendido                        
                    </h1>                                      
                </div>
                <div class="featured-seeall">
                    <a href="articulos-gratis">Ver Todo <i class="fa fa-chevron-right"></i></a>
                </div>
            </div>            
            <div class="clearfix"></div> 
        </div>

        <!-- == Grid of Products == -->
        <div class="row grid0">
            <div class="col-lg-3 col-md-6">
                <div class="single-grid-product">
                    <a href="#" class="pixelProduct">
                        <img src="<?php echo $server; ?>views/img/products/ropa/ropa03.jpg">
                    </a>

                    <div class="links-text">
                        <div class="discount-name">40% de Descuento</div>
                        <a href="#" class="pixelProduct">
                            <h5>Falda de Flores</h5>
                        </a>
                        <p class="price">
                            MXN $120.00
                            <span>$200.00</span>
                        </p>

                        <div class="tag-list links">
                            <div class="tag-item">
                                <button type="button" class="btn btn-warning btn-sm wishes" idProduct="470" data-toggle="tooltip" title="Agregar a mi lista de deseos">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                </button>
                                
                                <button type="button" class="btn btn-warning btn-sm addCart" idProduct="470" image="<?php echo $server; ?>views/img/products/cursos/curso05.jpg" product_title="Curso de Bootstrap" price="29.90" sort="virtual" product_weight="0" data-toggle="tooltip" title="Agregar a mi carrito de compras">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </button>

                                <button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" title="Ver producto">
                                    <a href="#" class="pixelProduct">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-grid-product">
                    <a href="#" class="pixelProduct">
                        <img src="<?php echo $server; ?>views/img/products/ropa/ropa04.jpg">
                    </a>

                    <div class="links-text">
                        <div class="discount-name">40% de Descuento</div>
                        <a href="#" class="pixelProduct">                            
                            <h5>Vestido Jean</h5>
                        </a>
                        <p class="price">
                            MXN $300.00
                            <span>$500.00</span>
                        </p>

                        <div class="tag-list links">
                            <div class="tag-item">
                                <button type="button" class="btn btn-warning btn-sm wishes" idProduct="470" data-toggle="tooltip" title="Agregar a mi lista de deseos">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                </button>
                                
                                <button type="button" class="btn btn-warning btn-sm addCart" idProduct="470" image="<?php echo $server; ?>views/img/products/cursos/curso05.jpg" product_title="Curso de Bootstrap" price="29.90" sort="virtual" product_weight="0" data-toggle="tooltip" title="Agregar a mi carrito de compras">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </button>

                                <button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" title="Ver producto">
                                    <a href="#" class="pixelProduct">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-grid-product">
                    <a href="#" class="pixelProduct">
                        <img src="<?php echo $server; ?>views/img/products/ropa/ropa05.jpg">
                    </a>

                    <div class="links-text">
                        <div class="discount-name">30% de Descuento</div>
                        <a href="#" class="pixelProduct">
                            <h5>Vestido Clásico Verano</h5>
                        </a>
                        <p class="price">
                            MXN $528.50
                            <span>$755.00</span>
                        </p>

                        <div class="tag-list links">
                            <div class="tag-item">
                                <button type="button" class="btn btn-warning btn-sm wishes" idProduct="470" data-toggle="tooltip" title="Agregar a mi lista de deseos">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                </button>
                                
                                <button type="button" class="btn btn-warning btn-sm addCart" idProduct="470" image="<?php echo $server; ?>views/img/products/cursos/curso05.jpg" product_title="Curso de Bootstrap" price="29.90" sort="virtual" product_weight="0" data-toggle="tooltip" title="Agregar a mi carrito de compras">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </button>

                                <button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" title="Ver producto">
                                    <a href="#" class="pixelProduct">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-grid-product">
                    <a href="#" class="pixelProduct">
                        <img src="<?php echo $server; ?>views/img/products/ropa/ropa01.jpg">
                    </a>

                    <div class="links-text">
                        <div class="discount-name">10% de Descuento</div>
                        <a href="#" class="pixelProduct">                            
                            <h5>Playera Estilo Militar</h5>
                        </a>
                        <p class="price">
                            MXN $288.00
                            <span>$320.00</span>
                        </p>

                        <div class="tag-list links">
                            <div class="tag-item">
                                <button type="button" class="btn btn-warning btn-sm wishes" idProduct="470" data-toggle="tooltip" title="Agregar a mi lista de deseos">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                </button>
                                
                                <button type="button" class="btn btn-warning btn-sm addCart" idProduct="470" image="<?php echo $server; ?>views/img/products/cursos/curso05.jpg" product_title="Curso de Bootstrap" price="29.90" sort="virtual" product_weight="0" data-toggle="tooltip" title="Agregar a mi carrito de compras">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </button>

                                <button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" title="Ver producto">
                                    <a href="#" class="pixelProduct">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bar-products-section spad-sec">
    <div class="container-fluid well well-sm product-bar">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 organise-products"></div>
            </div>
        </div>
    </div>
</section>

<!-- == Most Viewed Products == -->

<section class="container-fluid products spad-featured">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 title-featured">
                <div class="featured-header-title">
                    <h1>
                        Lo Más Visto                       
                    </h1>                                      
                </div>
                <div class="featured-seeall">
                    <a href="articulos-gratis">Ver Todo <i class="fa fa-chevron-right"></i></a>
                </div>
            </div>            
            <div class="clearfix"></div> 
        </div>

        <!-- == Grid of Products == -->
        <div class="row grid0">
            <div class="col-lg-3 col-md-6">
                <div class="single-grid-product">
                    <a href="#" class="pixelProduct">
                        <img src="<?php echo $server; ?>views/img/products/cursos/curso05.jpg">
                    </a>

                    <div class="links-text">
                        <div class="discount-name">90% de Descuento</div>
                        <a href="#" class="pixelProduct">
                            <h5>Curso de Bootstrap</h5>
                        </a>
                        <p class="price">
                            MXN $29.90
                            <span>$299.00</span>
                        </p>

                        <div class="tag-list links">
                            <div class="tag-item">
                                <button type="button" class="btn btn-warning btn-sm wishes" idProduct="470" data-toggle="tooltip" title="Agregar a mi lista de deseos">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                </button>
                                
                                <button type="button" class="btn btn-warning btn-sm addCart" idProduct="470" image="<?php echo $server; ?>views/img/products/cursos/curso05.jpg" product_title="Curso de Bootstrap" price="29.90" sort="virtual" product_weight="0" data-toggle="tooltip" title="Agregar a mi carrito de compras">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </button>

                                <button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" title="Ver producto">
                                    <a href="#" class="pixelProduct">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-grid-product">
                    <a href="#" class="pixelProduct">
                        <img src="<?php echo $server; ?>views/img/products/cursos/curso04.jpg">
                    </a>

                    <div class="links-text">
                        <div class="discount-name">90% de Descuento</div>
                        <a href="#" class="pixelProduct">
                            <h5>Curso de HTML5 + Canvas</h5>
                        </a>
                        <p class="price">
                            MXN $29.90
                            <span>$299.00</span>
                        </p>

                        <div class="tag-list links">
                            <div class="tag-item">
                                <button type="button" class="btn btn-warning btn-sm wishes" idProduct="470" data-toggle="tooltip" title="Agregar a mi lista de deseos">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                </button>
                                
                                <button type="button" class="btn btn-warning btn-sm addCart" idProduct="470" image="<?php echo $server; ?>views/img/products/cursos/curso05.jpg" product_title="Curso de Bootstrap" price="29.90" sort="virtual" product_weight="0" data-toggle="tooltip" title="Agregar a mi carrito de compras">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </button>

                                <button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" title="Ver producto">
                                    <a href="#" class="pixelProduct">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-grid-product">
                    <a href="#" class="pixelProduct">
                        <img src="<?php echo $server; ?>views/img/products/cursos/curso02.jpg">
                    </a>

                    <div class="links-text">
                        <div class="discount-name">90% de Descuento</div>
                        <a href="#" class="pixelProduct">
                            <h5>Curso de Javascript</h5>
                        </a>
                        <p class="price">
                            MXN $29.90
                            <span>$299.00</span>
                        </p>

                        <div class="tag-list links">
                            <div class="tag-item">
                                <button type="button" class="btn btn-warning btn-sm wishes" idProduct="470" data-toggle="tooltip" title="Agregar a mi lista de deseos">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                </button>
                                
                                <button type="button" class="btn btn-warning btn-sm addCart" idProduct="470" image="<?php echo $server; ?>views/img/products/cursos/curso05.jpg" product_title="Curso de Bootstrap" price="29.90" sort="virtual" product_weight="0" data-toggle="tooltip" title="Agregar a mi carrito de compras">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </button>

                                <button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" title="Ver producto">
                                    <a href="#" class="pixelProduct">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-grid-product">
                    <a href="#" class="pixelProduct">
                        <img src="<?php echo $server; ?>views/img/products/cursos/curso03.jpg">
                    </a>

                    <div class="links-text">
                        <div class="discount-name">90% de Descuento</div>
                        <a href="#" class="pixelProduct">
                            <h5>Introducción a Jquery</h5>
                        </a>
                        <p class="price">
                            MXN $29.90
                            <span>$299.00</span>
                        </p>

                        <div class="tag-list links">
                            <div class="tag-item">
                                <button type="button" class="btn btn-warning btn-sm wishes" idProduct="470" data-toggle="tooltip" title="Agregar a mi lista de deseos">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                </button>
                                
                                <button type="button" class="btn btn-warning btn-sm addCart" idProduct="470" image="<?php echo $server; ?>views/img/products/cursos/curso05.jpg" product_title="Curso de Bootstrap" price="29.90" sort="virtual" product_weight="0" data-toggle="tooltip" title="Agregar a mi carrito de compras">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </button>

                                <button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" title="Ver producto">
                                    <a href="#" class="pixelProduct">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
