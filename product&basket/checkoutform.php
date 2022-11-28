<?php session_start();
include 'connect.php';
include 'functions.php';


$sql = "SELECT * FROM products";
$all_products = $con->query($sql);
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
    <style>
        img {
            width: 100px;
        }

        .price {
            color: black;
            font-size: 22px;
            text-align: center;
        }


        /* .vidcontainer {
            position: relative;
            width: 1500px;
            height: 1370px;
            margin-right: 1px;
            background: #ddd;
            border-radius: 15px;
            display: flex;
            overflow: hidden;

        }*/

        .vidbox {
            width: 300px;
            height: 200px;
            background-color: white;
            margin: 5px;
            border-radius: 20px;
            box-sizing: border-box;
            overflow: wrap;
        }

        #Checkout-Body {
            color: white;
        }
    </style>

</head>

<body>
    <!-- MAIN NAV BAR  -->
    <div class="navbar">
        <a href="basicWeb.php"><img src="images/Logo.png" class="logo"></a>
        <ul>
            <li><a href="./aboutUs.php">About Us</a></li>
            <li><a href="./contactUs.php">Contact Us</a></li>
            <?php



            ?>


        </ul>

    </div>
    <!-- END OFMAIN NAV BAR  -->

    <!-- SUB NAV BAR -->
    <div class="navbar2">
        <div class="dropdown">
            <button class="dropbtn" onclick="myFunction1()">Xbox
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content" id="Xbox">
                <a href="#">Games</a>
                <a href="#">Accessories</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn" onclick="myFunction2()">Playstation
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content" id="Playstation">
                <a href="#">Games</a>
                <a href="#">Accessories</a>
            </div>
        </div>
