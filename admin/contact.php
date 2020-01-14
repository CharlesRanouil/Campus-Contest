<?php include '../req_log.php';?>
<?php include '../config.php';?>
<!-- Test si le user et bien admin ou non -->
<?php 
	if (empty($_SESSION['pseudo'])) {
		header('Location: ../index.php');
	} else {
		if($_SESSION['pseudo']) {
			$session_user = $_SESSION['pseudo'];
			$admin_check_query = "SELECT * FROM users_infos WHERE user_id = (SELECT id FROM users WHERE username = '$session_user') and rang = 1";
			$result = mysqli_query($db, $admin_check_query);
			$admin = mysqli_fetch_assoc($result);
			if ($admin) {
				include 'header.php';
?>
		  <div class="col-md-10">
		  	<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header">
	  					<div class="panel-title ">Messages reçus</div>
						
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
							<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
						</div>
		  			</div>
		  			<div class="content-box-contact box-with-header">
					  <?php
					  	if (isset($_POST['ok'])) {
							$id = mysqli_real_escape_string($db, $_POST['id']);
							$sql = "UPDATE commentaire SET archive = 1 WHERE id = $id";
							$result = mysqli_query($db,$sql);
					}
                        $mysqli->real_query("SELECT * FROM commentaire WHERE archive = 0");
                        $res = $mysqli->use_result();

                        while ($row = $res->fetch_assoc()) {
							echo '<div class="block_contact">';
							echo '<div class="nom_contact">';
							echo 'Nom: ';
							echo  $row['nom'];
							echo '</div>';
							echo '<div class="tel_contact">';
							echo 'Tel: ';
							echo  $row['tel'];
							echo '</div>';
							echo '<div class="email_contact">';
							echo 'Email: ';
							echo  $row['email'];
							echo '</div>';
							echo '<br><div class="txt_msg_contact">Message:</div><br>';
							echo '<div class="msg_contact">';
                            echo $row['message'];
							echo '</div>';
							echo '<form method="post" action="contact.php">';
							echo '<input class="form-control" id="exampleInput" type="hidden" name="id" value="';
							echo $row['id'];
							echo '" >';
							echo '<div class="btn_contact">';
							echo '<button type="submit" class="btn btn-primary btn-block" name="ok">Archiver</button></div>';
							echo '</form>';
                            echo '</div>';
                        }
                    ?>
					</div>
		  		</div>
		  	</div>
			  <div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header">
	  					<div class="panel-title ">Messages archiver</div>
						
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
							<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
						</div>
		  			</div>
		  			<div class="content-box-contact box-with-header">
					  <?php
                        $mysqli->real_query("SELECT * FROM commentaire WHERE archive = 1");
                        $res = $mysqli->use_result();

                        while ($row = $res->fetch_assoc()) {
							echo '<div class="block_contact">';
							echo '<div class="nom_contact">';
							echo 'Nom: ';
							echo  $row['nom'];
							echo '</div>';
							echo '<div class="tel_contact">';
							echo 'Tel: ';
							echo  $row['tel'];
							echo '</div>';
							echo '<div class="email_contact">';
							echo 'Email: ';
							echo  $row['email'];
							echo '</div>';
							echo '<br><div class="txt_msg_contact">Message:</div><br>';
							echo '<div class="msg_contact">';
                            echo $row['message'];
							echo '</div>';
							echo '</div>';
                        }
                    ?>
					</div>
		  		</div>
		  	</div>
		  </div>
		</div>
    </div>
    <?php include 'footer.php';?>
  </body>
</html>
<?php
			} else {
				header('Location: ../membre/accueil.php');
			}
		}
	}
?>