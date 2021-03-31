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

    echo '<section class="shopping-section">
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
                        </ul>
                        <div class="tab-content">
                            <div id="shopping" class="tab-pane active" role="tabpanel" aria-expanded="true">
                                <div class="table-responsive">
                                    <table class="table color-table muted-table">
                                        <thead>
                                            <tr>                                           
                                                <th>Foto</th>
                                                <th>Producto</th>
                                                <th>Pedido</th>
                                                <th>Detalles</th>
                                                <th>Total</th>
                                                <th>Nº</th>
                                                <th>Acciones</th>
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
                echo '';
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

            echo '</td>
                                                    <td>$19.00</td>
                                                    <td>#' . $value1["id"] . '</td>
                                                    <td>
                                                        <a class="button-text-shopping" href="#reviewPurchase" data-toggle="modal">
                                                            Escribir una opinión sobre el producto
                                                        </a>                                                        
                                                    </td>
                                                    </tr>';
        }
    }


    echo'</tbody>
                                    </table>
                                </div>
                            </div>                                                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>';
}
?>

<div id="reviewPurchase" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myReview" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><b>Crear reseña</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form method="POST" onsubmit="return validateComment()">

                    <input type="hidden" value="" id="idComment" name="idComment">

                    <h3 class="small-title text-bold">Calificación general</h3>

                    <div class="rating-section a-spacing-top-micro" id="rating-stars">
                        <button type="button" class="ryp__star__button">
                            <img alt="seleccionar para darle una calificación de una estrella a este artículo." src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMzgiIGhlaWdodD0iMzUiPjxkZWZzPjxsaW5lYXJHcmFkaWVudCBpZD0iYSIgeDE9IjUwJSIgeDI9IjUwJSIgeTE9IjI3LjY1JSIgeTI9IjEwMCUiPjxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiNGRkNFMDAiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNGRkE3MDAiLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIGlkPSJiIiBkPSJNMTkgMGwtNS44NyAxMS41MkwwIDEzLjM3bDkuNSA4Ljk3TDcuMjYgMzUgMTkgMjkuMDIgMzAuNzUgMzVsLTIuMjQtMTIuNjYgOS41LTguOTctMTMuMTMtMS44NXoiLz48L2RlZnM+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48dXNlIGZpbGw9InVybCgjYSkiIHhsaW5rOmhyZWY9IiNiIi8+PHBhdGggc3Ryb2tlPSIjQTI2QTAwIiBzdHJva2Utb3BhY2l0eT0iLjc1IiBkPSJNMTkgMS4xbC01LjU0IDEwLjg4TDEuMSAxMy43Mmw4Ljk0IDguNDRMNy45MiAzNC4xIDE5IDI4LjQ2bDExLjA4IDUuNjQtMi4xMS0xMS45NCA4Ljk0LTguNDQtMTIuMzYtMS43NEwxOSAxLjF6Ii8+PC9nPjwvc3ZnPg==" class="ryp__review-stars__star ryp__star ryp__star--large">
                        </button>
                        <button type="button" class="ryp__star__button">
                            <img alt="seleccionar para darle una calificación de una estrella a este artículo." src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMzgiIGhlaWdodD0iMzUiPjxkZWZzPjxsaW5lYXJHcmFkaWVudCBpZD0iYSIgeDE9IjUwJSIgeDI9IjUwJSIgeTE9IjI3LjY1JSIgeTI9IjEwMCUiPjxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiNGRkNFMDAiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNGRkE3MDAiLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIGlkPSJiIiBkPSJNMTkgMGwtNS44NyAxMS41MkwwIDEzLjM3bDkuNSA4Ljk3TDcuMjYgMzUgMTkgMjkuMDIgMzAuNzUgMzVsLTIuMjQtMTIuNjYgOS41LTguOTctMTMuMTMtMS44NXoiLz48L2RlZnM+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48dXNlIGZpbGw9InVybCgjYSkiIHhsaW5rOmhyZWY9IiNiIi8+PHBhdGggc3Ryb2tlPSIjQTI2QTAwIiBzdHJva2Utb3BhY2l0eT0iLjc1IiBkPSJNMTkgMS4xbC01LjU0IDEwLjg4TDEuMSAxMy43Mmw4Ljk0IDguNDRMNy45MiAzNC4xIDE5IDI4LjQ2bDExLjA4IDUuNjQtMi4xMS0xMS45NCA4Ljk0LTguNDQtMTIuMzYtMS43NEwxOSAxLjF6Ii8+PC9nPjwvc3ZnPg==" class="ryp__review-stars__star ryp__star ryp__star--large">
                        </button>
                        <button type="button" class="ryp__star__button">
                            <img alt="seleccionar para darle una calificación de una estrella a este artículo." src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMzgiIGhlaWdodD0iMzUiPjxkZWZzPjxsaW5lYXJHcmFkaWVudCBpZD0iYSIgeDE9IjUwJSIgeDI9IjUwJSIgeTE9IjI3LjY1JSIgeTI9IjEwMCUiPjxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiNGRkNFMDAiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNGRkE3MDAiLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIGlkPSJiIiBkPSJNMTkgMGwtNS44NyAxMS41MkwwIDEzLjM3bDkuNSA4Ljk3TDcuMjYgMzUgMTkgMjkuMDIgMzAuNzUgMzVsLTIuMjQtMTIuNjYgOS41LTguOTctMTMuMTMtMS44NXoiLz48L2RlZnM+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48dXNlIGZpbGw9InVybCgjYSkiIHhsaW5rOmhyZWY9IiNiIi8+PHBhdGggc3Ryb2tlPSIjQTI2QTAwIiBzdHJva2Utb3BhY2l0eT0iLjc1IiBkPSJNMTkgMS4xbC01LjU0IDEwLjg4TDEuMSAxMy43Mmw4Ljk0IDguNDRMNy45MiAzNC4xIDE5IDI4LjQ2bDExLjA4IDUuNjQtMi4xMS0xMS45NCA4Ljk0LTguNDQtMTIuMzYtMS43NEwxOSAxLjF6Ii8+PC9nPjwvc3ZnPg==" class="ryp__review-stars__star ryp__star ryp__star--large">
                        </button>
                        <button type="button" class="ryp__star__button">
                            <img alt="seleccionar para darle una calificación de una estrella a este artículo." src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMzgiIGhlaWdodD0iMzUiPjxkZWZzPjxsaW5lYXJHcmFkaWVudCBpZD0iYSIgeDE9IjUwJSIgeDI9IjUwJSIgeTE9IjI3LjY1JSIgeTI9IjEwMCUiPjxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiNGRkNFMDAiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNGRkE3MDAiLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIGlkPSJiIiBkPSJNMTkgMGwtNS44NyAxMS41MkwwIDEzLjM3bDkuNSA4Ljk3TDcuMjYgMzUgMTkgMjkuMDIgMzAuNzUgMzVsLTIuMjQtMTIuNjYgOS41LTguOTctMTMuMTMtMS44NXoiLz48L2RlZnM+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48dXNlIGZpbGw9InVybCgjYSkiIHhsaW5rOmhyZWY9IiNiIi8+PHBhdGggc3Ryb2tlPSIjQTI2QTAwIiBzdHJva2Utb3BhY2l0eT0iLjc1IiBkPSJNMTkgMS4xbC01LjU0IDEwLjg4TDEuMSAxMy43Mmw4Ljk0IDguNDRMNy45MiAzNC4xIDE5IDI4LjQ2bDExLjA4IDUuNjQtMi4xMS0xMS45NCA4Ljk0LTguNDQtMTIuMzYtMS43NEwxOSAxLjF6Ii8+PC9nPjwvc3ZnPg==" class="ryp__review-stars__star ryp__star ryp__star--large">
                        </button>
                        <button type="button" class="ryp__star__button">
                            <img alt="seleccionar para darle una calificación de una estrella a este artículo." src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMzgiIGhlaWdodD0iMzUiPjxkZWZzPjxsaW5lYXJHcmFkaWVudCBpZD0iYSIgeDE9IjUwJSIgeDI9IjUwJSIgeTE9IjI3LjY1JSIgeTI9IjEwMCUiPjxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiNGRkNFMDAiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNGRkE3MDAiLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIGlkPSJiIiBkPSJNMTkgMGwtNS44NyAxMS41MkwwIDEzLjM3bDkuNSA4Ljk3TDcuMjYgMzUgMTkgMjkuMDIgMzAuNzUgMzVsLTIuMjQtMTIuNjYgOS41LTguOTctMTMuMTMtMS44NXoiLz48L2RlZnM+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48dXNlIGZpbGw9InVybCgjYSkiIHhsaW5rOmhyZWY9IiNiIi8+PHBhdGggc3Ryb2tlPSIjQTI2QTAwIiBzdHJva2Utb3BhY2l0eT0iLjc1IiBkPSJNMTkgMS4xbC01LjU0IDEwLjg4TDEuMSAxMy43Mmw4Ljk0IDguNDRMNy45MiAzNC4xIDE5IDI4LjQ2bDExLjA4IDUuNjQtMi4xMS0xMS45NCA4Ljk0LTguNDQtMTIuMzYtMS43NEwxOSAxLjF6Ii8+PC9nPjwvc3ZnPg==" class="ryp__review-stars__star ryp__star ryp__star--large">
                        </button>
                    </div>
                    
                    <div class="form-group">
                        <h3 class="small-title text-bold" style="margin-bottom: 22px;">Agregar un comentario escrito</h3>
                        <textarea class="form-control" style="height: 130px;" id="comment" name="comment" placeholder="¿Qué te gustó o qué no te gustó? ¿Para qué usaste este producto?" required></textarea>
                    </div>


                    <input type="submit" class="btn btn-success" value="Enviar">

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-inverse" data-dismiss="modal">Cancelar</button>                
            </div>
        </div>
    </div>
</div>