<?php
$dbhost = "localhost";
$dbuser = "id17020337_user2121";
$dbpass = "d}<#qi?UVzvk}7OA";
$dbname = "id17020337_localhost";

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
    session_start();
	$_SESSION['usuario']=$us;
header("Location: Equipo_8_Beta.php");
//echo "Bienvenido:" .$us;
}
else if($nr == 0)
{
//echo "Usuario No existente en la Base de Datos";
header("Location:index.html");
}
?>