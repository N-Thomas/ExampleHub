<?php
        require_once '../Model/login.php';
	require '../Model/user.php';
	require '../Model/post.php';
	$post = new Post();
	$post->vote($_GET['id'], $_GET['user'], $_GET['value']);
	header("location: QA.php?id=".$_GET['id']);
?>