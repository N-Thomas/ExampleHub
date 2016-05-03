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
	 header("Location: ../View/Signup.php?error=" . $message);
	}
}
else{
<<<<<<< HEAD
	header("Location: ../View/Signup.php");
=======
	header("Location: Signup.php");
>>>>>>> origin/master
	
}


?>