<?php
session_start();
if(!isset($_SESSION['user'])) header('location: Login.php');
$_SESSION['table'] = 'users';
$user = $_SESSION['user'];
$_SESSION['redirectto'] = 'users-add.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Inventory Management System</title>
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
                    <h1 class = "section_header">Insert User</h1>
                    <div id="useraddformcontainer">
                    <form action = "add.php" class = "appform" id = "useraddform" method = "POST">
                        <div class = "appfrominputcontainer">
                            <label for= "first_name">First Name</label>
                            <input type = "text" id = "first_name" class = "appfrominput" name = "first_name">
                        </div>
                        <div class = "appfrominputcontainer" >
                            <label for = "last_name" >Last Name</label>
                            <input type = "text" id = "last_name" class = "appfrominput" name = "last_name">
                        </div>
                        <div class = "appfrominputcontainer">
                            <label for = "email" >Email</label>
                            <input type = "text" id = "email" class = "appfrominput" name = "email">
                        </div>
                        <div class = "appfrominputcontainer">
                            <label for = "password" >Password</label>
                            <input type = "password" id = "password" class = "appfrominput" name = "password">
                        </div>
                        <button type = "submit" class = "appbtn" name = "submit"><i class="fa-solid fa-plus"></i>Add user</button>
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