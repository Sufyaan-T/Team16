<!--Pantelis Xiourouppas - 160056307 -->
<?php
session_start();
//disallows any and all access to this page UNLESS you sign in
include("connect.php");
include("functions.php");
if (!isset($_SESSION['id'])) {
    header("Location:adminlogin.php");
}

if (isset($_POST['SubmitButton'])) {

    $name = $_POST['UserName'];
    $email = $_POST['UserEmail'];
    $password = $_POST['UserPassword'];

    $sql = "insert into `users` (name,email,password) values('$name','$email','$password')";
    $result = mysqli_query($con, $sql);

    if (!$result) {
        die(mysqli_error($con));
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add User</title>
    <link href="css/style.css" rel="stylesheet">
    <!-- This is the line you need -->
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>

<body>

    <!-- Navigation Bar -->
    <div class="navbar">
        <a href="adminpage.php"><img src="images/Logo.png" class="logo"></a>
        <ul>
            <li><a href="adminorders.php">View Orders</a></li>
            <li><a href="adduser.php">Add User</a></li>
            <li><a href="additem.php">Add Item</a></li>
            <li><a href="adminpage.php">Database</a></li>
            <li><a href="logout.php">Log Out</a></li>

        </ul>
    </div>

    <!-- Input Box -->
    <div class="addingBox" float:left>
        <form class="addingInputs" method="post">
            <h1>Create New User</h1>

            <input type="text-box" class="formInput" placeholder="Enter Name" name="UserName" autocomplete="off">

            <input type="text-box" class="formInput" placeholder="Enter Email" name="UserEmail" autocomplete="off">

            <input type="text-box" class="formInput" placeholder="Enter Password" name="UserPassword" autocomplete="off">

            <button type="submit" class="submitButton" name="SubmitButton">Submit</button>


        </form>
</body>
</div>

</html>