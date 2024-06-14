<?php
session_start();
if(!isset($_SESSION['user'])) header('location: Login.php');
$_SESSION['table'] = 'suppliers';
$user = $_SESSION['user'];
$_SESSION['redirectto'] = 'supplier-add.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Supplier - Inventory Management System</title>
    <link rel="stylesheet" href="stylehome.css">
</head>
<body>
<div id="dashboardMainContainer">
     <?php include('sidebar.php'); ?>
    <div class="dashboard_content_container" id="dashboard_content_container">
        <?php include('topnav.php');?>
        <div class="dashborad_content">
           
                <div class="dashboard_content_main">
                <div class="row">
                <div class="column column-12">
                    <h1 class = "section_header">Add supplier</h1>
                    <div id="useraddformcontainer">
                    <form action = "add.php" class = "appform" id = "useraddform" method = "POST" enctype = "multipart/form-data">
                        <div class = "appfrominputcontainer">
                            <label for= "supplier_name">Supplier Name</label>
                            <input type = "text" id = "supplier_name" class = "appfrominput" name = "supplier_name" placeholder = "Enter product name" >
                        </div>
                        <div class = "appfrominputcontainer" >
                            <label for = "supplier_location" >Supplier location</label>
                            <input type = "text" id = "supplier_location" placeholder = "Enter location" class = "appfrominput producttextareainput" name = "supplier_location">
                        </div>
                       
                        <div class = "appfrominputcontainer" >
                            <label for = "email" >Email</label>
                            <input type = "text" id = "email" placeholder = "Enter email" class = "appfrominput producttextareainput" name = "email">
                        </div>
                        <button type = "submit" class = "appbtn" name = "submit"><i class="fa-solid fa-plus"></i>Add supplier</button>
                    </form>
                    </div>
                </div>
                    
</div>
            </div>
        </div>
    </div>
</div>

</body>
</html>