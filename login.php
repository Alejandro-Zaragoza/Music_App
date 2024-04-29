<!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesión</title>
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
                <a href="login.php"><b>Ingresar</b></a>
            </nav>
        </div>
    </header>

    <!-- Principal -->
    <main> 
        <section id="LogIn">
            <br>
            <div class="contenedor" align="center">
                <form class="Log" action="validar.php" method="post">
                    <h2>Iniciar sesión</h2><br>
                    <p>Correo electrónico: <input id="Text-user" type="text" placeholder="Escriba su correo" name="correo" align="center" required></p>
                    <p>Contraseña: <input id="Text-user" type="password" placeholder="Escriba su contraseña" name="password" required></p><br>
                    <input type="submit" value="Ingresar" id="Button-login"><br>
                </form>
            </div><br>

            <div align="center">
                <h2><font align="center">¿Aún no tienes cuenta?</font></h2><br>
                <input id="Button-login" type="button" onclick="location='Registrar.html'" value="Registrarte"><br>
            </div>
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
