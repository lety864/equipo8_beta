<?php
echo "Jalo";
/*
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
$nom = $_POST["nombre"];
$cor = $_POST["correo"];


$query = mysqli_query($conn,"SELECT * FROM user WHERE usuario = '".$us."' ");
$nr = mysqli_num_rows($query);if($nr == 1)
{

	echo "Correo ya existente en la Base de Datos";
	header("Location: index.html");

}
else if($nr == 0)
{
	//$sql = "INSERT INTO user (usuario , password , nombre, correo ) VALUES ('Test', 'Testing', 'Testing@tesing.com')";
	$sql="insert into user values ('$us','$pa','$nom','$cor')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo "Bienvenido:" .$us;
header("Location: login.html");
}
$sql="insert into user values ('$us','$pa','$nom','$cor')";
*/

?>