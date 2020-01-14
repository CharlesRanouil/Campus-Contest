<?php include '../req_log.php';?>
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
<?php include '../config.php';?>
		  <div class="col-md-10">

		  	<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Edit images</div>
		  			</div>
		  			<div class="content-box-edit box-with-header">
					  <?php
                        $mysqli->real_query("SELECT * FROM edit_img");
                        $res = $mysqli->use_result();

                        while ($row = $res->fetch_assoc()) {
							echo '<div class="block_edit">';
							echo '<div class="desc_img">';
							echo $row['nom'];
							echo '</div>';
							echo '<img class="img_edit" src="';
                            echo $row['url'];
							echo '"alt="';
							echo $row['nom'];
							echo '">';
							echo '<div class="edit_url">';
							echo '<form method="post" action="edit_req.php">';
							echo '<input class="form-control" id="exampleInputName" type="text" name="url';
							echo $row['id'];
							echo '" value="';
							echo $row['url'];
							echo '" >';
							echo '<input class="form-control" id="exampleInput" type="hidden" name="old_url';
							echo $row['id'];
							echo '" value="';
							echo $row['url'];
							echo '" >';
							echo '<button type="submit" class="btn btn-primary btn-block" name="';
							echo $row['id'];
							echo '">OK</button>';
							echo '</div>';
							echo '</form>';
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