<?php
session_start();

if(!$_SESSION["validate"]){
    	echo "<script>";
	echo 'if(confirm("Debe logear para ingresar"));';
	echo "location.href='index.html'";
	echo "</script>";

}

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Proyecto PHP ETICUNdeC</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" type="text/css" href="./assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./assets/navbar.css">
        <script src="./assets/navbar.js"></script>
        <script src="./assets/bootstrap/jQuery/jquery.min.js"></script>
        <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
        <!--	
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        -->	
    </head>
    <body>
        <div id="wrapper" class="active">  
            <!-- Sidebar -->
                    <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul id="sidebar_menu" class="sidebar-nav">
                   <li class="sidebar-brand"><a id="menu-toggle" href="#">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
                </ul>
                <ul class="sidebar-nav" id="sidebar">
		  <li class="<?php echo $pagina == 'inicio' ? 'active' : ''; ?>" ><a href="?p=iniciotxt">Inicio<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
		  <li class="<?php echo $pagina == 'mostrar' ? 'active' : ''; ?>"><a href="?p=mostrar">Mostrar<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
                  <li class="<?php echo $pagina == 'registra' ? 'active' : ''; ?>"><a href="?p=registra">Registrar<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
                </ul>
		
		<ul class="sidebar-nav">
		    <li class="<?php echo $pagina == 'profile' ? 'active' : ''; ?>" ><a href="?p=profile">Perfil<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
		    <li><a href="./paginas/cerrarsesion.php">Logout<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
		</ul>

              </div>

              <!-- Page content -->
              <div id="page-content-wrapper">
                <!-- Keep all page content within the page-content inset div! -->
                <div class="page-content inset">
		    <div class="row">
			<div class="col-md-12">
