<?php 
    # The following starts the session, and creates a new session variable which holds the number of items in the cart
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> Basket </title>
        <!--
            The following code links this webpage to the css file, JavaScript file and to font awesome 
        -->
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="css/basketPage.css"/>
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
                <li><a href="basket.php"><i class="fa-solid fa-basket-shopping"></i> </a></li>
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

        <!-- 
            The following code is placed in a basketContainer, which adds padding and changes the text colour
        -->
        <div class="basketContainer">
            <!-- The following code displays an appropriate heading -->
            <h3> Your Basket </h3>

            <!--
                The following php block checks whether the cart variable is empty, and if so, displays an appropriate message to the user 
                The else statement displays the contents of the cart variable in a table 
            -->
            <?php 
                # If the session variable is empty, a suitable message is displayed to the user
                if(empty($_SESSION['basket'])) { 
            ?>
            <!-- The following paragraph tag is used to display a message to the user when the basket is empty -->
            <p>
                <?php 
                    # Page Breaks
                    echo "<br><br>";
                    echo "Basket is empty, continue shopping";
                    # Page Breaks
                    echo "<br><br><br><br><br><br><br>";
                    # This is the else statement to the if statement seen above
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
                        <th> PRODUCT </th> 
                        <th> SUBTOTAL <th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    # The following is a session variable which holds the total price of the order
                    $_SESSION['totalPrice'] = 0;
                    # The following is a session variable which creates an empty array
                    $_SESSION['totalProducts'] = array();
                        # The foreach loop allows us to iterate over the session array
                        foreach($_SESSION['basket'] as $keys => $values) { 
                    ?>

                    <!--
                        The following code displays the php variables derived from the session array 
                        This also contains a button which removes products from the basket
                    -->
                    <tr>
                        <td> <?php echo $values["productName"]; ?> </td> 
                        <td> £<?php echo $values["productPrice"]; ?> </td> 
                        <td> 
                            <!-- The following code is a hyperlink to a php file, which sends the productId -->
                            <a href = "removingFromBasket.php?action=remove&id=<?php echo $values['productId']; ?>">
                                <div class = "removeButton">
                                    <i class="fa-solid fa-trash"></i> 
                                </div>
                            </a>
                        </td>
                    </tr> 
                    <?php
                        # The session variable that was created above is updated, by adding the new value and the original value 
                        $_SESSION['totalPrice'] = $_SESSION['totalPrice'] + $values["productPrice"];
                         # The session array created above is updated, with the current contents and the productId being pushed 
                        array_push($_SESSION['totalProducts'], $values["productId"]);
                        # This session variabel holds the number of items that are currently stored in the basket
                        $_SESSION['basketItems'] = count($_SESSION['basket']);
                        } 
                    ?>
                </tbody>
            </table>
            
            <!-- 
                The following paragraph displays the number of items in the basket, and the total price
                Session variables are used to update and display both the price and the number of items
                A checkout button has also been included, which will take the user to the checkout page
            -->
            <p>
                Number of item(s) in the basket: <?php echo $_SESSION['basketItems'] ?>
                <br>
                The total for this order is: £<?php echo $_SESSION['totalPrice'] ?>
                <br><br>
                <div class="button-update">
                    <a href="#"> Checkout </a>
                </div>
                <?php 
                    }
                ?> 
            </p>
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