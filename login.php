<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "pagina_web";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (!$conn)
{
	die("No hay conexion: ".mysqli_connect_error());
}

$us = $_POST["usuario"];
$pa = $_POST["password"];


$query = mysqli_query($conn,"SELECT * FROM user WHERE usuario = '".$us."' and password = '".$pa."'");
$nr = mysqli_num_rows($query);
if($nr == 1)
{
header("Location: Equipo_8_Beta.html");
//echo "Bienvenido:" .$us;
}
else if($nr == 0)
{
echo "Usuario No existente en la Base de Datos";
header("Location: Login.html");
}
?>