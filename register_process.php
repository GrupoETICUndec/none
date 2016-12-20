<?php
    $username = filter_input(INPUT_POST, "reg_username");
    $password = filter_input(INPUT_POST, "reg_password");
    $conf_password = filter_input(INPUT_POST,"reg_password_confirm");
    $Nombre = filter_input(INPUT_POST,"reg_fullname");
    $genero = filter_input(INPUT_POST,"reg_gender");

    if($genero === "male"){
	$genero = 1;
    }else{
	$genero = 0;
    }

    if($password === $conf_password){
    
	if(!filter_input(INPUT_POST, "reg_email",FILTER_VALIDATE_EMAIL)){
	    echo "<script>";
	    echo 'if(confirm("Email Invalido"));';
	    echo "window.history.go(-1)";
	    echo "</script>";
	}else{
	    $mail = filter_input(INPUT_POST, "reg_email");
	    
	    echo "Prueba";
	    include("abre_conexion.php");  
	    $QUERY = "INSERT INTO usuarios (usuario,password,nombre,email,gender) VALUES('$username','$password','$Nombre','$mail','$genero');";
	    $conexion_db->query($QUERY);
	    include("cierra_conexion.php"); 
	    header ("location:index.html");
	}
    }else{
	echo "<script>";
	echo 'if(confirm("Las contraseñas son distintas"));';
	echo "window.history.go(-1)";
	echo "</script>";
    }

	    