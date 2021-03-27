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
                    <a class="text-uppercase" href="<?php $url; ?>"><i class="fa fa-home"></i> Inicio</a>
                    <span class="text-uppercase active-page"><?php echo $routes[0] ?></span>
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

                    $multimedia = json_decode($infoproduct["multimedia"], true);

                    if ($infoproduct["sort"] == "fisico") {
                        echo '<div class="col-lg-6">
                            <div class="product-pic-zoom">';

                        if ($multimedia != NULL) {
                            for ($i = 0; $i < count($multimedia); $i++) {
                                echo '<img class="product-big-img" src="' . $server . $multimedia[0]["foto"] . '" alt="' . $infoproduct["product_title"] . '">';
                            }

                            echo '</div>
                            <div class="product-thumbs">
                                <div class="product-thumbs-track ps-slider owl-carousel">';

                            for ($i = 0; $i < count($multimedia); $i++) {
                                echo '<div class="pt" data-imgbigurl="' . $server . $multimedia[$i]["foto"] . '">
                                        <img class="img-thumbnail" src="' . $server . $multimedia[$i]["foto"] . '" alt="' . $infoproduct["product_title"] . '">
                                </div>';
                            }
                        }

                        echo '</div>
                            </div>
                        </div> ';
                    } else {
                        echo '<div class="col-lg-6">
                            <iframe class="videoPresentation" width="100%" src="https://www.youtube.com/embed/' . $infoproduct["multimedia"] . '?rel=0&autoplay=0" frameborder="0" allowfullscreen></iframe>';

                        $courseDetails = json_decode($infoproduct["product_specifications"], true);

                        echo '<div class="video-course-details">
                                <h3>Detalles Adicionales:</h3>
                                <div class="instructor-links">
                                    <span class="intructor-names">
                                        <span class="text-sm">Creado por</span>
                                        <a class="instructor-link-name" href="#">
                                            ' . $courseDetails["Instructor"] . '
                                        </a>
                                    </span>
                                </div>
                                <div class="lead-elements">
                                    <div class="lead-element-item">
                                        <div class="created-time">
                                            <i class="fa fa-calendar"></i>
                                            <span>Fecha de creación: ' . date("d/m/Y", strtotime($infoproduct["datetime"])) . '</span>
                                        </div>
                                    </div>
                                    <div class="lead-element-item lead-locale">
                                        <i class="fa fa-globe"></i>
                                        ' . $courseDetails["Idioma"] . '
                                    </div>
                                </div>
                                <div class="course-landing-page">
                                    <div class="notice-course">
                                        <span>
                                            Detalles del curso ofrecido por
                                            <a href="#">Yuppie</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
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
                        } else {
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
                    ?>

                    <div class="shopping-buttons">
                        <?php
                        if ($infoproduct["price"] == 0) {

                            if ($infoproduct["sort"] == "virtual") {
                                echo '<button class="btn btn-warning pd-cart addFree" role="button" idProduct="' . $infoproduct["id"] . '" product_title="' . $infoproduct["product_title"] . '" sort="' . $infoproduct["sort"] . '">
                                    Acceder Ahora
                                    <i class="fa fa-play"></i>
                            </button>';
                            }
                        } else {
                            if ($infoproduct["sort"] == "virtual") {
                                echo '<button id="btnCheckout" class="btn btn-secondary pd-shop" role="button" >
                                 <a href="#modalPurchaseNow" data-toggle="modal">
                                    Comprar Ahora
                                    <i class="fa fa-play"></i>
                                 </a>
                            </button>';

                                if ($infoproduct["offer"] != 0) {
                                    echo '<button class="btn btn-warning pd-cart addCart" role="button" idProduct="' . $infoproduct["id"] . '" product_image="' . $server . $infoproduct["product_image"] . '" product_title="' . $infoproduct["product_title"] . '" price="' . $infoproduct["price"] . '" sort="' . $infoproduct["sort"] . '" product_weight="' . $infoproduct["product_weight"] . '">
                                        Agregar al Carrito
                                        <i class="fa fa-shopping-cart"></i>
                                </button>';
                                } else {
                                    echo '<button class="btn btn-warning pd-cart addCart" role="button" idProduct="' . $infoproduct["id"] . '" product_image="' . $server . $infoproduct["product_image"] . '" product_title="' . $infoproduct["product_title"] . '" price="' . $infoproduct["price"] . '" sort="' . $infoproduct["sort"] . '" product_weight="' . $infoproduct["product_weight"] . '">
                                        Agregar al Carrito
                                        <i class="fa fa-shopping-cart"></i>
                                </button>';
                                }
                            } else {

                                if ($infoproduct["offer"] != 0) {
                                    echo '<button class="btn btn-warning pd-cart addCart" role="button" idProduct="' . $infoproduct["id"] . '" product_image="' . $server . $infoproduct["product_image"] . '" product_title="' . $infoproduct["product_title"] . '" price="' . $infoproduct["offer_price"] . '" sort="' . $infoproduct["sort"] . '" product_weight="' . $infoproduct["product_weight"] . '">
                                    Agregar al Carrito
                                    <i class="fa fa-shopping-cart"></i>
                                </button>';
                                } else {
                                    echo '<button class="btn btn-warning pd-cart addCart" role="button" idProduct="' . $infoproduct["id"] . '" product_image="' . $server . $infoproduct["product_image"] . '" product_title="' . $infoproduct["product_title"] . '" price="' . $infoproduct["price"] . '" sort="' . $infoproduct["sort"] . '" product_weight="' . $infoproduct["product_weight"] . '">
                                    Agregar al Carrito
                                    <i class="fa fa-shopping-cart"></i>
                                </button>';
                                }
                            }
                        }
                        ?>  
                    </div>                                                                                                                                          

                    <?php
                    if ($infoproduct["product_delivery"] == 0) {
                        if ($infoproduct["price"] == 0) {
                            echo '<div class="label label-default" style="font-weight: 100;">
                                    <i class="fa fa-clock-o" style="margin-right: 5px;"></i>
                                    Garantía de reembolso de 30 días |
                                    <i class="fa fa-shopping-cart" style="margin: 0px 5px;"></i>
                                    ' . $infoproduct["free_sales"] . ' inscritos |
                                    <i class="fa fa-eye" style="margin: 0px 5px;"></i>
                                    Visto <span class="views" sort="'.$infoproduct["price"].'">' . $infoproduct["free_views"] . '</span> veces
                                </div>';
                        } else {
                            echo '<div class="label label-default" style="font-weight: 100;">
                                    <i class="fa fa-clock-o" style="margin-right: 5px;"></i>
                                    Garantía de reembolso de 30 días |
                                    <i class="fa fa-shopping-cart" style="margin: 0px 5px;"></i>
                                    ' . $infoproduct["sales"] . ' inscritos |
                                    <i class="fa fa-eye" style="margin: 0px 5px;"></i>
                                    Visto <span class="views" sort="'.$infoproduct["price"].'">' . $infoproduct["views"] . '</span> veces
                                </div>';
                        }
                    } else {
                        echo '<div class="label label-default" style="font-weight: 100;">
                                <i class="fa fa-clock-o" style="margin-right: 5px;"></i>
                                ' . $infoproduct["product_delivery"] . ' días hábiles para el envío |
                                <i class="fa fa-shopping-cart" style="margin: 0px 5px;"></i>
                                ' . $infoproduct["sales"] . ' ventas |
                                <i class="fa fa-eye" style="margin: 0px 5px;"></i>
                                Visto <span class="views" sort="'.$infoproduct["price"].'">' . $infoproduct["views"] . '</span> veces
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
                                    <td class="p-catagory">Opinión media de los clientes</td>
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
                                <?php
                                if ($infoproduct["product_specifications"] != NULL) {

                                    $specifications = json_decode($infoproduct["product_specifications"], true);

                                    if ($infoproduct["sort"] == "fisico") {
                                        if ($specifications["Marca"] != NULL) {
                                            echo '<tr>
                                                <td class="p-catagory">Marca</td>
                                                <td>
                                                    <div class="p-customer">'.$specifications["Marca"].'</div>
                                                </td>
                                            </tr>';
                                        }
                                        
                                        if ($specifications["Envio"] != NULL) {
                                            echo '<tr>
                                                <td class="p-catagory">Tipo de Envío</td>
                                                <td>
                                                    <div class="p-stock">'.$specifications["Envio"].'</div>
                                                </td>
                                            </tr>';
                                        }
                                        
                                        if ($specifications["Dimensiones"] && $specifications["Peso"] != NULL) {
                                            echo '<tr>
                                                    <td class="p-catagory">Dimensiones</td>
                                                    <td>
                                                    <div class="p-dimensions">'.$specifications["Dimensiones"][0].' x '.$specifications["Dimensiones"][1].' x '.$specifications["Dimensiones"][2].' cm; '.$specifications["Peso"].' g</div>
                                                </td>
                                            </tr>';
                                        }
                                        
                                        echo '<tr>
                                            <td class="p-catagory">Color</td>
                                            <td><span class="cs-color"></span></td>
                                        </tr>';
                                        
                                    } else {
                                        if ($specifications["Instructor"] != NULL) {
                                            echo '<tr>
                                                <td class="p-catagory">Instructor</td>
                                                <td>
                                                    <div class="p-stock">'.$specifications["Instructor"].'</div>
                                                </td>
                                            </tr>';
                                        }
                                        
                                        if ($specifications["Idioma"] != NULL) {
                                            echo '<tr>
                                                    <td class="p-catagory">Idioma</td>
                                                    <td>
                                                    <div class="p-dimensions">'.$specifications["Idioma"].'</div>
                                                </td>
                                            </tr>';
                                        }
                                    }
                                }
                                ?>                                
                                
                                <tr>
                                    <td class="p-catagory">Tiempo del Producto</td>
                                    <td>
                                        <div class="p-size">Desde el <?php echo date("d F Y", strtotime($infoproduct["datetime"])) ?></div>
                                    </td>
                                </tr>                                
                                <tr>
                                    <td class="p-catagory">Identificación Estándar</td>
                                    <td>
                                        <div class="p-code"><?php echo '000'. $infoproduct["id"] ?></div>
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
                                        <h5>Brandon Kelley <span>Revisado el 4 de febrero de 2021</span></h5>
                                        <div class="at-reply">Increíble producto!</div>
                                        <span class="cr-vote-success" style="display: none;">
                                            <div class="alert alert-success">
                                                <i class="fa fa-check-circle"></i>
                                                Gracias por su comentario.
                                            </div>
                                        </span>
                                        <span class="cr-vote-text">A 15 personas les resultó útil</span>
                                        <p>
                                            <a href="#">
                                                <span>
                                                    <i class="fa fa-thumbs-up"></i>
                                                    Me gusta
                                                </span>
                                            </a>
                                        </p>
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
                                        <h5>Roy Banks <span>Revisado el 4 de febrero de 2021</span></h5>
                                        <div class="at-reply">¡Genial, quedamos muy contentos!</div>
                                        <span class="cr-vote-text">A 15 personas les resultó útil</span>
                                        <p>
                                            <a href="#">
                                                <span>
                                                    <i class="fa fa-thumbs-up"></i>
                                                    Me gusta
                                                </span>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="leave-comment">
                                <h4>Escribir una opinión</h4>
                                <form action="#" class="comment-form">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label for="rating">Calificación general</label>
                                            <div class="rating-section a-spacing-top-micro">
                                                <button type="button" class="ryp__star__button" data-hook="ryp-star">
                                                    <img alt="seleccionar para darle una calificación de una estrella a este artículo." src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMzgiIGhlaWdodD0iMzUiPjxkZWZzPjxsaW5lYXJHcmFkaWVudCBpZD0iYSIgeDE9IjUwJSIgeDI9IjUwJSIgeTE9IjI3LjY1JSIgeTI9IjEwMCUiPjxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiNGRkNFMDAiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNGRkE3MDAiLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIGlkPSJiIiBkPSJNMTkgMGwtNS44NyAxMS41MkwwIDEzLjM3bDkuNSA4Ljk3TDcuMjYgMzUgMTkgMjkuMDIgMzAuNzUgMzVsLTIuMjQtMTIuNjYgOS41LTguOTctMTMuMTMtMS44NXoiLz48L2RlZnM+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48dXNlIGZpbGw9InVybCgjYSkiIHhsaW5rOmhyZWY9IiNiIi8+PHBhdGggc3Ryb2tlPSIjQTI2QTAwIiBzdHJva2Utb3BhY2l0eT0iLjc1IiBkPSJNMTkgMS4xbC01LjU0IDEwLjg4TDEuMSAxMy43Mmw4Ljk0IDguNDRMNy45MiAzNC4xIDE5IDI4LjQ2bDExLjA4IDUuNjQtMi4xMS0xMS45NCA4Ljk0LTguNDQtMTIuMzYtMS43NEwxOSAxLjF6Ii8+PC9nPjwvc3ZnPg==" class="ryp__review-stars__star ryp__star ryp__star--large">
                                                </button>
                                                <button type="button" class="ryp__star__button" data-hook="ryp-star">
                                                    <img alt="seleccionar para darle una calificación de una estrella a este artículo." src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMzgiIGhlaWdodD0iMzUiPjxkZWZzPjxsaW5lYXJHcmFkaWVudCBpZD0iYSIgeDE9IjUwJSIgeDI9IjUwJSIgeTE9IjI3LjY1JSIgeTI9IjEwMCUiPjxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiNGRkNFMDAiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNGRkE3MDAiLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIGlkPSJiIiBkPSJNMTkgMGwtNS44NyAxMS41MkwwIDEzLjM3bDkuNSA4Ljk3TDcuMjYgMzUgMTkgMjkuMDIgMzAuNzUgMzVsLTIuMjQtMTIuNjYgOS41LTguOTctMTMuMTMtMS44NXoiLz48L2RlZnM+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48dXNlIGZpbGw9InVybCgjYSkiIHhsaW5rOmhyZWY9IiNiIi8+PHBhdGggc3Ryb2tlPSIjQTI2QTAwIiBzdHJva2Utb3BhY2l0eT0iLjc1IiBkPSJNMTkgMS4xbC01LjU0IDEwLjg4TDEuMSAxMy43Mmw4Ljk0IDguNDRMNy45MiAzNC4xIDE5IDI4LjQ2bDExLjA4IDUuNjQtMi4xMS0xMS45NCA4Ljk0LTguNDQtMTIuMzYtMS43NEwxOSAxLjF6Ii8+PC9nPjwvc3ZnPg==" class="ryp__review-stars__star ryp__star ryp__star--large">
                                                </button>
                                                <button type="button" class="ryp__star__button" data-hook="ryp-star">
                                                    <img alt="seleccionar para darle una calificación de una estrella a este artículo." src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMzgiIGhlaWdodD0iMzUiPjxkZWZzPjxsaW5lYXJHcmFkaWVudCBpZD0iYSIgeDE9IjUwJSIgeDI9IjUwJSIgeTE9IjI3LjY1JSIgeTI9IjEwMCUiPjxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiNGRkNFMDAiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNGRkE3MDAiLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIGlkPSJiIiBkPSJNMTkgMGwtNS44NyAxMS41MkwwIDEzLjM3bDkuNSA4Ljk3TDcuMjYgMzUgMTkgMjkuMDIgMzAuNzUgMzVsLTIuMjQtMTIuNjYgOS41LTguOTctMTMuMTMtMS44NXoiLz48L2RlZnM+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48dXNlIGZpbGw9InVybCgjYSkiIHhsaW5rOmhyZWY9IiNiIi8+PHBhdGggc3Ryb2tlPSIjQTI2QTAwIiBzdHJva2Utb3BhY2l0eT0iLjc1IiBkPSJNMTkgMS4xbC01LjU0IDEwLjg4TDEuMSAxMy43Mmw4Ljk0IDguNDRMNy45MiAzNC4xIDE5IDI4LjQ2bDExLjA4IDUuNjQtMi4xMS0xMS45NCA4Ljk0LTguNDQtMTIuMzYtMS43NEwxOSAxLjF6Ii8+PC9nPjwvc3ZnPg==" class="ryp__review-stars__star ryp__star ryp__star--large">
                                                </button>
                                                <button type="button" class="ryp__star__button" data-hook="ryp-star">
                                                    <img alt="seleccionar para darle una calificación de una estrella a este artículo." src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMzgiIGhlaWdodD0iMzUiPjxkZWZzPjxsaW5lYXJHcmFkaWVudCBpZD0iYSIgeDE9IjUwJSIgeDI9IjUwJSIgeTE9IjI3LjY1JSIgeTI9IjEwMCUiPjxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiNGRkNFMDAiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNGRkE3MDAiLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIGlkPSJiIiBkPSJNMTkgMGwtNS44NyAxMS41MkwwIDEzLjM3bDkuNSA4Ljk3TDcuMjYgMzUgMTkgMjkuMDIgMzAuNzUgMzVsLTIuMjQtMTIuNjYgOS41LTguOTctMTMuMTMtMS44NXoiLz48L2RlZnM+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48dXNlIGZpbGw9InVybCgjYSkiIHhsaW5rOmhyZWY9IiNiIi8+PHBhdGggc3Ryb2tlPSIjQTI2QTAwIiBzdHJva2Utb3BhY2l0eT0iLjc1IiBkPSJNMTkgMS4xbC01LjU0IDEwLjg4TDEuMSAxMy43Mmw4Ljk0IDguNDRMNy45MiAzNC4xIDE5IDI4LjQ2bDExLjA4IDUuNjQtMi4xMS0xMS45NCA4Ljk0LTguNDQtMTIuMzYtMS43NEwxOSAxLjF6Ii8+PC9nPjwvc3ZnPg==" class="ryp__review-stars__star ryp__star ryp__star--large">
                                                </button>
                                                <button type="button" class="ryp__star__button" data-hook="ryp-star">
                                                    <img alt="seleccionar para darle una calificación de una estrella a este artículo." src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMzgiIGhlaWdodD0iMzUiPjxkZWZzPjxsaW5lYXJHcmFkaWVudCBpZD0iYSIgeDE9IjUwJSIgeDI9IjUwJSIgeTE9IjI3LjY1JSIgeTI9IjEwMCUiPjxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiNGRkNFMDAiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNGRkE3MDAiLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIGlkPSJiIiBkPSJNMTkgMGwtNS44NyAxMS41MkwwIDEzLjM3bDkuNSA4Ljk3TDcuMjYgMzUgMTkgMjkuMDIgMzAuNzUgMzVsLTIuMjQtMTIuNjYgOS41LTguOTctMTMuMTMtMS44NXoiLz48L2RlZnM+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48dXNlIGZpbGw9InVybCgjYSkiIHhsaW5rOmhyZWY9IiNiIi8+PHBhdGggc3Ryb2tlPSIjQTI2QTAwIiBzdHJva2Utb3BhY2l0eT0iLjc1IiBkPSJNMTkgMS4xbC01LjU0IDEwLjg4TDEuMSAxMy43Mmw4Ljk0IDguNDRMNy45MiAzNC4xIDE5IDI4LjQ2bDExLjA4IDUuNjQtMi4xMS0xMS45NCA4Ljk0LTguNDQtMTIuMzYtMS43NEwxOSAxLjF6Ii8+PC9nPjwvc3ZnPg==" class="ryp__review-stars__star ryp__star ryp__star--large">
                                                </button>
                                            </div>
                                        </div> 
                                        <div class="col-lg-12">
                                            <label for="description">Agrega un comentario escrito</label>
                                            <textarea placeholder="¿Qué te gustó o qué no te gustó? ¿Para qué usaste este producto?"></textarea>
                                            <button type="submit" class="primary-btn">Enviar</button>
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
                                <img src="' . $server . $value["product_image"] . '" alt="">                        
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
                    } else if ($value["sort"] == "virtual" && $value["price"] == 0) {
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