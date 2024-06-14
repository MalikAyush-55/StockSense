<?php
session_start();
if(!isset($_SESSION['user'])) header('location: Login.php');
$_SESSION['table'] = 'products';
$user = $_SESSION['user'];
$_SESSION['redirectto'] = 'product-add.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product - Inventory Management System</title>
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
                    <h1 class = "section_header">Create Product</h1>
                    <div id="useraddformcontainer">
                    <form action = "add.php" class = "appform" id = "useraddform" method = "POST" enctype = "multipart/form-data">
                        <div class = "appfrominputcontainer">
                            <label for= "product_name">Product Name</label>
                            <input type = "text" id = "product_name" class = "appfrominput" name = "product_name" placeholder = "Enter product name" >
                        </div>
                        <div class = "appfrominputcontainer" >
                            <label for = "description" >Description</label>
                            <textarea id = "description" placeholder = "Add product description" class = "appfrominput producttextareainput" name = "description"></textarea>
                        </div>
                        <div class = "appfrominputcontainer" >
                           <h3>Suppliers</h3>
                            <select name = "suppliers[]" id = "suppliersSelect" multiple>
                                <option value = "" selected>Select supplier</option>
                                <?php
                                include 'connection.php';
                                $query = 'select * from suppliers';
                                $result = mysqli_query($conn, $query);
                                while($row = mysqli_fetch_assoc($result)){
                                    echo "<option value = '".$row['ID']."'>".$row['supplier_name']."</option>";
                                }
                                ?>
                            </select>
                        </div>
                       
                        <div class = "appfrominputcontainer" >
                            <label for = "description" >Product Image</label>
                            <input type = "file" name = "Image">
                        </div>
                        <button type = "submit" class = "appbtn" name = "submit"><i class="fa-solid fa-plus"></i>Create Product</button>
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