<?php
include("conex.php");

$email = $_POST["email"];
$pass = $_POST["pass"];

	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['grabardatos']))
	
	{
	$sqlgrabar = "INSERT INTO login(email, password) values ('$email','$pass')";

if(mysqli_query($conn,$sqlgrabar))

{
echo "<script> alert('Usuario registrado: $email');window.location= 'index00.html' </script>";

}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}

?>