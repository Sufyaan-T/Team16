<?php
include 'connect.php';
include 'functions.php';
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
</head>

<body>

    <div class="navbar">
        <a href="./basicWeb.html"><img src="images/Logo.png" class="logo"></a>
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
                // echo '<li><i class="fa-solid fa-basket-shopping"><script> alert ("You need to login to add to the basket!!!");window.location="login.php"</script></i></li>';
                
            }
            ?>
            
            
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

    <div class ="your-body">
        

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
                        <li><a href="./aboutUs.html">about us</a></li>
                        <li><a href="./contactUs.html">Contact Us</a></li>
                        <br>
                        <li>Games4U.org</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>



</body>
<!---End of Footer--->
</html>
