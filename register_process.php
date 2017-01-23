<?php
    ini_set('display_errors', 'On');
    error_reporting(E_ALL | E_STRICT);
    
    $username = filter_input(INPUT_POST, "reg_username");
    $password = filter_input(INPUT_POST, "reg_password");
    $Nombre = filter_input(INPUT_POST,"reg_fullname");
    $genero = filter_input(INPUT_POST,"reg_gender");
    
//    echo $genero;

//    if($password === $conf_password){
    
//	if(!filter_input(INPUT_POST, "reg_email",FILTER_VALIDATE_EMAIL)){
//	    echo "<script>";
//	    echo 'if(confirm("Email Invalido"));';
//	    echo "window.history.go(-1)";
//	    echo "</script>";
//	}else{
	    $mail = filter_input(INPUT_POST, "reg_email");
	    
	    require_once("abre_conexion.php");  
	    

//	    $host = 'localhost';
//	    $db   = 'usersdb';
//	    $user = 'usuario';
//	    $pass = '123456';
//	    $charset = 'utf8';
//
//	    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
//	    $opt = [
//		PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
//		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//		PDO::ATTR_EMULATE_PREPARES   => false,
//	    ];	    

		$conexion_db = new PDO($dsn, $user, $pass, $opt);

		$conexion_db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );


		$QUERY = "INSERT INTO usuarios (usuario,password,nombre,email,gender) VALUES ('$username','$password','$Nombre','$mail','$genero')";
	        $conexion_db->query($QUERY);
		header ("location:index.html");
		
//	        $tmp = array($username,$password, $Nombre, $mail);
//		var_dump($tmp);    
//    $stmt = $conexion_db->query('SELECT Nombre FROM Nombres');
//    while ($row = $stmt->fetch())
//    {
//	echo $row['Nombre'] . "\n";
//    } 
//try {
//    $conexion_db->prepare($QUERY)->execute($tmp);
//}  catch (PDOException $e) {
//    echo "ocurrio un error con la consulta";
//    if ($e->getCode() == 1062) {
//        // Take some action if there is a key constraint violation, i.e. duplicate name
//    } else {
//        throw $e;
//    }
//}
//	    require_once("cierra_conexion.php"); 
//	    echo "ueba";

//	}
//    }else{
//	echo "<script>";
//	echo 'if(confirm("Las contraseñas son distintas"));';
//	echo "window.history.go(-1)";
//	echo "</script>";
//    }

	    