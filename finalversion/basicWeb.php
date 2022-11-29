<?php
session_start();
//disallows any and all access to this page UNLESS you sign in
include("connect.php");
include("functions.php");
// if (!isset($_SESSION['id'])) {
//     header("Location:login.php");
// }
//the way i show whats in the products table for the products page
$sql = "SELECT * FROM products";
$all_products = $con->query($sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Games</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/productPage.css">
    <script src="https://kit.fontawesome.com/c035b66456.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <style>
        img {
            width: 200px;
            height: 100px;
        }

        .price {
            color: black;
            font-size: 22px;
            text-align: center;
        }




        .vidbox {
            width: 300px;
            height: 300px;
            background-color: white;
            margin: 5px;
            border-radius: 20px;
            box-sizing: border-box;
            overflow: wrap;
        }
    </style>

</head>

<body>
    <!-- MAIN NAV BAR  -->
    <div class="navbar">
        <a href="index.php"><img src="images/Logo.png" class="logo"></a>
        <ul>
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
    <!-- END OFMAIN NAV BAR  -->





    <!-- The start of the products page -->
    <main>
        <?php while ($row = mysqli_fetch_assoc($all_products)) { ?>
            <div class="vidbox">
                <div class="card">
                    <div class="image">
                        <img src="images/<?php echo $row['image']; ?>">
                    </div>
                    <div class="caption">

                        <p class="price"><?php echo $row['name']; ?></p>
                        <p class="price">£<?php echo $row['price']; ?></p>
                        <p class="hello"></p>
                    </div>

                    <!--
                Code Written by Mohamed Rilah (210049037)
                -----------------------------------------
                The following form will allow products to be added to the basket 
                The form contains hidden input types, used to store key data needed for this implementation 
                The action of this form sends the productId to the code which manages this implementation 
             -->
                    <form method="post" action="addingToBasket.php?action=add&id=<?php echo $row["id"]; ?>">
                        <input type=hidden name="hiddenProductName" value="<?php echo $row['name']; ?>">
                        <input type=hidden name="hiddenProductPrice" value="<?php echo $row['price']; ?>">
                        <input type=submit class="submitButton" name="addToBasket" value="Add To Basket" />
                    </form>

                </div>
            </div>
        <?php } ?>
    </main>
    <!-- end of the products page -->


    </div>



    <!---Footer--->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>find us</h4>
                    <ul>
                        <li>Store location:</li>
                        <li>59-61 Station St, Birmingham B5 4DY</li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>help</h4>
                    <ul>
                        <li><a href="aboutUs.php">About us</a></li>
                        <li><a href="contactUs.php">Contact Us</a></li>
                        <br>
                        <li>Games4U.org</li>
                        <li>DISCLAIMER: We do not own these pictures, they belong to their own sources, respectivly.</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of footer -->



</body>


</html>