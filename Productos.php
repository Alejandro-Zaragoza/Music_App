<?php

session_start();
if(!isset($_SESSION['correo'])) {
    header("Location: login.php");
    exit();
}
?> 


<!DOCTYPE html>
<html>
<head>
    <title>Playlists</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="CSS/fontello.css">
    <link rel="stylesheet" href="CSS/estilo.css">
    <link rel="stylesheet" href="CSS/Productos.css">
    <link rel="stylesheet" href="CSS/playlists.css">
</head>
<body>
    <span class="loader"></span>

    <header> <!-- menu -->
        <div class="contenedor">
            <h1 class="icon-laptop">BeatFusion</h1>
            <input type="checkbox" id="menu-bar">
            <label class="icon-menu" for="menu-bar"></label>
            <nav class="menu">
                <a href="salir.php"><b>Salir</b></a>
                <a href="validar.php">Perfil</a>
                <a href="Productos.php">PlayLists</a>
                <a href="index.php">Artistas destacados</a>
            </nav>
        </div>
    </header>

    <main> 
        <section id="banner">
            <img src="imagenes/concierto.jpg">
            <div class="contenedor"> 
                <h2><br>Explora nuestras Playlist.</h2>
                <p><font color="#FFFFFF"> Explore nuestras variadas playlists temáticas diseñadas para potenciar la promoción de su música, abarcando una amplia gama de géneros musicales. Descubra oportunidades excepcionales para destacar su trabajo y conectarse con audiencias específicas en nuestra selección de playlists cuidadosamente curadas.</font></p>
                <br>
            </div>
        </section> 

        <section id="bienvenidos"> <!--Bienvenida-->
            <div class="contenedor">
                <h2>Unete a BeatFusion</h2><br>
                <p>Unete a la comunidad de Beatfusion hoy mismo, cree su cuenta y experimente la inclusión automática en nuestras diversas playlists diseñadas estratégicamente para potenciar la promoción de su música. Amplíe su alcance y llegue a un público más amplio mientras colabora con nosotros en la difusión de su talento musical.</p><br>
            </div>                            
        </section>

        <!-- Playlists --> 
        <div class="amazing-menu">
            <div class="menu-item"><a href="https://open.spotify.com/playlist/6I7GtaHgrw9ovjgOLrP2IQ?si=e118158beeee4ddd" target="_blank" class="menu-item">
                <div class="container">
                    <div class="icon"><span class="ion-icecream"></span></div>
                    <div class="title">Rock</div>
                    <div class="arrow"><span class="ion-chevron-right"></span></div>
                    <div class="rating -r2">
                        <div class="stars"><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span></div>
                        <div class="text">16,558 Oyentes Mensuales</div>
                    </div>
                </div>
            </a></div>
            <br>
            <div class="menu-item"><a href="https://open.spotify.com/playlist/00McwF0GJZKrZ4zJ32Chwx?si=3dc7c4683b10488c" target="_blank" class="menu-item">
                <div class="container">
                    <div class="icon"><span class="ion-pizza"></span></div>
                    <div class="title">Funk</div>
                    <div class="arrow"><span class="ion-chevron-right"></span></div>
                    <div class="rating -r5">
                        <div class="stars"><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span></div>
                        <div class="text">7,839 Oyentes Mensuales</div>
                    </div>
                </div>
            </a></div>
            <br>
            <div class="menu-item"><a href="https://open.spotify.com/playlist/2DNLQuVm2SepjFP2ZLVksD?si=50ab63a9f390494e" target="_blank" class="menu-item">
                <div class="container">
                    <div class="icon"><span class="ion-beer"></span></div>
                    <div class="title">Urbano</div>
                    <div class="arrow"><span class="ion-chevron-right"></span></div>
                    <div class="rating -r4">
                        <div class="stars"><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span></div>
                        <div class="text">56,976 Oyentes Mensuales</div>
                    </div>
                </div>
            </a></div>
            <br>
            <div class="menu-item"><a href="https://open.spotify.com/playlist/2RHjxeGs7idcF06JcepL1j?si=8da1fb3f1479446d" target="_blank" class="menu-item">
                <div class="container">
                    <div class="icon"><span class="ion-ios-wineglass"></span></div>
                    <div class="title">Regional Mexicano</div>
                    <div class="arrow"><span class="ion-chevron-right"></span></div>
                    <div class="rating -r4">
                        <div class="stars"><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span></div>
                        <div class="text">26,624 Oyentes Mensuales</div>
                    </div>
                </div>
            </a></div>
            <br>
            <div class="menu-item"><a href="https://open.spotify.com/playlist/69iMzXWIJDSEMrCqgBq7nr?si=ebe629fb98d64808" target="_blank" class="menu-item">
                <div class="container">
                    <div class="icon"><span class="ion-coffee"></span></div>
                    <div class="title">Indie</div>
                    <div class="arrow"><span class="ion-chevron-right"></span></div>
                    <div class="rating -r2">
                        <div class="stars"><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span><span class="ion-star"></span></div>
                        <div class="text">18,481 Oyentes Mensuales</div>
                    </div>
                </div>
            </a></div>
            <br>
        </div>
        <!-- Final playlists --> 

        <!-- Gif --> 
        <div class="gif">
            <img src="imagenes/playlistsgif.gif" alt="plalists">
        </div>

        <marquee><h1><font color="#33FFFC">Construye tu legado musical.  //  Comienza tu viaje de colaboración</font></h1></marquee>

        <section id="Info-programas">
            <div class="Fondo">
                <br><h2>Para Artistas</h2>
                <p class="textofinal">
                    Tenemos una lista de géneros musicales con artistas listos para hacer colaboraciones musicales.
                </p><br>
            </div>
        </section>
    </main>
    
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
