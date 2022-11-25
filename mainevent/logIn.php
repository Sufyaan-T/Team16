
<?php

session_start();

include("connect.php");
// include("functions.php");


// if ($_SERVER['REQUEST_METHOD'] == "POST") {
// 	//post
// 	$user_email = $_POST['email'];
// 	$password = $_POST['password'];


// 	if (!empty($user_email) && !empty($password) && !is_numeric($user_email)) {

// 		//Read the database for stored account
// 		$query = "SELECT * from `users` where email = '$user_email' limit 1";
// 		$result = mysqli_query($con, $query);

// 		if ($result) {
// 			if ($result && mysqli_num_rows($result) > 0) {

// 				$user_data = mysqli_fetch_assoc($result);

// 				if ($user_data['password'] === $password) {

// 					$_SESSION['id'] = $user_data['id'];
// 					header("Location: login.php");
// 					die;
// 				}
// 			}
// 		}

// 		echo "<script> 
// 			alert ('Wrong Username and Password!!!');window.location='login.php'	
// 			</script>";
// 	} else {
// 		echo "<script> 
// 			alert ('Wrong Username and Password!!!');window.location='login.php'	
// 			</script>";
// 	}
// }
?> 


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Log In</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/logIn.css">        
    </head>
    
    <body>
        <!-- establising where java script file is located -->
        <script src="./logIn.js"></script>

        <!-- when logo is clicked, will take user back to home page -->
        <a title="Click Here To Go Back To The Home Page" href="basicWeb.php"> 
            <img src="../BasicWebPage/images/Logo.png" class="logo">
        </a>    

        <!-- container that holds login/signup forms -->
        <div class="container">

            <!-- code for the log in form -->
            <form class="form" id="login" action="loginScript.php" method="POST">

                <h1  class="formTitle">Login</h1>
                <div class="formMessage formMessageError"></div>
                <div class="formInputGroup">

                    <!-- input for email -->
                    <input type="email" class="formInput" placeholder="Email Address" autofocus name="email">
                    <div class="formInputErrorMessage"></div>
                </div>
                
                <div class="formInputGroup">

                    <!-- input for password -->
                    <input type="password" class="formInput" placeholder="Password" autofocus name="password">
                    <div class="formInputErrorMessage"></div>
                </div>

                <!-- submit button -->
                <button class="formButton" type="Submit" name="submit">Submit</button>

                <p class="formText">
                    <!-- click on this link to log in as admin -->
                    <a class="formLink" href="../AdminPage/AdminlogIn.html" >Log In as Administrator</a>
                </p>

                <p class="formText">
                    <!-- link changes form into a sign up form-->
                    <a class="formLink" id="linkCreateAccount">Click Here To Create An Account!</a>
                </p>
            </form>

            <!-- form is set as hidden for the time being -->
            <!-- when create account link is click, it will show create account form and hide log in form -->
            <form class="formHidden" id="createAccount"  action="signUpScript.php" method="POST" >
                
                <h1  class="formTitle">Create Account</h1>
                <div class="formMessage formMessageError"></div>

                <div class="formInputGroup"> 
                    <!-- full name sign up -->
                    <input type="text" id="signupFullName" class="formInput" placeholder="Full Name" autofocus>
                    <div class="formInputErrorMessage"></div>
                </div>

                <div class="formInputGroup">
                    <!-- email address sign up -->
                    <input type="email" class="formInput" placeholder="Email Address" autofocus>
                    <div class="formInputErrorMessage"></div>
                </div>
                
                <div class="formInputGroup"> 
                    <!-- password sign up -->
                    <input type="password" id="signupPassword"class="formInput" placeholder="Password" autofocus>
                    <div class="formInputErrorMessage"></div>
                </div>

                <div class="formInputGroup"> 
                    <!-- makes the user confirm their sign up -->
                    <input type="password" id="signupConfirmPassword"class="formInput" placeholder="Confirm Password" autofocus>
                    <div class="formInputErrorMessage"></div>
                </div>
                
                <!-- submit button -->
                <button class="formButton" type="Submit">Submit</button>

                <p class="formText">
                    <!-- clicking this will hide sign up -->
                    <!-- will show log in form -->
                    <!-- done through js -->
                    <a  class="formLink" id="linkLogIn">Already Have An Account? Sign In</a>
                </p>
            </form>
            
        </div>

    </body>

</html>