<?php
	session_start();
	error_reporting(0);
	$varsesion = $_SESSION['usuario'];
	if($varsesion == null || $varsesion = '')
{
		header("Location: index.html");
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Equipo 8</title>
    <link rel="stylesheet" href="Style0.css" type="text/css" media="screen">
    <style type="text/css"></style>
    <link rel="stylesheet" href="fotns/fontawesome-free-5.15.3-web/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
</head>

<body>
    <h1 id="titulo">
        <center><i class="fas fa-headset"></i>Videojuegos<i class="fas fa-gamepad"></i></center>
    </h1>
    <div id="header">
        <header>
            <div class="contenedoritem">
                <!--Contenedor del slider-->
                <ul class="slider">
                    <li id="slide1">
                        <img src="https://luisgyg.com/wp-content/uploads/2018/11/super-smash.jpg" alt="" class="contenedorimg">
                    </li>
                    <li id="slide2">
                        <img src="https://i.blogs.es/de2cc0/genshin-impact-trailer/1366_2000.jpeg" alt="" class="contenedorimg">
                    </li>
                    <li id="slide3">
                        <img src="https://cdn.andro4all.com/files/2019/09/Call-of-duty-mobile-fondo-pantalla-14.jpg" alt="" class="contenedorimg">
                    </li>
                </ul>
                <ul class="opcion">
                    <li>
                        <a href="#slide1"></a>
                        <a href="#slide2"></a>
                        <a href="#slide3"></a>
                    </li>
                </ul>
            </div>
        </header>
    </div>

    <div id="wrapper">
        <div id="content">
            <section>
                <div class="centro">
                    <article>
                        <p id="titulo2">Nuestro juego de hoy:</p>
                        <h1 id="titulo3">
                            <center>Genshin Impact</center>
                        </h1>
                        <p>
                            <center><img src="imag/gi1.jpg" alt="I1" class="extra3"><br></center>
                        </p>
                        <p> Muchos ya lo han estado probando , pero ¿Por qué una copia de la saga de Zelda ha tenido tanto exito ? Bueno esto se debo mucho a su jugabilidad parecida al juego 'The Legend Of Zelda Breath of the Wild' sin embargo existen varios
                            puntos importantes que se deben destacatar, entre ellos:</p>
                        <p>-Reacciones Elementales.</p>
                        <p>-Mundo Abierto.</p>
                        <p>-Sistema de Gacha.</p>
                        <p>-Distintos Personajes.</p>
                        <p>-Constelaciones , etc.</p>
                        <p>
                            <center><img src="imag/gi5.png" alt="I2" class="extra3"><br></center>
                        </p>
                        <p> Sin embargo existen varios errores que los novatos normalmente realizan, en este articulo definiremos algunos de ellos para ayudarte en tu travesia Viajero!! Primero hablemos de los personajes y sus constelaciones:</p>
                        <p> Cada personaje cuanta con diferentes habilidades, entre ellas habilidades elementales y habilidades definitivas pero, ¿Como afecto esto al juego? Bueno esto es debido a que la reacciones elementales son casi el alma del juego donde
                            gracias a ellas puedes conseguir un estado desfavorable para tu enemigo o un estado beneficioso para ti. Es por ello que en el juego se debe mainear como primer recurso a un equipo de 4 personajes iniciales.</p>
                        <p>Durante el Midgame es importante tener en cuenta que las armas y artefactos que uno consiga no estan preparadas para el desarrollo en Late Game, esto debido que al estar en juego medio apenas estaras consiguiedo tus artefactos
                            y sobre todo tus armas.</p>
                        <p>Late Game</p>
                        <p>Durante el late game uno puede mejorar sus artefactos y sus armas en base a los materiales de refinacion que se consiguen en la herreria. Partiendo de este punto un tema muy concurrido entre la comunidad es la 'builds' de los personajes
                            , con el fin de sacar su maximo potencial, para esto uno debe conocer que tipo de Stats o Substats necesita el personaje con el fin de lograr el objetivo que deseas (Sea vida para tanque ,Full Ataque/Daño critico ADC,etc) para
                            esto uno puede verificarlo en la pantalla : inicio>Ajustes de Equipo>Seleccion de personaje>Detalles. Donde se mostrara una pantalla con todos los Stats del personaje. En esta pantalla uno siempre podra ver tanto el nivel de
                            los talentos , asi como el escalado en base a tus artefactos y el lvl de tu personaje.</p>
                        <p>
                            <center><img src="imag/gi2.png" alt="I1" class="extra3"><br></center>
                        </p>
                        <p id="titulo2">Sistema Pity</p>
                        <p>Este sistema es debido a que funciona de manera igual a un gacha , donde tiras deseos para conseguir algo, y aunque puede salirte algo muy bueno tambien hay veces en las que debes esperar mucho!. Esto es debido a que el sistema
                            del gacha te asegura un personaje o arma de 4 estrellas durante 10 tiros en un banner, esto significa que cada vez que consigas algo de 4 estrellas la probabilidad se reinicia, al inicio uno piensa que puede ser bueno este
                            sistema, sin embargo existe una propiedad de este banner el cual es el deseo en que se asegura un 5 estrellas, esta probabilidad es aproximada al 1%. Y aunque existe esta probabilidad el juego te ayuda a que en el tiro 90 si
                            no has conseguido ningun 5 estrellas (Personaje o Arma) te lo dara de manera automatica.(No existen contadores totales entre cada banner es de manera individual el conteo).</p>

                        <p id="titulo2">Protogemas</p>
                        <p>En este tema debemos aclarar las funciones de las protogemas:</p>
                        <p>-Sirven como recarga de Resina.</p>
                        <p>-Monedas de pago para cambiarlas por deseos(intentos en el gacha que elijas).</p>

                        <p>Aunque es sencillo ver sus funcionalidades, debemos aclarar que normalmente existe un error comun entre los novatos y es que tiran en el banner permanente, pero ¿Por qué es malo esto?. Bueno esto es debido a que existen hasta ahora
                            4 banners : Permanente, Promocional, Armas, Principiantes. Donde una y otra mitad usan una moneda especial(deseos).</p>
                        <p id="titulo2">¿Pero por qué es un error? </p>
                        <p>Normalente cuando uno quiere conseguir un personaje puede tirar en el banner permanente , Principiantes o Promocional, sin embargo existe mas probabilidad de conseguir un personaje al llegar al deseo 90 en el banner Promocional
                            que en cualquier otra debido a que este siempre tiene como premio un personaje 5 estrellas.
                        </p>
                        <p>
                            <center><img src="imag/gi3.jpeg" alt="I3" class="extra3"><br></center>
                        </p>
                        <p>Bueno, sin mas espero haberte ayudado y espero que esta informacion te haya sido de utilidad. Hasta la próxima Viajero!.</p>
                    </article>
                </div>
            </section>
        </div>
    </div>

    <div id="navigation">
        <nav>
            <div class="dropdown">
                <button class="mainmenubtn">Menú</button>
                <div class="dropdown-child">
                    <a href="foro/index.php">Foro<i class="fas fa-comments"></i></a>
                    <a href="Consolas.php">Consolas<i class="fas fa-gamepad"></i></a>
                    <a href="trucos.php">Trucos y +<i class="fas fa-dice"></i></a>
                    <a href="Evento.php">Eventos<i class="fas fa-bell"></i></a>
                    <a href="salir.php">Salir<i class=""></i></a>
                </div>
            </div>
        </nav>
    </div>

    <h2 id="titulo">
        <center> Disfruta del Contenido Hecho por Fans</center>
    </h2>
    <div id="extra">
        <div id="img1" class="animacion"></div>
        <div id="img2" class="animacion"></div>
        <div id="img3" class="animacion"></div>
        <div id="img4" class="animacion"></div>
        <div id="img5" class="animacion"></div>
        <div id="img6" class="animacion"></div>
        <div id="img7" class="animacion"></div>
    </div>


    <div id="footer">
        <footer> Copyright © 2021 | Equipo 8</footer>
    </div>


</body>

</html>