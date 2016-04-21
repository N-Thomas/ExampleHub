<?php
/* Nick Thomas
University of Utah
cs4540 - Web Systems
4/17/2016
Example Hub
*/

require_once 'answer.php';
require_once 'hidden/db.php';

class Question
{
    public $id, $userId, $category, $score, $title, $body, $images, $solved, $answers;

    public function __construct(  ){
        $this->id = -1;
        $this->score = 1;
        $this->title = "";
        $this->category = "";
        $this->body = "";
        $this->answers = [];
        $this->images = [];
        $this->solved = 0;
        
    }

    /* Fetches the information from a specific question from the db */
    public function populate( $fetch ){
        // $this->id = $fetch;

        // //Lookup all info about question
        // $query = "SELECT * FROM Post WHERE id='" . $id . "'";

        // $statement = $db->prepare( $query );
        // $statement->execute(  );

        // $result    = $statement->fetch(PDO::FETCH_ASSOC);

        // $this->userId = $result['UserID'];
        // $this->score = $result['Score'];
        // $this->title = $result['Title'];
        // $this->body = $result['Text'];
        // $this->solved = $result['Solved'];
        // $this->date = $result['Date'];

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
        echo "started submission<br>";
        if($this->title == "" || $this->body == ""){
            return false;
        }
        if($this->id == -1){
            try{
                echo "creating new submission<br>";
                $stmt = $conn->prepare("INSERT INTO Post (Title, Category, Parent, UserID, Text, Score, Solved) VALUES (?,?,?,?,?,?,?)");
                $conn->beginTransaction();
                $stmt->bindValue(1, $this->title);
                $stmt->bindValue(2, $this->category);
                $stmt->bindValue(3, 0);
                $stmt->bindValue(4, $this->userId);
                $stmt->bindValue(5, $this->body);
                $stmt->bindValue(6, $this->score);
                $stmt->bindValue(7, $this->solved);

                $stmt->execute();
                $submittedId = $conn->lastInsertId();
                $conn->commit();

                $this->id = $submittedId;
                echo $submittedId . "<br>";
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