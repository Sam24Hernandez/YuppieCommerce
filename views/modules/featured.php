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
                                MXN $14.00 <i class="fa fa-angle-right"></i>
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
                                MXN $14.00 <i class="fa fa-angle-right"></i>
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
                                MXN $14.00 <i class="fa fa-angle-right"></i>
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
                                MXN $14.00 <i class="fa fa-angle-right"></i>
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
                <div class="col-xl-12 organise-products">
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-warning btn-grid" id="btnGrid0">
                            <i class="fa fa-th" aria-hidden="true"></i>
                            <span class="col-xl-0 pull-right"> CUADRICULA</span>
                        </button>
                        
                        <button type="button" class="btn btn-warning btn-list" id="btnList0">
                            <i class="fa fa-list" aria-hidden="true"></i>
                            <span class="col-xl-0 pull-right"> LISTA</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid products spad-featured">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 title-featured">
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
    </div>
</section>
