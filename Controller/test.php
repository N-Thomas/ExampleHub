<?php
/* Nick Thomas
University of Utah
cs4540 - Web Systems
4/17/2016
Example Hub
*/
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../Model/post.php';
require_once '../Model/user.php';
require_once '../Model/login.php';
require_once '../Model/helpers.php';



echo "<html>";

$frontPage = frontpage();

foreach($frontPage as $post){
	echo "score: " . $frontPage->score . "<br>";
	echo "title: " . $frontPage->title . "<br>";
	echo "body: " . $frontPage->body . "<br>";
	// echo "date: " . $frontPage-> . "<br><br><br>";
}

// if(logIn("test2", "tes")){
//     echo "Successfully logged in as " . $_SESSION['username'] . "<br> Your privilege level is " . $_SESSION['role'] . "<br>";
// }
// else{
//     echo "Log in failed<br>";
// }

// $cId = 2;

// if(isset($_SESSION['id'])){
//     $cId = $_SESSION['id'];
// }

// $currentUser = new User($cId); 
// echo "id: " . $currentUser->id . "<br>";
// echo "user name: " . $currentUser->userName . "<br><br><br>";

// $mainQuestion = new Post();
// $mainQuestion->score = 2;
// $mainQuestion->title = "How do I add?";
// $mainQuestion->body = "I have always wanted to know";
// $mainQuestion->solved = 0;
// $mainQuestion->userId = 1;
// $mainQuestion->category = "Science";
// $mainQuestion->parent = 3;

// $solved = "false";
// if($mainQuestion->solved){
//     $solved = "true";
// }


// echo "id: " . $mainQuestion->getId() . "<br>";
// echo "score: " . $mainQuestion->score . "<br>";
// echo "title: " . $mainQuestion->title . "<br>";
// echo "body: " . $mainQuestion->body . "<br>";
// echo "solved: " . $solved . "<br><br><br>";

// $response = $mainQuestion->submit();

// if($response){
// 	echo "Successful submission " . $response;
// }
// else{
// 	echo "Submission failed";
// }

// $pulledQuestion = new Post();
// $pulledQuestion->populate(3);

// echo "<br><br><br>";
// echo "id: " . $pulledQuestion->getId() . "<br>";
// echo "score: " . $pulledQuestion->score . "<br>";
// echo "title: " . $pulledQuestion->title . "<br>";
// echo "body: " . $pulledQuestion->body . "<br>";
// echo "children: " . count($pulledQuestion->children) . "<br>";
// foreach($pulledQuestion->children as $child){
//     echo "child: " . $child . "<br>";
// }

// if(registerUser("test2", "test")){
//     echo "Registration Successful";
// }
// else{
//     echo "Registration failed";
// }

echo "</html>";

?>
