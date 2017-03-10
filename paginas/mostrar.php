


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
		    $asd = $result->fetchAll();
		    $numero = 0;
		    foreach($asd as $row)
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

