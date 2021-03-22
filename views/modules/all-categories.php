<?php
$server = Route::ctrRouteServer();
$url = Route::ctrRoute();

$route = $routes[0];
?>

<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="<?php echo $url; ?>" class="text-uppercase">
                        <i class="fa fa-home"></i>
                        Inicio
                    </a>
                    <span class="text-uppercase active-page">
                        Todas las categorías
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="product-shop spad-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-6 col-sm-8 order-2 order-lg-1 all-categories-sidebar">
                <h4 class="all-categories-title">Todas las Categorías</h4>                                             

                <div class="c-categories">
                    <table id="categories-sbc">
                        <tbody>
                            <tr>
                                <?php
                                $item = null;
                                $valueCategory = null;

                                $categories = ProductController::ctrShowCategories($item, $valueCategory);

                                foreach ($categories as $key => $value) {

                                    echo '<td>
                                        <h3 class="categories-sbc-parent">
                                            <a class="pixelCategories" title="' . $value["category_name"] . ' " href="' . $value["route"] . '">
                                                ' . $value["category_name"] . '                                                  
                                            </a>
                                        </h3>
                                            
                                        <a class="categories-img-wrapper all-cats" href="' . $value["route"] . '" aria-hidden="true" tabindex="-1" style="background-color: #FCF2BD;">
                                            <img src="'.$server.$value["category_banner"].'" alt="' . $value["category_name"] . '  ">
                                        </a>
                                        
                                        <ul class="categories-list-sbc">';

                                    $item = "category_id";
                                    $valueSubCategory = $value["id"];

                                    $subcategories = ProductController::ctrShowSubCategories($item, $valueSubCategory);

                                    foreach ($subcategories as $key => $value) {
                                        echo '<li>
                                            <a class="pixelSubcategories" title="' . $value["subcategory_name"] . '" href="' . $value["route"] . '">' . $value["subcategory_name"] . '</a>
                                        </li>';
                                    }

                                    echo '</ul>
                                    </td>';
                                }
                                ?> 
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>            

        </div>

    </div>
</div>
</section>