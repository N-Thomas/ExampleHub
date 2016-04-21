<?php
$serverName = "localhost";
$username = "Grad_Application";
$password = "598254479";
$dbName = "ExampleHub";

try{
        $conn = new PDO("mysql:host=$serverName;dbname=$dbName", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
        echo $e->getMessage();
}
?>
