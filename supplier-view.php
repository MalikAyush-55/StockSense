<?php
session_start();
if(!isset($_SESSION['user'])) header('location: Login.php');
$_SESSION['table'] = 'suppliers';
$user = $_SESSION['user'];
$_SESSION['redirectto'] = 'supplier-view.php';
$supplier = include('show.php');

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
                         <h1 class = "section_header"><i class = "fa fa-list"></i>List of Suppliers</h1>
                        <div class="section_content">
                            <div class="users">
                                <table>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Location</th>
                                        <th>Email</th>
                                        <th>Created by</th>
                                    </tr>
                                    <tbody>
                                        <?php
                                        foreach($supplier as $index=> $p){
                                            ?>
                                        <tr>
                                          <td><?= $index + 1 ?></td>
                                          <td><?= $p['supplier_name'] ?></td>
                                          <td><?= $p['supplier_location'] ?></td>
                                          <td><?= $p['email'] ?></td>
                                          <td><?= $p['created_by'] ?></td>
                                          <td><a href = "editsupplierdata.php?id=<?=$p['ID']?>">Edit</a></td>
                                          <td><a href = "deletedata.php?id=<?=$p['ID']?>">Delete</a></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <p class = 'usercount'><?= count($supplier) ?> Suppliers </p>
                            </div>
                        </div>
                    </div>
</div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src = "script.js"></script>