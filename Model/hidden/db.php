<?php
$serverName = "localhost";
$username = "Grad_Application";
$password = "598254479";
$dbName = "ExampleHub";

try{
        $db = new PDO("mysql:host=$serverName;dbname=$dbName", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
        echo $e->getMessage();
}
?>
