
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
require_once '../Model/login.php';
$username = strip_tags($_POST['username']);//prevent sql injection.
$password = strip_tags($_POST['password']);


$username = stripslashes($username);
$password = stripslashes($password);


if(login($username, $password)){




header("Location: PersonalBoard.php");
}
else{
	header("Location: Login.php");
}
?>

