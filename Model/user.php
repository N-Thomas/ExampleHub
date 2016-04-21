<?php
/* Nick Thomas
University of Utah
cs4540 - Web Systems
4/17/2016
Example Hub
*/
class User
{
    public $id, $handle, $score, $questions, $answers;

    public function __construct(  ){
        $this->id = -1;
        $this->score = 1;
        $this->handle = "";
        $this->questions = []];
        $this->answers = [];
        
    }

    /* Fetches the information from a specific user from the db */
    public function populate ( $id ){
        $this->id = $id;

        
    }

    /* Submits a created user to the database */
    public function submit ( $questionid ){
        if($this->id == -1){
            //create new entry
        }
        else{
            //modify/replace old entry
        }

    }
}

?>