<meta charset="utf-8"/>
<?php
include("conexion.php");
?>
<body style="background-color:cyan">
<form action ="" method ="post">
    <h5>ID = RFC ó CURP</5>
    
<h3>Insertar:</h3>
	ID: <input name ="ce"><br/>
	Nombre: <input name="nom"><br/>
	Edad: <input name="edad"><br/>
	Genero: <br/>
	Masculino <input checked value="M" type="radio" name="genero"/>
	Femenino <input value="F" type="radio" name="genero"/>
	<input type="submit" value="Enviar">
</form>
<?php
if($_POST){
	$n= $_POST['nom'];
	$c= $_POST['ce'];
	$e= $_POST['edad'];
	$g= $_POST['genero'];
	mysqli_query($conexion,"insert into persona (nombre,cedula,edad,genero) values('$n','$c','$e','$g')") or die (mysql_error());
	echo "<h2>Dato guardado</h2>";
}
?>
<br/>

<input type="button" onclick="history.back()" name="volver" value="volver atras">