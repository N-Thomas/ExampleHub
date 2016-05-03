<?php
//Voting button code retrieved from: http://codepen.io/bennettfeely/pen/CGFEs
  
?>
<!--This is a basic outline of what our forum can look like...-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Question/Answer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>var flag = false;</script>
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
            <a class="navbar-brand" href="#"><?php echo $user->userName; ?></a>
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

<div class="container">
    <h2>Question: <?php echo $post->title?></h2>
    <div class="well"><?php echo $post->body;?></div>
       
</div>
<ul>
    
	
    <?php for ($x = 0; $x < count($post->children); $x++): ?>
    <li>
        <div class="container">
            <h2>Answer</h2>

            <div class="vote circle" style="float:left;">
                <div    id = <?php "'up" . $x . "'" ?> class="increment up"></div>
                <div  id = <?php "'down" . $x . "'"?> class="increment down"></div>

                <div onclick = "flag = true;" class="count">0</div>
            </div>
			
            <div class="well well-lg" style="float:left;">
                <?php
                $p = new Post();
                $p->populate($post->children[$x]);
                 echo $p->body;?>
            </div>


        </div>
    </li>
    <?php endfor; ?>
 
</ul>

<h2 align="center">Your Answer</h2>

<textarea rows="8" cols="125" name="answer" form="usrform">
Enter your answer...
</textarea>

<form action="ProcessAnswer.php" method = "post" id="usrform">
	<input type="hidden"  name = "category" value = <?php echo "'" . $post->category . "'"; ?> >
	<input type="hidden"  name = "parent" value = <?php echo $_GET['id']?> >
    <input type="submit">
</form>

</body>
</html>