<?php

//Connects to databse
include 'connect.php';

//seees if data is valid
if(isset($_POST['email']) && isset($_POST['password'])) {
    
    //sets email
    $email = dataInputChecker($_POST['email']);
    //sets password
    $password = dataInputChecker($_POST['password']);    
}

//checks if parameters are empty 

//if there the email & password parameters are empty
if (empty($email) && empty($password)) {

    header("Location: ./logIn.php?error=An Email and Password is required!");
    exit();

} else if (empty($email)) {
    //checks to see if the email is empty
    header("Location: ./logIn.php?error=An Email is required!");
    exit();

} else if (empty($password)) {
    //checks to see if password is empty
    header("Location: ./logIn.php?error=A Password is required!");
    exit();

}

//checks to see if the user is in the GAMES4U database
$sqlGetUser = "SELECT * FROM users WHERE email = '$email'";
$result = $con->query($sqlGetUser);


//if a row is present then the user data exists
if ($result->num_rows == 1){

    //fetches the users data
    $result = $result->fetch_object();

    //verifys password 

    if (!password_verify($password, $result->$password)){
        //user is retunred to log in if password is inccorect
        header("Location: ./logIn.php?error=Incorrect Password Inputted!");
    }

    //sets a session for current user

    session_start();
    $_SESSION['user'] = $result;
    //user is then returned to home page
    header("Location: ../BasicWebPage/basicWeb.php");
    exit();
} else {
    
    //if rows arent returned,
    //then email and password doesnt exist wihtin database
    header("Location: ./logIn.php?error=Incorrect Email Inputted!");
    exit();

}

//creating the function to check data inputted
function dataInputChecker($data) {

    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = trim($data);
    return $data;

}


?>
