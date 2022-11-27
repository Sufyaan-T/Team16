<?php 
    # The session is started
    session_start();
    # The following code will only run if the action variable is set
    if(isset($_GET["action"])) {
        # The following code will only run if the action set is to remove from the basket
        if($_GET["action"] == "remove") { 
            # The following uses a foreach loop to retrieve the session array
            foreach($_SESSION['basket'] as $keys => $values) { 
                # The following checks that the provided product id matches an id the array
                if($values["productId"] == $_GET["id"]) { 
                    # This removes the key and value pairing from the array 
                    unset($_SESSION["basket"][$keys]); 
                }
            }
        }
        # Takes the user to the basket page 
        header("Location: basket.php");
    }
?>