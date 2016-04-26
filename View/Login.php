<?php
/**
 * Created by PhpStorm.
 * User: Mitchell
 * Date: 4/24/2016
 * Time: 9:42 PM
 */


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../View/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="../View/button.js"></script>
</head>


<style>
    input[type=text] {
        background-color: white;
        background-position: 10px 10px;
        background-repeat: no-repeat;
        padding-left: 40px;
    }
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

<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#" class="active">Math/Science QA</a>
        </div>
        <ul class="nav navbar-nav">
<!--            <li class="active"><a href="#">Home</a></li>-->
            <li><a onclick="myFunction()">View all questions</a></li>
            <li><a onclick="myFunction()">View your questions</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="Signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>
</nav>

<script>
    function myFunction() {
        confirm("Please log in.");
    }
</script>

<form action="makecookie.php" method = "post" id="credentials">
    <p>
    Username:<br>
    <input type="text" name="username">
    </p>
    <p>
    Password:<br>
    <input type="password" name="hash">
    </p>
    <p>
    <input type="submit">
    </p>
</form>

</body>

</html>