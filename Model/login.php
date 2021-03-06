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

function logIn($user, $psswrd){
    redirectToHTTPS();
    try {
    	require 'hidden/db.php';
        $stmt = $db->prepare("SELECT * from User WHERE UserName = ?");
        $stmt->bindValue(1, $user);
        $stmt->execute();

        //verify user exists
        if ($row = $stmt->fetch()){
            $hashedPassword = $row['Password'];
            
            //Validate
            if (password_verify($psswrd, $hashedPassword)){
                session_start();
                $_SESSION['id'] = $row['ID'];
                $_SESSION['username'] = $row['UserName'];
                $_SESSION['role'] = $row['Privelages'];
                return true;
            }
            else {
                $message = 'Log in info not validated';
                echo $message;
                /* TODO: Throw an error and redirect $message */
                return false;
            }

        }
        else {
            $message = 'User does not exist';
            echo $message;
            /* TODO: Throw an error and redirect $message */
            return false;
        }
    }
    catch (PDOException $exception) {
        /* TODO: redirect */
        return false;
    }
}

function registerUser( $user, $psswrd){
	redirectToHTTPS();

    try{
    	require 'hidden/db.php';
        $stmt = $db->prepare("insert into User (UserName, Password, Privelages) values(?,?,?)");
        $db->beginTransaction();
        $stmt->bindValue(1, $user);
        //$hashedPassword = computeHash($password, makeSalt());
        $hashedPassword = password_hash($psswrd, PASSWORD_DEFAULT);
        $stmt->bindValue(2, $hashedPassword);
        $stmt->bindValue(3, 0);
        $stmt->execute();
        $db->commit();
        return true;

    }

    catch (PDOException $ex){
        return false;
    }
}

/*This function from GSCDB example */ 
function usingHTTPS () {
    return isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] != "off");
}

/*This function from GSCDB example */ 
function redirectToHTTPS(){
    if(!usingHTTPS())
    {
        $redirect = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        header("Location:$redirect");
        exit();
    }
}

/*This function from GSCDB example */ 
function makeSalt(){
    $salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');
    return '$2a$12$' . $salt;
}

/*This function from GSCDB example */ 
function computeHash ($psswrd, $salt) {
    return crypt($psswrd, $salt);
}

?>