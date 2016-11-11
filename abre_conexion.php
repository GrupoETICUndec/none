<?php

$hotsdb = "localhost";    
$basededatos = "Prueba";    

$usuariodb = "root";    
$clavedb = "3575820as"; 

$tabla_db1 = "Persona"; 
$tabla_db2 = "otratabla";

$conexion_db = mysql_connect("$hotsdb","$usuariodb","$clavedb")
    or die ("Conexión denegada, el Servidor de Base de datos que solicitas NO EXISTE");
    $db = mysql_select_db("$basededatos", $conexion_db)
    or die ("La Base de Datos <b>$basededatos</b> NO EXISTE");
?>
 
