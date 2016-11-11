<html>
<head>
	<title>Mostrar tabla</title>
</head>
<body>
	<table border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt"><tr>
	<td><font face="verdana"><b>Nombre</b></font></td>
	<td><font face="verdana"><b>Apellido</b></font></td>
	<td><font face="verdana"><b>Direccion</b></font></td>
	<td><font face="verdana"><b>Telefono</b></font></td>
	<td><font face="verdana"><b>Mail</b></font></td>
	<td><font face="verdana"><b>Id Persona</b></font></td>
	</tr>

	<?php  
	  $link = @mysql_connect("localhost", "root","3575820as")
	      or die ("Error al conectar a la base de datos.");
	  @mysql_select_db("Prueba", $link)
	      or die ("Error al conectar a la base de datos.");

	  $query = "SELECT nombre,apellido,direccion,telefono,mail,idpersona " .
	      "FROM Persona";
	  $result = mysql_query($query);
	  $numero = 0;
	  while($row = mysql_fetch_array($result))
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
	  
	  mysql_free_result($result);
	  mysql_close($link);
	  echo "<p>Volver a las opciones anteriores.</p>  <p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p>";  
	?>
	</table>
</body>
</html>