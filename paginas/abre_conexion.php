<?php

//$hotsdb = "localhost";    
//$basededatos = "usersdb";    
//
//$usuariodb = "usuario";    
//$clavedb = "123456"; 

//$tabla_db1 = "Persona"; 


/*
$conexion_db = mysqli_select_db("$basededatos", $conexion_db)
    or die ("La Base de Datos <b>$basededatos</b> NO EXISTE");
// cambio de prueba de Jose Daniel
 */


	    $host = 'localhost';
	    $db   = 'usersdb';
	    $user = 'usuario';
	    $pass = '123456';
	    $charset = 'utf8';

	    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
	    $opt = [
		PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		PDO::ATTR_EMULATE_PREPARES   => false,
//		PDO::TIMEOUT		     => 300,
	    ];

	    $conexion_db = new PDO($dsn, $user, $pass, $opt)
		or die ("Conexión denegada, el Servidor de Base de datos que solicitas NO EXISTE");