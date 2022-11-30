<?php
session_start();
//disallows any and all access to this page UNLESS you sign in
include("connect.php");
include("functions.php");
if (!isset($_SESSION['id'])) {
    header("Location:adminlogin.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Games4U</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://kit.fontawesome.com/c035b66456.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <!-- This is the line you need -->
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <style>
        img {
            width: 100px;
        }

        .price {
            color: black;
            font-size: 22px;
            text-align: center;
        }




        .vidbox {
            width: 300px;
            height: 200px;
            background-color: white;
            margin: 5px;
            border-radius: 20px;
            box-sizing: border-box;
            overflow: wrap;
        }

        h4 {

            color: indigo;
        }
    </style>

</head>

<body>
    <!-- MAIN NAV BAR  -->
    <div class="navbar">
        <a href="adminpage.php"><img src="images/Logo.png" class="logo"></a>
        <ul>
            <li><a href="adminorders.php">View Orders</a></li>
            <li> <a href="adduser.php">Add User</a></li>
            <li><a href="additem.php">Add Item</a></li>
            <li><a href="adminpage.php">Database</a></li>

            <?php

            if (isset($_SESSION["id"])) {
                echo "<li><a href='adminlogout.php'>Log Out</a></li>";
            } else {
                echo "<li><a href='adminlogin.php'>Log In</a></li>";
            }
            ?>


        </ul>

    </div>




    <?php
    $sql = "SELECT * FROM billingdetails";
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

    ?>




    <!-- Invoice Box -->

    <?php echo '
                <div class="detailsBoxInvoice">
                    <h1 style="text-align:center;">Order Number ' . $id . '</h1>


                    <h2><u>Details</u></h2>
                    <h3>Full Name:</h3>
                    <h4>' . $name . '</h4>
                    <h3>Email Address:</h3>
                    <h4>' . $email . '</h4>

                    <p>----------------------------------------------------------------------------------------------------------------------------------------</p>
                    <h2><u>Billing Invoice</u></h2>
                    <h3>Billing Address:</h3>
                    <h4>' . $address . '</h4>
                    <h4>' . $city . ',</h4>
                    <h4>' . $county . ',</h4>
                    <h4>' . $postcode . '</h4>

                    <p>----------------------------------------------------------------------------------------------------------------------------------------</p>
                    <h2><u>Payments</u></h2>
                    <h3>Name on card:</h3>
                    <h4>' . $nameOnCard . '</h4>
                    <h3>Card Number:</h3>
                    <h4>' . $debitCardNumber . '</h4>
                    <h3>Expiration Month:</h3>
                    <h4>' . $expmonth . '</h4>
                    <h3>Expiration Year:</h3>
                    <h4>' . $expyear . '</h4>
                    <h3>CVV:</h3>
                    <h4>' . $cvv . '</h4>
                    <p>----------------------------------------------------------------------------------------------------------------------------------------</p>
                    <h2><u>Product</u></h2>
                    <h3>Product</h3>
                    <h4>' . $product . '</h4>
                    <h3>Price</h3>
                    <h4>£' . $productprice . '</h4>
                    <h5>' . $date . '</h5>
                    <p>=========================================================================================================================================</p>
                    </br>
                </div>


                '; ?>

    </div>

</body>

</html>