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

                    <?php
                    $item = "route";
                    $valueProduct = $routes[0];
                    $infoproduct = ProductController::ctrShowInfoProduct($item, $valueProduct);

                    if ($infoproduct["sort"] == "fisico") {
                        echo '<div class="col-lg-6">
                            <div class="product-pic-zoom">
                                <img class="product-big-img" src="' . $server . 'views/img/multimedia/tennis-verde/img-01.jpg" alt="">
                            </div>
                            <div class="product-thumbs">
                                <div class="product-thumbs-track ps-slider owl-carousel">
                                    <div class="pt active" data-imgbigurl="' . $server . 'views/img/multimedia/tennis-verde/img-01.jpg">
                                        <img class="img-thumbnail" src="' . $server . 'views/img/multimedia/tennis-verde/img-01.jpg" alt="">
                                    </div>
                                    <div class="pt" data-imgbigurl="' . $server . 'views/img/multimedia/tennis-verde/img-02.jpg">
                                        <img class="img-thumbnail" src="' . $server . 'views/img/multimedia/tennis-verde/img-02.jpg" alt="">
                                    </div>
                                    <div class="pt" data-imgbigurl="' . $server . 'views/img/multimedia/tennis-verde/img-03.jpg">
                                        <img class="img-thumbnail" src="' . $server . 'views/img/multimedia/tennis-verde/img-03.jpg" alt="">
                                    </div>
                                    <div class="pt" data-imgbigurl="' . $server . 'views/img/multimedia/tennis-verde/img-04.jpg">
                                        <img class="img-thumbnail" src="' . $server . 'views/img/multimedia/tennis-verde/img-04.jpg" alt="">
                                    </div>
                                    <div class="pt" data-imgbigurl="' . $server . 'views/img/multimedia/tennis-verde/img-05.jpg">
                                        <img class="img-thumbnail" src="' . $server . 'views/img/multimedia/tennis-verde/img-05.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div> ';
                    } else {
                        echo '<div class="col-lg-6">
                            <iframe class="videoPresentation" width="100%" src="https://www.youtube.com/embed/-5zeJyQ31rM?rel=0&autoplay=0" frameborder="0" allowfullscreen></iframe>
                        </div>';
                    }
                    ?>

                    <?php
                    if ($infoproduct["sort"] == "fisico") {
                        echo '<div class="col-lg-6">';
                    } else {
                        echo '<div class="col-lg-6">';
                    }
                    ?>

                    <?php
                    echo '<div class="product-details">
                        <div class="pd-title">
                            <span>
                                <a href="#">Marca: Calvin Klein</a>
                            </span>
                            <h3>' . $infoproduct["product_title"] . '</h3>
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
                                ' . substr($infoproduct["description"], 0, 150) . "..." . '
                            </p>';

                    if ($infoproduct["offer"] == 0) {

                        if ($infoproduct["price"] != 0) {
                            echo '<h4>MXN $' . $infoproduct["price"] . '</h4>';
                        } else {
                            echo '<h4>Gratis</h4>';
                        }
                    } else {
                        echo '<h4>MXN $' . $infoproduct["offer_price"] . ' <span>$' . $infoproduct["price"] . '</span></h4>
                                <small class="dealprice">Ahorras:</small>
                                <span class="dealprice-saving">$44.33 (' . $infoproduct["offer_discount"] . '% de descuento)</span>';
                    }
                    echo '</div>';

                    if ($infoproduct["product_details"] != NULL) {

                        $details = json_decode($infoproduct["product_details"], TRUE);

                        if ($infoproduct["sort"] == "fisico") {
                            if ($details["Color"] != NULL) {
                                echo '<div class="pd-color">
                                    <h6>Color:</h6>
                                <div class="pd-color-choose">';

                                for ($i = 0; $i < count($details["Color"]); $i++) {
                                    echo '<div class="cc-item">
                                        <input type="radio" id="cc-' . $details["Color"][$i] . '">
                                        <label for="cc-' . $details["Color"][$i] . '" class="cc-' . $details["Color"][$i] . '"></label>
                                    </div>';
                                }

                                echo '</div>
                            </div>';
                            }

                            if ($details["Talla"] != NULL) {
                                echo '<div class="pd-size-choose">';

                                for ($i = 0; $i < count($details["Talla"]); $i++) {
                                    echo '<div class="sc-item">
                                        <input type="radio" id="' . $details["Talla"][$i] . '-size">
                                        <label for="' . $details["Talla"][$i] . '-size">' . $details["Talla"][$i] . '</label>
                                    </div>';
                                }
                                echo '</div>';
                            } 
                            
                        }  else {
                            echo '<div class="pd-courses-info">
                                
                                <h2>Este curso incluye:</h2>    
                                <ul>
                                    <li>
                                            <i style="margin-right:10px" class="fa fa-play-circle"></i> ' . $details["Clases"] . '
                                    </li>
                                    <li>
                                            <i style="margin-right:10px" class="fa fa-clock-o"></i> ' . $details["Tiempo"] . '
                                    </li>
                                    <li>
                                            <i style="margin-right:10px" class="fa fa-check-circle"></i> ' . $details["Nivel"] . '
                                    </li>
                                    <li>
                                            <i style="margin-right:10px" class="fa fa-info-circle"></i> ' . $details["Acceso"] . '
                                    </li>
                                    <li>
                                            <i style="margin-right:10px" class="fa fa-desktop"></i> ' . $details["Dispositivo"] . '
                                    </li>
                                    <li>
                                            <i style="margin-right:10px" class="fa fa-trophy"></i> ' . $details["Certificado"] . '
                                    </li>
                                </ul>

                            </div>';
                        }
                    }
                    echo '<div class="shopping-buttons">

                            <button class="btn btn-warning pd-cart addCart" role="button" idProduct="65" product_image="" product_title="Producto" price="755.67" sort="fisico" product_weight="0.950">
                                Agregar al Carrito
                                <i class="fa fa-shopping-cart"></i>
                            </button>   
                            &nbsp;
                            <button class="btn btn-secondary pd-shop" role="button">
                                Comprar Ahora
                                <i class="fa fa-play"></i>
                            </button>
                        </div>';
                        
                        if ($infoproduct["product_delivery"] == 0) {
                            if ($infoproduct["price"] == 0) {
                                echo '<div class="label label-default" style="font-weight: 100;">
                                    <i class="fa fa-clock-o" style="margin-right: 5px;"></i>
                                    Garantía de reembolso de 30 días |
                                    <i class="fa fa-shopping-cart" style="margin: 0px 5px;"></i>
                                    '.$infoproduct["free_sales"].' inscritos |
                                    <i class="fa fa-eye" style="margin: 0px 5px;"></i>
                                    Visto '.$infoproduct["free_views"].' veces
                                </div>';
                            } else {
                                echo '<div class="label label-default" style="font-weight: 100;">
                                    <i class="fa fa-clock-o" style="margin-right: 5px;"></i>
                                    Garantía de reembolso de 30 días |
                                    <i class="fa fa-shopping-cart" style="margin: 0px 5px;"></i>
                                    '.$infoproduct["sales"].' inscritos |
                                    <i class="fa fa-eye" style="margin: 0px 5px;"></i>
                                    Visto '.$infoproduct["views"].' veces
                                </div>';
                            }
                        } else {
                            echo '<div class="label label-default" style="font-weight: 100;">
                                <i class="fa fa-clock-o" style="margin-right: 5px;"></i>
                                '.$infoproduct["product_delivery"].' días hábiles para el envío |
                                <i class="fa fa-shopping-cart" style="margin: 0px 5px;"></i>
                                '.$infoproduct["sales"].' ventas |
                                <i class="fa fa-eye" style="margin: 0px 5px;"></i>
                                Visto '.$infoproduct["views"].' veces
                            </div>';
                        }                                           

                        echo '<div class="pd-share">
                            <div class="p-available">Disponible.</div>
                            <div class="pd-social">
                                Compartir:
                                <a href="#" title="Compartir en Facebook"><i class="fa fa-facebook-official share-fb"></i></a>
                                <a href="#" title="Compartir en Twitter"><i class="fa fa-twitter share-tw"></i></a>
                                <a href="#" title="Compartir por Email"><i class="fa fa-envelope share-mail"></i></a>
                            </div>
                        </div>';
                        ?>

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
                                        <h5><?php echo $infoproduct["product_title"] ?></h5>
                                        <p>
                                            <?php echo $infoproduct["description"] ?>
                                        </p>
                                    </div>
                                    <div class="col-lg-5">
                                        <img class="img-fluid" src="<?php echo $server . $infoproduct["product_image"] ?>" alt="">
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
                                        <td class="p-catagory">Fabricante</td>
                                        <td>
                                            <div class="p-customer">YuppieStore</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-catagory">Availability</td>
                                        <td>
                                            <div class="p-stock">22 in stock</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-catagory">Dimensiones</td>
                                        <td>
                                            <div class="p-dimensions">1,3kg</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-catagory">Talla</td>
                                        <td>
                                            <div class="p-size">Xxl</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-catagory">Color</td>
                                        <td><span class="cs-color"></span></td>
                                    </tr>
                                    <tr>
                                        <td class="p-catagory">ID</td>
                                        <td>
                                            <div class="p-code"><?php echo $infoproduct["id"] ?></div>
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
            
            <?php
            
            $order = "";
            $item = "subcategory_id";
            $valueProduct = $infoproduct["subcategory_id"];
            $base = 0;
            $limit = 4;
            $mode = "Rand()";
            
            $related = ProductController::ctrShowProducts($order, $item, $valueProduct, $base, $limit, $mode);
            
            if (!$related) {
                echo '<section class="error-section">
                    <div class="error-box">
                        <div class="error-body text-center">
                            <h1>¡Oops!</h1>
                            <h3 class="text-uppercase">Aún no hay productos relacionados.</h3>
                            <p>Estamos trabajando en ofrecerle productos.</p>
                            <a class="btn btn-primary btn-rounded" href="' . $url . 'all-categories">Ir a Categorías</a>
                        </div>
                    </div>
                </section>';
            } else {
                
                foreach ($related as $key => $value) {
                    echo '<div class="col-lg-3 col-sm-6">
                            <div class="product-item">
                            <div class="pi-pic">
                                <img src="'.$server.$value["product_image"].'" alt="">                        
                                <div class="icon">
                                    <a href="#" class="wishes" title="Agregar a mi lista de deseos"><i class="fa fa-heart-o"></i></a>
                                </div>
                                <ul>';
                                    
                                    if ($value["sort"] == "virtual" && $value["price"] != 0) {
                                        if ($value["offer"] != 0) {
                                            echo '<li class="w-icon active"><a href="#" title="Agregar al carrito de compras"><i class="fa fa-shopping-bag"></i></a></li>                                                    
                                                <li class="quick-view"><a href="' . $url . $value["route"] . '" title="Ver producto">+ Ver</a></li>
                                                <li class="w-icon"><a href="#" title="Productos relacionados"><i class="fa fa-random"></i></a></li>';
                                        } else {
                                            echo '<li class="w-icon active"><a href="#" title="Agregar al carrito de compras"><i class="fa fa-shopping-bag"></i></a></li>
                                                <li class="quick-view"><a href="' . $url . $value["route"] . '" title="Ver producto">+ Ver</a></li>
                                                <li class="w-icon"><a href="#" title="Productos relacionados"><i class="fa fa-random"></i></a></li>';
                                        }
                                    } else if($value["sort"] == "virtual" && $value["price"] == 0) {
                                         echo '<li class="w-icon active"><a href="#" title="Visualizar curso"><i class="fa fa-play"></i></a></li>
                                            <li class="quick-view"><a href="' . $url . $value["route"] . '" title="Ver producto">+ Ver</a></li>
                                            <li class="w-icon"><a href="#" title="Productos relacionados"><i class="fa fa-random"></i></a></li>';
                                    } else {
                                        echo '<li class="w-icon active"><a href="#" title="Agregar al carrito de compras"><i class="fa fa-shopping-bag"></i></a></li>
                                            <li class="quick-view"><a href="' . $url . $value["route"] . '" title="Ver producto">+ Ver</a></li>
                                            <li class="w-icon"><a href="#" title="Productos relacionados"><i class="fa fa-random"></i></a></li>';
                                    }
                                                                      
                                echo '</ul>
                            </div>
                            <div class="pi-text">';
                    
                                if ($value["offer"] != 0 && $value["price"] != 0) {
                                    echo '<div class="discount-name">' . $value["offer_discount"] . '% de Descuento</div>';
                                }
                                
                                echo '<a href="' . $url . $value["route"] . '">
                                    <h5>' . substr($value["product_title"], 0, 30) . "..." . '</h5>
                                </a>
                                <div class="product-price">';
                                    if ($value["price"] == 0) {
                                        echo 'Gratis';
                                    } else {
                                        if ($value["offer"] != 0) {
                                            echo 'MXN $' . $value["offer_price"] . '
                                                    <span>$' . $value["price"] . '</span>';
                                        } else {
                                            echo 'MXN $' . $value["price"] . '';
                                        }
                                    }
                                echo '</div>
                            </div>
                        </div>
                    </div>';
                }
            }
            ?>
                                   
        </div>
    </div>
</div>
<!-- Related Products Section End -->