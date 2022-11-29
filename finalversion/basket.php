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
    <meta charset="UTF-8">
    <title> Basket </title>
    <!--
            The following code links this webpage to the css file, JavaScript file and to font awesome 
        -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <script src="https://kit.fontawesome.com/c035b66456.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <style>
        .row {
            display: -ms-flexbox;
            /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap;
            /* IE10 */
            flex-wrap: wrap;
            margin: 0 -16px;
        }

        .col-25 {
            -ms-flex: 25%;
            /* IE10 */
            flex: 25%;
        }

        .col-50 {
            -ms-flex: 50%;
            /* IE10 */
            flex: 50%;
        }

        .col-75 {
            -ms-flex: 75%;
            /* IE10 */
            flex: 75%;
        }

        .col-25,
        .col-50,
        .col-75 {
            padding: 0 16px;
        }

        .containerBilling {
            background-color: #747474;

            padding: 5px 20px 15px 20px;

            border-radius: 3px;
        }


        input[type=text] {
            width: 100%;
            margin-bottom: 20px;
            padding: 12px;

            border-radius: 3px;
        }

        .containerBilling label {
            margin-bottom: 10px;
            display: block;
        }

        .containerBilling .icon-container {
            margin-bottom: 20px;
            padding: 7px 0;
            font-size: 24px;
        }

        label {
            color: white;
        }


        .containerBilling a {
            color: #2196F3;
        }

        .containerBilling hr {
            border: 1px solid lightgrey;
        }

        .containerBilling span.price {
            float: right;
            color: grey;
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
                echo '<li><a href="basket.php"><i class="fa-solid fa-basket-shopping"></i> </a></li>';
            } else {
                echo '<li><a href="login.php"><i class="fa-solid fa-basket-shopping"></i> </a></li>';
                // echo '<li> <script> alert ("You need to login to add to the basket!!!");window.location="basicWeb.php"</script>  <i class="fa-solid fa-basket-shopping"></i></li>';

            }
            ?>


        </ul>

    </div>
    <!-- END OFMAIN NAV BAR  -->


    <div class="detailsBoxB">

        <!-- BASKET CONTAINING THE BASKET-->
        <h1 style="text-align:center; color:white;"> Your Basket </h1>
        <!--
                The following php block checks whether the cart variable is empty, and if so, displays an appropriate message to the user 
                The else statement displays the contents of the cart variable in a table 
            -->
        <?php
        # If the session variable is empty, a suitable message is displayed to the user
        if (empty($_SESSION['basket'])) {
        ?>
            <h2>
                <ul>
                <?php

                echo "<br><br>";
                echo "Basket is empty, continue shopping";

                echo "<br><br><br><br><br>";
            } else {
                ?>
                </ul>
            </h2>
            <!--
                The following table displays the contents of the cart
                The table also contains a button which allows the user to remove products from the cart 
            -->
            <table class="basket-table">
                <thead>
                    <tr>
                        <th> PRODUCT </th>
                        <th> SUBTOTAL
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    # The following is a session variable which holds the total price of the order
                    $_SESSION['totalPrice'] = 0;
                    # The following is a session variable which creates an empty array
                    $_SESSION['totalProducts'] = array();
                    # The foreach loop allows us to iterate over the session array
                    foreach ($_SESSION['basket'] as $keys => $values) {
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
                                <a href="removingFromBasket.php?action=remove&id=<?php echo $values['productId']; ?>">
                                    <div class="removeButton">
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

            <h2>Number of item(s) in the basket: <?php echo $_SESSION['basketItems'] ?></h2>
            <br>
            <h2> The total for this order is: £<?php echo $_SESSION['totalPrice'] ?></h2>
            <br><br>

        <?php
            }
        ?>


        <!-- Billing Address -->
        <?php

        if (isset($_POST['SubmitButton'])) {

            $name = $_POST['name'];
            $billingEmail = $_POST['billingEmail'];
            $nameOnCard = $_POST['nameOnCard'];
            $address = $_POST['address'];
            $debitCardNumber = $_POST['debitCardNumber'];
            $city = $_POST['city'];
            $county = $_POST['county'];
            $postcode = $_POST['postcode'];
            $expyear = $_POST['expyear'];
            $expmonth = $_POST['expmonth'];
            $cvv = $_POST['cvv'];
            $product = $_POST['productName'];
            $productprice = $_POST['price'];



            $sql = "insert into `billingdetails` (name, billingEmail, nameOnCard, address,debitCardNumber, city, county, postcode, expyear, expmonth, cvv, product,productPrice,date) 
            values('$name','$billingEmail','$nameOnCard','$address','$debitCardNumber','$city','$county ','$postcode','$expyear','$expmonth','$cvv','$product','$productprice',CURRENT_TIME())";
            $result = mysqli_query($con, $sql);

            if ($result) {
                echo "<script> alert('Order Has Been Placed'); window.location ='basicWeb.php'</script>";
            } else {
                die(mysqli_errno($con));
            }

            unset($_SESSION['basketItem']);
            unset($_SESSION['basketPrice']);
            unset($_SESSION['basket']);
        }
        ?>
        <!-- Billing Address END -->
        <h2 style="text-align:center; color:white;">Fill in your details</h2>
        <div class="row">

            <div class="col-75">
                <div class="containerBilling">
                    <form method="post">

                        <div class="row">
                            <div class="col-50">
                                <h3 style="color:white;">Billing Address</h3>
                                <label for="name"><i class="fa fa-user"></i> Full Name</label>
                                <input type="text" class="formInput" id="fname" name="name" placeholder="Kaladin Stormblessed">
                                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                <input type="text" class="formInput" id="email" name="billingEmail" placeholder="salaris@example.com">
                                <label for="address"><i class="fa fa-address-card-o"></i> Address</label>
                                <input type="text" class="formInput" id="adr" name="address" placeholder="70A Leoforos Makariou">
                                <label for="city"><i class="fa fa-institution"></i> City</label>
                                <input type="text" class="formInput" id="city" name="city" placeholder="Aradippou">

                                <div class="row">
                                    <div class="col-50">
                                        <label for="state">County</label>
                                        <input type="text" class="formInput" id="state" name="county" placeholder="West Midlands">
                                    </div>
                                    <div class="col-50">
                                        <label for="zip">Post Code</label>
                                        <input type="text" class="formInput" id="zip" name="postcode" placeholder="B23..">
                                    </div>
                                </div>
                            </div>

                            <div class="col-50">
                                <h3 style="color:white;">Payment</h3>
                                <label for="fname">Accepted Cards</label>
                                <div class="icon-container">
                                    <i class="fa fa-cc-visa" style="color:navy;"></i>
                                    <i class="fa fa-cc-amex" style="color:blue;"></i>
                                    <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                    <i class="fa fa-cc-discover" style="color:orange;"></i>
                                </div>
                                <label for="cname">Name on Card</label>
                                <input type="text" class="formInput" id="cname" name="nameOnCard" placeholder="Ash Ketchum">
                                <label for="ccnum">Debit card number</label>
                                <input type="text" class="formInput" id="ccnum" name="debitCardNumber" placeholder="1111-2222-3333-4444">
                                <label for="expmonth">Exp Month</label>
                                <input type="text" class="formInput" id="expmonth" name="expmonth" placeholder="February">
                                <div class="row">
                                    <div class="col-50">
                                        <label for="expyear">Exp Year</label>
                                        <input type="text" class="formInput" id="expyear" name="expyear" placeholder="2029">
                                    </div>
                                    <div class="col-50">
                                        <label for="cvv">CVV</label>
                                        <input type="text" class="formInput" id="cvv" name="cvv" placeholder="999">
                                    </div>
                                </div>
                                <input type="hidden" name="productName" value="<?php echo $values["productName"]; ?>">
                                <input type="hidden" name="price" value="<?php echo $values["productPrice"]; ?>">
                            </div>


                        </div>
                        <label>
                            <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                        </label>
                        <button type="submit" class="submitButton" name="SubmitButton">Place Order</button>






                    </form>
                </div>
            </div>
        </div>


    </div>
    </div>

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

</html>