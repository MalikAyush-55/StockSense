<?php

session_start();
if(isset($_SESSION['user'])) header('location: users-add.php');
$username = NULL;
$password = NULL;
$errormessage = '';
if($_POST){
	include 'connection.php';
if(isset($_POST['username'])){
	$username = $_POST['username'];
}
if(isset($_POST['password'])){
	$password = $_POST['password'];
}
$query = "select * from users where email = '{$username}' and password =  '{$password}' ";
$result = mysqli_query($conn, $query);
if($result){
	if(mysqli_num_rows($result) > 0){
            $userss = mysqli_fetch_assoc($result);
			$_SESSION['user'] = $userss;
			header('Location: users-add.php');
	} else{
		$errormessage = "Kindly check your email and password.";
	}
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>IMS Login - Inventory Management System</title>
	<link rel="stylesheet" href="stylehome.css">
</head>
<body>
<?php if(!empty($errormessage)){ ?>
                  <div id = "errormessage">
					<p> Error:  <?= $errormessage ?> </p>
</div>
<?php } ?>
    <div id="loginBody">
	
	<div class="container">
		<div class="loginHeader">
			<h1>IMS</h1>
			<p>Inventory Management System</p>
		</div>
		<div class="loginBody">
			<form action = "login.php" method = "POST">
				
				<div class="loginInputsContainer">
					<label for="">Username</label>
					<input placeholder="username" name="username" type="text" />
				</div>
				<div class="loginInputsContainer">
					<label for="">Password</label>
					<input placeholder="password" name="password" type="password" />
				</div>
				<div class="loginButtonContainer">
					<button>login</button>
				</div>
			</form>
		</div>
	</div>
    </div>
</body>
</html>