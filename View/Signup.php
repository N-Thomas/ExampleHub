<?php
/**
 * Created by PhpStorm.
 * User: Mitchell
 * Date: 4/24/2016
 * Time: 10:49 PM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="button.js"></script>

    <script type="text/javascript">

        /**
         * Note: by returning FALSE we DISABLE THE SUBMIT
         *
         *       forgetting to return false will result in the form being submitted
         *       regardless of error echecking
         *
         */
        function checkForm(form)
        {
            if(form.username1.value == "")
            {
                alert("Error: Username cannot be blank!");
                form.username.focus();
                return false;

            }

            re = /^\w+$/;

            if(!re.test(form.username1.value))
            {
                alert("Error: Username must contain only letters, numbers and underscores!");
                form.username.focus();
                return false;
            }

            if (form.pwd1.value == "")
            {
                alert("Error: Must have a password");
                form.pwd1.focus();
                return false;
            }

            if (form.pwd1.value != form.pwd2.value)
            {
                alert("Error: Passwords don't match");
                form.pwd1.focus();
                return false;
            }

            if (form.username1.value != form.username2.value)
            {
                alert("Error: Usernames don't match");
                form.username1.focus();
                return false;
            }

            if(form.pwd1.value.length < 8)
            {
                alert("Error: Password must contain at least eight characters!");
                form.pwd1.focus();
                return false;
            }

            if(form.pwd1.value == form.username.value)
            {
                alert("Error: Password must be different from Username!");
                form.pwd1.focus();
                return false;
            }

            re = /[0-9]/;
            if(!re.test(form.pwd1.value))
            {
                alert("Error: password must contain at least one number (0-9)!");
                form.pwd1.focus();
                return false;
            }


            re = /[a-z]/;
            if(!re.test(form.pwd1.value))
            {
                alert("Error: password must contain at least one lowercase letter (a-z)!");
                form.pwd1.focus();
                return false;
            }


            re = /[A-Z]/;
            if(!re.test(form.pwd1.value))
            {
                alert("Error: password must contain at least one uppercase letter (A-Z)!");
                form.pwd1.focus();
                return false;
            }
            return true;

        }
    </script>

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

</head>



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

<form onsubmit="return checkForm(this);" action="register.php" method="post" enctype="multipart/form-data">
    <p>Username:
        <br>
        <input type="text" name="username" required="true">
    </p>

    

    <p>Password:
        <br>
        <input type="password" name="pwd1" required = "true">
    </p>

    <p>Confirm Password:
        <br>
        <input type="password" name="pwd2" required = "true">
    </p>

    <p>
        <input name="register" type="submit" value="Register">
    </p>
</form>



    </body>
</html>