<?php
include_once  "../models/Comment.php";

class CommentDao extends BaseDao{
     private $tableName = "comments"; 
     public function __construct() { }    
     
     public function add($comment){
        $conn = get_connection();
        $entityDate = $comment->getPublishDate();
        $query = 'INSERT INTO '.$this->tableName
           . ' (authorId, articleId, text, publishDate) '
           . 'VALUES ("' . $comment->getAuthorId() . '", "' . $comment->getArticleId() . '", "' . $comment->getText() . '", ' . $entityDate . ')';
                
        //$entity = mysqli_query($conn, $query);
        if (!mysqli_query($conn, $query)) {
              printf("Errormessage: %s\n", mysqli_error($conn));
        }
        
        mysqli_close($conn);
        //return $entity;
     }
     
     public function update($comment){
        $conn = get_connection();
        $query = 'UPDATE articles 
                        SET 
                        authorId = "' . $comment -> getAuthorId() 
                        . '", articleId = "' . $comment -> getArticleId() 
                        . '", text = "' . $comment -> getText() 
                        . '", publishDate = "' . $comment -> getPublishDate() 
                        . '" WHERE id = ' . $article->getId(); 
                
        $entity = mysqli_query($conn, $query);
        mysqli_close($conn);
        return $entity;
     }
     
     public function findById($id){
        // $conn = get_connection();
        // $query = 'SELECT * FROM '.$this->tableName.' WHERE id = ' . $id; 
                
        // $entity = mysqli_query($conn, $query);
        // mysqli_close($conn);
        // return $entity;
        return null;
     }
     
     public function findAllByArticleId($articleId){
        $conn = get_connection();
        $query = 'SELECT id, authorId, articleId, text, publishDate FROM '.$this->tableName; 
                                   
        $entitiesList = array();
        $dbQuery = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($dbQuery)){
            $entity = new Comment($row["id"], $row["authorId"], $row["articleId"], $row["text"], $row["publishDate"]);
            $entitiesList[] = $entity;
        }
        mysqli_close($conn);
        return $entitiesList;
     }
     
     public function findAllByFilter($skip, $take){
         return null;
     }
     
     public function deleteById($id){
        $conn = get_connection();
        $query = 'DELETE FROM '.$this->tableName.' WHERE id = ' . $id;
        mysqli_query($conn, $query); 
        mysqli_close($conn);
     }
     
     public function deleteAll(){
        $conn = get_connection();
        $query = 'DELETE FROM '.$this->tableName;
        mysqli_query($conn, $query); 
        mysqli_close($conn);
     }
     
     
}
?>
