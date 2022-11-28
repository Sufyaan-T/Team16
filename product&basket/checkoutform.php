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
        <div class="dropdown">
            <button class="dropbtn" onclick="myFunction3()">PC
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content" id="PC">
                <a href="#">Games</a>
                <a href="#">Accessories</a>
            </div>
        </div>
    </div>
    <!-- END OF SUB NAV BAR -->
    <div id="Checkout-Body">
        <h2 style="padding-left:20% ;">Delivery address</h2>
        <form enctype="text/plain" style="padding-left:20%;">
            <label for="FistName">First Name</label><br>
            <input type="text" name="FirstName" id="FirstName" style="width:30%;border-radius:5px;" required /> <br> <br>

            <label for="LastName">Last Name</label><br>
            <input type="text" name="LastName" id="LastName" style="width:30%;border-radius:5px;" required /> <br> <br>


            <label for="CardNumber">Card Number</label> <br>
            <input type="text" name="CardNumber" id="CardNumber" style="width:30%;border-radius:5px;" required /> <br> <br>


            <label for="SecurityCode">Security Code</label> <br>
            <input type="text" name="SecurityCode" id="SecurityCode" style="width:30%;border-radius:5px;" required /> <br> <br>

            <label for="BillingAddress">Billing Address</label> <br>
            <input type="text" name="BillingAddress" id="BillingAddress" style="width:30%;border-radius:5px;" required /> <br> <br>

            <label for="City">City</label> <br>
            <input type="text" name="City" id="City" style="width:30%;border-radius:5px;" required /> <br> <br>

            <label for="Post code">Post code</label> <br>
            <input type="text" name="PostCode" id="PostCode" style="width:30%;border-radius:5px;" required /> <br> <br>

            <label for="Phone">Phone</label> <br>
            <input type="text" name="Phone" id="Phone" style="width:30%;border-radius:5px;" required /> <br> <br>



            <button type="submit">Submit</button>
            <input type="reset" value="Reset">
        </form>
        <table style="padding-left:60%;">
            <tr>
                <th>Summary</th>
            </tr>
            <tr>
                <td> <?php echo 'Items in basket: ', $_SESSION['basketItems']; ?></td>
            </tr>
            <tr>
                <td><?php echo 'Total price: £', $_SESSION['totalPrice']; ?></td>
            </tr>
        </table>


    </div>

    <aside>

    </aside>
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
                        <li><a href="./aboutUs.html">about us</a></li>
                        <li><a href="./contactUs.html">Contact Us</a></li>
                        <br>
                        <li>Games4U.org</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!---End of Footer--->



</body>

</html>