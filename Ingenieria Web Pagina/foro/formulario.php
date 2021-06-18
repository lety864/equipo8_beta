<?php
    session_start();
	error_reporting(0);
	$varsesion = $_SESSION['usuario'];
	if($varsesion == null || $varsesion = '')
{
	header("Location: https://gameblog2122.000webhostapp.com/index.html");
}

	if(isset($_GET["respuestas"]))
		$respuestas = $_GET['respuestas'];
	else
		$respuestas = 0;
	if(isset($_GET["identificador"]))
		$identificador = $_GET['identificador'];
	else
		$identificador = 0;
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
            <p>Formulario<i class="far fa-comment-dots"></i></p>
            
<center><table>
<form name="form" action="agregar.php" method="post">
	<input type="hidden" name="identificador" value="<?php echo $identificador;?>">
	<input type="hidden" name="respuestas" value="<?php echo $respuestas;?>">
    <tr>
		<td>Autor </td>
		<td><input type="text" name="autor"></td>
    </tr>
        <tr>
        <td><br></td><td><br></td>
    </tr>
    <tr>
      <td>Titulo</td>
      <td><input type="text" name="titulo"></td>
    </tr>
        <tr>
        <td><br></td><td><br></td>
    </tr>
    <tr>
      <td>Mensaje</td>
      <td><textarea name="mensaje" cols="50" rows="5" required="required"></textarea></td>
    </tr>
    <tr>
        <td><br></td><td><br></td>
    </tr>
    <tr>
      <td><input type="submit" id="submit" name="submit" value="Enviar Mensaje"></td>
    </tr>
    <tr>
        <td><br><br><a href="index.php">Volver al Foro</a></td>
    </tr>
    
  </form>
</table></center>
        </div>
    </main>


    <div id="footer">
        <footer> Copyright © 2021 | Equipo 8</footer>
    </div>
</body>

</html>