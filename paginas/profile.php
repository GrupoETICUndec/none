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
<div class="container">
    <div class="span3 well">
        <center>
        <a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="data:<?php echo "$fileType"; ?>;base64,<?php echo base64_encode($content); ?>" name="aboutme" width="140" height="140" class="img-circle" ></a>
        <h3><?php echo $usuario ?></h3>
        <em>click my face for more</em>
	</center>
	<div class="<?php echo $pagina == 'profiledit' ? 'active' : ''; ?>">
	    <a href="?p=profiledit">Edit profile</a>
	</div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title" id="myModalLabel">More About Joe</h4>
                    </div>
                <div class="modal-body">
                    <center>
                    <img src="data:<?php echo "$fileType"; ?>;base64,<?php echo base64_encode($content); ?>" id="aboutme" width="140" height="140" border="0" class="img-circle">
                    <h3 class="media-heading"><?php echo $usuario ?></h3>
                    <span><strong>Skills: </strong></span>
                        <span class="label label-warning">HTML5/CSS</span>
                        <span class="label label-info">Adobe CS 5.5</span>
                        <span class="label label-info">Microsoft Office</span>
                        <span class="label label-success">Windows XP, Vista, 7</span>
                    </center>
                    <hr>
                    <center>
                    <p class="text-left"><strong>Bio: </strong><br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem dui, tempor sit amet commodo a, vulputate vel tellus.</p>
                    <br>
                    </center>
                </div>
                <div class="modal-footer">
                    <center>
                    <button type="button" class="btn btn-default" data-dismiss="modal">I've heard enough about Joe</button>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
