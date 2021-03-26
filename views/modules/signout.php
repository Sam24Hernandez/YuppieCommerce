<?php

session_destroy();

$url = Route::ctrRoute();

echo '<script>
    localStorage.removeItem("user");
    localStorage.clear();
    window.location = "'.$url.'";
</script>';


