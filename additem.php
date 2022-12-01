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
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $information = $_POST['information'];

    if (file_exists("image/" . $_FILES["image"]["name"])) {
        $store = $_FILES["image"]["name"];
        $_SESSION['status'] = "Image already exists. '.$store.'";
        header('Location: additem.php');
    } else {
        $sql = "insert into `products` (name,price,image,information) values ('$name','$price','$image','$information')";
        $result = mysqli_query($con, $sql);
        if ($result) {

            move_uploaded_file($_FILES["image"]["tmp_name"], "images/" . $_FILES["image"]["name"]);
            $_SESSION['success'] = "Data published successfully";
            header("Location: additem.php");
        } else {
            $_SESSION['success'] = "Data not Inserted";
            header("Location: additem.php");
        }
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
        <form class="addingInputs" method="post" enctype="multipart/form-data">
            <h1>Add New Product</h1>

            <input type="text-box" class="formInput" placeholder="Enter Name" name="name" autocomplete="off">

            <input type="text-box" class="formInput" placeholder="Enter Price" name="price" autocomplete="off">

            <textarea type="text-box" class="formInput" name="information" placeholder="Product Information.." style="height:100px"></textarea>

            <input type="file" name="image" id="file" autocomplete="off">

            <button type="submit" class="submitButton" name="SubmitButton">Submit</button>
        </form>
    </div>
</body>


</html>