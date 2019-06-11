<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ejemplo de Acciones </title>
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="icon" type="image/png" href="../../img/PNG/64px/433-github.png" sizes="64x64">



</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="../main.html"><span class="primero"><img src="../../img/PNG/64px/001-home.png"
                                class="icon"></span>Inicio</a></li>
                <li><a href="#"><span class="segundo"><i class="icon icon-map"></i></span>Categorías</a>
                    <ul>
                        <li><a href="camara.html"><span class="uno"><img src="../../img/PNG/32px/021-video-camera.png"
                                        class="icon"></span>Cámara</a></li>
                        <li><a href="#"><span class="uno"><img src="../../img/PNG/32px/039-file-text2.png"
                                        class="icon"></span>Datos</a></li>
                        <li><a href="acciones.php"><span class="uno"><img src="../../img/PNG/32px/086-keyboard.png"
                                        class="icon"></span>Acciones</a></li>
                        <li><a href="estadisticas.html"><span class="uno"><img src="../../img/PNG/32px/156-stats-dots.png"
                                        class="icon"></span>Estadísticas</a></li>
                    </ul>
                </li>
                <li><a href="#"><span class="tercero"><img src="../../img/PNG/64px/001-home.png"
                                class="icon"></span>Servicios</a>
                </li>
                <li><a href="#"><span class="cuarto"><img src="../../img/PNG/32px/001-home.png"
                                class="icon"></span>Acerca
                        de</a>
                </li>
                <li><a href="../../index.html"><span class="quinto"><img src="../../img/PNG/64px/433-github.png"
                                class="icon"></i></span>Salir</a></li>
            </ul>
        </nav>
    </header>
    <div id="general">
        <div id="Titulo">
            <h1>Listado de acciones disponibles</h1>
        </div>
        <div id="lista">

        </div>

        <div id="cuerpo">
            <form action="../../php/ejemplo.php" method="POST" target="ventana">
                <input type="submit" name="boton1" value="Imprime1">
                <input type="submit" name="boton2" value="Imprime2">
                <input type="submit" name="boton3" value="Imprime3">
            </form>
            <iframe name="ventana" src="../../php/ejemplo.php">
            </iframe><br>
            <form class="LED" action="../../LED/E.php" method="POST">
                <button type="submit" name="buttonLed">Led On</button>
            </form>
            <form class="LED" action="../../LED/E1.php" method="POST">
                <button type="submit" name="buttonLed">Led Off</button>
            </form>

              <!--GPIO17--> 
              <form action="" method="post">
                GPIO 18&nbsp;<input type="submit" name="encender18" value="Encender">
                <input type="submit" name="apagar18" value="Apagar">
                <input type="submit" name="parpadear18" value="Parpadear">

            <br>
            <a class="btn" href="../../LED/index.php"> Prueba Botoness</a>
        </div>





    </div>
</body>

</html>

<?php

// Funciones PHP del pin GPIO 17

if ($_POST[encender18]) { 
    $a- exec("sudo python /var/www/html/TFT-Pruebas/LED/18/enciende.py");
    echo $a;
   }
  
   if ($_POST[apagar18]) { 
    $a- exec("sudo python /var/www/html/TFT-Pruebas/LED/18/apaga.py");
    echo $a;
   }
  
   if ($_POST[parpadear18]) { 
    $a- exec("sudo python /var/www/html/TFT-Pruebas/LED/18/parpadea.py");
    echo $a;
   }

// Fin de las funciónes del pin GPIO 17



?>