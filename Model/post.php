<?php
/* Nick Thomas
University of Utah
cs4540 - Web Systems
4/17/2016
Example Hub
*/


/*Post Object for Questions, Answers and Comments
*   $id : int = unique id of post
*   $score : int = score of post
*   title : string = title of post
*   categegory : string = category of post
*   body : string = body of  post
*   children : [int] = unique id of all child posts of this one
*   solved : int = boolean int declaring if the question is solved, or if it is an answer, it solved the question
*   parent : int = parent post. 0 if post is a question, parent is question if it is an answer, else it is a comment
*/
class Post
{
    public $userId, $category, $score, $title, $body, $solved, $children, $parent, $date;
    private $id;

    public function __construct( ){
        $this->id = -1;
        $this->score = 1;
        $this->title = "";
        $this->category = "";
        $this->body = "";
        $this->children = [];
        $this->solved = 0;
        $this->parent = -1;
        $this->date = "";
		$this->userId = 0;
        
    }

    /* Lookup answers children with post */
    // function getChildren(){
    //     if($this->id == -1){
    //         return false;
    //     }
    //     try{
    //         require 'hidden/db.php';

    //         $query = "SELECT * FROM Post WHERE Parent='" . $id . "'";

    //         $statement = $db->prepare( $query );
    //         $statement->execute(  );

    //         $result    = $statement->fetchAll(PDO::FETCH_ASSOC);

    //         foreach ($result as $row){
    //             // $questionAnswer = new Answer();
    //             // $questionAnswer.populate( $row['id'] );
    //             // array_push($this->children, $questionAnswer);
    //             array_push($this->children, $row['id']);
    //         }
    //     }
    //     catch (PDOException $ex){
    //         return false;
    //     }
    // }

    /* Fetches the information from a specific question from the db */
    public function populate( $fetch ){
        try{
            require 'hidden/db.php';
            //Lookup all info about question
            $query = "SELECT * FROM Post WHERE id=?";

            $statement = $db->prepare( $query );
            $statement->execute(array($fetch));

            $result    = $statement->fetch(PDO::FETCH_ASSOC);

            $this->userId = $result['UserID'];
            $this->score = $result['Score'];
            $this->title = $result['Title'];
            $this->body = $result['Text'];
            $this->solved = $result['Solved'];
            $this->date = $result['Date'];
            $this->parent = $result['Parent'];
			$this->category = $result['Category'];
            $this->id = $fetch;

            $query = "SELECT * FROM Post WHERE Parent='" . $this->id . "'";   //TODO: select only id

            $statement = $db->prepare( $query );
            $statement->execute(  );

            $result    = $statement->fetchAll(PDO::FETCH_ASSOC);

            foreach ($result as $row){
                array_push($this->children, $row['ID']);
            }
            return true;
        }
        catch (PDOException $ex){
            return false;
        }

    }

    /* Submits a created question to the database */
    public function submit ( ){
        if($this->title == "" || $this->body == "" || $this->parent == -1){
            return false;
        }
        if($this->id == -1){
            try{
                require 'hidden/db.php';

                $stmt = $db->prepare("INSERT INTO Post (Title, Category, Parent, UserID, Text, Score, Solved, Date) VALUES (?,?,?,?,?,?,?,now())");
                $db->beginTransaction();
                $stmt->bindValue(1, $this->title);
                $stmt->bindValue(2, $this->category);
                $stmt->bindValue(3, $this->parent);
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
	
	//Function for user up/downvote.  Added by Aaron McGhie
	public function vote($idPost, $idUser, $vote) {
		try{
			require 'hidden/db.php';
			
			//checks if relationship already exists
			$query = "SELECT * FROM Upvotes WHERE idPost=? AND idUser=?";

            $statement = $db->prepare( $query );
            $statement->execute(array($idPost, $idUser));

            $result = $statement->fetch(PDO::FETCH_ASSOC);
			if($result) return false;
			
			//relationship to upvote table
			$stmt = $db->prepare("INSERT INTO Upvotes (idPost, idUser) VALUES (?, ?)");
			$db->beginTransaction();
			$stmt->bindValue(1, $idPost);
			$stmt->bindValue(2, $idUser);
			
			$stmt->execute();
			$db->commit();
			
			//increment/decrement post score
			if($vote > 0) {
				$stmt = $db->prepare("UPDATE Post SET Score= Score+1 WHERE ID=$idPost");
				$stmt->execute();
			}
			else{
				$stmt = $db->prepare("UPDATE Post SET Score= Score-1 WHERE ID=$idPost");
				$stmt->execute();
			}
			return true;
			//small change
		}
		catch (PDOException $ex) {
			echo $ex;
		}
		return false;
	}
	
    public function getId(){
        return $this->id;
    }
}

?>