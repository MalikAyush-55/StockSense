<?php
$id = $_POST['id'];
$supplier_name = $_POST['supplier_name'];
$supplier_location = $_POST['supplier_location'];
$email = $_POST['email'];
$result = null;

$query = "update suppliers set supplier_name = '".$supplier_name."',supplier_location ='".$supplier_location."', Email ='".$email."' where ID = ".$id;
include 'connection.php';
$result = mysqli_query($conn, $query);
header('location: supplier-view.php');

?>