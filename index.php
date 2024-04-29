<?php

session_start();
if(!isset($_SESSION['correo'])) {
    header("Location: login.php");
    exit();
}

// conexión con la base de datos "validar"
$conexion = mysqli_connect('localhost', 'root', '', 'validar');

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PERFIL DEL MUSICO</title>
    <link rel="stylesheet" href="CSS/perfil.css">
    <link rel="stylesheet" href="CSS/fontello.css">
    <link rel="stylesheet" href="CSS/estilo.css">
    <link rel="stylesheet" href="CSS/busqueda.css">
    <script src="buscar_artistas.js"></script>
</head>
<body>
    <!-- Formulario de Búsqueda -->
    <br><br><br>
    <div class="busqueda">
        <form id="formulario-busqueda">
            <label for="genero">Busca a tu próximo colaborador:</label>
            <select name="genero" id="genero">
                <option value="Rock">Rock</option>
                <option value="Funk">Funk</option>
                <option value="Urbano">Urbano</option>
                <option value="Regional Mexicano">Regional Mexicano</option>
                <option value="Indie">Indie</option>
                <option value="Metal">Metal</option>
                <option value="Lofi">Lofi</option>
                <option value="Ska">Ska</option>
                <option value="Blues">Blues</option>
                <option value="Reggae">Reggae</option>
                <option value="Musica Clasica">Musica Clasica</option>
                <option value="Jazz">Jazz</option>
                <option value="Electronica">Electronica</option>
                <option value="Pop">Pop</option>
                <option value="Punk">Punk</option>
            </select>
            <input type="button" value="Buscar" id="Button-search" onclick="buscarArtistas()">
        </form>
    </div>

    <!-- Resultados de la Búsqueda -->
    <div id="resultados-busqueda"></div>

    <!-- Menú BeatFusion -->
    <header>
        <div class="contenedor">
            <h1 class="icon-laptop">BeatFusion</h1>
            <input type="checkbox" id="menu-bar">
            <label class="icon-menu" for="menu-bar"></label>
            <nav class="menu">
                <a href="salir.php"><b>Salir</b></a>
                <a href="validar.php">Perfil</a>
                <a href="Productos.php">Playlist</a>
                <a href="index.php">Artistas Destacados</a>
            </nav>
        </div>
    </header>
    <br><br>
    <hgroup>
        <!-- PHP para mostrar los datos de la tabla -->
        <?php
        $sql = "SELECT * FROM registro";
        $result = mysqli_query($conexion, $sql);

        while ($mostrar = mysqli_fetch_array($result)) {
        ?>
        <!-- Nombre del artista -->
        <br><h2><?php echo $mostrar['nombre'] ?></h2>
        <!-- Artista de tal género musical -->
        <div align="center">
            <h2 class="fadeInUp">Músico de <?php echo $mostrar['genero'] ?></h2>
            <img id="cv" class="fadeInUp" src="https://cdn-icons-png.flaticon.com/512/860/860175.png" alt="cv">
        </div>
    </hgroup>

    <section role="main" class="container_16">
        <div class="grid_16">
            <!-- Sobre mí -->
            <div class="grid_8 fadeInLeft">
                <!-- Descripción -->
                <img class="icon" src="https://i.imgur.com/8msw88z.png" alt="sobre mí">
                <h3>Sobre mí:</h3>
                <p><?php echo $mostrar['descripcion'] ?></p>
            </div>

            <!-- Género -->
            <div class="grid_8 knowledge fadeInRight">
                <img class="icon" src="https://cdn-icons-png.flaticon.com/512/174/174872.png" alt="Conocimientos"><br><br>
                <!-- Link de Spotify -->
                <p><?php echo $mostrar['link_s'] ?></p>
                <h3>Género musical</h3>
                <ul class="values"><br>
                    <li><p><?php echo $mostrar['genero'] ?></p><span style="width: 100%;"></span></li>
                </ul>
                <h3>Multi-Plataformas</h3>
                <ul class="values"><br>
                    <li><p><?php echo $mostrar['link_a'] ?></p><span style="width: 100%;"></span></li>
                    <li><p><?php echo $mostrar['link_d'] ?></p><span style="width: 100%;"></span></li>
                    <li><p><?php echo $mostrar['link_y'] ?></p><span style="width: 100%;"></span></li>
                </ul>
            </div>
        </div>

        <!-- Colaboración -->
        <div class="grid_16 experiences appear">
            <img class="icon" src="https://cdn-icons-png.flaticon.com/512/1080/1080992.png" alt="Experiencias">
            <h3>Busca hacer colaboración con artista de...</h3>
            <ul>
                <li>
                    <p><?php echo $mostrar['colaboracion'] ?></p>
                </li>
            </ul>
        </div>

        <!-- Instrumento -->
        <div class="grid_8 socialmedia fadeInUp">
            <img class="icon" src="https://i.pinimg.com/originals/7d/77/f1/7d77f10ffd46cdcf109059273fb30023.png" alt="sobre mí">
            <h3>Instrumentos que toca</h3>
            <div>
                <ul class="information">
                    <li><p><?php echo $mostrar['instrumento'] ?></p></li>
                </ul>
            </div>
        </div>

        <!-- Ciudad -->
        <div class="grid_8 information fadeInUp">
            <img class="icon" src="https://images.vexels.com/media/users/3/158194/isolated/preview/11507ef5615c554fe88fc22c86768501-icono-de-tierra-simple.png" alt="Otros datos">
            <h3>Ciudad:</h3>
            <ul class="information">
                <li><p><?php echo $mostrar['ciudad'] ?></p></li>
            </ul>
        </div>

        <!-- Redes -->
        <div class="grid_8 socialmedia fadeInUp">
            <img class="icon" src="https://i.pinimg.com/736x/68/d4/a7/68d4a77713063760bf77e1600f298da3.jpg" alt="sobre mí">
            <h3>Redes sociales y contacto</h3>
            <div>
                <ul class="information">
                    <li><p><?php echo $mostrar['redes'] ?></p></li>
                </ul>
            </div>
        </div>

        <!-- Otros datos adicionales -->
        <div class="grid_8 information fadeInUp">
            <img class="icon" src="https://fiverr-res.cloudinary.com/t_mobile_web_2,q_auto,f_auto/gigs/294324991/original/2c310cd0e4e8b99ec6f1451d345cb25f3c603b5a.jpg" alt="Otros datos">
            <h3>Email:</h3>
            <ul class="information">
                <li><p><?php echo $mostrar['correo'] ?></p></li>
            </ul>
        </div>

    </section>

<!-- Agrega un ID al enlace para poder referenciarlo fácilmente con JavaScript -->
<div style="margin: 0 auto; text-align: center;">
    <h3>Añadir Favorito</h3><br>
    <!-- Añade un enlace con un href que redirija a favorito.php y transmita el correo como un parámetro GET -->
    <a class="favoritoLink" href="favorito_guardar.php?nombre_artista=<?php echo $mostrar['nombre']; ?>"> 
        <img class="icono_fav" src="imagenes/icono_guardar_selec.png" 
        style=" width: 3%; height: 3%;
        border-radius: 10px;">
    </a>
    <br><br>
</div>



    <hr style="width: 100%; border: 1px solid blue;"><br><br>
    <?php
    }
    ?>

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
