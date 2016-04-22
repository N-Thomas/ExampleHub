<?php
/* Nick Thomas
University of Utah
cs4540 - Web Systems
4/17/2016
Example Hub
*/
class User
{
    public $id, $userName, $score, $privileges, $questions, $answers;

    public function __construct(  ){
        $this->id = -1;
        $this->score = -1;
        $this->userName = "";
        $this->questions = [];
        $this->answers = [];
        
    }

    /* Fetches the information from a specific user from the db */
    public function populate ( $fetch ){
        $this->id = $fetch;
        try{
            require 'hidden/db.php';
            //Lookup all info about question
            $query = "SELECT * FROM User WHERE id='" . $this->id . "'";

            $statement = $db->prepare( $query );
            $statement->execute(  );

            $result    = $statement->fetch(PDO::FETCH_ASSOC);

            $this->id = $result['ID'];
            $this->userName = $result['UserName'];
            $this->privileges = $result['Privelages'];

        }
        catch (PDOException $ex){
            return false;
        }

        
    }

}

?>