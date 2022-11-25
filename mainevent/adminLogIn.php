<?php

session_start();

include("connect.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//post
	$admin_email = $_POST['email'];
	$password = $_POST['password'];


	if (!empty($admin_email) && !empty($password) && !is_numeric($admin_email)) {

		//Read the database for stored account
		$query = "select * from `admin` where email = '$admin_email' limit 1";
		$result = mysqli_query($con, $query);

		if ($result) {
			if ($result && mysqli_num_rows($result) > 0) {

				$user_data = mysqli_fetch_assoc($result);

				if ($user_data['password'] === $password) {

					$_SESSION['id'] = $user_data['id'];
					header("Location: adminpage.php");
					die;
				}
			}
		}

		echo "<script> 
			alert ('Wrong Username and Password!!!');window.location='adminlogin.php'	
			</script>";
	} else {
		echo "<script> 
			alert ('Wrong Username and Password!!!');window.location='adminlogin.php'	
			</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<title>Administrator Log In</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="./css/AdminlogIn.css">

</head>

<body>
	<script src="js/AdminlogIn.js"></script>

	<a title="Click Here To Go Back To The Home Page" href="basicWeb.html">
		<img src="images/Logo.png" class="logo">
	</a>

	<div class="container">


		<form class="form" id="login" method="POST">

			<h1 class="formTitle">Administrator Login</h1>

			<div class="formMessage formMessageError"></div>

			<div class="formInputGroup">
				<input type="text" class="formInput" name="email" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>" placeholder="Administrator Email" autofocus>
			</div>

			<div class="formInputGroup">
				<input type="password" class="formInput" name="password" placeholder="Administrator Password" autofocus>
			</div>

			<button class="formButton" name="Log In">Submit</button>

			<p class="formText">
				<a class="formLink" href="logIn.php">Log in as User</a>
			</p>

	</div>


</body>


</html>