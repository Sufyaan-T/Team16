<!--Pantelis Xiourouppas - 160056307 -->
<?php

include 'connect.php';

//product table dete
if (isset($_GET['idDeleteCart'])) {
    $idCart = $_GET['idDeleteCart'];

    $sql = "delete from `products` where id = $idCart";
    $result = mysqli_query($con, $sql);

    if ($result) {

        header('location:adminpage.php');
        
    } else {
        die(mysqli_error($con));
    }
}
?>