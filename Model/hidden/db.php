<?php
$serverName = "localhost";
$username = "Grad_Application";
$password = "598254479";
$dbName = "ExampleHub";

public function connect(){
	try{
	        $conn = new PDO("mysql:host=$serverName;dbname=$dbName", $username, $password);
	        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        return $conn;
	}
	catch(PDOException $e){
	        return $e->getMessage();
	}
}
?>
