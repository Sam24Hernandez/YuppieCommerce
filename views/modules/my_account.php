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
                    <a class="text-uppercase" href="<?php $url; ?>"><i class="fa fa-home"></i> Inicio</a>
                    <span class="text-uppercase active-page">Mi Cuenta</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb Section -->

<section class="account-section">
    <div class="container">

        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3>Mi cuenta</h3>
            </div>
        </div>

        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card m-b-20">
                    <a href="#" class="card-whole-card-link">
                        <div class="card-body"> 
                            <div class="column-account a-span3">
                                <h2>Mis pedidos</h2>
                                <div>
                                    <span class="text-muted text-light">
                                        Ver mis pedidos o devolver pedidos
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="card m-b-20">
                    <a href="#" class="card-whole-card-link">
                        <div class="card-body"> 
                            <div class="column-account a-span3">
                                <h2>Mis compras</h2>
                                <div>
                                    <span class="text-muted text-light">
                                        Ver mis compras, comprar de nuevo
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="card m-b-20">
                    <a href="#" class="card-whole-card-link">
                        <div class="card-body"> 
                            <div class="column-account a-span3">
                                <h2>Mi Lista</h2>
                                <div>
                                    <span class="text-muted text-light">
                                        Ver mi lista de deseos, productos favoritos
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs profile-tab" role="tablist">
                        <li class="nav-item" style="background: none;"> <a class="nav-link active" data-toggle="tab" href="#settings" role="tab">Configuración de la cuenta</a> </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">

                        <div class="tab-pane active" id="settings" role="tabpanel">
                            <div class="card-body">
                                <form method="POST" class="form-horizontal form-material">

                                    <?php
                                    if ($_SESSION["mode"] !== "directo") {
                                        echo '<div class="form-group">
                                        <label class="col-md-12">Nombre</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Nuevo nombre" value="' . $_SESSION["name"] . '" class="form-control form-control-line" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Correo electrónico</label>
                                        <div class="col-md-12">
                                            <input type="email" placeholder="Nuevo correo electrónico" value="' . $_SESSION["email"] . '" class="form-control form-control-line" readonly>
                                        </div>                                       
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Modo de Registro</label>
                                        <div class="col-md-12 input-group">
                                            <div class="input-group-addon"><i class="fa fa-' . $_SESSION["mode"] . '"></i></div>
                                            <input type="text" class="form-control form-control-line text-uppercase" value="' . $_SESSION["mode"] . '" readonly>
                                        </div> 
                                    </div>  ';
                                    } else {
                                        echo '<div class="form-group">
                                        <label for="editName" class="col-md-12">Cambiar Nombre</label>
                                        <div class="col-md-12">
                                            <input type="text" id="editName" name="editName" placeholder="Nuevo nombre" value="' . $_SESSION["name"] . '" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="editEmail" class="col-md-12">Cambiar Correo electrónico</label>
                                        <div class="col-md-12">
                                            <input type="email" id="editEmail" name="editEmail" placeholder="Nuevo correo electrónico" value="' . $_SESSION["email"] . '" class="form-control form-control-line">
                                        </div>                                       
                                    </div>
                                    <div class="form-group">
                                        <label for="editPassword" class="col-md-12">Contraseña</label>
                                        <div class="col-md-12 input-group">
                                            <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                            <input type="password" id="editPassword" name="editPassword" placeholder="Escriba la nueva contraseña" class="form-control form-control-line">
                                        </div> 
                                    </div>  
                                                
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-success">Actualizar Datos</button>
                                        </div>
                                    </div>';
                                    }
                                    ?>                                   
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
    </div>
</section>
