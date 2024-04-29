<?php
session_start();

include('db.php');

$CORREO = $_POST['correo'];
$PASSWORD = $_POST['password'];

if ($CORREO == "") {
  $CORREO = $_SESSION['correo'];
  $PASSWORD = $_SESSION['password'];
}

$consulta = "SELECT * FROM registro WHERE correo = '$CORREO' AND password = '$PASSWORD' AND activo = 1"; // Agregar condición para seleccionar solo perfiles activos
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas) {
  // Obtén los datos de la fila correspondiente al correo ingresado
  $fila = mysqli_fetch_assoc($resultado);

  // Verificar si el perfil está activo
  $activo = $fila['activo'];
  if ($activo == 1) {
    $nombre = $fila['nombre'];
    $genero = $fila['genero'];
    $descripcion = $fila['descripcion'];
    $link = $fila['link'];
    $colaboracion = $fila['colaboracion'];
    $instrumento = $fila['instrumento'];
    $ciudad = $fila['ciudad'];
    $redes = $fila['redes'];
    $correo = $fila['correo'];
    $favorito = $fila['favorito'];
    $_SESSION['correo'] = $correo;
    $_SESSION['password'] = $PASSWORD;
?>
    <!DOCTYPE html>
    <html>

    <head>
      <meta charset='utf-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1'>
      <title>PERFIL DEL MUSICO</title>
      <link rel='stylesheet' href='CSS/perfil.css'>
      <link rel='stylesheet' href='CSS/fontello.css'>
      <link rel='stylesheet' href='CSS/estilo.css'>
    </head>

    <body>
      <span class='loader'></span>

      <!-- Menu BeatFusion -->
      <header>
        <div class='contenedor'>
          <h1 class='icon-laptop'>BeatFusion</h1>
          <input type='checkbox' id='menu-bar'>
          <label class='icon-menu' for='menu-bar'></label>
          <nav class='menu'>
            <a href='salir.php'><b>Salir</b></a>

            <a href='Productos.php'>PlayLists</a>
            <a href='index.php'>Artistas Destacados</a>
          </nav>
        </div>
      </header><br><br>
      <hgroup>
        <!-- php para mostrar los datos de la tabla-->

        <br>
        <h2><?php echo $nombre; ?></h2>
        <div align='center'>
          <h2 class='fadeInUp'>Musico de <?php echo $ciudad; ?></h2>
          <img id='cv' class='fadeInUp' src='https://cdn-icons-png.flaticon.com/512/860/860175.png' alt='cv'>
        </div>
      </hgroup>
      <section role='main' class='container_16'>
        <div class='grid_16'>
          <!-- Sobre mi -->
          <div class='grid_8 fadeInLeft'>

            <!-- Descripcion-->
            <img class='icon' src='https://i.imgur.com/8msw88z.png' alt='sobre mí'>

            <h3>Sobre mí:</h3>

            <p><?php echo $descripcion; ?></p>
          </div>

          <!-- Genero -->
          <div class='grid_8 knowledge fadeInRight'><img class='icon' src='https://cdn-icons-png.flaticon.com/512/174/174872.png' alt='Conocimientos'><br><br>
            <!-- Link de Spotify -->
            <p><?php echo $link; ?></p>

            <h3>Genero musical</h3>
            <ul class='values'><br>
              <li><p><?php echo $genero; ?></p><span style='width: 100%;'></span></li>

            </ul>
          </div>
        </div>

        <!-- Colaboracion -->
        <div class='grid_16 experiences appear'>
          <img class='icon' src='https://cdn-icons-png.flaticon.com/512/1080/1080992.png' alt='Experiencias'>
          <h3>Busca hacer colaboracion con artista de...</h3>
          <ul>
            <li>
              <p><?php echo $colaboracion; ?></p>
            </li>

          </ul>
        </div>

        <!-- Instrumento -->
        <div class='grid_8 socialmedia fadeInUp'>
          <img class='icon' src='https://i.pinimg.com/originals/7d/77/f1/7d77f10ffd46cdcf109059273fb30023.png' alt='sobre mí'>
          <h3>Instrumentos que toca</h3>
          <div>
            <ul class='information'>
              <li><p><?php echo $instrumento; ?></p></li>


            </ul>

          </div>

        </div>

        <!-- Ciudad -->
        <div class='grid_8 information fadeInUp'>
          <img class='icon' src='https://images.vexels.com/media/users/3/158194/isolated/preview/11507ef5615c554fe88fc22c86768501-icono-de-tierra-simple.png' alt='Otros datos'>
          <h3>Ciudad:</h3>
          <ul class='information'>
            <li><p><?php echo $ciudad; ?></p></li>
          </ul>
        </div>



        <!-- Redes -->
        <div class='grid_8 socialmedia fadeInUp'>
          <img class='icon' src='https://i.pinimg.com/736x/68/d4/a7/68d4a77713063760bf77e1600f298da3.jpg' alt='sobre mí'>
          <h3>Redes sociales y contacto</h3>
          <div>
            <ul class='information'>
              <li><p><?php echo $redes; ?></p></li>


            </ul>

          </div>

        </div>

        <!-- Otros datos adicionales -->
        <div class='grid_8 information fadeInUp'>
          <img class='icon' src='https://fiverr-res.cloudinary.com/t_mobile_web_2,q_auto,f_auto/gigs/294324991/original/2c310cd0e4e8b99ec6f1451d345cb25f3c603b5a.jpg' alt='Otros datos'>
          <h3>Email:</h3>
          <ul class='information'>
            <li><p><?php echo $correo; ?></p></li>

          </ul>
        </div>

        <!-- Apartado de favoritos -->
        <div class='grid_16 experiences appear information fadeInUp'>
          <img class='icon' src='https://cdn-icons-png.flaticon.com/512/1995/1995478.png' alt='Experiencias'>
          <h3>Artista Guardado : </h3>
          <ul class='information'>
            <li>
              <p><?php echo $favorito; ?></p>
              
            </li>
          </ul>

          <?php
          $sql = "SELECT * FROM registro WHERE nombre = '$favorito'";
          $result = mysqli_query($conexion, $sql);

          while ($mostrar = mysqli_fetch_array($result)) {
          ?>

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

          <?php } ?>
        </div>

        <!-- Botón para redireccionar a la página de opciones de eliminación -->
        <div class='grid_16' style='text-align: center;'>
          <form action='opciones_eliminar_perfil.php' method='post'>
            <input type='hidden' name='correo' value='<?php echo $correo; ?>'>
            <button type='submit' style='background-color: red; color: white; border: none; border-radius: 5px; cursor: pointer; padding: 10px 20px; font-family: Arial, sans-serif;'>
              <p class='information'>Eliminar Perfil</p>
            </button>
          </form>
        </div>

      </section>
      <hr style='width: 100%; border: 1px solid blue;'><br><br>

      <section id='Info-programas'>

        <div class='Fondo'>
          <br>
          <h2>Para Artistas</h2>

          <p class='textofinal'>
            Tenemos una lista de generos musicales con artistas listos para hacer colaboraciones musicales.
          </p><br>
        </div>


      </section>


      <footer>
        <div class='contenedor'>
          <p class='copy'>BeatFusion</p>
          <div class='Redes'>
            <a class='icon-facebook' href='#'></a>
            <a class='icon-twitter' href='#'></a>
            <a class='icon-youtube-play' href='#'></a>
          </div>
        </div>
      </footer>
    </body>

    </html>
<?php
  } else {
    include("login.php");
    echo '<script>alert("Tu perfil está desactivado. Por favor, contacta al administrador para más información.");</script>';
  }
} else {
  include("login.php");
  echo '<script>alert("Error de autenticación. Intenta nuevamente.");</script>';
}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>
