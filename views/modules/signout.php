<?php

session_destroy();

$url = Route::ctrRoute();

if (isset($_SESSION['id_token_google']) && !empty($_SESSION['id_token_google'])) {
    
    unset($_SESSION['id_token_google']);
    
}
/**
 * @Todo: Opción si quieres quitar el localStorage.clear() para guardar items en el localStorage
 */
echo '<script>
    localStorage.removeItem("user");
    localStorage.clear();
    window.location = "'.$url.'";
</script>';


