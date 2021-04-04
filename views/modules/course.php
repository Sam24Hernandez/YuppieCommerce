<!--=====================================
VALIDATE SESSION
======================================-->
<?php

if (!isset($_SESSION["validateSession"])) {
    
    echo '<script>window.location = "'.$url.'";</script>';
    
    exit();
}

?>

<?php

if (isset($routes[1]) && isset($routes[2]) && isset($routes[3])) {
    
    $item = "id";
    $valueUser = $routes[1];
    $idUser = $routes[2];
    $idProduct = $routes[3];
    
    $confirmShopping = UserController::ctrShowShopping($item, $valueUser);
    
    if ($confirmShopping[0]["user_id"] == $idUser &&
        $confirmShopping[0]["user_id"] == $_SESSION["id"] &&
        $confirmShopping[0]["product_id"] == $idProduct) {
        
    echo '<center><h1>BIENVENIDO AL CURSO<h1></center>';
        
    } else {
        echo '<div class="error-search-section result-list" style="padding-top: 64px; padding-bottom: 72px;">
            <div class="error-box-search">
                <div class="error-body-search text-center">
                    <h3>No tienes acceso a este curso</h3>
                    <p>Por favor, regresa a la página de productos para inscribirte a un curso.</p>
                    <a class="btn btn-primary btn-rounded" href="' . $url . 'cursos-digitales">Ver Cursos</a>
                </div>
            </div>
        </div>';
    }
    
} else {
    echo '<div class="error-search-section result-list" style="padding-top: 64px; padding-bottom: 72px;">
        <div class="error-box-search">
            <div class="error-body-search text-center">
                <h3>No tienes acceso a este curso</h3>
                <p>Por favor, regresa a la página de productos para inscribirte a un curso.</p>
                <a class="btn btn-primary btn-rounded" href="' . $url . 'cursos-digitales">Ver Cursos</a>
            </div>
        </div>
    </div>';
}
