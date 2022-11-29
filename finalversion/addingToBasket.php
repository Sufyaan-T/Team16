<?php 
    # Starts the session
    session_start();
    
    #Checks if the add to cart button has been clicked
    if(isset($_POST['addToBasket'])) { 
        #Checks if the variable cart has been set
        if (isset($_SESSION['basket'])) { 
            # The following variable checks for an existing column with the productId
            $basketArrayId = array_column($_SESSION['basket'], 'productId');
            # If the item is not in the array, it will be placed into the array, at the next available row
            if(!in_array($_GET["id"], $basketArrayId )) { 
                $count = count($_SESSION['basket']);
                # This creates an array which is used for the basket, with key value pairing
                $basketArray = array( 
                    'productId' => $_GET["id"],
                    'productName' => $_POST["hiddenProductName"],
                    'productPrice' => $_POST["hiddenProductPrice"]
                );
                $_SESSION["basket"][$count] = $basketArray;
                # Takes the user to the basket page 
                header("Location: basket.php");

            # If the item is already in the basket, the user will be provided with a popup, which displays an appropriate message
            } else { 
                echo " 
                    <script> 
                        alert('This item is already in the basket');
                        window.location.href = 'basket.php';
                    </script>
                ";
            }

        } else { 
            # This creates an array which is used for the basket, with key value pairing
            $basketArray = array( 
                'productId' => $_GET["id"],
                'productName' => $_POST["hiddenProductName"],
                'productPrice' => $_POST["hiddenProductPrice"]
            );

            $_SESSION["basket"][0] = $basketArray;
            # Takes the user to the basket page             
            header("Location: basket.php");
        }
    }
?>