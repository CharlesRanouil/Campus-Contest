<?php
   header('content-type: text/css');
   ob_start('ob_gzhandler');
   header('Cache-Control: max-age=31536000, must-revalidate');

header("Content-type: text/css");
$db = mysqli_connect('localhost:3307', 'root', '', 'portfolio');

$utiliser = $db->query("SELECT url FROM edit_img WHERE nom = 'Background header'");
$bg_header = $utiliser->fetch_assoc();

$utiliser = $db->query("SELECT url FROM edit_img WHERE nom = 'Logo'");
$logo = $utiliser->fetch_assoc();

?>
/* Header */
.header_title {
	background-image: linear-gradient(176deg, rgb(115, 82, 248) 0%, rgba(128,52,236, .5) 100%), url('<?php echo $bg_header['url']; ?>');
}
.logo {
   background-image: url('<?php echo $logo['url']; ?>');
}