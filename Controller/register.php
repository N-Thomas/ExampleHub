<?php

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
	 echo "something went wrong with logging in";
	}
}
else{
	header("Location: register.php");
	
}


?>