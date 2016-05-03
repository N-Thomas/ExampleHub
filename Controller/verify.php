<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


session_start();

if(!isset($_SESSION['id'])){//verify that they are signed in.
	header("Location: Login.php");
}
else{
    $user = new User($_SESSION['id']);
	
}

?>