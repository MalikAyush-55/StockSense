<?php
session_start();
if(!isset($_SESSION['user'])) header('location: Login.php');
$_SESSION['table'] = 'products';
$user = $_SESSION['user'];
$_SESSION['redirectto'] = 'product-view.php';
$product = include('show.php');

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
                         <h1 class = "section_header"><i class = "fa fa-list"></i>List of Products</h1>
                        <div class="section_content">
                            <div class="users">
                                <table>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Product_name</th>
                                        <th>Description</th>
                                        <th>Created by</th>
                                    </tr>
                                    <tbody>
                                        <?php
                                        foreach($product as $index=> $p){
                                            ?>
                                        <tr>
                                          <td><?= $index + 1 ?></td>
                                          <td>
                                            <img class = "productimages" src = "../IMS/uploads/<?= $p['Image'] ?>" alt =""></td>
                                          <td><?= $p['product_name'] ?></td>
                                          <td><?= $p['description'] ?></td>
                                          <td><?php
                                          include('connection.php');
                                          $pid = $p['created_by'];
                                          $query = "select * from users where ID = ".$pid;
                                          $result3 = mysqli_query($conn, $query);
                                          $row = mysqli_fetch_array($result3);
                                          echo $row['first_name'] .' '. $row['last_name'];
                                          ?>
                                          <td><a href = "deletedata.php?id=<?=$p['ID']?>">Delete</a></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <p class = 'usercount'><?= count($product) ?> Products </p>
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