<?php
$uid = $_GET['id'];
include 'connection.php';
$query = "select * from users where id = " .$uid;
$result = mysqli_query($conn, $query);

?>
<! DOCTYPE>
<html>
<head>
<meta charset = "utf-8">
<link rel = "stylesheet" href = "stylehome.css">
</head>
<body>

    <div class="column column-5">


                    <h1 class = "section_header">Update User</h1>
                    <div id="useraddformcontainer">
                   
                    <form action = "updatedata.php" class = "appform" id = "useraddform" method = "POST">
                    <?php while($row = mysqli_fetch_array($result)){ ?>
                    <input type = "hidden" name = "id" value = "<?= $uid; ?>">
                        <div class = "appfrominputcontainer">
                            <label for= "first_name">First Name</label>
                            <input type = "text" id = "first_name" class = "appfrominput" name = "first_name" value = "<?=$row['first_name'];?>">
                        </div>
                        <div class = "appfrominputcontainer" >
                            <label for = "last_name" >Last Name</label>
                            <input type = "text" id = "last_name" class = "appfrominput" name = "last_name" value = "<?=$row['last_name'];?>">
                        </div>
                        <div class = "appfrominputcontainer">
                            <label for = "email" >Email</label>
                            <input type = "text" id = "email" class = "appfrominput" name = "email" value = "<?=$row['email'];?>">
                        </div>
                        <button type = "submit" class = "appbtn" name = "submit"><i class="fa-solid fa-plus"></i>Update</button>
                    </form>
                    </div>
                </div>
<?php } ?>
</body>
</html>