<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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
	echo "could not fetch Question";
}
}
else{
	echo "Post id not set";
}

?>