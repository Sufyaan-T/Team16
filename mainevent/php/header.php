<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
    
    <body>
        <div class="navbar">
            <a href="./basicWeb.html"><img src="images/Logo.png" class="logo"></a>
            <ul>
                <li><a href="./aboutUs.php">About Us</a></li>
                <li><a href="./contactUs.php">Contact Us</a></li>
                <li><a href="logIn.php">Log In</a></li>
                <li><a href="#"><i class="fa-solid fa-basket-shopping"></i> </a></li>
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
    </body>
</html>