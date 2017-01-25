	<div class="container center-block">
	    <div class="col-md-3"></div>
	<div class="col-md-6">
	    <div class="form-area">  
		<form role="form" class="form-horizontal" method="POST">
		<br style="clear:both">
			    <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
					<div class="form-group">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="telefono" name="telefono" placeholder="Número" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="mail" name="mail" placeholder="Email" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" required>
					</div>
		    <div title="Boton guardar" class="text-center">
			<input type="submit" value="Guardar datos" name="B1" class="btn btn-success">
		    </div>
		</form>
	    </div>
	</div>
	<div class="col-md-3"></div> 
	</div>

	<?php  
	    
	    $nombre = filter_input(INPUT_POST, "nombre");
	    $apellido = filter_input(INPUT_POST,"apellido");
	    $direccion = filter_input(INPUT_POST,"direccion");
	    $telefono = filter_input(INPUT_POST,"telefono");
	    $mail = filter_input(INPUT_POST, "mail");
	    
	    if(isset($nombre) && isset($apellido) && isset($direccion) && isset($telefono) && isset($mail)){
		require_once("abre_conexion.php");  

		$_GRABAR_SQL = "INSERT INTO Persona (nombre,apellido,direccion,telefono,mail) VALUES ('$nombre','$apellido','$direccion','$telefono','$mail')";
		$conexion_db->query($_GRABAR_SQL); 

		require_once("cierra_conexion.php"); 
	    }
 
//
//	    echo "  
//	    <p>Volver.</p>  
//
//	    <p><a href='inicio.php'>ATRÁS</a></p>";  
	?> 
