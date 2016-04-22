<?
/* Nick Thomas
University of Utah
cs4540 - Web Systems
4/17/2016
Example Hub
*/

class LoginHelpers(){
    function register( $username, $password){
    	//redirectToHTTPS();
        require 'hidden/db.php';

        try{
            
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
    function computeHash ($password, $salt) {
        return crypt($password, $salt);
    }
}

?>