<?php
/**
 * Created by PhpStorm.
 * User: Mitchell
 * Date: 4/24/2016
 * Time: 10:13 PM
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$message = "";
require_once '../Model/login.php';
$username = strip_tags($_POST['username']);//prevent sql injection.
$password = strip_tags($_POST['hash']);

//echo $username."us";
$username = stripslashes($username);
$password = stripslashes($password);
//echo $username."us";

if(logIn($username, $password)){




//header("Location: PersonalBoard.php");
}
else{
	//header("Location: PersonalBoard.php");
}
?>

