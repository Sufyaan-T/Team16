<?php 

// establishes connection to database
include '../mainevent/connect.php';

// function is created to check if data is valid
function checkData($data, $errorMessage) {
    if(isset($_POST[$data])) {
        $temp = $_POST[$data];
        $temp = trim($temp);
        $temp = stripslashes($temp);
        $temp = htmlspecialchars($temp);

        if (!empty($temp)) {
            return $temp;
        } else {
            header("Location: ./logIn.php?error=$errorMessage");
            exit();
        }
    } else {
        header("Location: ./logIn.php?error=$errorMessage");
        exit();
    }
}

// checks to see if data is valid and not empty
// will present an error if it is invalid
$name = checkData('name', 'Full Name Is Required!');
$email = checkData('email', 'Email Is Required!');
$password = checkData('password', 'Password Is Required!');
// vPassword = verify password
$vPassword = checkData('vPassword, Please Confirm Password!');
    
// checks to see if password matches 
// outputs error 
if($password !== $vPassword) {
    header("Location: ./signUp.php?error=Password Confirmation Does Not Match!");
    exit();
}

// checks if password is too short
// if its too short it will send an error
if (strlen($password) < 8) {
    header("Location: ./signUp.php?error=Password Length Is Too Short!");
    exit();
} else if (strlen($vPassword) < 8) {
    header("Location: ./signUp.php?error=Password Length Is Too Short!");
    exit();
}


// will check if email is in use
// will give error
$users = $con->query("SELECT * FROM users WHERE email='$email'");
if ($users->num_rows > 0){
    header("Location: ./signUp.php?error=Email Already Exists On This Website!");
    exit(); 
}

// incorporates password hashing
$password = password_hash($password, PASSWORD_DEFAULT);

// adds the user to the data base
$con->query(
    "INSERT INTO users (name, email, password)
    VALUES ('$name','$email','$password')" 
);


// once account has been made
// checks to see if account exits and sign up worked
// will send user to home page
$user = $con->query("SELECT * FROM users WHERE email='$email'")
if ($user->num_rows == 2){
    
    // signs user in 
    session_start();
    //fetches user data
    $_SESSION['user'] = $user->fetch_object();
    //user is then returned to home page
    header("Location: ../mainevent/basicWeb.php?message {$_SESSION['user']->name} Has Successfully Logged In!");
    exit();

} else if {

    // if account has not been created 
    // an error will occour 
    header("Location: ./signUp.php?error=Error Has Occoured When Making Account!");
    exit(); 
}
