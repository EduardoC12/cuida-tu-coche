<meta charset="utf-8"/>
<?php
include("conexion.php");
$consulta=mysqli_query($conexion,"select * from coche")or die (mysql_error());
$registro=mysqli_fetch_array($consulta);
echo '<body style="background-color:cyan">';
echo "<h2> Consultar </h2>";
echo "<table border>";
echo "<tr> <td> ID </td> <td> Marca </td><td>Año</td> </tr>";
do {
	$co = $registro['codigo'];
	$ma = $registro['matricula'];
	$an= $registro['ano'];
	echo "<tr> <td> $co </td> <td> $ma </td> <td> $an </td> <td> </tr>";
}while($registro= mysqli_fetch_array($consulta));
echo "</table>";
?>
<br/>
<input type="button" onclick="history.back()" name="volver" value= "Regresar atras">
