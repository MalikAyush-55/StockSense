<?php
session_start();
if(!isset($_SESSION['user'])) header('location: Login.php');
$_SESSION['table'] = 'users';
$user = $_SESSION['user'];
$_SESSION['redirectto'] = 'user-view.php';
$users = include('show.php');

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
    <?php include('topnav.php'); ?>
        <div class="dashborad_content">
           
                <div class="dashboard_content_main">
                <div class="row">
                
                    <div class="column column-12">
                         <h1 class = "section_header"><i class = "fa fa-list"></i>List of users</h1>
                        <div class="section_content">
                            <div class="users">
                                <table>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                    </tr>
                                    <tbody>
                                        <?php
                                        foreach($users as $index=> $user){
                                            ?>
                                        <tr>
                                          <td><?= $index + 1 ?></td>
                                          <td><?= $user['first_name'] ?></td>
                                          <td><?= $user['last_name'] ?></td>
                                          <td><?= $user['email'] ?></td>
                                          <td><a href = "editdata.php?id=<?=$user['ID']?>">Edit</a></td>
                                          <td><a href = "deletedata.php?id=<?=$user['ID']?>">Delete</a></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <p class = 'usercount'><?= count($users) ?> Users </p>
                            </div>
                        </div>
                    </div>
</div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src = "script.js"></script>
</body>
</html>