<?php 
include '../req_log.php';
include '../config.php';

$mysqli->real_query("SELECT * FROM edit_img");
$res = $mysqli->use_result();

while ($row = $res->fetch_assoc()) {
	$post = $row['id'];
	$var1 = 'url' . $row['id'];
	$var2 = 'old_url' . $row['id'];
	if (isset($_POST[$post])) {
		$url = mysqli_real_escape_string($db, $_POST[$var1]);
		$old_url = mysqli_real_escape_string($db, $_POST[$var2]);
		$sql = "UPDATE edit_img SET url = '$url' WHERE url = '$old_url' AND id = $post";
		$result = mysqli_query($db,$sql);
		header('Location: edit.php');
}
}
?>