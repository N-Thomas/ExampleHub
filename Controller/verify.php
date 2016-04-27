<?php



session_start();

if(!isset($_SESSION['id'])){//verify that they are signed in.
	header("Location: Login.php");
}
else{
    $user = new User($_SESSION['id']);
	$user->populate($_SESSION['id']);
}

?>