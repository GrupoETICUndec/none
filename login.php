<?php
    session_start();


    ini_set('display_errors', 'On');
    error_reporting(E_ALL | E_STRICT);
    
    require_once ('abre_conexion.php');
    
    $conexion_db = new PDO($dsn, $user, $pass, $opt);

    $conexion_db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    
    $username = filter_input(INPUT_POST, "lg_username");
    $password = filter_input(INPUT_POST, "lg_password");

    $QUERY = "SELECT * FROM usuarios WHERE usuario='$username' and password='$password';";
    $stmt = $conexion_db->query($QUERY);
    $dump = $stmt->rowCount();

    if($dump){
	
    $data = $stmt->fetch();
    $_SESSION = $data;
    $_SESSION["validate"] = 1;
    header("location:inicio.php");
    }
    else
    {
	echo "<script>";
	echo 'if(confirm("Usuario o contraseña incorrecto"));';
	echo "window.history.go(-1)";
	echo "</script>";

    }