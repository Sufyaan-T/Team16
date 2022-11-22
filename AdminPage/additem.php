<!--Pantelis Xiourouppas - 160056307 -->
<?php
include 'connect.php';

if (isset($_POST['SubmitButton'])) {

    $name = $_POST['ItemName'];
    $price = $_POST['ItemPrice'];

    $sql = "insert into `products` (name, price) 
    values('$name','$price')";
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
    <title>Add Item</title>
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Navigation Bar -->
    <div class="navbar">
        <a href="#"><img src="images/Logo.png" class="logo"></a>
        <ul>
            <li><a href="user.php">Add User</a></li>
            <li><a href="additem.php">Add Item</a></li>
            <li><a href="adminpage.php">Database</a></li>
            <li><a href="logout.php">Log Out</a></li>

        </ul>
    </div>

    <!-- Input box -->
    <div class="addingBox">
        <form class="addingInputs" method="post">
            <h1>Add a Game</h1>

            <input type="text-box" class="formInput" placeholder="Enter Name" name="ItemName" autocomplete="off">

            <input type="text-box" class="formInput" placeholder="Enter Price" name="ItemPrice" autocomplete="off">


            <button type="submit" class="submitButton" name="SubmitButton">Submit</button>


        </form>
</body>
</div>

</html>