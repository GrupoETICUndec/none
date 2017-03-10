<?php
    $usuario = $_SESSION['usuario'];
   

    $query = "SELECT * FROM upload WHERE usuario = '$usuario'";
    require_once 'abre_conexion.php';
    $tmp = $conexion_db->prepare($query);

    $tmp->execute();

    $row = $tmp->fetchAll();
    
    $content = $row[0]['content'];
    $fileType = $row[0]['type'];


?>


<div class="container" style="padding-top: 60px;">
  <h1 class="page-header">Edit Profile</h1>
  <div class="row">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="text-center">
	  <img src="data:<?php echo "$fileType"; ?>;base64,<?php echo base64_encode($content);?>" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload a different photo...</h6>
	<form method="post" enctype="multipart/form-data" >
	    <table width="350" border="0" cellpadding="1" cellspacing="1" class="box">
		<tr> 
		    <td width="246">
		    <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
		    <input name="userfile" type="file" id="userfile" class="text-center center-block well well-sm"> 
		    </td>
		</tr>
	    </table>
	</form>
      </div>
    </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      <div class="alert alert-info alert-dismissable">
        <a class="panel-close close" data-dismiss="alert">×</a> 
        <i class="fa fa-coffee"></i>
        This is an <strong>.alert</strong>. Use this to show important messages to the user.
      </div>
      <h3>Personal info</h3>
      <form class="form-horizontal" role="form" id="formeditprofile" method="post">
        <div class="form-group">
          <label class="col-md-3 control-label">Username:</label>
          <div class="col-md-8">
            <input class="form-control" value="janeuser" type="text" id="username">
          </div>
        </div>
<!--
        <div class="form-group">
          <label class="col-md-3 control-label">Password:</label>
          <div class="col-md-8">
            <input class="form-control" value="a11111122333" type="password" id="password" title="Password must contain at least 8 characters and numbers" required pattern="(?=.*\d)(?=.*[a-z]).{8,40}" onchange="this.setCustomValidity(this.validity.patternMismatch ? this.title : ''); form.password_confirm.pattern = this.value;">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Confirm password:</label>
          <div class="col-md-8">
            <input class="form-control" value="a11111122333" type="password" id="password_confirm" title="Password must match" required pattern="(?=.*\d)(?=.*[a-z]).{8,40}">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">First name:</label>
          <div class="col-lg-8">
	      <input class="form-control" value="Estela" type="text" id="primer_nombre">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Last name:</label>
          <div class="col-lg-8">
	      <input class="form-control" value="Silva" type="text" id="segundo_nombre">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Email:</label>
          <div class="col-lg-8">
            <input class="form-control" value="carmenestelasi@gmail.com" type="text" required pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$">
          </div>
        </div>
-->
        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
	      <button type="submit" class="login-button btn btn-primary" formmethod="post" formaction="#" value="Save changes">Save changes</button>
	      <input class="btn btn-primary" value="Save Changes" type="submit" id="upload" formaction="#"/>
            <span></span>
            <input class="btn btn-default" value="Cancel" type="reset" >
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?php

 if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
    {
	$fileName = $_FILES['userfile']['name'];
	$tmpName  = $_FILES['userfile']['tmp_name'];
	$fileSize = $_FILES['userfile']['size'];
	$fileType = $_FILES['userfile']['type'];

	$fp      = fopen($tmpName, 'r');
	$conten = fread($fp, filesize($tmpName));
	$content = addslashes($conten);
	fclose($fp);
	


	if(!get_magic_quotes_gpc())
	{
	    $fileName = addslashes($fileName);
	}
	require_once 'abre_conexion.php';
	$query = "INSERT INTO upload (usuario,name, size, type, content ) ".
	"VALUES ('$usuario' ,'$fileName', '$fileSize', '$fileType', '$content')";

	$conexion_db->query($query) 
		or die('Error, query failed'); 


	echo "<br>File $fileName uploaded<br>";
    } 
    
    echo $_POST['username'];