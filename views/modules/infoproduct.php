<?php
$server = Route::ctrRouteServer();
$url = Route::ctrRoute();
?>

<!-- Breadcrumb Section Begin -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="<?php $url; ?>"><i class="fa fa-home"></i> Inicio</a>
                    <span><?php echo $routes[0] ?></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb Section -->

<section class="product-shop spad-sec page-details infoproduct">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-pic-zoom">
                            <img class="product-big-img" src="<?php echo $server; ?>views/img/multimedia/tennis-verde/img-01.jpg" alt="">
                        </div>
                        <div class="product-thumbs">
                            <div class="product-thumbs-track ps-slider owl-carousel">
                                <div class="pt active" data-imgbigurl="<?php echo $server; ?>views/img/multimedia/tennis-verde/img-01.jpg">
                                    <img class="img-thumbnail" src="<?php echo $server; ?>views/img/multimedia/tennis-verde/img-01.jpg" alt="">
                                </div>
                                <div class="pt" data-imgbigurl="<?php echo $server; ?>views/img/multimedia/tennis-verde/img-02.jpg">
                                    <img class="img-thumbnail" src="<?php echo $server; ?>views/img/multimedia/tennis-verde/img-02.jpg" alt="">
                                </div>
                                <div class="pt" data-imgbigurl="<?php echo $server; ?>views/img/multimedia/tennis-verde/img-03.jpg">
                                    <img class="img-thumbnail" src="<?php echo $server; ?>views/img/multimedia/tennis-verde/img-03.jpg" alt="">
                                </div>
                                <div class="pt" data-imgbigurl="<?php echo $server; ?>views/img/multimedia/tennis-verde/img-04.jpg">
                                    <img class="img-thumbnail" src="<?php echo $server; ?>views/img/multimedia/tennis-verde/img-04.jpg" alt="">
                                </div>
                                <div class="pt" data-imgbigurl="<?php echo $server; ?>views/img/multimedia/tennis-verde/img-05.jpg">
                                    <img class="img-thumbnail" src="<?php echo $server; ?>views/img/multimedia/tennis-verde/img-05.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>                                           

                    <div class="col-lg-6">
                        <div class="product-details">
                            <div class="pd-title">
                                <span>
                                    <a href="#">Marca: Calvin Klein</a>
                                </span>
                                <h3>Titulo del Producto</h3>
                                <a href="#" class="heart-icon" title="Agregar a la lista de deseos" data-toggle="tooltip">
                                    <i class="fa fa-heart-o"></i>
                                </a>
                            </div>
                            <div class="pd-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                &nbsp;
                                <span>
                                    <a href="#">
                                        <span>125 calificaciones</span>
                                    </a>
                                </span>
                            </div>
                            <hr>
                            <div class="pd-desc">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor
                                    sit amet, consectetur adipisicing elit, sed do mod tempor...
                                </p>
                                <h4>MXN $755.67 <span>$800.00</span></h4>
                                <small class="dealprice">Ahorras:</small>
                                <span class="dealprice-saving">$44.33 (6% de descuento)</span>
                            </div>
                            <div class="pd-color">
                                <h6>Color:</h6>
                                <div class="pd-color-choose">
                                    <div class="cc-item">
                                        <input type="radio" id="cc-black">
                                        <label for="cc-black"></label>
                                    </div>
                                    <div class="cc-item">
                                        <input type="radio" id="cc-yellow">
                                        <label for="cc-yellow" class="cc-yellow"></label>
                                    </div>
                                    <div class="cc-item">
                                        <input type="radio" id="cc-violet">
                                        <label for="cc-violet" class="cc-violet"></label>
                                    </div>
                                    <div class="cc-item">
                                        <input type="radio" id="cc-silver">
                                        <label for="cc-silver" class="cc-silver"></label>
                                    </div>
                                    <div class="cc-item">
                                        <input type="radio" id="cc-blue">
                                        <label for="cc-blue" class="cc-blue"></label>
                                    </div>
                                    <div class="cc-item">
                                        <input type="radio" id="cc-red">
                                        <label for="cc-red" class="cc-red"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="pd-size-choose">
                                <div class="sc-item">
                                    <input type="radio" id="sm-size">
                                    <label for="sm-size">s</label>
                                </div>
                                <div class="sc-item">
                                    <input type="radio" id="md-size">
                                    <label for="md-size">m</label>
                                </div>
                                <div class="sc-item">
                                    <input type="radio" id="lg-size">
                                    <label for="lg-size">l</label>
                                </div>
                                <div class="sc-item">
                                    <input type="radio" id="xl-size">
                                    <label for="xl-size">xs</label>
                                </div>
                            </div>
                            <div class="shopping-buttons">

                                <button class="btn btn-warning pd-cart addCart" role="button" idProduct="65" product_image="" product_title="Producto" price="755.67" sort="fisico" product_weight="0.950">
                                    Agregar al Carrito
                                    <i class="fa fa-shopping-cart"></i>
                                </button>   
                                &nbsp;
                                <button class="btn btn-secondary pd-shop" role="button">
                                    Comprar Ahora
                                    <i class="fa fa-play"></i>
                                </button>
                            </div>
                            <div class="label label-default" style="font-weight: 100;">
                                <i class="fa fa-clock-o" style="margin-right: 5px;"></i>
                                14 días hábiles para el envío |
                                <i class="fa fa-shopping-cart" style="margin: 0px 5px;"></i>
                                200 ventas |
                                <i class="fa fa-eye" style="margin: 0px 5px;"></i>
                                Visto 120 veces
                            </div>

                            <div class="pd-share">
                                <div class="p-available">Disponible.</div>
                                <div class="pd-social">
                                    Compartir:
                                    <a href="#" title="Compartir en Facebook"><i class="fa fa-facebook-official share-fb"></i></a>
                                    <a href="#" title="Compartir en Twitter"><i class="fa fa-twitter share-tw"></i></a>
                                    <a href="#" title="Compartir por Email"><i class="fa fa-envelope share-mail"></i></a>
                                </div>
                            </div>

                            <div class="pd-ad">
                                <a href="#">
                                    <img src="https://images-na.ssl-images-amazon.com/images/G/33/img20/SmartHome/SmartHomeBillboard_1500_230.jpg" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>                    
                </div>

                <div class="product-tab">
                    <div class="tab-item">
                        <ul class="nav" role="tablist">
                            <li>
                                <a class="active" data-toggle="tab" href="#tab-1" role="tab">Descripción</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab-2" role="tab">Detalles</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab-3" role="tab">Opiniones de clientes</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-item-content">
                        <div class="tab-content">
                            <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                <div class="product-content">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <h5>Introduction</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
                                            <h5>Features</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
                                        </div>
                                        <div class="col-lg-5">
                                            <img class="img-fluid" src="<?php echo $server; ?>views/img/multimedia/product-single/tab-desc.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                <div class="specification-table">
                                    <table>
                                        <tr>
                                            <td class="p-catagory">Customer Rating</td>
                                            <td>
                                                <div class="pd-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <span>(5)</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Price</td>
                                            <td>
                                                <div class="p-price">$495.00</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Add To Cart</td>
                                            <td>
                                                <div class="cart-add">+ add to cart</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Availability</td>
                                            <td>
                                                <div class="p-stock">22 in stock</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Weight</td>
                                            <td>
                                                <div class="p-weight">1,3kg</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Size</td>
                                            <td>
                                                <div class="p-size">Xxl</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Color</td>
                                            <td><span class="cs-color"></span></td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Sku</td>
                                            <td>
                                                <div class="p-code">00012</div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-3" role="tabpanel">
                                <div class="customer-review-option">
                                    <h4>2 Comments</h4>
                                    <div class="comment-option">
                                        <div class="co-item">
                                            <div class="avatar-pic">
                                                <img src="<?php echo $server; ?>views/img/users/default/anonymous.png" alt="">
                                            </div>
                                            <div class="avatar-text">
                                                <div class="at-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <h5>Brandon Kelley <span>27 Aug 2019</span></h5>
                                                <div class="at-reply">Nice !</div>
                                            </div>
                                        </div>
                                        <div class="co-item">
                                            <div class="avatar-pic">
                                                <img src="<?php echo $server; ?>views/img/users/default/anonymous.png" alt="">
                                            </div>
                                            <div class="avatar-text">
                                                <div class="at-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <h5>Roy Banks <span>27 Aug 2019</span></h5>
                                                <div class="at-reply">Nice !</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="personal-rating">
                                        <h6>Your Ratind</h6>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <div class="leave-comment">
                                        <h4>Leave A Comment</h4>
                                        <form action="#" class="comment-form">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <input type="text" placeholder="Name">
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" placeholder="Email">
                                                </div>
                                                <div class="col-lg-12">
                                                    <textarea placeholder="Messages"></textarea>
                                                    <button type="submit" class="primary-btn">Send message</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Products Section End -->
<div class="related-products spad-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Productos Relacionados</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="<?php echo $server; ?>views/img/products/ropa/ropa06.jpg" alt="">                        
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
                        <div class="discount-name">10% de Descuento</div>
                        <a href="#">
                            <h5>Pure Pineapple</h5>
                        </a>
                        <div class="product-price">
                            $14.00
                            <span>$35.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="<?php echo $server; ?>views/img/products/ropa/ropa06.jpg" alt="">
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
                        <div class="discount-name">10% de Descuento</div>
                        <a href="#">
                            <h5>Guangzhou sweater</h5>
                        </a>
                        <div class="product-price">
                            $13.00
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="<?php echo $server; ?>views/img/products/ropa/ropa06.jpg" alt="">
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
                        <div class="discount-name">10% de Descuento</div>
                        <a href="#">
                            <h5>Pure Pineapple</h5>
                        </a>
                        <div class="product-price">
                            $34.00
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="<?php echo $server; ?>views/img/products/ropa/ropa06.jpg" alt="">
                        <div class="icon">
                            <i class="fa fa-heart-o"></i>
                        </div>
                        <ul>
                            <li class="w-icon active"><a href="#" title="Agregar al carrito de compras"><i class="fa fa-shopping-bag"></i></a></li>
                            <li class="quick-view"><a href="#" title="Ver producto">+ Ver</a></li>
                            <li class="w-icon"><a href="#" title="Productos relacionados"><i class="fa fa-random"></i></a></li>
                        </ul>
                    </div>
                    <div class="pi-text">
                        <div class="discount-name">10% de Descuento</div>
                        <a href="#">
                            <h5>Converse Shoes</h5>
                        </a>
                        <div class="product-price">
                            $34.00
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Related Products Section End -->