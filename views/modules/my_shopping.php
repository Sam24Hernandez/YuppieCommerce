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

<!-- Breadcrumb Section Begin -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a class="text-uppercase" href="<?php echo $url; ?>"><i class="fa fa-home"></i> Inicio</a>
                    <span class="text-uppercase active-page">Mis Compras</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb Section -->

<section class="shopping-section">
    <div class="container">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3>Mis compras</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="m-b-20">
                    <ul class="nav nav-tabs customtab" role="tablist"> 
                        <li class="nav-item" style="background: none !important;">
                            <a class="nav-link active" data-toggle="tab" href="#shopping" role="tab" aria-expanded="true">
                                <span>Compras</span>
                            </a>
                        </li>
                        <li class="nav-item" style="background: none !important;">
                            <a class="nav-link" data-toggle="tab" href="#ratingProduct" role="tab" aria-expanded="true">
                                <span>Detalles</span>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="shopping" class="tab-pane active" role="tabpanel" aria-expanded="true">
                            <div class="table-responsive">

                                <?php
                                $item = "user_id";
                                $valueUser = $_SESSION["id"];

                                $shopping = UserController::ctrShowShopping($item, $valueUser);

                                if (!$shopping) {

                                    echo '<section class="error-section">
                                                <div class="error-box">
                                                    <div class="error-body text-center">
                                                        <h3 class="text-uppercase">¡Aún no hay compras!</h3>
                                                        <p>PARECE QUE AÚN NO HAZ REALIZADO NINGUNA COMPRA EN YUPPIE</p>
                                                        <a class="btn btn-primary btn-rounded" href="' . $url . 'all-categories">Ver productos</a>
                                                    </div>
                                                </div>
                                            </section>';
                                } else {

                                    echo '<table class="table color-table muted-table">
                                            <thead>
                                                <tr>                                           
                                                    <th>Foto</th>
                                                    <th>Producto</th>
                                                    <th>Comprado</th>
                                                    <th>Detalles</th>
                                                    <th>Total</th>
                                                    <th>Pedido Nº</th>
                                                </tr>
                                            </thead>
                                            <tbody>';

                                    foreach ($shopping as $key => $value1) {
                                        $order = "id";
                                        $item = "id";
                                        $valueProduct = $value1["product_id"];

                                        $products = ProductController::ctrListProducts($order, $item, $valueProduct);

                                        foreach ($products as $key => $value2) {

                                            echo '<tr>
                                                            <td><img class="img-thumbnail" src="' . $server . $value2["product_image"] . '" width="90" height="81"></td>
                                                            <td><a href="#">' . $value2["product_title"] . '</a></td>
                                                            <td><p>Comprado el ' . date_format(new DateTime($value2["datetime"]), "l jS F Y") . '</p></td>
                                                            <td>';

                                            if ($value2["sort"] === "virtual") {
                                                echo '<span class="delivered">Comprado</span>';
                                            } else {
                                                if ($value1["delivery"] == 0) {
                                                    echo '<span class="dispatched">Despachado</span>';
                                                }

                                                if ($value1["delivery"] == 1) {
                                                    echo '<span class="shipped">Enviado</span>';
                                                }

                                                if ($value1["delivery"] == 2) {
                                                    echo '<span class="delivered">Entregado</span>';
                                                }
                                            }

                                            echo '</td>';
                                                
                                                if ($value1["payment"] != 0) {
                                                    echo '<td>$'. number_format($value1["payment"], 2).'</td>';
                                                } else {
                                                    echo '<td>Gratis</td>';
                                                }
                                                    
                                                    echo '<td>#' . $value1["id"] . '</td>

                                                </tr>';
                                        }
                                    }
                                }
                                ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        <div id="ratingProduct" class="tab-pane" role="tabpanel" aria-expanded="true">
                            <div class="card-group-section">
                                
                                <?php
                                
                                $item = "user_id";
                                $valueUser = $_SESSION["id"];
                                
                                $shopping = UserController::ctrShowShopping($item, $valueUser);
                                
                                if (!$shopping) {
                                    
                                    echo '<section class="error-section">
                                        <div class="error-box">
                                            <div class="error-body text-center">
                                                <h3 class="text-uppercase">¡Aún no hay compras!</h3>
                                                <p>PARECE QUE AÚN NO HAZ REALIZADO NINGUNA COMPRA EN YUPPIE</p>
                                                <a class="btn btn-primary btn-rounded" href="' . $url . 'all-categories">Ver productos</a>
                                            </div>
                                        </div>
                                    </section>';
                                    
                                } else {
                                    
                                    foreach ($shopping as $key => $value1) {
                                        
                                        $order = "id";
                                        $item = "id";
                                        $valueProduct = $value1["product_id"];
                                        
                                        $products = ProductController::ctrListProducts($order, $item, $valueProduct);
                                        
                                        foreach ($products as $key => $value2) {
                                            
                                            echo '<div class="card mb-3">
                                                <div class="row no-gutters">
                                                    <div class="col-md-4">
                                                        <img class="card-img" height="350" src="'.$server.$value2["product_image"].'" alt="Product image">
                                                    </div>   
                                                    <div class="col-md-8">                                                        
                                                        <div class="card-body">
                                                            <h4 class="card-title">'.$value2["product_title"].'</h4>
                                                            <p class="card-text">'. substr($value2["description"], 0, 180).'...' .'</p>';
                                            
                                                            if ($value2["sort"] == "virtual") {
                                                                
                                                                echo '<a href="'.$url.'course/'.$value1["id"].'/'.$value1["user_id"].'/'.$value1["product_id"].'/'.$value2["route"].'">
                                                                    <button class="btn btn-primary">Ir al curso</button>
                                                                </a>';
                                                                
                                                            } else {
                                                                
                                                                echo '<h6 class="mb-2"><strong>Proceso de devolución</strong>: '.$value2["product_delivery"].' días hábiles.</h6>';
                                                                
                                                                if ($value1["delivery"] == 0) {
                                                                    
                                                                    echo ' <div class="progress">
                                                                        <div class="progress-bar bg-info" role="progressbar" style="width:33.33%">
                                                                          <i class="fa fa-check"></i>
                                                                        </div>
                                                                        <div class="progress-bar bg-warning" role="progressbar" style="width:33.3%">
                                                                          <i class="fa fa-clock-o"></i>
                                                                        </div>
                                                                        <div class="progress-bar bg-success" role="progressbar" style="width:33.33%">
                                                                          <i class="fa fa-clock-o"></i>
                                                                        </div>
                                                                      </div> ';
                                                                    
                                                                }
                                                                
                                                                if ($value1["delivery"] == 1) {
                                                                    
                                                                    echo ' <div class="progress">
                                                                        <div class="progress-bar bg-info" role="progressbar" style="width:33.33%">
                                                                          <i class="fa fa-check"></i>
                                                                        </div>
                                                                        <div class="progress-bar bg-warning" role="progressbar" style="width:33.3%">
                                                                          <i class="fa fa-check"></i>
                                                                        </div>
                                                                        <div class="progress-bar bg-success" role="progressbar" style="width:33.33%">
                                                                          <i class="fa fa-clock-o"></i>
                                                                        </div>
                                                                      </div> ';
                                                                    
                                                                }
                                                                
                                                                if ($value1["delivery"] == 2) {
                                                                    
                                                                    echo ' <div class="progress">
                                                                        <div class="progress-bar bg-info" role="progressbar" style="width:33.33%">
                                                                          <i class="fa fa-check"></i>
                                                                        </div>
                                                                        <div class="progress-bar bg-warning" role="progressbar" style="width:33.3%">
                                                                          <i class="fa fa-check"></i>
                                                                        </div>
                                                                        <div class="progress-bar bg-success" role="progressbar" style="width:33.33%">
                                                                          <i class="fa fa-check"></i>
                                                                        </div>
                                                                      </div> ';
                                                                    
                                                                }
                                                                
                                                            }
                                                            
                                                            echo '<p class="text-muted mt-2">Comprado el '. substr($value1["date"], 0, -8).'</p>';
                                                            
                                                            $data = array(
                                                                "idUser" => $_SESSION["id"],
                                                                "idProduct" => $value2["id"]
                                                            );
                                                            
                                                            $comments = UserController::ctrShowProfileComments($data);
                                                            
                                                            echo '<div>
                                                                <a class="rateProduct" href="#review" data-toggle="modal" idComment="'.$comments["id"].'">
                                                                    <button class="btn btn-inverse">Escribir una opinión sobre el producto</button>
                                                                </a>
                                                            </div>
                                                            <br>
                                                            
                                                            <div>';
                                                                
                                                                if ($comments["rating"] == 0 && $comments["comment"] == "") {
                                                                    
                                                                    echo '<i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i>
                                                                    <i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i>
                                                                    <i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i>
                                                                    <i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i>
                                                                    <i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i>';
                                                                    
                                                                } else {
                                                                    
                                                                    switch ($comments["rating"]) {
                                                                        case 0.5:
                                                                            echo '<i class="fa fa-star-half-o fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i>';

                                                                            break;
                                                                        
                                                                         case 1.0:
                                                                            echo '<i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i>';

                                                                            break;
                                                                        
                                                                         case 1.5:
                                                                            echo '<i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star-half-o fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i>';

                                                                            break;
                                                                        
                                                                         case 2.0:
                                                                            echo '<i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i>';

                                                                            break;
                                                                        
                                                                         case 2.5:
                                                                            echo '<i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star-half-o fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i>';

                                                                            break;
                                                                         case 3.0:
                                                                            echo '<i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i>';

                                                                            break;
                                                                        
                                                                         case 3.5:
                                                                            echo '<i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star-half-o fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i>';

                                                                            break;
                                                                        
                                                                         case 4.0:
                                                                            echo '<i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star-o fa-2x text-principal" aria-hidden="true"></i>';

                                                                            break;
                                                                        
                                                                         case 4.5:
                                                                            echo '<i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star-half-o fa-2x text-principal" aria-hidden="true"></i>';

                                                                            break;
                                                                        
                                                                         case 5.0:
                                                                            echo '<i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i>
                                                                                <i class="fa fa-star fa-2x text-principal" aria-hidden="true"></i>';

                                                                            break;
                                                                    }
                                                                    
                                                                }
                                                            
                                                            echo '</div>';
                                                        echo '</div> 
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