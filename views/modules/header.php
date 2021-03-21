<!-- == Header Top == -->
<header id="header-top" class="header-section header-top">
    <div class="h-top">
        <div class="container">
            <div class="h-left">
                <div class="mail-service">
                    <i class="fa fa-envelope"></i>
                    yuppie@support.com
                </div>
                <div class="phone-service">
                    <i class="fa fa-phone"></i>
                    +99 33.188.888
                </div>
            </div>
            <!-- == Register Section == -->
            <div class="h-right">
                <a href="#modalLogin" data-toggle="modal" class="login-panel">
                    <i class="fa fa-user"></i>
                    Iniciar sesión
                </a>               
                
                <a href="#modalRegister" data-toggle="modal" class="register-panel">
                    <i class="fa fa-user-plus"></i>
                    Regístrarse
                </a>
                
                <!-- == Social Section == -->
                <div class="social">
                    <a href="https://facebook.com" target="_blank"><i class="fa fa-facebook social-media fb-w" aria-hidden="true"></i></a>
                    <a href="https://youtube.com" target="_blank"><i class="fa fa-youtube-play social-media yt-w" aria-hidden="true"></i></a>
                    <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter social-media tw-w" aria-hidden="true"></i></a>
                    <a href="https://instagram.com" target="_blank"><i class="fa fa-instagram social-media ig-w" aria-hidden="true"></i></a>
                </div>
                <!-- == End Social == -->
            </div>
            <!-- == End Register == -->
        </div>
    </div>

    <div class="container">
        <div class="inner-header">
            <div class="row row-2">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="<?php echo $url; ?>">
                            <img src="http://localhost/yuppie_backend/views/img/template/logo.png">
                        </a>
                    </div>                                        
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="advanced-search-box" id="search">
                        <button type="button" class="category-btn" id="category-btn">Categorías</button>
                        <!-- == Categories == -->                        
                        <div id="categories" class="h-category">
                            <table id="header-sbc" role="presentation">
                                <tbody>
                                    <tr>
                                          <?php
                                          
                                            $item = null;
                                            $valueCategory = null;
                                          
                                            $categories = ProductController::ctrShowCategories($item, $valueCategory);

                                            foreach (array_slice($categories, 0, 4) as $key => $value) {                                                

                                                echo '<td>
                                                        <h3 class="header-sbc-parent">
                                                            <a class="pixelCategories" title="'.$value["category_name"].' " href="'.$value["route"].'">
                                                                '.$value["category_name"].'                                                  
                                                            </a>
                                                        </h3>
                                                        <ul class="header-list-sbc">';
                                                
                                                        $item = "category_id";
                                                        $valueSubCategory = $value["id"];
                                                
                                                        $subcategories = ProductController::ctrShowSubCategories($item, $valueSubCategory);
                                                        
                                                        foreach ($subcategories as $key => $value) {
                                                            echo '<li>
                                                                <a class="pixelSubcategories" title="'.$value["subcategory_name"].'" href="'.$value["route"].'">'.$value["subcategory_name"].'</a>
                                                            </li>';
                                                        }
                                                        
                                                        echo '</ul>
                                                    </td>';
                                            }
                                        ?>                                                                                                                   
                                        
                                        <td>
                                            <h3>
                                                <a id="shop-see-all" title="" href="<?php echo $url; ?>todas-las-categorias">
                                                    Ver todas las categorías
                                                    <i class="fa fa-angle-double-right"></i>
                                                </a>
                                            </h3>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>                                                                                    
                        </div>

                        <div class="input-group">
                            <input type="search" name="serach" size="50" maxlength="300" aria-label="Buscar artículos" placeholder="Buscar artículos" spellcheck="false" autocomplete="off" class="input-ui">
                            <a href="#">
                                <button class="btn btn-default backColor" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </a>
                        </div>                                                
                    </div>
                </div>
                <div class="col-lg-3 text-right col-md-3" id="cart">
                    <ul class="nav-right">
                        <li class="heart-icon">
                            <a href="#" data-toggle="tooltip" title="Lista de Deseos">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <span>1</span>
                            </a>
                        </li> 
                        <li class="cart-icon">
                            <a href="#" data-toggle="tooltip" title="Cesta">
                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                <span>3</span>
                            </a>
                        </li>                        
                        <li class="basket-price">$150.00</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="nav-item">
        <div class="container">
            <div class="nav-depart">
                <div class="depart-btn">
                    <a href="#">
                        <i class="fa fa-shopping-bag"></i>
                        <span>Todo</span> 
                    </a>                   
                </div>
            </div>
            <nav class="nav-menu mobile-menu">
                <ul>
                    <li class="active"><a href="<?php echo $url; ?>">Inicio</a></li>
                    <?php
                                       
                    $itemCategoryMenu = null;
                    $valueCategoryMenu = null;

                    $categoriesMenu = ProductController::ctrShowCategories($itemCategoryMenu, $valueCategoryMenu);

                    foreach (array_slice($categoriesMenu, 0, 3) as $key => $value) {     
                        echo '<li><a href="'.$url.$value["route"].'">'.$value["category_name"].'</a></li>';
                    }
                    ?>
                    <li><a href="#">Ofertas</a></li>
                    <li><a href="#">Vender</a></li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
        </div>
    </div>

</header>
<!-- == End Header Top == -->


