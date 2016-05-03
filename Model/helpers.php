<?php

require_once 'post.php';

function frontpage( $number ){
	$results = [];

	require 'hidden/db.php';
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

function userquestions( $number, $id ){
    $results = [];

    require 'hidden/db.php';
    $query = "SELECT ID FROM Post WHERE Parent=0 AND UserID=" . $id .  " ORDER BY Date DESC LIMIT " . $number;

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