<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../Model/login.php';
require '../Model/user.php';
require '../Model/post.php';


$user = $_POST["username"];
$password = $_POST["pwd1"];

if(registerUser($user, $password)){
	
	
	if(logIn($user, $password)){
	header("Location: PersonalBoard.php");
	}
	else{
	 header("Location: ../View/Signup.php?error=" . $message);
	}
}
else{
	header("Location: Signup.php");
	
}


?>