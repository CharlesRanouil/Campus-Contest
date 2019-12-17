<?php 
if(isset($_GET['id']) && !empty($_GET['id']))
{
    $id = $_GET['id'];
    include('bdd.php');

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }


if($_GET['mode'] == "on")
{
    $id = $_Get['id']; // this has the value 1
    $sql = "UPDATE user
        SET utiliser='1'
        WHERE id='$id'";

    //then execute the query


}
if($_GET['mode'] == "off")
{ 
   $sql = "UPDATE user
        SET utiliser='0'
        WHERE id='$id'";

    //then execute the query


}

if ($mysqli->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $mysqli->error;
}

$mysqli->close(); die;
}

header('Content-Type: application/json; charset=utf-8');
exit;

?>