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
        <a href="index.php"><img src="images/Logo.png" class="logo"></a>
        <ul>
            <li>
                <!-- SEARCH BAR -->
                <!-- Search for product in the table, where user inputs is similar to a product in the table -->
                <form method="POST" action="basicWeb.php" class="Form-Container">
                    <input class="searchTerm" type="text" name="criteria" placeholder="Search...">
                    <button class="searchButton" type="submit" name="reset"> <i class="fa fa-search fa-1x"></i> </button>
                    <button type="submit" name="reset" value="Reset"> <i class="fa fa-refresh" aria-hidden="true"></i></button>
                    <input type="hidden" name="searched" value="true" />




                </form>
            </li>
            <li><a href="index.php">Home</a></li>
            <li><a href="basicWeb.php">Games</a></li>
            <li><a href="aboutUs.php">About Us</a></li>
            <li><a href="contactUs.php">Contact Us</a></li>

            <?php

            if (isset($_SESSION["id"])) {
                echo "<li><a href='logout.php'>Log Out</a></li>";
            } else {
                echo "<li><a href='login.php'>Log In</a></li>";
            }

            if (isset($_SESSION["id"])) {
                echo '<li><a href="basket.php"><i class="fa-solid fa-basket-shopping" style="color:white;"></i> </a></li>';
            } else {
                echo '<li><a href="login.php"><i class="fa-solid fa-basket-shopping" style="color:white;"></i></a></li>';
            }
            ?>



        </ul>

    </div>

<form method="POST"action="PastOrders.php">
    <input type="text" name="SearchPastOrder" placeholder="Enter E-mail to view past orders">
    <input type="submit">
    <input type="hidden" name="searched" value="true">
</form>
<?php
if (isset($_POST["searched"])) {
        if(!isset($_POST["SearchPastOrder"])){
            echo'';
        }else{
            $search = $_POST["SearchPastOrder"];
            $sql = "SELECT * FROM billingdetails WHERE billingEmail = '$search'";
            $History = $con->query($sql);     
            }   } ?>
             <!-- Invoice Box -->
        <?php 
        while($row = mysqli_fetch_assoc($History)){

        
             echo '
            <div class="detailsBoxInvoice">
                <h1 style="text-align:center;">Order</h1>


                <h2><u>Details</u></h2>
                <h3>Full Name:</h3>
                <h4>' . $row['name'] . '</h4>
                <h3>Email Address:</h3>
                <h4>' . $row['billingEmail'] . '</h4>

                <p>----------------------------------------------------------------------------------------------------------------------------------------</p>
                <h2><u>Billing Invoice</u></h2>
                <h3>Billing Address:</h3>
                <h4>' . $row['address'] . '</h4>
                <h4>' . $row['city'] . ',</h4>
                <h4>' . $row['county'] . ',</h4>
                <h4>' . $row['postcode'] . '</h4>

                <p>----------------------------------------------------------------------------------------------------------------------------------------</p>
                <h2><u>Payments</u></h2>
                <h3>Name on card:</h3>
                <h4>' . $row['nameOnCard'] . '</h4>
                <h3>Card Number:</h3>
                <h4>' . $row['debitCardNumber'] . '</h4>
                <h3>Expiration Month:</h3>
                <h4>' . $row['expmonth'] . '</h4>
                <h3>Expiration Year:</h3>
                <h4>' . $row['expyear'] . '</h4>
                <h3>CVV:</h3>
                <h4>' . $row['cvv'] . '</h4>
                <p>----------------------------------------------------------------------------------------------------------------------------------------</p>
                <h2><u>Product</u></h2>
                <h3>Product</h3>
                <h4>' . $row['product'] . '</h4>
                <h3>Price</h3>
                <h4>£' . $row['productprice'] . '</h4>
                <h5>' . $row['date'] . '</h5>
                <p>=========================================================================================================================================</p>
                </br>
            </div>'
                ;}
                       ?>
 

    </div>

</body>

</html>