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
	$post->parent = 0;
	$post->title = $_POST['title'];
	$post->category = $_POST['mathorsci'];
	$post->body = $_POST['Question'];
	$post->userId = $uid;
	$pid = $post->submit();
	if($pid){
		header("Location: QA.php?id=" . $pid);
	}
	else{
		header("Location: QuestionBoard.php" );
	}

}


?>