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
                    <a class="text-uppercase" href="<?php echo $url; ?>"><i class="fa fa-home"></i> Inicio</a>
                    <span class="text-uppercase active-page">Ofertas</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb Section -->

<?php
if (isset($routes[1])) {

    if ($routes[1] == "announcement") {

        echo '<div class="offer-section spad-sec">
            <div class="container">
                <div class="jumbotron announcement-content">
                    <button type="button" class="close closeOffers"><h1>&times;</h1></button>

                    <h1 class="text-center">Explora ofertas</h1>
                    <p class="text-center">
                        Tu artículo ha sido guardado en tu lista de compras, pero antes queremos
                        mostrarte las siguientes ofertas en base a tu visita por Yuppie.
                    </p>
                    <p class="text-center"><small>Si no deseas ver las ofertas, puedes visualizar el producto que acabas de adquirir aquí:</small></p>            
                    <p class="text-center">
                        <a href="' . $url . 'my_shopping">
                            <button class="btn btn-primary btn-lg">
                                Ir a mis Compras
                            </button>
                        </a>
                        <br><br>
                        <a href="#moduleOffers">
                            <button class="btn btn-primary btn-lg">
                                Ver Ofertas
                            </button>
                        </a>
                    </p>
                </div>
            </div>
        </div>';
    }
}
?>

<section class="offer-info-section spad-sec" id="moduleOffers">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1">
                <div class="offer-sidebar">
                    <div class="search-form">
                        <h4>Buscar oferta</h4>
                        <form action="#">
                            <input type="text" placeholder="Buscar...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>                                      
                </div>
            </div>
            <div class="col-lg-9 order-1 order-lg-2">
                <div class="row">
                    <?php
                    $item = NULL;
                    $valueProduct = NULL;

                    date_default_timezone_set('America/Mexico_City');

                    $date = date('Y-m-d');
                    $time = date('H:i:s');

                    $actualDate = $date . ' ' . $time;

                    $response = ProductController::ctrShowCategories($item, $valueCategory);

                    foreach ($response as $key => $value) {

                        if ($value["offer"] == 1) {

                            if ($value["end_offer"] > $date) {

                                $datetime1 = new DateTime($value["end_offer"]);
                                $datetime2 = new DateTime($actualDate);

                                $interval = date_diff($datetime1, $datetime2);

                                $endOffer = $interval->format('%a');

                                echo '<div class="col-lg-6 col-sm-6">
                                    <div class="offer-item">
                                        <div class="bi-pic">
                                            <img src="' . $server . $value["offer_image"] .'" width="100%" alt="Oferta">
                                        </div>
                                        <div class="bi-text">
                                            <a class="pixelOffer" href="' . $url . $value["route"] . '">
                                                <h4>Oferta especial en ' . $value["category_name"] . '</h4>
                                            </a>
                                            <p>';
                                
                                            if ($endOffer == 0) {
                                                echo 'La oferta termina hoy';
                                            } elseif ($endOffer == 1) {
                                                echo 'La oferta termina en '.$endOffer.' día';
                                            } else {
                                                echo 'La oferta termina en '.$endOffer.' días';
                                            }
                                
                                            echo '</p>';
                                            
                                            if ($value["offer_discount"] != 0 && $value["offer_price"] != 0) {
                                                echo '<span class="text-center">Desde $'. number_format($value["offer_price"], 2).' con '.$value["offer_discount"].'% de Descuento</span>';
                                            }
                                            
                                        echo '</div>
                                    </div>
                                </div> ';
                            }
                        }
                    }
                    ?>                                       
                </div>
            </div>
        </div>
    </div>
</section>