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
    <title>About Us</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/aboutus.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://kit.fontawesome.com/c035b66456.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <!-- This is the line you need -->
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
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
            ?>
            <?php
            if (isset($_SESSION["id"])) {
                echo '<li><a href="basket.php"><i class="fa-solid fa-basket-shopping"></i> </a></li>';
            } else {
                echo '<li><a href="login.php"><i class="fa-solid fa-basket-shopping"></i> </a></li>';
            }
            ?>


        </ul>

    </div>
    <!-- END OFMAIN NAV BAR  -->


    <div class="aboutText">
        <div style="color: white; ">
            <h1 style="text-align: center; padding-top: 10px;">About Us</h1>
            <p class="text"> <br> <br>We are an independent games company looking to sell games from various platforms such as Xbox, PlayStation and more to you. We are currently offering two means of acquiring the game digitally via a cd key which will be emailed to you and enabling you to digitally obtain and download the game. Or by getting the physical copy delivered to you at no extra cost with the case and cd being intact. <br> <br> <br> Apart from selling physical games we also sell consoles and accessories ranging from controllers, headsets keyboard and mice, and many other accessories for each category. We are striving towards creating a marketplace for all of your gaming needs in one simple website with the best deals and stock to ensure that you have the best shopping experience. <br> <br> <br>
                We are based in Birmingham with our office being located in New street please refer to the address below or the google maps embed to get directions.
            </p>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2430.1444035949844!2d-1.901339483942663!3d52.476521079805885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4870bc8a2a579de7%3A0x58935ad8288e2943!2s59%20Station%20St%2C%20Birmingham%20B5%204DY!5e0!3m2!1sen!2suk!4v1669044449846!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"""></iframe>
            </div>
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