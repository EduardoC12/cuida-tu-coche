<?php

$servidor="localhost";
$usuario="root";
$clave="^";
$base="cuida-tu-coche";

$conn = mysqli_connect($servidor, $usuario, $clave, $base);
if (!$conn) 
{
	die("No hay conexión: ".mysqli_connect_error());
}

$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];

$query = mysqli_query($conn,"SELECT * FROM LoginAdministrador  WHERE usuario = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	header("Location: Admi&Capturista.html");
	//echo "Bienvenido:" .$nombre;
}
else if ($nr == 0) 
{
	header("Location: error.html");
	//echo "No ingreso"; 
}
	

?>