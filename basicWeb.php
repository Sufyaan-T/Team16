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

    
    <!-- This is the line you need -->
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">


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

        .Form-Container{
            display: flex;
    width: 50%;
    margin:auto;
    justify-content: center;
    padding: 0.75rem;
    box-sizing: border-box;
    border-radius: var(--border-radius);
    border: 1px solid #dddddd;
    outline: none;
    background: #eeeeee;
    transition: background 0.2s, border-color 0.2s;
        }
    </style>

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

    <!-- Search for product in the table, where user inputs is similar to a product in the table -->
        <form method="POST" action="basicWeb.php" class="Form-Container"> 
            <label> Search Criteria </label>
            <input class="formInput" type="text" name="criteria" placeholder="Game"> 
            <input class="formInput" type="submit" name="search" value="Search"/> 
            <input class="formInput" type="submit" name="reset" value="Reset"/> 
            <input type="hidden" name="searched" value="true"/>
        </form>

        <?php 

        if (isset($_POST["searched"])) { 
            if (isset($_POST["criteria"])) {
                $search = $_POST["criteria"];
                $sql = "SELECT * FROM products WHERE name LIKE '%{$search}%'";
                $all_products = $con->query($sql);
            } else { 
                $sql = "SELECT * FROM products";
                $all_products = $con->query($sql);
            }
        } elseif(isset($_POST["reset"])){
            $sql = "SELECT * FROM products";
            $all_products = $con->query($sql);
        }
        ?>

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