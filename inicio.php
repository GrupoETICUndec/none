<?php
session_start();
if(!$_SESSION["validate"]){
    	echo "<script>";
	echo 'if(confirm("Debe logear para ingresar"));';
	echo "location.href='index.html'";
	echo "</script>";

}
?>
<html>  

<head>  
<title>Guardar datos en una base de datos</title>  
</head>  

    <body>  
	<?php
	    echo "Bienvenido ".$_SESSION['nombre'];
	?>
	<form method="POST" action="mostrar.php" action="registrar.php">
		<p align="center">
			<input type="submit" id="mostrar_tabla" name="mostrar_tabla" value="Mostrar" onclick="document.formulario.action='mostrar.php'"/>
	    </p>
	</form>
	<form method="POST" action="registra.php">  
		<p align="center">
			<input type="submit" id="insertar_datos" name="insertar_datos" value="Insertar" onclick="document.formulario.action='registrar.php'"/>
		</p>
	</form>  
	<!-- Prueba Commit -->
	
	<p>Para cerrar sesion haga click <a href="cerrarsesion.php">aqui</a></p>

    </body>  

</html>  
