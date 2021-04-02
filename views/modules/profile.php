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

<div id="user_profile">
    <div class="profile-section profile-background">
        <div class="profile-section profile-wdiget">
            <div class="a-changeover a-changeover-manual profile-edited-toast" style="display: none;">
                <div class="a-changeover-inner"><i class="a-icon a-icon-checkmark-inverse"></i><strong class="a-size-medium">Guardado</strong></div>
            </div>
            <div id="customer-profile-avatar-header" class="avatar-header-container">
                <div id="cover-photo-image" class="profile-section spacing-none">
                    <div class="profile-section">
                        <input accept="image/*" id="coverUploadInput" name="coverPhoto" type="file" /><canvas id="resizingCanvas"></canvas>
                        <div
                            style="background-image: url('views/img/default_banner.png'); background-size: contain;"
                            class="profile-section spacing-none desktop cover-photo"
                            >
                            <img alt="" src="views/img/default_banner.png" class="cover-photo-with-cropping" id="cover-image-with-cropping" />
                        </div>
                        <div class="profile-section">
                            <div class="profile-row desktop cover-photo-edit-icon">
                                <img alt="" src="<?php echo $server; ?>views/img/perfiles/default/camera.png" />
                                <span
                                    class="a-declarative"                                    
                                    >
                                    <div id="cover-photo-edit-popover-trigger" class="profile-section edit-popover-trigger"></div>
                                </span>
                            </div>
                            <span
                                class="a-declarative"                                
                                >
                                <div id="cover-photo-desktop-crop-trigger" class="profile-section"></div>
                            </span>                                                                              
                        </div>
                    </div>
                </div>
                <div id="customer-profile-avatar-image" class="profile-section desktop avatar-image-container">
                    <div class="profile-section">
                        <!--<input accept="image/*" id="avatarUploadInput" name="avatar" type="file" /><canvas id="resizingCanvas"></canvas>-->                  
                        <div class="profile-section updated-profile-image-holder desktop">


                            <?php
                            if ($_SESSION["mode"] === "directo") {

                                if ($_SESSION["picture"] !== "") {

                                    echo '<div                                                
                                                class="profile-section spacing-none circular-avatar-image"
                                            >
                                            <img alt="" src="' . $url . $_SESSION["picture"] . '" id="avatar-image" />';
                                } else {

                                    echo '<div                                                
                                                class="profile-section spacing-none circular-avatar-image"
                                            >
                                            <img alt="" src="' . $server . 'views/img/perfiles/default/anonymous460.png" id="avatar-image" />';
                                }
                            } else {

                                echo '<div                                                
                                                class="profile-section spacing-none circular-avatar-image"
                                            >
                                            <img alt="" src="' . $_SESSION["picture"] . '" id="avatar-image" />';
                            }
                            ?>
                            
                            <?php
                                    
                            if ($_SESSION["mode"] === "directo") {
                                echo '<div class="profile-section">
                                    <div class="profile-row image-edit-popover-trigger-holder">
                                        <img alt="" data-toggle="modal" data-target="#changeImage" src="'.$server.'views/img/perfiles/default/camera.png" />

                                    </div>                                                                        
                                </div>';
                            }
                                    
                            ?>                           
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
        <div class="desktop padded card-profile name-header-card">
            <div class="profile-row spacing-none desktop card-header-profile"></div>
            <div class="profile-row">
                <div id="customer-profile-name-header" class="profile-section desktop name-header-widget">
                    <div class="profile-row header"></div>
                    <div class="profile-row spacing-none name-container">
                        <span class="profile-name"><?php echo $_SESSION["name"] ?></span>
                    </div> 
                    <div class="profile-section desktop inline-edit-container"></div>
                    <div class="name-header-footer-placeholder"></div>
                    <div class="profile-row name-header-footer-container">
                        <a class="a-link-normal name-header-edit-profile-link" href="#">
                            <span class="primary-btn name-header-edit-profile-button">
                                <span class="a-button-inner"><button class="button-text" type="button">Editar perfil</button></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="profile-section activity-area-container">
            <div class="deck-container sub">
                <div class="desktop padded card-profile pw-bio">
                    <div class="profile-row spacing-none desktop card-header-profile"><span class="desktop card-title-profile">Información</span></div>
                    <div class="profile-row">
                        <div class="profile-section">                                
                            <div class="profile-section a-spacing-top-base bio-widget-footer">
                                <div class="profile-row a-spacing-base">
                                    <div class="a-column a-span12">
                                        <span class="a-size-base">Número de Cliente</span>
                                        <div class="profile-row"><span class="a-size-base">#<?php echo $_SESSION["id"] ?></span></div>
                                    </div>
                                </div>
                                <div class="profile-section"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="desktop padded card-profile">
                    <div class="profile-row spacing-none desktop card-header-profile"><span class="desktop card-title-profile">Mi Lista de Deseos</span></div>
                    <div class="profile-row">
                        <div id="customer-profile-lists" class="profile-section lists-component">
                            <div class="profile-row a-spacing-base list-card-component">
                                <div class="a-fixed-right-grid-col product-pic-holder" style="float: left;">
                                    <a class="a-link-normal list-path" href="<?php $url; ?>my_list">
                                        <img alt="" src="https://m.media-amazon.com/images/I/31swmrdF8kL.jpg" class="product-pic" width="40px" height="40px" />
                                    </a>
                                </div>
                                <div class="a-fixed-right-grid-col list-name-holder" style="float: left;">
                                    <a class="a-link-normal list-path" href="<?php $url; ?>my_list"><span class="a-size-base list-name">Lista de deseos</span></a>
                                </div>                                    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="desktop padded card-profile">
                    <div class="profile-row spacing-none desktop card-header-profile"><span class="desktop card-title-profile">Mi Cuenta</span></div>
                    <div class="profile-row">
                        <div id="customer-profile-your-account" class="profile-section">
                            <div class="profile-row"><span style="font-size: 12px;">Revisa tus pedidos, agrega métodos de pago, administra tu contraseña y más.</span></div>
                        </div>
                    </div>
                    <div class="profile-row">
                        <div class="profile-row a-spacing-top-small"><a class="a-link-normal a-text-bold" href="<?php $url; ?>my_account">Ir a mi cuenta</a></div>
                    </div>
                </div>
            </div>
            <div class="deck-container main" style="width: 100%;">
                <div class="desktop padded card-profile dashboard-desktop-card">
                    <div class="profile-row spacing-none desktop card-header-profile"><span class="desktop card-title-profile">Estadísticas</span></div>
                    <div class="profile-row">
                        <div class="dashboard-desktop-stats-section">
                            <div class="dashboard-desktop-stat large-margin-right">
                                <a class="dashboard-desktop-stat-link" href="#">
                                    <div>
                                        <div class="dashboard-desktop-stat-value"><span class="a-size-large a-color-base">0</span></div>
                                        <div class="dashboard-desktop-stat-type"><span class="a-size-small a-color-base">votos útiles</span></div>
                                    </div>
                                </a>
                            </div>
                            <div class="dashboard-desktop-stat large-margin-right">
                                <a class="dashboard-desktop-stat-link" href="#">
                                    <div>
                                        <div class="dashboard-desktop-stat-value"><span class="a-size-large a-color-base">3</span></div>
                                        <div class="dashboard-desktop-stat-type"><span class="a-size-small a-color-base">reseñas</span></div>
                                    </div>
                                </a>
                            </div>
                            <div class="dashboard-desktop-stat large-margin-right">
                                <div>
                                    <div class="dashboard-desktop-stat-value"><span class="a-size-large a-color-base">0</span></div>
                                    <div class="dashboard-desktop-stat-type"><span class="a-size-small a-color-base">seguidores</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                   
            </div>                                
        </div>            
    </div>
</div>
</div>

<div id="changeImage" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Actualizar Foto de Perfil</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data">
                    
                    <?php
                    echo '<input type="hidden" value="'.$_SESSION["id"].'" name="idUser" id="idUser">
                        <input type="hidden" value="'.$_SESSION["picture"].'" name="userPicture" id="userPicture">';                    
                    ?>
                    
                    <div class="form-group" id="uploadImage">
                        <label for="dataPicture" class="control-label">Foto:</label>
                        <input type="file" class="form-control" id="dataPicture" name="dataPicture" required>
                    </div>
                    <button type="submit" class="btn btn-success">Actualizar Foto</button>  
                    
                    <?php
                    
                    $updatePicture = new UserController();
                    $updatePicture->ctrUpdatePicture();                                        
                    
                    ?>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-inverse" data-dismiss="modal">Cancelar</button>                
            </div>
        </div>
    </div>
</div>


