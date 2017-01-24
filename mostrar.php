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
	    <title>Mostrar tabla</title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	    <script src="./bootstrap/jQuery/jquery.min.js"></script>
	    <script src="./bootstrap/js/bootstrap.min.js"></script>
	    <!--	
	    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    -->
    </head>
    <body>
	<div class="container">
	    <div title="Titulo" class="text-center text-info">
		<h1>
		    Tabla Nombres
		</h1>		
	    </div>

	    <table class="table table-bordered table-hover table-striped">
		<thead>
		<tr>
		    <th><font face="verdana"><b>Nombre</b></font></th>
		    <th><font face="verdana"><b>Apellido</b></font></th>
		    <th><font face="verdana"><b>Direccion</b></font></th>
		    <th><font face="verdana"><b>Telefono</b></font></th>
		    <th><font face="verdana"><b>Mail</b></font></th>
		    <th><font face="verdana"><b>Id Persona</b></font></th>
		</tr>
		</thead>
		<tbody>
		<?php  
		    include("abre_conexion.php");  

		    $query = "SELECT nombre,apellido,direccion,telefono,mail,idpersona " .
			"FROM Persona";
		    $result = $conexion_db->query($query);
		    $numero = 0;
		    while($row = $result->fetch_assoc())
		    {
			echo "<tr><td width=\"25%\"><font face=\"verdana\">" . 
				$row["nombre"] . "</font></td>";
			echo "<td width=\"25%\"><font face=\"verdana\">" . 
				$row["apellido"] . "</font></td>";
			echo "<td width=\"25%\"><font face=\"verdana\">" . 
				$row["direccion"] . "</font></td>";
			echo "<td width=\"25%\"><font face=\"verdana\">" . 
				$row["telefono"]. "</font></td>";   
			echo "<td width=\"25%\"><font face=\"verdana\">" . 
				$row["mail"]. "</font></td>";
			echo "<td width=\"25%\"><font face=\"verdana\">" . 
				$row["idpersona"]. "</font></td></tr>";
			$numero++;
		    }
		    echo "<tr><td colspan=\"15\"><font face=\"verdana\"><b>Número: " . $numero . 
			"</b></font></td></tr>";

		    $result->free();
		    include("cierra_conexion.php");  
		    //echo "<p>Volver a las opciones anteriores.</p>  <p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p>";  
		?>
		</tbody>
	    </table>
	    <div title="Boton regresar" class="text-center">
		<a href="inicio.php" class="btn btn-success"> Volver</a>
	    </div>
	</div>
    </body>
</html>
