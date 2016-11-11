<html>  

<head>  
<title>Guardamos los datos en la base de datos</title>  
</head>  

<body>  
<form method="POST" action="registra.php">
		<p>Nombre    <input type="text" name="nombre" size="20"></p>
		<p>Apellido  <input type="text" name="apellido" size="20"></p>
		<p>Direccion <input type="text" name="direccion" size="20"></p>
		<p>Telefono  <input type="text" name="telefono" size="20"></p>
		<p>Mail      <input type="text" name="mail" size="20"></p>  
		  
		<p><input type="submit" value="Guardar datos" name="B1"></p>  
</form>
<?php  

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$mail = $_POST["mail"];  

include("abre_conexion.php");  

$_GRABAR_SQL = "INSERT INTO $tabla_db1 (nombre,apellido,direccion,telefono,mail) VALUES ('$nombre','$apellido','$direccion','$telefono',
'$mail')";
mysql_query($_GRABAR_SQL); 

include("cierra_conexion.php");  

echo "  
<p>Volver.</p>  

<p><a href='javascript:history.go(-1)'>ATRÁS</a></p>  
";  
?>  
</body>  

</html>   
