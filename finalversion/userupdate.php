<!--Pantelis Xiourouppas - 160056307 -->
<?php
session_start();
//disallows any and all access to this page UNLESS you sign in
include("connect.php");
include("functions.php");
if (!isset($_SESSION['id'])) {
    header("Location:login.php");
}

$id = $_GET['idUpdate'];
$sql = "Select * from `users` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$password = $row['password'];


if (isset($_POST['UpdateButton'])) {

    $name = $_POST['UserName'];
    $email = $_POST['UserEmail'];
    $password = $_POST['UserPassword'];

    $sql = "update `users` set id=$id , name ='$name', email='$email', password='$password' where id=$id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header('location:adminpage.php');
    } else {
        die(mysqli_error($con));
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fill in Details</title>
    <link href="css/style.css" rel="stylesheet">
    <!-- This is the line you need -->
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>

<body>


    <!-- Navigation Bar -->
    <div class="navbar">
        <a href="adminpage.php"><img src="images/Logo.png" class="logo"></a>
        <ul>

            <li><a href="adduser.php">Add User</a></li>
            <li><a href="additem.php">Add Item</a></li>
            <li><a href="adminpage.php">Database</a></li>
            <li><a href="logout.php">Log Out</a></li>

        </ul>
    </div>

    <!-- Input box -->
    <div class="addingBox">
        <form class="addingInputs" method="post">
            <h1>Update User Account</h1>

            <input type="text-box" class="formInput" name="UserName" autocomplete="off" value="<?php echo $name ?>">

            <input type="text-box" class="formInput" name="UserEmail" autocomplete="off" value="<?php echo $email ?>">

            <input type="text-box" class="formInput" name="UserPassword" autocomplete="off" value="<?php echo $password ?>">



            <button type="submit" class="submitButton" name="UpdateButton">Update</button>


        </form>
</body>
</div>

</html>