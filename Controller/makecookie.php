<?php
/**
 * Created by PhpStorm.
 * User: Mitchell
 * Date: 4/24/2016
 * Time: 10:13 PM
 */
session_start();

$username = strip_tags($_POST['username']);//prevent sql injection.
$password = strip_tags($_POST['hash']);

//echo $username."us";
$username = stripslashes($username);
$password = stripslashes($password);
//echo $username."us";


$password = md5($password);//hashword

$_SESSION['username'] = $username;
$_SESSION['password'] = $password;


header("Location: QuestionBoard.php");
?>

