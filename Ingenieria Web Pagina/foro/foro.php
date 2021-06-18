<?php 
	session_start();
	error_reporting(0);
	$varsesion = $_SESSION['usuario'];
	if($varsesion == null || $varsesion = '')
{
	header("Location: https://gameblog2122.000webhostapp.com/index.html");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="foro.css">
    <link rel="stylesheet" href="https://gameblog2122.000webhostapp.com/fotns/fontawesome-free-5.15.3-web/css/all.css">
    <title>Foro</title>
</head>


<body>
    <h1 id="titulo">
        <center><i class="far fa-comment-dots"></i> Foro <i class="fas fa-bell"></i> </center>
    </h1>

    <div id="foroContenedor">
        <header>
            <div class="contenedoritem">
                <img src="https://m.gifanimados.com/Gifs-Videojuegos/Animaciones-Videojuegos-Plataformas/Mario-Bros/mario-bros9-30614.gif" alt="" class="contenedorimg">
            </div>
        </header>
        <!--Menu-->
        <nav id="menu">
            <ul>
                <li><a href="https://gameblog2122.000webhostapp.com/Equipo_8_Beta.php">Principal<i class="fas fa-home" ></i></a></li>
                <li><a href="https://gameblog2122.000webhostapp.com/trucos.php">Trucos y +  <i class="fas fa-dice"></i></a></li>
                <li><a href="https://gameblog2122.000webhostapp.com/Evento.php">Eventos  <i class="fas fa-bell"></i></a></li>
                <li><a href="https://gameblog2122.000webhostapp.com/Consolas.php">Consolas  <i class="fas fa-gamepad"></i></a></li>
                <li><a href="https://gameblog2122.000webhostapp.com/salir.php">Salir </a></li>
            </ul>
        </nav>
    </div>

    <main>
        <div class="contenedorflex">
            <center>
                <p>Foro <i class="far fa-comment-dots"></i></p>
                
<?php 
	include("conexionBD.php");
	if(isset($_GET["id"]))
	$id = $_GET['id'];
	$query = "SELECT * FROM  foro WHERE ID = '$id' ORDER BY fecha DESC";
	$result = $mysqli->query($query);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$id = $row['ID'];
		$titulo = $row['titulo'];
		$autor = $row['autor'];
		$mensaje = $row['mensaje'];
		$fecha = $row['fecha'];
		$respuestas = $row['respuestas'];
		
		echo "<tr><td>$titulo</tr></td>";
		echo "<table>";
		echo "<tr><td>autor: $autor</td></tr>";
		echo "<tr><td>$mensaje</td></tr>";
		echo "</table>";
		echo "<br /><br /><a href='formulario.php?id&respuestas=$respuestas&identificador=$id'>Responder</a><br />";
	}
	
	$query2 = "SELECT * FROM  foro WHERE identificador = '$id' ORDER BY fecha DESC";
	$result2 = $mysqli->query($query2);
	echo "<br />respuestas:<br /><br />";
	while($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)){
		$id = $row['ID'];
		$titulo = $row['titulo'];
		$autor = $row['autor'];
		$mensaje = $row['mensaje'];
		$fecha = $row['fecha'];
		$respuestas = $row['respuestas'];
		
		echo "<tr><td>$titulo</tr></td>";
		echo "<table>";
		echo "<tr><td>autor: $autor</td></tr>";
		echo "<tr><td>$mensaje</td></tr>";
		echo "</table>";
		echo "<br /><br /><a href='formulario.php?id&respuestas=$respuestas&identificador=$id'>Responder</a><br />";
		
	}
	echo "<br /><br /><a href='index.php'>Volver al Foro</a><br />";
?>
</center>
        </div>
    </main>


    <div id="footer">
        <footer> Copyright © 2021 | Equipo 8</footer>
    </div>
</body>

</html>
