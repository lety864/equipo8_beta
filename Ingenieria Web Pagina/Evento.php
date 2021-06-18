<?php
	session_start();
	error_reporting(0);
	$varsesion = $_SESSION['usuario'];
	if($varsesion == null || $varsesion = '')
{
	header("Location: index.html");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Eventos</title>
    <link rel="stylesheet" href="cevento.css">
    <link rel="stylesheet" href="fotns/fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" href="cevento1.css">
    <link rel="stylesheet" href="foro/foro.css">
</head>

<body>
    <h1 id="titulo">
        <center> <i class="fas fa-headset"></i> Eventos  <i class="fas fa-ghost"></i>  </center>
    </h1>
    <div id="header">
        <header>
            <div class="contenedoritem">
                <img src="https://i.chzbgr.com/full/8082338816/h06B17A0C/si-no-los-jugaste-no-tuviste-infancia" alt="" class="contenedorimg">
            </div>
        </header>
    </div>
    <h1 id="titulo">
        <center>¡Cambiamos nuestros eventos mensualmente! mantente al tanto <i class="fas fa-smile-beam"></i> </center>
    </h1>


 <!--<div id="barramenu">
    <ul class="nav" >
        <li id="inicio"> <a href="Equipo_8_Beta.php"> <i class="fas fa-home" ></i>   Pagina principal   </a></li>
        <li> <a href="foro/index.php">  <i class="fas fa-comments" ></i>  Foro     </a>  </li>
        <li> <a href="trucos.php"> <i class="fas fa-dice"></i>   Trucos y +        </a>  </li>
        <li> <a href="Consolas.php">  <i class="fas fa-gamepad"></i>  Consolas          </a>   </li>
        <li> <a href="salir.php">  <i class=""></i>  Salir          </a>   </li>
    
    </ul>

  </div>-->
      <div id="foroContenedor">
        <!--<header>
            <div class="contenedoritem">
                <img src="https://m.gifanimados.com/Gifs-Videojuegos/Animaciones-Videojuegos-Plataformas/Mario-Bros/mario-bros9-30614.gif" alt="" class="contenedorimg">
            </div>
        </header>
        Menu-->
        <nav id="menu">
            <ul>
                <li><a href="Equipo_8_Beta.php">Principal<i class="fas fa-home" ></i></a></li>
                <li><a href="foro/index.php">Foro  <i class="fas fa-comments"></i></a></li>
                <li> <a href="trucos.php"> <i class="fas fa-dice"></i>   Trucos y +        </a>  </li>
                <li><a href="Consolas.php">Consolas  <i class="fas fa-gamepad"></i></a></li>
                <li><a href="Salir.php">Salir </a></li>
            </ul>
        </nav>
    </div>

  <div style="clear: both"></div>


    <main>
       
        <div class="container" >
  
            <ul class="slider">
              <li id="slide1" class="white">
                    <img src="imag/youtube.png" >
                    
              </li>
              <li id="slide2" class="white">
                <img src="imag/evento2.png" >
              </li>
              <li id="slide3" class="blue"  >
                <h1 >Por el momento no hay eventos: <br> ¡Pero podras encontrarlos aqui !</h1>
                <p >Normalmente los eventos son actividades simples a realizar <br> 
                Recuerda que lo mas importante es divertise :D 
                </p>
                
                <a href="" id="evento">Evento del mes </a>
              </li>
            </ul>
            
            <ul class="menu">
              <li>
                <a href="#slide1"></a>
              </li>
              <li>
                <a href="#slide2"></a>
              </li>
               <li>
                <a href="#slide3"></a>
              </li>
            </ul>
            
          </div>
    

        
    </main>

    <div id="footer">
        <footer> Copyright © 2021 | Equipo 8</footer>
    </div>



</body>

</html>