<?php
    $con = new mysqli('localhost','root','','games4u');

    if(!$con)
    {
        die(mysqli_error($con));

    }
?>