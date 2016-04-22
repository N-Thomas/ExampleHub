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
    public $id, $userId, $category, $score, $title, $body, $solved, $children;

    public function __construct(  ){
        $this->id = -1;
        $this->score = 1;
        $this->title = "";
        $this->category = "";
        $this->body = "";
        $this->children = [];
        $this->solved = 0;
        
    }

    /* Lookup answers children with post */
    function getChildren(){
        if($this->id == -1){
            return false;
        }
        try{
            require 'hidden/db.php';

            $query = "SELECT * FROM Post WHERE Parent='" . $id . "'";

            $statement = $db->prepare( $query );
            $statement->execute(  );

            $result    = $statement->fetchAll(PDO::FETCH_ASSOC);

            foreach ($result as $row){
                // $questionAnswer = new Answer();
                // $questionAnswer.populate( $row['id'] );
                // array_push($this->children, $questionAnswer);
                array_push($this->children, $row['id']);
            }
        }
        catch (PDOException $ex){
            return false;
        }
    }

    /* Fetches the information from a specific question from the db */
    public function populate( $fetch ){
        $this->id = $fetch;
        try{
            require 'hidden/db.php';
            //Lookup all info about question
            $query = "SELECT * FROM Post WHERE id='" . $this->id . "'";

            $statement = $db->prepare( $query );
            $statement->execute(  );

            $result    = $statement->fetch(PDO::FETCH_ASSOC);

            $this->userId = $result['UserID'];
            $this->score = $result['Score'];
            $this->title = $result['Title'];
            $this->body = $result['Text'];
            $this->solved = $result['Solved'];
            $this->date = $result['Date'];
        }
        catch (PDOException $ex){
            return false;
        }

        getChildren();

    }

    /* Submits a created question to the database */
    function submit (){
        if($this->title == "" || $this->body == ""){
            return false;
        }
        if($this->id == -1){
            try{
                require 'hidden/db.php';

                $stmt = $db->prepare("INSERT INTO Post (Title, Category, Parent, UserID, Text, Score, Solved) VALUES (?,?,?,?,?,?,?)");
                $db->beginTransaction();
                $stmt->bindValue(1, $this->title);
                $stmt->bindValue(2, $this->category);
                $stmt->bindValue(3, 0);
                $stmt->bindValue(4, $this->userId);
                $stmt->bindValue(5, $this->body);
                $stmt->bindValue(6, $this->score);
                $stmt->bindValue(7, $this->solved);

                $stmt->execute();
                $submittedId = $db->lastInsertId();
                $db->commit();

                $this->id = $submittedId;
                return $submittedId;
                }
                catch (PDOException $ex){
                    return false;
                }
        }
        else{
            //modify/replace old entry
        }
        return false;

    }
}

?>