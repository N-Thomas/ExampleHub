<?php
/* Nick Thomas
University of Utah
cs4540 - Web Systems
4/17/2016
Example Hub
*/

require_once '../Model/post.php';

$mainQuestion = new Post();
$mainQuestion->score = 2;
$mainQuestion->title = "How do I add?";
$mainQuestion->body = "I have always wanted to know";
$mainQuestion->solved = false;
$mainQuestion->userId = 1;
$mainQuestion->category = "Science";
$mainQuestion->parent = 3;

$solved = "false";
if($mainQuestion->solved){
    $solved = "true";
}

echo "<html>";
echo "id: " . $mainQuestion->id . "<br>";
echo "score: " . $mainQuestion->score . "<br>";
echo "title: " . $mainQuestion->title . "<br>";
echo "body: " . $mainQuestion->body . "<br>";
echo "solved: " . $solved . "<br><br><br>";

$response = $mainQuestion->submit();

if($response){
	echo "Successful submission " . $response;
}
else{
	echo "Submission failed";
}

$pulledQuestion = new Post();
$pulledQuestion->populate(3);

echo "<br><br><br>";
echo "id: " . $pulledQuestion->id . "<br>";
echo "score: " . $pulledQuestion->score . "<br>";
echo "title: " . $pulledQuestion->title . "<br>";
echo "body: " . $pulledQuestion->body . "<br>";
echo "children: " . count($pulledQuestion->children);
// foreach($pulledQuestion->children as $child){
//     echo $child . "<br>";
// } 

echo "</html>";

?>