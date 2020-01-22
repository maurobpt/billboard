<?php
//star session
session_start();

//condition to verifie the existence of the session vars
if (!(isset($_SESSION['myusername']) && isset($_SESSION['mypassword']) && isset($_SESSION['myuser_id']))) {
    //redirect to main_login when one of the session vars is missing
	header("Location:main_login.php");
	exit();
} else {
    //create vars to check user
	$u_id = $_SESSION['myuser_id'];
}

?>

