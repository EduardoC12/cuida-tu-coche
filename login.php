<?php

include("conex.php");

$nombre = $_POST["email"];
$pass = $_POST["pass"];

$query = mysqli_query($conn,"SELECT * FROM login WHERE email = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	header("Location: index.html");
}
else if ($nr == 0) 
{
	header("Location: error.html");
}
	

?>