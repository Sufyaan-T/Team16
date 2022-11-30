<?php 
    session_start();

    if(isset($_GET["action"])) {
        if($_GET["action"] == "remove") { 
            foreach($_SESSION["basket"] as $keys => $values) { 
                if($values["productId"] == $_GET["id"]) { 
                    unset($_SESSION["basket"][$keys]); 
                    echo "Item Removed";
                }
            }
        }
        header("Location: basket.php");
    }
?>