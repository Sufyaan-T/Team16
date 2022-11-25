<!--Pantelis Xiourouppas - 160056307 -->
<?php

include 'connect.php';

//user table delete
if (isset($_GET['idDelete'])) {
  $id = $_GET['idDelete'];

  $sql = "delete from `users` where id = $id";
  $result = mysqli_query($con, $sql);

  if ($result) {

    header('location:adminpage.php');

  } else {
    die(mysqli_error($con));
  }

}
?>