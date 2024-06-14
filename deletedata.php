<?php
session_start();
$table_name = $_SESSION['table'];
$id = $_GET['id'];

include 'connection.php';

$query = "delete from $table_name where id =".$id;
$result = mysqli_query($conn, $query);
header('location:' . $_SESSION['redirectto']);
?> 