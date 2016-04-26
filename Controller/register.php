<?php

require_once '../Model/login.php';
require '../Model/user.php';
require '../Model/post.php';


$user = $_POST["username1"];
$password = $_POST["pwd1"];

if(registerUser($user, $password)){
	
	echo "you were registered";
}
else{
	echo "something went wrong";
}


?>