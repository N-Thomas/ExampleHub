<?php


require_once '../Model/login.php';
require '../Model/user.php';
require '../Model/post.php';

require_once 'verify.php';
if(isset($GET['id'])){
$pid = $_GET['id'];
echo $pid;
$post = new Post();
$result = $post->populate($pid);

if($result){
require_once '../View/QA.php';
}
else{
	header("HTTP/1.0 404 Not Found");
}
}
else{
	header("HTTP/1.0 404 Not Found");
}

?>