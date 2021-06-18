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
    <link rel="stylesheet" href="Consolas.css">
    <link rel="stylesheet" href="fotns/fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" href="foro/foro.css">
    <title>Pagina de Consolas</title>
</head>

<body>
    <h1 id="titulo">
        <center> <i class="fas fa-headset"></i> Consolas <i class="fas fa-ghost"></i></center>
    </h1>
    <div id="header">
        <header>
            <div class="contenedoritem">
                <img src="https://i.chzbgr.com/full/8082338816/h06B17A0C/si-no-los-jugaste-no-tuviste-infancia" alt="" class="contenedorimg">
            </div>
        </header>
    </div>
    <h1 id="titulo">
        <center> <i class="fas fa-newspaper "></i>  Disfrute de nuestras noticias de consolas <i class="fas fa-newspaper"></i> </center>
    </h1>
  <!--
  <div id="barramenu">
    <ul class="nav" >
        <li id="inicio"> <a href="Equipo_8_Beta.php"> <i class="fas fa-home" ></i>   Pagina principal   </a></li>
        <li> <a href="foro/index.php">  <i class="fas fa-comments" ></i>  Foro     </a>  </li>
        <li> <a href="trucos.php"> <i class="fas fa-dice"></i>   Trucos y +        </a>  </li>
        <li> <a href="Evento.php">  <i class="fas fa-bell"></i>  Eventos          </a>   </li>
        <li> <a href="salir.php">  <i class=""></i>  Salir          </a>   </li>
    </ul>

  </div>
-->
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
                <li> <a href="Evento.php">  <i class="fas fa-bell"></i>  Eventos          </a>   </li>
                <li><a href="Salir.php">Salir </a></li>
            </ul>
        </nav>
    </div>
   
<main>
        <div class="contenedorflex">
           

            <h1 > Game boy de Nintendo (21 de Abril  de 1989)</h1>  <br>
<p>
               
         <h2>       Game Boy es una videoconsola portatil,la cual fue desarrollada por Nintendo. <br>
Entre los juegos que se pueden mencionar estan Tetris, Pokemon rojo y Pokemon azul, Super Mario Land
,Kirby's Dream Land, Metroid II: Return of Samus, Donkey Kong Country.

Esta consola no esta en produccion, pero puede encontrarse en diferentes lugares y diferentes precios.
Dependiendo del modelo de la consola puedes encontrarlo entre $200 y $2000.

</h2>
<br>
<img src="imag/consolas1.jpg" alt="gameboy" >


            </p>

          
            
        </div>


        <div class="contenedorflex">
            <h1>   Nintendo Game-cube (14 de Septiembre de 2001)  </h1>
            <p>
         <h2>       Es la quinta consola lanzada por Nintendo,  la continuacion de Nintendo 64. <br>
Existen diversos videojuegos para el GameCube: Se puede mencionar Metroid Prime, Zelda wind waker, Resident Evil 4,Pikmin 2,
Zelda Twilight Princess, Super Smash Bros Melee, Resident Evil, Soul Calibur 2, Baten Kaitos, Paper Mario: La puerta Milenaria.

Al ser una consola no tan antigüa, su precio se encuentra mayormente entre los $2000
</h2>
<br>

<img src="imag/consolas2.jpg" alt="GameCube" width="300" height="200">

            </p>
        </div>


                <div class="contenedorflex">
            <h1>   Play Station 2 (4 de Marzo de 2000) </h1>
<p>

 <h2>   Playstation 2 es la segunda videoconsola perteneciente a Sony Computer Entertainment. <br>
    Entre los mas conocidos videojuegos pertenecientes a esta gran consola podemos encontrar a grand theft auto: San Andreas,
    Final Fantasy XII, Megaman Series, Guitar Hero, Guitar Hero III, Resident Evil 4, King of Fighters,Speed Racer,Spiderman.
    
    Los precios que pueden encontrarse son realmente variados, es necesario tener mucha suerte si se desea conseguirla a un buen precio,
    pues puede encontrarse consolas en buen estado en $3000 o bien, si podemos llamarlo mala suerte, tambien podrias conseguirlo
    cercano a $30,000
</h2>
<br>
<img src="imag/consolas3.jpg" alt="Playstation" height="250"> 


</p>
        </div>


        <div class="contenedorflex">
            <h1>   XBOX One (22 de Noviembre 2013) </h1>

        <h2>   Xbox One es la tercera videoconsola desarrollada  por Xbos, que a su vez es producida por Microsoft. <br>
Entre los juegos mas destacados se encuentra Grand thef auto V, Minecraft,FIFA 18, Call of duty, Halo,Halo 5,Doom Eternal,
Dragon Ball Figther Z.
<br>
Se puede encontrar en un precio de $6000

</h2>
<img src="imag/consolas4.jpg" alt="xboxone" width="200" height="300">

        </div>

    </main>






    <div id="footer">
        <footer> Copyright © 2021 | Equipo 8</footer>
    </div>

</body>

</html>