<?php
$url = Route::ctrRoute();
$server = Route::ctrRouteServer();

if (!isset($_SESSION["validateSession"])) {

    echo '<script>
	
            window.location = "' . $url . '";

	</script>';

    exit();
}
?>

<section class="shopping-section">
    <div class="container">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center" style="padding: 14px 18px 18px;">
                <h3>Mi Lista de Compras</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="m-b-20">
                    <ul class="nav nav-tabs customtab" role="tablist"> 
                        <li class="nav-item" style="background: none !important;">
                            <a class="nav-link active" data-toggle="tab" href="#wishes" role="tab" aria-expanded="true">
                                <span>Lista de Deseos</span>
                            </a>
                        </li>                        
                    </ul>

                    <div class="tab-content">                                                
                        <div id="wishes" class="tab-pane active" role="tabpanel" aria-expanded="true">
                            <div class="card-group-section">
                                
                                <?php
                                
                                $item = $_SESSION["id"];
                                
                                $wishes = UserController::ctrShowWishList($item);
                                
                                if (!$wishes) {
                                    
                                    echo '<section class="error-section">
                                        <div class="error-box">
                                            <div class="error-body text-center">
                                                <h3 class="text-uppercase">¡Nada guardado!</h3>
                                                <p>AÚN NO HAZ AÑADIDO UN PRODUCTO A LA LISTA DE DESEOS</p>
                                                <a class="btn btn-primary btn-rounded" href="' . $url . 'all-categories">Ver productos</a>
                                            </div>
                                        </div>
                                    </section>';
                                    
                                } else {
                                    
                                    foreach ($wishes as $key => $value1) {
                                        
                                        $order = "id";
                                        $valueProduct = $value1["product_id"];
                                        $item = "id";
                                        
                                        $products = ProductController::ctrListProducts($order, $item, $valueProduct);
                                        
                                        foreach ($products as $key => $value2) {
                                            
                                            echo '<div class="card mb-3">
                                                <div class="row no-gutters">
                                                    <div class="col-md-4">
                                                        <a href="'.$url.$value2["route"].'">
                                                            <img class="card-img" height="290" src="'.$server.$value2["product_image"].'" alt="Product image">
                                                        </a>
                                                    </div>   
                                                    <div class="col-md-8">                                                        
                                                        <div class="card-body">
                                                            <a href="'.$url.$value2["route"].'">
                                                                <h4 class="card-title">'.$value2["product_title"].'</h4>
                                                            </a>';
                                                                                                        
                                                            
                                                            echo '<p class="text-muted mt-2">Se agregó el artículo '. substr($value1["date"], 0, -8).'</p>
                                                                <div class="wl-price-ppu-delivery-badge-row">
                                                                    <div class="price-section">
                                                                        <span class="price-wl">';
                                                                        
                                                                        if ($value2["price"] == 0) {
                                                                            echo '<span>Gratis</span>';
                                                                        } else {
                                                                            
                                                                            if ($value2["offer"] != 0) {
                                                                                echo '<span class="off-screen">MXN $'.$value2["offer_price"].' <small>$'.$value2["price"].'</small></span>';
                                                                            } else {
                                                                                echo '<span class="off-screen">MXN $'.$value2["price"].'</span>';
                                                                            }
                                                                                                                                                        
                                                                        }
                                                                                                                                                        
                                                                        echo '</span>
                                                                        <span class="wl-item-delivery-badge">';
                                                                        
                                                                        if ($value2["sort"] == "virtual") {
                                                                            echo '<b>Producto GRATIS</b>';
                                                                        } else {
                                                                            echo '<b>Envío GRATIS</b>';
                                                                        }
                                                                        
                                                                        echo '</span>
                                                                    </div>
                                                                </div>';
                                                            echo '<div class="btn-group btn-declarative">                                                                                                                              
                                                                <button type="button" class="btn btn-danger btn-sm removeWish" idWish="'.$value1["id"].'" data-toggle="tooltip" title="Eliminar de mi lista de deseos">
                                                                    Eliminar
                                                                </button>';
                                                            
                                                            if ($value2["sort"] == "fisico" && $value2["price"] != 0) {
                                                                if ($value2["offer"] != 0) {
                                                                  
                                                                    echo '<button type="button" class="btn btn-primary btn-sm addToCart" idProduct="'.$value2["id"].'" product_image="'.$server.$value2["product_image"].'" product_title="'.$value2["product_title"].'" price="'.$value2["offer_price"].'" sort="'.$value2["sort"].'" weight="'.$value2["product_weight"].'" data-toggle="tooltip" title="Agregar al carrito de compras">
                                                                    Agregar al Carrito
                                                                </button>';
                                                                    
                                                                } else {
                                                                    echo '<button type="button" class="btn btn-primary btn-sm addToCart" idProduct="'.$value2["id"].'" product_image="'.$server.$value2["product_image"].'" product_title="'.$value2["product_title"].'" price="'.$value2["price"].'" sort="'.$value2["sort"].'" weight="'.$value2["product_weight"].'" data-toggle="tooltip" title="Agregar al carrito de compras">
                                                                    Agregar al Carrito
                                                                </button>';
                                                                }
                                                            } else {
                                                                
                                                                if ($value2["offer"] != 0) {
                                                                  
                                                                    echo '<button type="button" class="btn btn-primary btn-sm addToCart" idProduct="'.$value2["id"].'" product_image="'.$server.$value2["product_image"].'" product_title="'.$value2["product_title"].'" price="'.$value2["offer_price"].'" sort="'.$value2["sort"].'" weight="'.$value2["product_weight"].'" data-toggle="tooltip" title="Agregar al carrito de compras">
                                                                    Agregar al Carrito
                                                                </button>&nbsp;';
                                                                    
                                                                }
                                                                
                                                            }
                                                            
                                                            echo '
                                                                <a href="'.$url.$value2["route"].'" class="pixelProduct">
                                                                    <button type="button" class="btn btn-secondary btn-sm" data-toggle="tooltip" title="Ver Producto">
                                                                        Ver Producto
                                                                    </button>
                                                                </a>
                                                            ';
                                                            
                                                            echo '</div>
                                                        </div> 
                                                    </div>                                                    
                                                </div>
                                            </div>';
                                            
                                        }
                                        
                                    }
                                    
                                }
                                
                                ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="separation-end-section">
                    <div class="divider divider-break">
                        <h5>Fin de la lista</h5>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</section>


<div id="review" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>Crear reseña</strong></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form method="POST" onsubmit="return validateComment()">
                    
                    <input type="hidden" value="" name="idComment" id="idComment">
                    
                    <h3 class="small-title text-bold">Calificación general</h3>
                    
                    <div class="rating-section a-spacing-top-micro" id="ratingStars">
                        <i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i>
                        <i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i>
                        <i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i>
                        <i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i>
                        <i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i>
                    </div>
                    
                    <div class="form-group">
                        <label class="radio-inline"><input type="radio" name="rating" value="0.5">0.5</label>
                        <label class="radio-inline"><input type="radio" name="rating" value="1.0">1.0</label>
                        <label class="radio-inline"><input type="radio" name="rating" value="1.5">1.5</label>
                        <label class="radio-inline"><input type="radio" name="rating" value="2.0">2.0</label>
                        <label class="radio-inline"><input type="radio" name="rating" value="2.5">2.5</label>
                        <label class="radio-inline"><input type="radio" name="rating" value="3.0">3.0</label>
                        <label class="radio-inline"><input type="radio" name="rating" value="3.5">3.5</label>
                        <label class="radio-inline"><input type="radio" name="rating" value="4.0">4.0</label>
                        <label class="radio-inline"><input type="radio" name="rating" value="4.5">4.5</label>
                        <label class="radio-inline"><input type="radio" name="rating" value="5.0" checked>5.0</label>
                    </div>
                        
                    <div class="form-group">
                        <label for="commentProduct"><h3 class="small-title text-bold">Agregar un comentario escrito</h3></label>
                        
                        <textarea class="form-control" style="height: 130px;" id="comment" name="comment" placeholder="¿Qué te gustó o qué no te gustó? ¿Para qué usaste este producto?" required></textarea>
                    </div>
                    
                    <input type="submit" class="btn btn-success btn-block" value="Enviar">
                    
                    <?php
                    
                    $updateComment = new UserController();
                    $updateComment->ctrUpdateComment();                                        
                    
                    ?>
                </form>
            </div>
            <div class="modal-footer">
                      
            </div>
        </div>
    </div>
</div>