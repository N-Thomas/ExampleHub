<?php
/**
 * Created by PhpStorm.
 * User: Mitchell
 * Date: 4/24/2016
 * Time: 9:34 PM
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Your Questions</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="button.js"></script>

    <style>
        body {
            background-color: rgba(35, 35, 36, 0.18);
        }
        textarea
        {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        form {
            text-align: center;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><?php echo $_SESSION['username']; ?></a>
        </div>
        <ul class="nav navbar-nav">
            <!--            <li><a href="#">Home</a></li>-->
            <li><a href="QuestionBoard.php">View all questions</a></li>
            <li><a href="PersonalBoard.php">View your questions</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>
</nav>

<h2 align="center">Your Questions:</h2>

<!--Placeholder. Questions are pulled from the database-->
<ul>
    <?php 
		echo $html;
	?>
</ul>


<h2 align="center">Post Your Question</h2>
<label for= "title">Title</label>
<input type=text required = true; name="title" form="usrform">
<textarea rows="8" cols="125" name="Question" form="usrform" required = "true">
    Enter your question...
</textarea>

<fieldset data-role="controlgroup" data-type="horizontal" align="center">
    <legend>Math or science?:</legend>
    <label for="Math">Math</label>
    <input type="radio" name="mathorsci" id="math" value="Math" form="usrform" checked>
    <label for="Science">Science</label>
    <input type="radio" name="mathorsci" id="science" value="Science" form="usrform">
</fieldset>


<form action="processQuestion.php" method = "post" id="usrform">
    <input type="submit">
</form>

</body>
</html>