<?php
// resumes previous session
session_start();

// unsets data
session_unset();

// closes the session
session_destroy();

// will return the user back to the home page 
header("Location: basicWeb.php?message=Signed Out Successfully");
exit();


?>