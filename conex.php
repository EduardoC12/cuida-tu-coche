<?php

$dbhost = "Localhost";
$dbuser = "root";
$dbpass = ;
$dbname = "cuida-tu-coche";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass , $dbname);

if(!$conn)
{
	die("No hay conexion: ".mysqli_connect_error());	
}

?>
