<?php

$conn = mysqli_connect("localhost", "root", "", "Inventory");
if(!$conn){
      $error_message = "Internal sonnection problem";
      die;
}
?>