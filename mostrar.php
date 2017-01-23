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
          echo "<p>Volver a las opciones anteriores.</p>  <p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p>";  
	?>
	</table>
</body>
</html>
