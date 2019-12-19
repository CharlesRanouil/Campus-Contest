<?php 

// db connection
include 'config.php';


if(isset($_POST['switch'])){

    $utiliser = $mysqli->query("SELECT utiliser FROM users WHERE id = 1");
    $donnee = $utiliser->fetch_assoc();

    if ($donnee['utiliser'] == 0) {
        mysqli_query($mysqli,"UPDATE users SET utiliser = 1 WHERE id = 1 ");
        mysqli_query($mysqli,"UPDATE users SET utiliser = 0 WHERE id = 2 ");
    } 
    
    if ($donnee['utiliser'] == 1) {
        mysqli_query($mysqli,"UPDATE users SET utiliser = 0 WHERE id = 1 ");
        mysqli_query($mysqli,"UPDATE users SET utiliser = 1 WHERE id = 2 ");
    }

}
header ("Location: $_SERVER[HTTP_REFERER]" );
?>