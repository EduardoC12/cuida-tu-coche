<meta charset="utf-8"/>
<?php
include("conexion.php");
$consulta=mysqli_query($conexion,"select * from persona")or die (mysql_error());
$registro=mysqli_fetch_array($consulta);
echo '<body style="background-color:cyan">';
echo "<h2> Consultar </h2>";
echo "<table border>";
echo "<tr> <td> ID </td> <td> Nombre </td> <td> Edad </td> <td> Genero </td> </tr>";
do {
	$c = $registro['cedula'];
	$nom = $registro['nombre'];
	$e = $registro['edad'];
	$g = $registro['genero'];
	echo "<tr> <td> $c </td> <td> $nom </td> <td> $e </td> <td> $g </td> </tr>";
}while($registro= mysqli_fetch_array($consulta));
echo "</table>";
?>
<br/>
<input type="button" onclick="history.back()" name="volver" value= "volver atras">
