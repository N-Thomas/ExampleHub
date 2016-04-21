<?php
/* Nick Thomas
University of Utah
cs4540 - Web Systems
4/17/2016
Example Hub
*/

require_once 'answer.php';

class Question
{
    public $id, $score, $title, $body, $images, $solved, $answers;

    public function __construct(  ){
        $this->id = -1;
        $this->score = 1;
        $this->title = "";
        $this->body = "";
        $this->answers = [];
        $this->images = [];
        $this->solved = false;
        
    }

    /* Fetches the information from a specific question from the db */
    public function populate( $fetch ){
        $this->id = $fetch;

        // Lookup all info about question
        // $query = "SELECT * FROM Questions WHERE id='" . $id . "'";

        // $statement = $db->prepare( $query );
        // $statement->execute(  );

        // $result    = $statement->fetch(PDO::FETCH_ASSOC);

        // $this->score = $result['score'];
        // $this->title = $result['title'];
        // $this->body = $result['body'];
        // $this->solved = $result['solved'];

        // //lookup answers associated with question
        // $query = "SELECT * FROM Answers WHERE id='" . $id . "'";

        // $statement = $db->prepare( $query );
        // $statement->execute(  );

        // $result    = $statement->fetchAll(PDO::FETCH_ASSOC);

        // foreach ($result as $row){
        //     $questionAnswer = new Answer();
        //     $questionAnswer.populate( $row['id'] );
        //     array_push($this->answers, $questionAnswer);
        // }

        // //lookup images associated with question
        // $query = "SELECT * FROM Images WHERE id='" . $id . "'";

        // $statement = $db->prepare( $query );
        // $statement->execute(  );

        // $result    = $statement->fetchAll(PDO::FETCH_ASSOC);

        // foreach ($result as $row){
        //     $questionImage = $row['url'];
        //     array_push($this->images, $questionImage);
        // }

    }

    /* Submits a created question to the database */
    function submit (){
        if($this->title == "" || $this->body == ""){
            return false;
        }
        if($this->id == -1){
            //create new entry
        }
        else{
            //modify/replace old entry
        }

    }
}

?>