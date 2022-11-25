<?php 
    session_start();
    
    #Checks if the add to cart button has been clicked
    if(isset($_POST['addToBasket'])) { 
        #Checks if the variable cart has been set
        if (isset($_SESSION['basket'])) { 

            $basketArrayId = array_column($_SESSION['basket'], 'id');
            
            if(!in_array($_GET["id"], $basketArrayId )) { 
                $count = count($_SESSION["basket"]);
                $basketArray = array( 
                    'productId' => $_GET["id"],
                    'productName' => $_POST["hiddenProductName"],
                    'productPrice' => $_POST["hiddenProductPrice"]
                );
                
                $_SESSION["basket"][$count] = $basketArray;
                header("Location: basket.php");

            } else { 
                echo "Already Placed In Basket";
            }

        } else { 
            $basketArray = array( 
                'productId' => $_GET["id"],
                'productName' => $_POST["hiddenProductName"],
                'productPrice' => $_POST["hiddenProductPrice"]
            );

            $_SESSION["basket"][0] = $basketArray;
            header("Location: basket.php");
        }
    }
?>