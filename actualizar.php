<meta charset="utf-8"/> 
<?php
include("conexion.php"); 
$consulta = mysqli_query($conexion, "select * from persona");
$registros = mysqli_fetch_array($consulta);
?>
<body style="background-color:cyan">
<form action = "" method = "post">
Seleccione para Actualizar: <br /> 
<select name = "persona"> <!-- es el nombre del select no el de la tabla solo coincidieron -->
<?php 
do{
$id = $registros['id']; 
$nom = $registros['nombre'];
?>
<option value = "<?php echo $id; ?>"> 
<?php
echo $nom;
?>
</option> 
<?php
}while($registros = mysqli_fetch_array($consulta));
?>
</select> 
<input type="submit" name="actu" value = "Actualizar",
/>
</form>
<?php
if(isset($_POST['actu'])) {
$p = $_POST['persona']; 
$consulta2 = mysqli_query($conexion, "select * from persona where id = '$p'") or die (mysql_error()); 
$registros2 = mysqli_fetch_array($consulta2);
$c = $registros2['cedula']; 
$n = $registros2['nombre'];
$e = $registros2['edad']; 
$g = $registros2['genero'];
?>
<form method = "post">
ID: <input name="c" value = "<?php echo $c; ?>" /> <br /> 
Nombre: <input name="n" value = "<?php echo $n; ?>" /> <br /> 
Edad: <input name="e" value = "<?php echo $e; ?>" /> <br /> 
Genero: 
Masculino <input <?php if($g == "M"){echo "checked";} ?> type = "radio" name="g" value = "M" /> 
Femenino <input <?php if($g == "F"){echo "checked";} ?> type = "radio" name="g" value= "F" /> <br /> 
<input type="hidden" name="id" value = "<?php echo $p; ?>"/>
<input value="Actualizar" type="submit" name="actufinal"> 
</form> 
<?php
}
?>

<?php 
if(isset($_POST['actufinal' ])){
$id = $_POST['id']; 
$c = $_POST['c']; 
$n = $_POST['n']; 
$e = $_POST['e']; 
$g = $_POST['g']; 
mysqli_query($conexion, "update persona set cedula = '$c', nombre = '$n', edad = '$e', genero = '$g'
where id = '$id'") or die (mysql_error()); 
echo "<h2> Dato Actualizado </h2>";
}
?>
<br />
<input type="button" onclick="history.back()" name="volver" value="Volver atrás">
