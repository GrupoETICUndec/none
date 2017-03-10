<?php
    session_start();


    ini_set('display_errors', 'On');
    error_reporting(E_ALL | E_STRICT);
    
    require_once ('abre_conexion.php');
    
//    $conexion_db = new PDO($dsn, $user, $pass, $opt);

    $conexion_db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    
    $username = filter_input(INPUT_POST, "lg_username");
    $password = filter_input(INPUT_POST, "lg_password");

    $QUERY = "SELECT * FROM usuarios WHERE usuario='$username' and password='$password';";
    $stmt = $conexion_db->query($QUERY);
    $dump = $stmt->rowCount();

    if($dump){
	
    $data = $stmt->fetch();
    var_dump($data);
    $_SESSION = $data;
    $_SESSION["validate"] = 1;
    $remember = filter_input(INPUT_POST, "lg_remember");
    if($remember == 1 || $remember == 'on')
                    {
		    echo "Talfondo";
                    $hour = time() + 3600 * 24 * 30;
                    setcookie('username', $data['usuario'], $hour);
                    setcookie('password', $data['password'], $hour);
                    }
    header("location:../inicio.php");
    }
    else
    {
	echo "<script>";
	echo 'if(confirm("Usuario o contraseña incorrecto"));';
	echo "window.history.go(-1)";
	echo "</script>";

    }
    
