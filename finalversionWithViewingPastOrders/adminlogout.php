<!--Pantelis Xiourouppas - 160056307 -->
<?php

session_start();

if(isset($_SESSION['id']))
{
	unset($_SESSION['id']);

}

header("Location: adminlogin.php");
die;