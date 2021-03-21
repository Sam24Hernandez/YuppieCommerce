<?php
$server = Route::ctrRouteServer();
$url = Route::ctrRoute();

$route = $routes[0];

?>

<section class="bar-products-section spad-sec">
    <div class="container-fluid well well-sm product-bar">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 organise-products">
                    <img src="https://images-na.ssl-images-amazon.com/images/G/33/img21/CE/Gift_Guides_2021/ElectronicGiftGuides_Mob_1500x50.jpg">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Breadcrumb Section Begin -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="<?php echo $url; ?>" class="text-uppercase">
                        <i class="fa fa-home"></i>
                        Inicio
                    </a>
                    <span class="text-uppercase active-page"><?php echo $routes[0] ?></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<section class="product-shop spad-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 product-sidebar-filter">
                <div class="filter-widget">
                    <h4 class="fw-title">Departamento</h4>  
                    <h6 class="fw-category">Categoría</h6>
                    <ul class="filter-categories">
                        <li><a href="#">Subcategorias</a></li>
                        <li><a href="#">Subcategorias</a></li>
                        <li><a href="#">Subcategorias</a></li>
                        <li><a href="#">Subcategorias</a></li>
                        <li><a href="#">Subcategorias</a></li>
                    </ul>                                                         
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Marca</h4>
                    <div class="fw-brand-check">
                        <div class="bc-item">
                            <label for="bc-calvin">
                                Calvin Klein
                                <input type="checkbox" id="bc-calvin">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label for="bc-diesel">
                                Diesel
                                <input type="checkbox" id="bc-diesel">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label for="bc-polo">
                                Polo
                                <input type="checkbox" id="bc-polo">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label for="bc-tommy">
                                Tommy Hilfiger
                                <input type="checkbox" id="bc-tommy">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Precio</h4>
                    <div class="filter-range-wrap">
                        <div class="range-slider">
                            <div class="price-input">
                                <input type="text" id="minamount">
                                <input type="text" id="maxamount">
                            </div>
                        </div>
                        <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                             data-min="350" data-max="3000">
                            <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                        </div>
                    </div>                    
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Color</h4>
                    <div class="fw-color-choose">
                        <div class="cs-item">
                            <input type="radio" id="cs-black">
                            <label class="cs-black" title="Negro" for="cs-black"></label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-violet">
                            <label class="cs-violet" title="Violeta" for="cs-violet"></label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-blue">
                            <label class="cs-blue" title="Azul" for="cs-blue"></label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-yellow">
                            <label class="cs-yellow" title="Amarillo" for="cs-yellow"></label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-red">
                            <label class="cs-red" title="Rojo" for="cs-red"></label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-green">
                            <label class="cs-green" title="Verde" for="cs-green"></label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-brown">
                            <label class="cs-brown" title="Café" for="cs-brown"></label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-white">
                            <label class="cs-white" title="Blanco" for="cs-white"></label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-gray">
                            <label class="cs-gray" title="Gris" for="cs-gray"></label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-gold">
                            <label class="cs-gold" title="Dorado" for="cs-gold"></label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-pink">
                            <label class="cs-pink" title="Rosa" for="cs-pink"></label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-cyan">
                            <label class="cs-cyan" title="Turquesa" for="cs-cyan"></label>
                        </div>
                    </div>
                </div>
                <div class="filter-widget size-s">
                    <h4 class="fw-title">Talla Internacional</h4>
                    <div class="fw-size-choose">
                        <div class="sc-item">
                            <input type="radio" id="s-size">
                            <label for="s-size">s</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" id="m-size">
                            <label for="m-size">m</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" id="l-size">
                            <label for="l-size">l</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" id="xs-size">
                            <label for="xs-size">xs</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 order-1 order-lg-2">
                <div class="product-show-option">
                    <div class="row">
                        <div class="col-lg-7-md-7">
                            <div class="select-option">
                                <select class="sorting" onchange="location = this.value;">
                                    <option value="">Ordenar Productos</option>
                                    <?php
                                    echo '<option value="' . $url . $routes[0] . '/1/recientes">Más reciente</option>
                                        <option value="' . $url . $routes[0] . '/1/antiguos">Más antiguo</option>';
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 text-right">
                            <p>Mostrando 01- 09 de 36 Productos</p>
                        </div>
                    </div>
                </div>
                <div class="product-list">
                    <div class="row">

                        <?php
                        /** Call to Pagination * */
                        if (isset($routes[1]) && preg_match('/^[0-9]+$/', $routes[1])) {

                            if (isset($routes[2])) {

                                if ($routes[2] == "antiguos") {
                                    $mode = "ASC";
                                    $_SESSION["order"] = "ASC";
                                } else {
                                    $mode = "DESC";
                                    $_SESSION["order"] = "DESC";
                                }
                            } else {
                                if (isset($_SESSION["order"])) {
                                    $mode = $_SESSION["order"];
                                } else {
                                    $mode = "DESC";
                                }
                            }

                            $base = ($routes[1] - 1) * 12;
                            $limit = 12;
                        } else {

                            $routes[1] = 1;
                            $base = 0;
                            $limit = 12;
                            $mode = "DESC";
                            $_SESSION["order"] = "DESC";
                        }

                        /** Call Categories, Subcategories, Featured Products * */
                        if ($routes[0] === "articulos-gratis") {

                            $item2 = "price";
                            $valueProduct = 0;
                            $order = "id";
                        } elseif ($routes[0] === "lo-mas-vendido") {

                            $item2 = NULL;
                            $valueProduct = NULL;
                            $order = "sales";
                        } elseif ($routes[0] === "lo-mas-visto") {

                            $item2 = NULL;
                            $valueProduct = NULL;
                            $order = "views";
                        } else {

                            $order = "id";
                            $item1 = "route";
                            $valueCategory = $routes[0];
                            $valueSubCategory = $routes[0];

                            $category = ProductController::ctrShowCategories($item1, $valueCategory);

                            if (!$category) {
                                $subcategory = ProductController::ctrShowSubCategories($item1, $valueSubCategory);

                                $item2 = "subcategory_id";
                                $valueProduct = $subcategory[0]["id"];
                            } else {
                                $item2 = "category_id";
                                $valueProduct = $category["id"];
                            }
                        }

                        $products = ProductController::ctrShowProducts($order, $item2, $valueProduct, $base, $limit, $mode);
                        $listProducts = ProductController::ctrListProducts($order, $item2, $valueProduct);

                        if (!$products) {
                            echo '<section class="error-section">
                            <div class="error-box">
                                <div class="error-body text-center">
                                    <h1>¡Oops!</h1>
                                    <h3 class="text-uppercase">Aún no hay productos en esta sección</h3>
                                    <p>Estamos trabajando en ofrecerle productos.</p>
                                    <a class="btn btn-primary btn-rounded" href="'.$url.'todas-las-categorias">Ir a Categorías</a>
                                </div>
                            </div>
                        </section>';
                        } else {

                            foreach ($products as $key => $value) {
                                echo '<div class="col-lg-4 col-sm-6">
                                    <div class="product-item">
                                <div class="pi-pic">
                                    <img src="' . $server . $value["product_image"] . '">
                                    <div class="icon">
                                        <a href="#" class="wishes" title="Agregar a mi lista de deseos"><i class="fa fa-heart-o"></i></a>
                                    </div>
                                    <ul>
                                        <li class="w-icon active"><a href="#" title="Agregar al carrito de compras"><i class="fa fa-shopping-bag"></i></a></li>
                                        <li class="quick-view"><a href="' . $url . $value["route"] . '" title="Ver producto">+ Ver</a></li>
                                        <li class="w-icon"><a href="#" title="Productos relacionados"><i class="fa fa-random"></i></a></li>
                                    </ul>
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
                <div class="clearfix"></div>
                <!-- == Pagination Buttons == -->

                <div class="pagination-more">

                    <?php
                    if (count($listProducts) != 0) {

                        $pageProducts = ceil(count($listProducts) / 12);

                        if ($pageProducts > 4) {

                            if ($routes[1] == 1) {

                                echo '<ul class="pagination justify-content-center">';

                                for ($i = 1; $i <= 4; $i++) {
                                    echo '<li id="item' . $i . '" class="page-item"><a class="page-link" href="' . $url . $routes[0] . '/' . $i . '">' . $i . '</a></li>';
                                }

                                echo '<li class="page-item disabled"><a class="page-link">...</a></li>
                                <li id="item' . $pageProducts . '" class="page-item"><a class="page-link" href="' . $url . $routes[0] . '/' . $pageProducts . '">' . $pageProducts . '</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="' . $url . $routes[0] . '/2">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Siguiente</span>
                                    </a>
                                </li>
                            </ul>';
                            } elseif ($routes[1] != $pageProducts &&
                                    $routes[1] != 1 &&
                                    $routes[1] < ($pageProducts / 2) &&
                                    $routes[1] < ($pageProducts - 3)
                            ) {

                                $numActualPage = $routes[1];

                                echo '<ul class="pagination justify-content-center">
                                    <li class="page-item">
                                    <a class="page-link" href="' . $url . $routes[0] . '/' . ($numActualPage - 1) . '">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Anterior</span>
                                    </a>
                                </li>';

                                for ($i = $numActualPage; $i <= ($numActualPage + 3); $i++) {
                                    echo '<li id="item' . $i . '" class="page-item"><a class="page-link" href="' . $url . $routes[0] . '/' . $i . '">' . $i . '</a></li>';
                                }

                                echo '<li class="page-item disabled"><a class="page-link">...</a></li>
                                <li id="item' . $pageProducts . '" class="page-item"><a class="page-link" href="' . $url . $routes[0] . '/' . $pageProducts . '">' . $pageProducts . '</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="' . $url . $routes[0] . '/' . ($numActualPage + 1) . '">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Siguiente</span>
                                    </a>
                                </li>
                            </ul>';
                            } elseif ($routes[1] != $pageProducts &&
                                    $routes[1] != 1 &&
                                    $routes[1] >= ($pageProducts / 2) &&
                                    $routes[1] < ($pageProducts - 3)
                            ) {

                                $numActualPage = $routes[1];

                                echo '<ul class="pagination justify-content-center">
                                    <li class="page-item">
                                    <a class="page-link" href="' . $url . $routes[0] . '/' . ($numActualPage - 1) . '">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Anterior</span>
                                    </a>
                                </li>
                                <li id="item1" class="page-item"><a class="page-link" href="' . $url . $routes[0] . '/1">1</a></li>
                                <li class="page-item disabled"><a class="page-link">...</a></li>';

                                for ($i = $numActualPage; $i <= ($numActualPage + 3); $i++) {
                                    echo '<li id="item' . $i . '" class="page-item"><a class="page-link" href="' . $url . $routes[0] . '/' . $i . '">' . $i . '</a></li>';
                                }

                                echo '<li class="page-item">
                                    <a class="page-link" href="' . $url . $routes[0] . '/' . ($numActualPage + 1) . '">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Siguiente</span>
                                    </a>
                                </li>
                            </ul>';
                            } else {

                                $numActualPage = $routes[1];

                                echo '<ul class="pagination justify-content-center">
                                    <li class="page-item">
                                    <a class="page-link" href="' . $url . $routes[0] . '/' . ($numActualPage - 1) . '">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Anterior</span>
                                    </a>
                                </li>
                                <li id="item1" class="page-item"><a class="page-link" href="' . $url . $routes[0] . '/1">1</a></li>
                                <li class="page-item disabled"><a class="page-link">...</a></li>';

                                for ($i = ($pageProducts - 3); $i <= $pageProducts; $i++) {
                                    echo '<li id="item' . $i . '" class="page-item"><a class="page-link" href="' . $url . $routes[0] . '/' . $i . '">' . $i . '</a></li>';
                                }

                                echo '</ul>';
                            }
                        } else {

                            echo '<ul class="pagination justify-content-center">';

                            for ($i = 1; $i <= $pageProducts; $i++) {

                                echo '<li id="item' . $i . '" class="page-item"><a class="page-link" href="' . $url . $routes[0] . '/' . $i . '">' . $i . '</a></li>';
                            }

                            echo '</ul>';
                        }
                    }
                    ?>
                </div>

            </div>

        </div>
    </div>
</section>
