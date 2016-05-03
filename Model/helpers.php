<?php

require_once 'post.php';

function frontpage(){
	$results = [];

	require 'hidden/db.php';
	$number = 10; //TODO set this through input
	$query = "SELECT ID FROM Post WHERE Parent=0 ORDER BY Score DESC, Date DESC LIMIT " . $number;

	$statement = $db->prepare( $query );
    $statement->execute(  );

    $result    = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $row){
    	$toAdd = new Post();
    	$toAdd->populate($row['ID']);
        array_push($results, $toAdd);
    }

    return $results;

}

?>