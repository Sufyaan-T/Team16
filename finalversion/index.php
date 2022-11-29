<?php
session_start();
//disallows any and all access to this page UNLESS you sign in
include("connect.php");
include("functions.php");
// if (!isset($_SESSION['id'])) {
//     header("Location:login.php");
// }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Main Page</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/productPage.css">    
    <script src="https://kit.fontawesome.com/c035b66456.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <style>
        .New-Noteworthy {
            max-width: max-content;
            height: 425px;
            background-color: #2d0130;
            margin-top: 100px;
            margin-left: 125px;
            margin-right: 50px;
            margin-bottom: 100px;
            background: cover;
            border-radius: 20px;
            border-color: black;
            text-align: center;

        }

        .OurFavourites {
            max-width: max-content;
            height: 425px;
            background-color: #2d0130;
            margin-top: 100px;
            margin-left: 125px;
            margin-right: 50px;
            margin-bottom: 100px;
            background: cover;
            border-radius: 20px;
            border-color: black;
            text-align: center;

        }

        .games {
            width: 200px;
            height: 200px;
            margin: 30px;
            background: cover;
            border-radius: 75px;

        }

        img {
            width: 100%;
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
                echo '<li><a href="login.php"><i class="fa-solid fa-basket-shopping" style="color:white;"></i> </a></li>';
            }

            ?>


        </ul>

    </div>
    <!-- END OFMAIN NAV BAR  -->

   


    <!--Basic structure of slider-->
    <div class="container">
        <!--Area of the images-->


        <div class="New-Noteworthy">

            <h2>New & Noteworthy</h2>

            <a href="">
                <img class="games" src="images/DBD.jpg" alt="Modern Warfare 2">
                <img class="games" src="images/FIFA23.jpg" alt="Fifa 23">
                <img class="games" src="images/RE4.jpg" alt="Resident Evil 4 Remake">

            </a>
        </div>

        <div class="OurFavourites">
            <h2>Our Favourites</h2>

            <a href="">
                <img class="games" src="images/game1.jpg" alt="Battlefield 4">
                <img class="games" src="images/DBD.jpg" alt="Dead by Daylight">
                <img class="games" src="images/GTAV.jpg" alt="Grand Theft Auto 5">

            </a>
        </div>

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
                        <li><a href="/aboutUs.php">about us</a></li>
                        <li><a href="/contactUs.php">Contact Us</a></li>
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