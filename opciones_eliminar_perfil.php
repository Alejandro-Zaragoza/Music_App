<?php

session_start();
if(!isset($_SESSION['correo'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('db.php');
    $correo = $_POST['correo'];
    
    if (isset($_POST['eliminar'])) {
        // Eliminar el perfil de la base de datos
        $consulta_eliminar = "DELETE FROM registro WHERE correo = '$correo'";
        if (mysqli_query($conexion, $consulta_eliminar)) {
            echo '<script>
                if (confirm("Perfil eliminado exitosamente. ¿Desea ir al inicio?")) {
                    window.location.href = "index.html";
                }
            </script>';
        } else {
            echo '<script>alert("Error al eliminar el perfil.");</script>';
        }
    } elseif (isset($_POST['desactivar'])) {
        // Desactivar el perfil cambiando el estado a inactivo (activo = 0)
        $consulta_desactivar = "UPDATE registro SET activo = 0 WHERE correo = '$correo'";
        if (mysqli_query($conexion, $consulta_desactivar)) {
            echo '<script>
                if (confirm("Perfil desactivado exitosamente. ¿Desea ir al inicio?")) {
                    window.location.href = "index.html";
                }
            </script>';
        } else {
            echo '<script>alert("Error al desactivar el perfil.");</script>';
        }
    } 
    
    mysqli_close($conexion);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Opciones de Eliminación de Perfil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1 , maximum-scale=1">

    <link rel="stylesheet" href="CSS/fontello.css">
    <link rel="stylesheet" href="CSS/estilo.css">
    <link rel="stylesheet" href="CSS/LogIn.css">
</head>
<body>
    <header> <!-- menu -->
        <div class="contenedor">
            <h1 class="icon-laptop">BeatFusion</h1>
            <input type="checkbox" id="menu-bar">
            <label class="icon-menu" for="menu-bar"></label>
            <nav class="menu">
                <a href="Index.html"><b>Inicio</b></a>
                <a href="Productos.html">PlayLists</a>
                <a href="index.php">Artistas destacados</a>
            </nav>
        </div>
    </header>

    <!-- Principal -->
    <main> 
        <section id="LogIn">
            <br>
            <div class="contenedor" align="center">
                <h2>¿Qué deseas hacer con tu perfil?</h2><br>
                <form action='' method='post'>
                    <input type='hidden' name='correo' value='<?php echo $correo; ?>'>
                    <button type='submit' name='eliminar' style='background-color: red; color: white; border: none; border-radius: 5px; cursor: pointer; padding: 10px 20px; font-family: Arial, sans-serif;'>
                        <p class='information'>Eliminar Perfil</p>
                    </button>
                </form>
                <br>
                <h2 class='information'>Ó</h2>
                <br>
                <form action='' method='post'>
                    <input type='hidden' name='correo' value='<?php echo $correo; ?>'>
                    <button type='submit' name='desactivar' style='background-color: gray; color: white; border: none; border-radius: 5px; cursor: pointer; padding: 10px 20px; font-family: Arial, sans-serif;'>
                        <p class='information'>Desactivar Perfil</p>
                    </button>
                </form>
            </div><br>
        </section>
    </main>

    <br><br><br><br>

    <section id="Info-programas">
        <div class="Fondo">
            <br><h2>Para Artistas</h2>
            <p class="textofinal">
                Tenemos una lista de géneros musicales con artistas listos para hacer colaboraciones musicales.
            </p><br>
        </div>
    </section>

    <footer>
        <div class="contenedor">
            <p class="copy">BeatFusion</p>
            <div class="Redes">
                <a class="icon-facebook" href="#"></a>
                <a class="icon-twitter" href="#"></a>
                <a class="icon-youtube-play" href="#"></a>
            </div>
        </div>
    </footer>
</body>
</html>
