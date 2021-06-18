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
$nom = $_POST["nombre"];
$cor = $_POST["correo"];


$query = mysqli_query($conn,"SELECT * FROM user WHERE usuario = '".$us."' ");
$nr = mysqli_num_rows($query);if($nr == 1)
{

	//echo "Correo ya existente en la Base de Datos";
	header("Location: ocupado.html");

}
else if($nr == 0)
{
	///////////////$sql = "INSERT INTO user (usuario , password , nombre, correo ) VALUES ('Test', 'Testing', 'Testing@tesing.com')";
	$sql="insert into user values ('$us','$pa','$nom','$cor')";//Quita los // de este
	//echo "Inserto Datos";
if (mysqli_query($conn, $sql)) {
      //echo "New record created successfully";
} else {
      //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

    header("Location: index.html");//Quita los // de este
}



?>