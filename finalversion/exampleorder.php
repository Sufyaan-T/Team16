<!--Pantelis Xiourouppas - 160056307 -->
<?php
session_start();
//disallows any and all access to this page UNLESS you sign in
include("connect.php");
include("functions.php");
if (!isset($_SESSION['id'])) {
    header("Location:adminlogin.php");
}

$idOrder = $_GET['OrderUpdate'];
$sql = "Select * from `billingdetails` where id=$idOrder";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$id = $row['id'];
$name = $row['name'];
$email = $row['billingEmail'];
$address = $row['address'];
$nameOnCard = $row['nameOnCard'];
$debitCardNumber = $row['debitCardNumber'];
$city = $row['city'];
$county = $row['county'];
$postcode = $row['postcode'];
$expyear = $row['expyear'];
$expmonth = $row['expmonth'];
$cvv = $row['cvv'];
$product = $row['product'];
$productprice = $row['productprice'];
$date = $row['date'];


if (isset($_POST['UpdateButton'])) {

    $id = $row['id'];
    $name = $row['name'];
    $email = $row['billingEmail'];
    $address = $row['address'];
    $nameOnCard = $row['nameOnCard'];
    $debitCardNumber = $row['debitCardNumber'];
    $city = $row['city'];
    $county = $row['county'];
    $postcode = $row['postcode'];
    $expyear = $row['expyear'];
    $expmonth = $row['expmonth'];
    $cvv = $row['cvv'];
    $product = $row['product'];
    $productprice = $row['productprice'];
    $date = $row['date'];

    $sql = "UPDATE billingdetails set id=$idOrder , name ='$name', billingEmail='$email',nameOnCard='$nameOnCard', address='$address', 
    debitCardNumber='$debitCardNumber', city='$city', county='$county', postcode='$postcode', expyear='$expyear',expmonth='$expmonth', cvv='$cvv ', 
    product='$product', productprice='$productprice', date='$date'  where id = $idOrder";
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
    <title>Order Update</title>
    <link href="css/style.css" rel="stylesheet">
    <!-- This is the line you need -->
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>

<body>

    <!-- Navigation Bar -->
    <div class="navbar">
        <a href="#"><img src="images/Logo.png" class="logo"></a>
        <ul>
            <li><a href="adduser.php">Add User</a></li>
            <li><a href="additem.php">Add Item</a></li>
            <li><a href="adminpage.php">Database</a></li>
            <li><a href="logout.php">Log Out</a></li>

        </ul>
    </div>

    <!-- Input box -->
    <div class="addingBoxOrder">
        <form class="addingInputs" method="post">
            <h1>Update Order id: <?php echo '' . $idOrder . ''; ?></h1>


            <input type="text-box" class="formInput" name="name" autocomplete="off" value="<?php echo $name ?>">

            <input type="text-box" class="formInput" name="billingEmail" autocomplete="off" value="<?php echo $email ?>">

            <h2>Email</h2>
            <textarea type="text-box" class="formInput" name="address" value="" style="height:80px"><?php echo $address ?></textarea>

            <h2>Billing Address</h2>
            <input type="text-box" class="formInput" name="city" autocomplete="off" value="<?php echo $city ?>">
            <input type="text-box" class="formInput" name="county" autocomplete="off" value="<?php echo $county  ?>">
            <input type="text-box" class="formInput" name="postcode" autocomplete="off" value="<?php echo $postcode ?>">

            <h2>Debit Card Information</h2>
            <input type="text-box" class="formInput" name="nameOnCard" autocomplete="off" value="<?php echo $nameOnCard ?>">
            <input type="text-box" class="formInput" name="debitCardNumber" autocomplete="off" value="<?php echo $debitCardNumber ?>">
            <input type="text-box" class="formInput" name="expyear" autocomplete="off" value="<?php echo $expyear ?>">
            <input type="text-box" class="formInput" name="expmonth" autocomplete="off" value="<?php echo $expmonth ?>">
            <input type="text-box" class="formInput" name="cvv" autocomplete="off" value="<?php echo $cvv ?>">

            <h2>Product Purchase</h2>
            <input type="text-box" class="formInput" name="productprice" autocomplete="off" value="<?php echo $product ?>">
            <input type="text-box" class="formInput" name="ItemName" autocomplete="off" value="<?php echo $productprice ?>">
            <input type="text-box" class="formInput" name="date" autocomplete="off" value="<?php echo $date ?>">

            <button type="submit" class="submitButton" name="UpdateButton">Update</button>


        </form>
</body>
</div>

</html>