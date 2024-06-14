<?php
$id = $_POST['id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$result = null;

$query = "update users set first_name = '".$first_name."',last_name ='".$last_name."', Email ='".$email."' where ID = ".$id;
include 'connection.php';
$result = mysqli_query($conn, $query);
header('location: user-view.php');

?>