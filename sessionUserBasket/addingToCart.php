<?php 
    session_start();
    
    #Checks if the add to cart button has been clicked
    if(isset($_POST['addTocart'])) { 
        #Checks if the variable cart has been set
        if (isset($_SESSION['cart'])) { 

            $cartArrayId= array_column($_SESSION['cart'], 'id');
            
            if(!in_array($_GET["id"], $cartArrayId)) { 
                $count = count($_SESSION["cart"]);
                $cartArray = array( 
                    'productId' => $_GET["id"],
                    'productName' => $_POST["hiddenProductName"],
                    'productPrice' => $_POST["hiddenProductPrice"]
                );
                $_SESSION["cart"][$count] = $cartArray;
                header("Location: basket.php");

            } else { 
                echo "Already Placed In Cart";
            }

        } else { 
            $cartArray = array( 
                'productId' => $_GET["id"],
                'productName' => $_POST["hiddenProductName"],
                'productPrice' => $_POST["hiddenProductPrice"]
            );
            $_SESSION["cart"][0] = $cartArray;
            header("Location: basket.php");
        }
    }
?>