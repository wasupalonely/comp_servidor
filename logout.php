<?php
    session_destroy();

    if (isset($_COOKIE['PHPSESSID'])) {
        setcookie('PHPSESSID', '', time()-3600, '/');
    }
    // Finaliza la sesión del lado del cliente
    $_SESSION = array(); // Limpia todas las variables de sesión

    // Opcionalmente, puedes forzar a PHP a finalizar la sesión
    session_regenerate_id(true);

    header('Location: login.php');
    exit();
?>

