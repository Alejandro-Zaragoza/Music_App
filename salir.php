<?php
session_start(); // Inicia la sesión

// Para destruir la sesión
session_destroy();

// Redirige a la página de inicio de sesión u otra página después de cerrar sesión
header("Location: login.php");
exit(); // Asegura que el script se detenga después de redirigir
?>