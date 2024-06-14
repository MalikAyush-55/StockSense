<?php
$user = $_SESSION['user'];
?>
<div class="dashboard_sidebar" id="dashboard_sidebar">
        <h3 class="dashboard_logo" id="dashboard_logo">IMS</h3>
<div class="dashboard_sidebar_user">
    <img src="https://www.chatgptguide.ai/wp-content/uploads/2023/08/Selena-Gomez.png" alt="user image." id="userImage"><br><br>
    <span><?= $user['first_name'].' '.$user['last_name'] ?></span>

</div>
<div class="dashboard_sidebar_menus">
    <ul class="dashboard_menu_lists">
    <li class = "liMainMenu">
        <a href="users-add.php"><i class="fa fa-dashboard"></i><span class="menuText">Product Management</span></a>
        <ul class = "subMenues">
            <li><a class = "subMenuLink" href = "product-view.php">View Products</a></li>
            <li><a class = "subMenuLink" href = "product-add.php">Add product</a></li>
        </ul>
    </li>
    <li class = "liMainMenu">
        <a href="users-add.php"><i class="fa fa-dashboard"></i><span class="menuText">Supplier Management</span></a>
        <ul class = "subMenues">
            <li><a class = "subMenuLink" href = "supplier-view.php">View Supplier</a></li>
            <li><a class = "subMenuLink" href = "supplier-add.php">Add Supplier</a></li>
        </ul>
    </li>
    <li class = "liMainMenu">
        <a href = "users-add.php"><span class = "menuText">Add user</span></a>
        <ul class = "subMenues">
            <li><a class = "subMenuLink" href = "user-view.php">View users</a></li>
            <li><a class = "subMenuLink" href = "users-add.php">Add Users</a></li>
        </ul>
    </li>
</ul>

</div>

</div>
