<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../Model/login.php';
require '../Model/user.php';
require '../Model/post.php';

//generates html for each post   Written by Aaron McGhie
$html = "";
//next line will pull posts when model function is finished
//$posts = (new Post())->fetchposts();
foreach($posts as $p){
	$postString <<<END
		<li>
            <div class="container">
                <h2>$p->category</h2>
                <div class="well">$p->title</div>
            </div>
        </li>
        <form action="QA.php?id=$p->id">
            <input type="submit" value="View Question">
        </form>
END;
	$html.=$postString;
}


require_once 'verify.php';
require_once '../View/QuestionBoard.php';
?>