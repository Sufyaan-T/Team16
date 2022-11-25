<?php 
    session_start();
    $_SESSION["cartItems"] = count($_SESSION["basket"]);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> Basket </title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <script src="https://kit.fontawesome.com/c035b66456.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </head>

    <body>
        <!--  
            The following code is regarding the navigation bar, which is uniformed across all web pages 
            This contains hyperlinks to the home page, about us page, contact us page, login page and the cart page
        -->
        <div class="navbar">
            <a href="#"><img src="images/Logo.png" class="logo"></a>
            <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Log In</a></li>
                <li><a href="basket.php"><i class="fa-solid fa-basket-shopping"></i> <span><?php echo $_SESSION["cartItems"] ?> </a></li>
            </ul>
        </div>
        <!--
            The following code is regarding the second navigation bar, which is uniformed across all web pages 
            This contains hyperlinks to the products that we sell, seperated by the platforms they are associated with
        -->
        <div class="navbar2">
            <div class="dropdown">
                <button class="dropbtn" onclick="myFunction1()">Xbox
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content" id="Xbox">
                    <a href="#">Consoles</a>
                    <a href="#">Games</a>
                    <a href="#">Accessories</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn" onclick="myFunction2()">Playstation
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content" id="Playstation">
                    <a href="#">Consoles</a>
                    <a href="productPage.php">Games</a>
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

        <br><br>
        <div class = "basketContainer">
            <h3 style = "color:white;"> My Basket </h3>
            <br><br>

            <!--
                The following php block checks whether the cart variable is empty, and if so, displays an appropriate message to the user 
                The else statement displays the contents of the cart variable in a table 
            -->
            <?php 
                if(empty($_SESSION["basket"])) { 
            ?>

            <p style = "color:white;">
                <?php 
                    echo "Basket is empty, continue shopping";
                    } else {
                ?> 
            </p>
            <!--
                The following table displays the contents of the cart
                The table also contains a button which allows the user to remove products from the cart 
            -->

            <table class="admin-table"> 
                <thead>
                    <tr> 
                        <th> Item Name </th> 
                        <th> Item Price <th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $_SESSION["totalPrice"] = 0;
                        foreach($_SESSION["basket"] as $keys => $values) { 
                    ?>

                    <tr>
                        <td> <?php echo $values["productName"]; ?> </td> 
                        <td> £<?php echo $values["productPrice"]; ?> </td>  
                        <td> 
                            <a href = "removingFromBasket.php?action=remove&id=<?php echo $values['productId']; ?>">
                                <i class="fa-solid fa-trash" style="color:white"></i> 
                            </a>
                        </td>
                    </tr> 
                    <?php
                        $_SESSION["totalPrice"] = $_SESSION["totalPrice"] + $values["productPrice"];
                        } 
                    ?>
                </tbody>
            </table>
        
            <p style = "color:white;">
                The total for this order is: £ <?php echo $_SESSION["totalPrice"] ?>
                <br>
                The total number of items are: <?php echo $_SESSION["cartItems"] ?> items
                <br><br>
                <a href="#"> 
                    <button> Checkout </button>
                </a>
                <?php 
                    }
                ?> 
            </p>
            
            <br><br><br>
            <br><br><br>

        </div>
    </body>

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
                        <li><a href="#">about us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <br>
                        <li>Games4U.org</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</html>