<meta charset="utf-8"/>
<?php
echo '<body style="background-color:cyan">';
     include("conexion.php");
     $consulta=mysqli_query($conexion,"select * from persona");
     $registro=mysqli_fetch_array($consulta);
?>
<script>
	function eliminar(){
		if(confirm("¿Deseas eliminar el registro")){
			formelimina.submit();
		}
		else {
			alert("Registro no eliminado");
		}
	}
</script>
<form method = "post" name= "formelimina">
	seleccione para eliminar: <br/>
	<select onchange = "eliminar()" name = "persona">
<option> Seleccione </option>
<?php
do{
	$id = $registro['id'];
    $nom = $registro['nombre'];

	?>
	<option value = "<?php echo $id; ?>"> <?php echo $nom; ?> </option>

	<?php

      }while ($registro=mysqli_fetch_array($consulta));

 ?>

</option>

  </select>

</form>

<?php
    if(isset($_POST['persona'])){
	     $p = $_POST['persona'];
		mysqli_query($conexion,"delete from persona where id = '$p'") or die (mysql_error());
		echo "<h2> Registro eliminado </h2>";
		header("location:eliminar.php");

	}
	?>
	<br/>
	<input type="button" onclick="history.back()" name="volver" value ="volver atras">
	