<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../Model/login.php';
require '../Model/user.php';
require '../Model/post.php';
require '../Model/helpers.php';

//generates html for each post   Written by Aaron McGhie
$html = "";
$posts = frontpage(10);
foreach($posts as $p){
	$postId = $p->getId();
	$postString = <<<END
		<li>
            <div class="container">
                <h2>$p->category</h2>
                <div class="well">$p->title</div>
            </div>
        </li>
        <form action="QA.php?id=$postId">
            <input type="submit" value="View Question">
        </form>
END;
	$html.=$postString;
}


require_once 'verify.php';
require_once '../View/QuestionBoard.php';
?>