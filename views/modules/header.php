<?php
$server = Route::ctrRouteServer();
$url = Route::ctrRoute();
?>

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
                    <div class="advanced-search-box">
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
                                                            <a class="pixelCategories" title="' . $value["category_name"] . ' " href="' . $value["route"] . '">
                                                                ' . $value["category_name"] . '                                                  
                                                            </a>
                                                        </h3>
                                                        <ul class="header-list-sbc">';

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

                                        <td>
                                            <h3>
                                                <a id="shop-see-all" title="" href="<?php echo $url; ?>all-categories">
                                                    Ver todas las categorías
                                                    <i class="fa fa-angle-double-right"></i>
                                                </a>
                                            </h3>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>                                                                                    
                        </div>

                        <div id="search" class="input-group">
                            <input type="search" name="serach" size="50" maxlength="300" aria-label="Buscar artículos" placeholder="Buscar artículos" spellcheck="false" autocomplete="off" class="input-ui">
                            <a href="<?php echo $url; ?>search/1/recientes">
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
                        echo '<li><a href="' . $url . $value["route"] . '">' . $value["category_name"] . '</a></li>';
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

<!-- == Modal Login == -->
<div class="modal fade modalForm" id="modalRegister" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title login-modal-title">Crear una cuenta</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>            

            <form class="form" method="POST">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                        <input type="text" class="form-control" id="regName" name="regName" placeholder="Ingresa tu nombre: Ej. Sam Hernández" maxlength="50" autocomplete="off" required>
                    </div>                    
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                        <input type="email" class="form-control" id="regEmail" name="regEmail" placeholder="Ingresa tu correo electrónico" maxlength="64" required>
                    </div>                    
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                        <input type="password" class="form-control form-input-password" id="regPassword" name="regPassword" placeholder="Ingresa tu contraseña" autocomplete="off" required>
                        <button id="toggle-password" class="icon-font-component form-input-icon form-input-right reg-toggle-password-visible" type="button" onclick="Toggle()">
                            <i id="show-pass" class="fa fa-eye" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <button class="btn btn-success" type="submit">
                    Crear tu cuenta de Yuppie
                </button>
                
                <div class="help-tools-section">
                    <p>Al crear una cuenta, aceptas las <a href="#">Condiciones de Uso</a> y admistes haber leído el <a href="#">Aviso de Privacidad</a></p>
                </div>
            </form>
            <div class="separator">
                <div class="separator-line"></div>
                <div id="social-login-wrapper-separator" class="separator-content">
                    <mark>o</mark>
                </div>
            </div>
            <div class="modal-body ">
                <div class="facebook">
                    <button id="register_fb" class="facebook-login">
                        Continuar con Facebook
                    </button>
                </div> 

                <div class="google">
                    <button id="register_google" class="google-login">
                        Continuar con Google
                    </button>   
                </div>
            </div>

            <div class="modal-footer">
                ¿Ya tienes una cuenta? | <strong><a href="#modalLogin" data-dismiss="modal" data-toggle="modal">Iniciar sesión</a>   </strong>        
            </div>
        </div>
    </div>
</div>

<!-- == Modal Login == -->
<div class="modal fade modalForm" id="modalLogin" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title login-modal-title">Iniciar sesión</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>            

            <form class="form" method="POST">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                        <input type="text" class="form-control" id="logEmail" name="logEmail" placeholder="Ingresa tu correco electrónico" required>
                    </div>                    
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                        <input type="password" class="form-control" id="logPassword" name="logPassword" placeholder="Ingresa tu contraseña" required>
                    </div>
                </div>
                <button class="btn btn-success" type="submit">
                    Continuar
                </button>
                
                <div class="help-tools-section">
                    <a href="#">¿Olvidaste tu contraseña?</a>
                </div>
            </form>
            <div class="separator">
                <div class="separator-line"></div>
                <div id="social-login-wrapper-separator" class="separator-content">
                    <mark>o</mark>
                </div>
            </div>
            <div class="modal-body ">
                <div class="facebook">
                    <button id="login_fb" class="facebook-login">
                        Continuar con Facebook
                    </button>
                </div> 

                <div class="google">
                    <button id="login_google" class="google-login">
                        Continuar con Google
                    </button>   
                </div>
            </div>

            <div class="modal-footer">
                ¿Eres nuevo en Yuppie? | <strong><a href="#modalRegister" data-dismiss="modal" data-toggle="modal">Crea tu cuenta ahora</a>   </strong>        
            </div>
        </div>
    </div>
</div>


