<html>  

    <head>  
	<title>Carga de datos</title>  
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

	    $nombre = filter_input(INPUT_POST, "nombre");
	    $apellido = filter_input(INPUT_POST,"apellido");
	    $direccion = filter_input(INPUT_POST,"direccion");
	    $telefono = filter_input(INPUT_POST,"telefono");
	    if(!filter_input(INPUT_POST, "mail",FILTER_VALIDATE_EMAIL)){
		echo "<p>Mail invalido</p>";
		$mail = "";
	    }else{
		$mail = filter_input(INPUT_POST, "mail");
		include("abre_conexion.php");  

		$_GRABAR_SQL = "INSERT INTO $tabla_db1 (nombre,apellido,direccion,telefono,mail) VALUES ('$nombre','$apellido','$direccion','$telefono','$mail')";
		$conexion_db->query($_GRABAR_SQL); 

		include("cierra_conexion.php"); 
	    }

 

	    echo "  
	    <p>Volver.</p>  

	    <p><a href='javascript:history.go(-1)'>ATRÁS</a></p>  
	    ";  
	?>  
    </body>  

</html>   
