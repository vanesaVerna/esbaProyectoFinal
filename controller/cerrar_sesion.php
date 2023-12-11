<?php
// Iniciar la sesión
session_start();

// Limpiar todas las variables de sesión
$_SESSION = array();

// Destruir la sesión
session_destroy();

// Redireccionar a la página de inicio de sesión o a donde desees después de cerrar sesión
header("Location: ../index.php");
exit;
?>