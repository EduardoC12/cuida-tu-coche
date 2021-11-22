<meta charset="utf-8"/>
<?php
include("conexion.php");
?>
<body style="background-color:cyan">
<form action ="" method ="post">
	Insertar <br/>
	ID: <input name ="cod"><br/>
	matricula: <input name="mat"><br/>
	Año: <input name="ano"><br/>
	<input type="submit" value="Enviar">
</form>
<?php
if($_POST){
	$c= $_POST['cod'];
	$m= $_POST['mat'];
	$a= $_POST['ano'];
mysqli_query($conexion,"insert into coche (codigo,matricula,ano) values('$c','$m','$a')") or
 die (mysql_error());
	echo "<h2>Dato guardado</h2>";
}
?>
<br/>
<input type="button" onclick="history.back()" name="volver" value="Regresar">
