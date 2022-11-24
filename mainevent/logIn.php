<?php

session_start();

include("connect.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//post
	$user_email = $_POST['email'];
	$password = $_POST['password'];


	if (!empty($user_email) && !empty($password) && !is_numeric($user_email)) {

		//Read the database for stored account
		$query = "select * from `users` where email = '$user_email' limit 1";
		$result = mysqli_query($con, $query);

		if ($result) {
			if ($result && mysqli_num_rows($result) > 0) {

				$user_data = mysqli_fetch_assoc($result);

				if ($user_data['password'] === $password) {

					$_SESSION['id'] = $user_data['id'];
					header("Location: login.php");
					die;
				}
			}
		}

		echo "<script> 
			alert ('Wrong Username and Password!!!');window.location='login.php'	
			</script>";
	} else {
		echo "<script> 
			alert ('Wrong Username and Password!!!');window.location='login.php'	
			</script>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Log In</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/logIn.css">        
    </head>
    
    <body>
        <script src="./logIn.js"></script>

        <a title="Click Here To Go Back To The Home Page" href="basicWeb.html"> 
            <img src="images/Logo.png" class="logo">
        </a>    

        <div class="container">

            <form class="form" id="login" action="loginScript.php" method="POST">

                <h1  class="formTitle">Login</h1>
                <div class="formMessage formMessageError"></div>
                <div class="formInputGroup">
                    <input type="text" class="formInput" placeholder="Email Address" autofocus name="email">
                    <div class="formInputErrorMessage"></div>
                </div>
                
                <div class="formInputGroup">
                    <input type="password" class="formInput" placeholder="Password" autofocus name="password">
                    <div class="formInputErrorMessage"></div>
                </div>
                
                <button class="formButton" type="Submit" name="submit">Submit</button>

                <p class="formText">
                    <a class="formLink" href="adminLogIn.php" >Log In as Administrator</a>
                </p>

                <p class="formText">
                    <a class="formLink" id="linkCreateAccount">Click Here To Create An Account!</a>
                </p>
            </form>

            <form class="formHidden" id="createAccount">
                <h1  class="formTitle">Create Account</h1>
                <div class="formMessage formMessageError"></div>

                <div class="formInputGroup"> 
                    <input type="text" id="signupFullName" class="formInput" placeholder="Full Name" autofocus>
                    <div class="formInputErrorMessage"></div>
                </div>

                <div class="formInputGroup">
                    <input type="email" class="formInput" placeholder="Email Address" autofocus>
                    <div class="formInputErrorMessage"></div>
                </div>
                
                <div class="formInputGroup"> 
                    <input type="password" id="signupPassword"class="formInput" placeholder="Password" autofocus>
                    <div class="formInputErrorMessage"></div>
                </div>
                
                <button class="formButton" type="Submit">Submit</button>

                <p class="formText">
                    <a  class="formLink" id="linkLogIn">Already Have An Account? Sign In</a>
                </p>
            </form>

            
        </div>



    </body>

</html>