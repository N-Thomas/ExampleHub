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
$n = 10;
if(isset($_POST['howmany'])){
	$n = $_POST['howmany'];
}
$posts = frontpage($n);
foreach($posts as $p){
	$postId = $p->getId();
	$postString = <<<END
		<li>
            <div class="container">
                <h2>$p->category</h2>
                <div class="well">
					<div class = "row">
						<div class = "col-lg-10">$p->title</div>
					
						<div class = "col-lg-2">
						<a href = "QA.php?id=$postId" class = "btn btn-default">View Question</a>
						</div>
					</div>
				</div>
			</div>
		</li>
END;
	$html.=$postString;
}


require_once 'verify.php';
require_once '../View/QuestionBoard.php';
?>