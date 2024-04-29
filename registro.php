<?php
// Conexión a la base de datos
$conexion=mysqli_connect("localhost", "root","","validar");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

// Obtener datos del formulario
$NOMBRE = $_POST["nombre"];
$GENERO = $_POST["genero"];
$DESCRIPCION = $_POST["descripcion"];
$COLABORACION = $_POST["colaboracion"];
$REDES = $_POST["redes"];
$INSTRUMENTO = $_POST["instrumento"];
$CIUDAD = $_POST["ciudad"];
$LINK_SPOTIFY = $_POST["link_s"];
$LINK_YOUTUBE = $_POST["link_y"];
$LINK_DEEZER = $_POST["link_d"];
$LINK_APPLE_MUSIC = $_POST["link_a"];
$CORREO = $_POST["correo"];
$PASSWORD = $_POST["password"];
$ACTIVO = 1; // Asignar valor activo por defecto

// Insertar datos en la base de datos
$sql = "INSERT INTO registro (nombre, genero, descripcion, colaboracion, redes, instrumento, ciudad, link_s, link_y, link_d, link_a, correo, password, activo) VALUES ('$NOMBRE', '$GENERO', '$DESCRIPCION', '$COLABORACION', '$REDES','$INSTRUMENTO','$CIUDAD', '$LINK_SPOTIFY', '$LINK_YOUTUBE', '$LINK_DEEZER', '$LINK_APPLE_MUSIC', '$CORREO', '$PASSWORD', '$ACTIVO')";

if ($conexion->query($sql) === TRUE) {
    header("Location: ultimolog.php");
    exit();
} else {
    echo "Error al registrar: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>
