<?php
/* Nick Thomas
University of Utah
cs4540 - Web Systems
4/17/2016
Example Hub
*/

require_once '../Model/question.php';

$mainQuestion = new Question();
$mainQuestion->id = 5;
$mainQuestion->score = 2;
$mainQuestion->title = "How do I add?";
$mainQuestion->body = "I have always wanted to know";
$mainQuestion->solved = false;

$solved = "false";
if($mainQuestion->solved){
    $solved = "true";
}

echo "<html>";
echo "id: " . $mainQuestion->id . "<br>";
echo "score: " . $mainQuestion->score . "<br>";
echo "title: " . $mainQuestion->title . "<br>";
echo "body: " . $mainQuestion->body . "<br>";
echo "solved: " . $solved . "<br>";
echo "</html>";


?>