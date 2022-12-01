<!--Pantelis Xiourouppas - 160056307 -->
<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Filtering the variables for security
    $name = strip_tags(mysqli_real_escape_string($con, trim($name)));
    $email = strip_tags(mysqli_real_escape_string($con, trim($email)));
    $password =  strip_tags(mysqli_real_escape_string($con, trim($password)));


    $sql = "Select * from `users` where email= '$email' ";

    $result = mysqli_query($con, $sql);
    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            echo "<script> alert('Email already in use'); window.location = 'signup.php'</script>";
        } else {
            $sql = "insert into `users` (name, email, password) values ('$name','$email','$password')";
            $result = mysqli_query($con, $sql);
            if ($result) {
                echo "<script> alert('Registration Successful'); window.location = 'login.php'</script>";
            } else {
                die(mysqli_errno($con));
            }
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign Up</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/logIn.css">
    <!-- This is the line you need -->
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>

<body>
    <!-- establising where java script file is located -->
    <script src="js/logIn.js"></script>

    <!-- when logo is clicked, will take user back to home page -->
    <a title="Click Here To Go Back To The Home Page" href="basicWeb.html">
        <img src="images/Logo.png" class="logo">
    </a>

    <!-- container that holds login/signup forms -->
    <div class="container">

        <!-- form is set as hidden for the time being -->
        <!-- when create account link is click, it will show create account form and hide log in form -->
        <form class="form" id="createAccount" method="post">

            <h1 class="formTitle">Create Account</h1>
            <div class="formMessage formMessageError"></div>

            <form method="post">

                <div class="formInputGroup">
                    <input id="text" type="text" class="formInput" name="name" placeholder="Enter Full Name" autofocus>
                </div>

                <div class="formInputGroup">
                    <input type="email" class="formInput" name="email" placeholder="Email Address" autofocus>
                </div>

                <div class="formInputGroup">
                    <input id="text" type="password" class="formInput" name="password" placeholder="Password" autofocus>
                </div>

                <div class="formInputGroup">
                    <input id="button" class="formButton" type="submit" value="Sumbit"><br><br>
                </div>


                <p class="formText">
                    <!-- clicking this will hide sign up 
                     will show log in form 
                     done through js -->
                    <a href="login.php" class="formLink" id="linkLogIn">Already Have An Account? Sign In</a>
                </p>


            </form>






    </div>

</body>

</html>