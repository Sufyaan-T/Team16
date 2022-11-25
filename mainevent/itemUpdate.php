<!--Pantelis Xiourouppas - 160056307 -->
<?php
include 'connect.php';

$idCart = $_GET['idUpdateCart'];
$sql = "Select * from `products` where id=$idCart";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$price  = $row['price'];
$image = $row['image'];


if (isset($_POST['UpdateButton'])) {

    $name = $_POST['ItemName'];
    $price  = $_POST['ItemPrice'];
    $image = $_POST['image'];

    $sql = "update `products` set id=$idCart , name ='$name', price='$price', image='$image' where id=$idCart";
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
    <title>Item Update</title>
    <link href="css/style.css" rel="stylesheet">

    <style>
        img {
            width: 200px;
        }
    </style>
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
            <h1>Update Product id: <?php echo '' . $idCart . ''; ?></h1>

            <input type="text-box" class="formInput" name="ItemName" autocomplete="off" value="<?php echo $name ?>">

            <input type="text-box" class="formInput" name="ItemPrice" autocomplete="off" value="<?php echo $price ?>">
            <?php echo '<td> <img src="images/' . $image . '"/></d>'; ?>

            <h2>Re-Upload Correct Image</h2>
            <input type="file" name="image" id="file" autocomplete="off">





            <button type="submit" class="submitButton" title="example.jpg" name="UpdateButton">Update</button>


        </form>
</body>
</div>

</html>