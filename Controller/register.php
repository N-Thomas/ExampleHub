<?php

require_once '../Model/login.php';
require '../Model/user.php';
require '../Model/post.php';


$user = $_POST["username"];
$password = $_POST["pwd1"];

if(registerUser($user, $password)){
	
	
	login($user, $password);
	header("Location: PersonalBoard.php");
}
else{
	header("Location: register.php");
	
}


?>