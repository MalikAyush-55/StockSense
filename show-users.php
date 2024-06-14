<?php
include('connection.php');

$query = "select * from users";
$result3 = mysqli_query($conn, $query);
$rowarray = array();
if(mysqli_num_rows($result3) > 0){
    while($row = mysqli_fetch_assoc($result3)){
        array_push($rowarray, $row);
    }
}
return $rowarray;
?>