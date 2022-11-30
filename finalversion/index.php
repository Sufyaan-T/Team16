<?php
session_start();
//disallows any and all access to this page UNLESS you sign in
include("connect.php");
include("functions.php");
if (!isset($_SESSION['id'])) {
    header("Location:login.php");
}
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .New-Noteworthy {
            max-width: max-content;
            height: 425px;
            background-color: #2d0130;
            margin-top: 100px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 100px;
            background: cover;
            border-radius: 20px;
            border-color: black;
            text-align: center;
        }

        .New-Noteworthy h2 {
            color: #ffffff;
        }

        .OurFavourites {
            max-width: max-content;
            height: 425px;
            background-color: #2d0130;
            margin-top: 100px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 100px;
            background: cover;
            border-radius: 20px;
            border-color: black;
            text-align: center;
        }

        .OurFavourites h2 {
            color: #ffffff;
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

        .carousel-inner>.item>a>img,
        .carousel-inner>.item>img,
        .img-responsive,
        .thumbnail a>img,
        .thumbnail>img {
            display: block;
            max-width: 78%;
            height: auto;
            margin-left: auto;
            margin-right: auto;
        }

        .carousel-indicators li {
            display: inline-block;
            width: 10px;
            height: 10px;
            margin: 1px;
            text-indent: -999px;
            cursor: pointer;
            border-radius: 10px
        }

        .carousel-indicators .active {
            width: 12px;
            height: 12px;
            margin: 0;
            background-color: #fff
        }

        .carousel-indicators {
            bottom: 20px
        }

        .carousel {
            position: relative
        }

        .carousel-inner {
            position: relative;
            width: 100%;
            overflow: hidden;
            height: 50%;
        }

        .carousel-inner>.item {
            position: relative;
            display: none;
            -webkit-transition: .6s ease-in-out left;
            -o-transition: .6s ease-in-out left;
            transition: .6s ease-in-out left
        }

        .carousel-inner>.item>a>img,
        .carousel-inner>.item>img {
            line-height: 1
        }

        @media all and (transform-3d),
        (-webkit-transform-3d) {
            .carousel-inner>.item {
                -webkit-transition: -webkit-transform .6s ease-in-out;
                -o-transition: -o-transform .6s ease-in-out;
                transition: -webkit-transform .6s ease-in-out;
                transition: transform .6s ease-in-out;
                transition: transform .6s ease-in-out, -webkit-transform .6s ease-in-out, -o-transform .6s ease-in-out;
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                -webkit-perspective: 1000px;
                perspective: 1000px
            }

            .carousel-inner>.item.active.right,
            .carousel-inner>.item.next {
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0);
                left: 0
            }

            .carousel-inner>.item.active.left,
            .carousel-inner>.item.prev {
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
                left: 0
            }

            .carousel-inner>.item.active,
            .carousel-inner>.item.next.left,
            .carousel-inner>.item.prev.right {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
                left: 0
            }
        }

        .carousel-inner>.active,
        .carousel-inner>.next,
        .carousel-inner>.prev {
            display: block
        }

        .carousel-inner>.active {
            left: 0
        }

        .carousel-inner>.next,
        .carousel-inner>.prev {
            position: absolute;
            top: 0;
            width: 100%
        }

        .carousel-inner>.next {
            left: 100%
        }

        .carousel-inner>.prev {
            left: -100%
        }

        .carousel-inner>.next.left,
        .carousel-inner>.prev.right {
            left: 0
        }

        .carousel-inner>.active.left {
            left: -100%
        }

        .carousel-inner>.active.right {
            left: 100%
        }

        .carousel-control {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 15%;
            font-size: 20px;
            color: #fff;
            text-align: center;
            text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
            background-color: rgba(0, 0, 0, 0);
            filter: alpha(opacity=50);
            opacity: .5
        }

        .carousel-control.left {
            background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .5) 0, rgba(0, 0, 0, .0001) 100%);
            background-image: -o-linear-gradient(left, rgba(0, 0, 0, .5) 0, rgba(0, 0, 0, .0001) 100%);
            background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, .0001)));
            background-image: linear-gradient(to right, rgba(0, 0, 0, .5) 0, rgba(0, 0, 0, .0001) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
            background-repeat: repeat-x
        }

        .carousel-control.right {
            right: 0;
            left: auto;
            background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .0001) 0, rgba(0, 0, 0, .5) 100%);
            background-image: -o-linear-gradient(left, rgba(0, 0, 0, .0001) 0, rgba(0, 0, 0, .5) 100%);
            background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .0001)), to(rgba(0, 0, 0, .5)));
            background-image: linear-gradient(to right, rgba(0, 0, 0, .0001) 0, rgba(0, 0, 0, .5) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);
            background-repeat: repeat-x
        }

        .carousel-control:focus,
        .carousel-control:hover {
            color: #fff;
            text-decoration: none;
            outline: 0;
            filter: alpha(opacity=90);
            opacity: .9
        }

        .carousel-control .glyphicon-chevron-left,
        .carousel-control .glyphicon-chevron-right,
        .carousel-control .icon-next,
        .carousel-control .icon-prev {
            position: absolute;
            top: 50%;
            z-index: 5;
            display: inline-block;
            margin-top: -10px
        }

        .carousel-control .glyphicon-chevron-left,
        .carousel-control .icon-prev {
            left: 50%;
            margin-left: -10px
        }

        .carousel-control .glyphicon-chevron-right,
        .carousel-control .icon-next {
            right: 50%;
            margin-right: -10px
        }

        .carousel-control .icon-next,
        .carousel-control .icon-prev {
            width: 20px;
            height: 20px;
            font-family: serif;
            line-height: 1
        }

        .carousel-control .icon-prev:before {
            content: "\2039"
        }

        .carousel-control .icon-next:before {
            content: "\203a"
        }

        .carousel-indicators {
            position: absolute;
            bottom: 10px;
            left: 50%;
            z-index: 15;
            width: 60%;
            padding-left: 0;
            margin-left: -30%;
            text-align: center;
            list-style: none
        }

        .carousel-indicators li {
            display: inline-block;
            width: 10px;
            height: 10px;
            margin: 1px;
            text-indent: -999px;
            cursor: pointer;
        }

        .carousel-indicators .active {
            width: 12px;
            height: 12px;
            margin: 0;
            background-color: #fff
        }

        .carousel-caption {
            position: absolute;
            right: 15%;
            bottom: 20px;
            left: 15%;
            z-index: 10;
            padding-top: 20px;
            padding-bottom: 20px;
            color: #fff;
            text-align: center;
            text-shadow: 0 1px 2px rgba(0, 0, 0, .6)
        }

        .carousel-caption .btn {
            text-shadow: none
        }

        @media screen and (min-width:768px) {

            .carousel-control .glyphicon-chevron-left,
            .carousel-control .glyphicon-chevron-right,
            .carousel-control .icon-next,
            .carousel-control .icon-prev {
                width: 30px;
                height: 30px;
                margin-top: -10px;
                font-size: 30px
            }

            .carousel-control .glyphicon-chevron-left,
            .carousel-control .icon-prev {
                margin-left: -10px
            }

            .carousel-control .glyphicon-chevron-right,
            .carousel-control .icon-next {
                margin-right: -10px
            }

            .carousel-caption {
                right: 20%;
                left: 20%;
                padding-bottom: 30px
            }

            .carousel-indicators {
                bottom: 20px
            }
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

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/eldenringhd.jpg" alt="Elden Ring">
            </div>

            <div class="item">
                <img src="images/assasinscreedhd.jpg" alt="Assassins Creed Black Flag">
            </div>

            <div class="item">
                <img src="images/bp3.jpg" alt="Black Ops 3">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

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
                        <li>DISCLAIMER: We do not own these pictures, they belong to their own sources, respectivly.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of footer -->



</body>


</html>