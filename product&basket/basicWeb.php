<?php
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
    <link rel="stylesheet" href="css/productPage.css">

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
            session_start();
            if (isset($_SESSION["id"])) {
                echo "<li><a href='logout.php'>Log Out</a></li>";
            } else {
                echo "<li><a href='login.php'>Log In</a></li>";
            }
            if (isset($_SESSION["id"])) {
                echo '<li><a href="basket.php"><i class="fa-solid fa-basket-shopping"></i> </a></li>';
            } else {
                echo '<li><a href="login.php"><i class="fa-solid fa-basket-shopping"></i> </a></li>';
                // echo '<li> <script> alert ("You need to login to add to the basket!!!");window.location="basicWeb.php"</script>  <i class="fa-solid fa-basket-shopping"></i></li>';

            }
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
    <main>

        <?php while ($row = mysqli_fetch_assoc($all_products)) { ?>
            <div class="vidbox">
                <div class="card">
                    <div class="image">
                        <img src="images/<?php echo $row['image']; ?>">
                    </div>
                    <div class="caption">

                        <p class="price"><?php echo $row['name']; ?></p>
                        <p class="price"><?php echo $row['price']; ?></p>
                    </div>

                    <!--
                        Code Written by Mohamed Rilah (210049037)
                        -----------------------------------------
                        The following form will allow products to be added to the basket 
                        The form contains hidden input types, used to store key data needed for this implementation 
                        The action of this form sends the productId to the code which manages this implementation 
                     -->
                    <form method="post" action="addingToBasket.php?action=add&id=<?php echo $row["id"]; ?>">
                        <input type = hidden name = "hiddenProductName" value="<?php echo $row['name']; ?>" >
                        <input type = hidden name = "hiddenProductPrice" value="<?php echo $row['price']; ?>" >
                        <input type = submit name = "addToBasket" value="Add To Basket" />
                    </form>
                    
                </div>
            </div>
        <?php } ?>
    </main>

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