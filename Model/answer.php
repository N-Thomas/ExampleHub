<?php
/* Nick Thomas
University of Utah
cs4540 - Web Systems
4/17/2016
Example Hub
*/


class Answer
{
    public $id, $score, $title, $body, $images, $solved;

    public function __construct(  ){
        $this->id = -1;
        $this->score = 1;
        $this->title = "";
        $this->body = "";
        $this->images = [];
        $this->solved = false;
        
    }

    /* Fetches the information from a specific answer from the db */
    public function populate ( $id ){
        $this->id = $id;

        
    }

    /* Submits a created answer to the database */
    public function submit ( $questionid ){
        if($this->id == -1){

        }
        else{

        }

    }
}

?>