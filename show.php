<?php

include('connection.php');

$table_name = $_SESSION['table'];
$query = "select * from $table_name";
$result3 = mysqli_query($conn, $query);
$rowarray = array();
if(mysqli_num_rows($result3) > 0){
    while($row = mysqli_fetch_assoc($result3)){
        array_push($rowarray, $row);
    }
}
return $rowarray;
?>