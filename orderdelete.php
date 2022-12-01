<!--Pantelis Xiourouppas - 160056307 -->
<?php

include 'connect.php';

//order table delete
if (isset($_GET['OrderDelete'])) {
  $idOrder = $_GET['OrderDelete'];

  $sql = "delete from `billingdetails` where id = $idOrder";
  $result = mysqli_query($con, $sql);

  if ($result) {

    header('location:adminpage.php');

  } else {
    die(mysqli_error($con));
  }

}
?>