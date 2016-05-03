<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../Model/login.php';
require '../Model/user.php';
require '../Model/post.php';

session_start();

if(!isset($_SESSION['id'])){//verify that they are signed in.
	header("Location: Login.php");
}
else{
	$uid = $_SESSION['id'];
	$post = new Post();
	$post->parent = $_POST['parent'];
	$post->title = "reply";
	$post->category = $_POST['category'];
	$post->body = $_POST['answer'];
	$post->userId = $uid;
	$pid = $post->submit();
	if($pid){
		header("Location: QA.php?id=" . $post->parent);
	}
	else{
		header("Location: QuestionBoard.php" );
	}

}


?>