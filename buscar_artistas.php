<?php
$conexion = mysqli_connect('localhost', 'root', '', 'validar');

if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $genero = mysqli_real_escape_string($conexion, $_POST["genero"]);

    // Consulta SQL para buscar artistas por género y que estén activos
    $sql = "SELECT * FROM registro WHERE genero = '$genero' AND activo = 1"; // Asumiendo que 1 significa activo y 0 inactivo
    $result = mysqli_query($conexion, $sql);

    $htmlResultados = "";
    while ($mostrar = mysqli_fetch_array($result)) {
        $htmlResultados .= "<br>";
        $htmlResultados .= "<h2>{$mostrar['nombre']}</h2>";
        $htmlResultados .= "<div align='center'>";
        $htmlResultados .= "    <h2 class='fadeInUp'>Musico de {$mostrar['genero']}</h2>";
        $htmlResultados .= "    <img id='cv' class='fadeInUp' src='https://cdn-icons-png.flaticon.com/512/860/860175.png' alt='cv'>";
        $htmlResultados .= "</div>";
        $htmlResultados .= "<section role='main' class='container_16'>";
        $htmlResultados .= "    <div class='grid_16'>";
        $htmlResultados .= "        <div class='grid_8 fadeInLeft'>";
        $htmlResultados .= "            <img class='icon' src='https://i.imgur.com/8msw88z.png' alt='sobre mí'>";
        $htmlResultados .= "            <h3>Sobre mí:</h3>";
        $htmlResultados .= "            <p>{$mostrar['descripcion']}</p>";
        $htmlResultados .= "        </div>";
        $htmlResultados .= "        <div class='grid_8 knowledge fadeInRight'>";
        $htmlResultados .= "            <img class='icon' src='https://cdn-icons-png.flaticon.com/512/174/174872.png' alt='Conocimientos'><br><br>";
        $htmlResultados .= "            <p>{$mostrar['link']}</p>";
        $htmlResultados .= "            <h3>Genero musical</h3>";
        $htmlResultados .= "            <ul class='values'><br>";
        $htmlResultados .= "                <li><p>{$mostrar['genero']}</p><span style='width: 100%;'></span></li>";
        $htmlResultados .= "            </ul>";
        $htmlResultados .= "        </div>";
        $htmlResultados .= "    </div>";
        $htmlResultados .= "    <div class='grid_16 experiences appear'>";
        $htmlResultados .= "        <img class='icon' src='https://cdn-icons-png.flaticon.com/512/1080/1080992.png' alt='Experiencias'>";
        $htmlResultados .= "        <h3>Busca hacer colaboracion con artista de...</h3>";
        $htmlResultados .= "        <ul>";
        $htmlResultados .= "            <li><p>{$mostrar['colaboracion']}</p></li>";
        $htmlResultados .= "        </ul>";
        $htmlResultados .= "    </div>";
        $htmlResultados .= "    <div class='grid_8 socialmedia fadeInUp'>";
        $htmlResultados .= "        <img class='icon' src='https://i.pinimg.com/originals/7d/77/f1/7d77f10ffd46cdcf109059273fb30023.png' alt='sobre mí'>";
        $htmlResultados .= "        <h3>Instrumentos que toca</h3>";
        $htmlResultados .= "        <div>";
        $htmlResultados .= "            <ul class='information'>";
        $htmlResultados .= "                <li><p>{$mostrar['instrumento']}</p></li>";
        $htmlResultados .= "            </ul>";
        $htmlResultados .= "        </div>";
        $htmlResultados .= "    </div>";
        $htmlResultados .= "    <div class='grid_8 information fadeInUp'>";
        $htmlResultados .= "        <img class='icon' src='https://images.vexels.com/media/users/3/158194/isolated/preview/11507ef5615c554fe88fc22c86768501-icono-de-tierra-simple.png' alt='Otros datos'>";
        $htmlResultados .= "        <h3>Ciudad:</h3>";
        $htmlResultados .= "        <ul class='information'>";
        $htmlResultados .= "            <li><p>{$mostrar['ciudad']}</p></li>";
        $htmlResultados .= "        </ul>";
        $htmlResultados .= "    </div>";
        $htmlResultados .= "    <div class='grid_8 socialmedia fadeInUp'>";
        $htmlResultados .= "        <img class='icon' src='https://i.pinimg.com/736x/68/d4/a7/68d4a77713063760bf77e1600f298da3.jpg' alt='sobre mí'>";
        $htmlResultados .= "        <h3>Redes sociales y contacto</h3>";
        $htmlResultados .= "        <div>";
        $htmlResultados .= "            <ul class='information'>";
        $htmlResultados .= "                <li><p>{$mostrar['redes']}</p></li>";
        $htmlResultados .= "            </ul>";
        $htmlResultados .= "        </div>";
        $htmlResultados .= "    </div>";
        $htmlResultados .= "    <div class='grid_8 information fadeInUp'>";
        $htmlResultados .= "        <img class='icon' src='https://fiverr-res.cloudinary.com/t_mobile_web_2,q_auto,f_auto/gigs/294324991/original/2c310cd0e4e8b99ec6f1451d345cb25f3c603b5a.jpg' alt='Otros datos'>";
        $htmlResultados .= "        <h3>Email:</h3>";
        $htmlResultados .= "        <ul class='information'>";
        $htmlResultados .= "            <li><p>{$mostrar['correo']}</p></li>";
        $htmlResultados .= "        </ul>";
        $htmlResultados .= "    </div>";
        $htmlResultados .= "</section>";
        $htmlResultados .= "<hr style='width: 100%; border: 1px solid blue;'><br><br>";
    }

    echo $htmlResultados;
}

mysqli_close($conexion);
?>
