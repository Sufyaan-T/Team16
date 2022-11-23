<?php 
    include("connectedDatabase.php"); 
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Products </title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <script src="https://kit.fontawesome.com/c035b66456.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </head>

    <body> 
        <!--
            The following code is regarding the navigation bar, which is uniformed across all web pages 
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

        <h3> Products Page </h3>
        <br><br>

        <?php 
            $sql = ('SELECT * FROM products'); 
            $result = mysqli_query($con, $sql);
        ?> 

        <!--
            The following table allows the table to be displayed, in a manner which is user friendly and easy to read
        -->
            <div class="container">
                <table class = "admin-table"> 
                    <thead>
                        <tr>
                            <!--
                            <th> Product </th> 
                            <th> Price </th>
                            <th> Quantity </th> 
                            <th> Remove </th> 
                            <th> Subtotal </th>
                            -->
                            <th> id </th>
                            <th> name </th> 
                            <th> productId </th> 
                            <th> price </th> 
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php 
                                if ($result) { 
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $id = $row['id']; 
                                        $prodName = $row['name'];
                                        $prodId = $row['productId'];
                                        $prodPrice = $row['price'];
                            ?>  

                            <td> <?php echo $id ?> </td>
                            <td> <?php echo $prodName ?> </td>
                            <td> <?php echo $prodId ?> </td>
                            <td> <?php echo $prodPrice ?> </td>
                            <td> 
                                <form method="post" action="addingToCart.php?action=add&id=<?php echo $row["id"]; ?>">
                                    <input type = hidden name = "hiddenProductName" value="<?php echo $row['name']; ?>" >
                                    <input type = hidden name = "hiddenProductPrice" value="<?php echo $row['price']; ?>" >
                                    <input type = submit name = "addTocart" value="Add To Cart" />
                                </form>
                            </td>
                        </tr>

                        <?php
                            }
                            }
                        ?>
                    </tbody>
                </table>


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