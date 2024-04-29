<?php
session_start();
// conexión con la base de datos "validar"
$conexion = mysqli_connect('localhost', 'root', '', 'validar');

// Verificar si se han enviado los parámetros GET
if(isset($_GET['nombre_artista']) && isset($_SESSION['correo']) && isset($_SESSION['password'])) {
    // Obtener los datos del formulario
    $nombre_artista = $_GET['nombre_artista'];
    $correo_usuario = $_SESSION['correo'];
    $contraseña = $_SESSION['password'];

    // Consultar la contraseña del usuario
    $sql_usuario = "SELECT * FROM registro WHERE correo = '$correo_usuario'";
    $result_usuario = mysqli_query($conexion, $sql_usuario);

    if($result_usuario) {
        $fila_usuario = mysqli_fetch_assoc($result_usuario);
        if($fila_usuario) {
            // Verificar si la contraseña ingresada coincide con la contraseña guardada en la base de datos
            if($contraseña === $fila_usuario['password']) {
                // Si la contraseña es correcta, insertar el nombre del artista en la columna de favoritos
                $sql_insert = "UPDATE registro SET favorito = '$nombre_artista' WHERE correo = '$correo_usuario'";
                if(mysqli_query($conexion, $sql_insert)) {
                    echo "<script>if(confirm('Favorito Guardado !')) { window.location = 'index.php'; }</script>";
                } else {
                    echo "<p>Error al añadir el artista a favoritos: " . mysqli_error($conexion) . "</p>";
                }
            } else {
                echo "<script>if(confirm('Contraseña Incorrecta')) { window.location = 'favorito.php'; }</script>";
            }
        } else {
            echo "<p>No se encontró ningún usuario con ese correo.</p>";
        }
    } else {
        echo "<p>Error al consultar la base de datos: " . mysqli_error($conexion) . "</p>";
    }
} else {
    echo "<p>No se han recibido los parámetros necesarios.</p>";
}
?>
