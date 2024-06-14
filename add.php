<?php
session_start();

include 'tablecolumn.php';

$table_name = $_SESSION['table'];

$colums = $table_column[$table_name];

$user = $_SESSION['user'];
$db_arr = [];
foreach($colums as $c){
  if($c == 'created_by') $values = $user['ID'];
  else if($c == 'Image') {
    $target_dir = "../IMS/uploads/";
    $file_data = $_FILES[$c];
    $file_name = $file_data['name'];
    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
    $file_name = 'product-'.time().'.'.$file_ext;
    $check = getimagesize($file_data['tmp_name']);
    if($check){
      if(move_uploaded_file($file_data["tmp_name"], $target_dir . $file_name)){
        $values = $file_name;
      }
    }
  }
  else $values = isset($_POST[$c]) ? $_POST[$c] : '';
$db_arr[$c] = $values;
}
$table_properties = implode(", ",array_keys($db_arr));
$table_placeholders = implode("','", array_values($db_arr));
$table_placeholders = "'" .$table_placeholders. "'";

var_dump($table_placeholders);
if(isset($_POST['submit'])){
        $insert_method = "insert into $table_name($table_properties) values($table_placeholders)";
        include('connection.php');
        $result = mysqli_query($conn, $insert_method);
    header('location:'.$_SESSION['redirectto']);
}

?>