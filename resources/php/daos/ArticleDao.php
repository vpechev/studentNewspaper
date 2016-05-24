<?php
include_once "../models/article.php";
include_once "../functions/dbInitScript.php";

class ArticleDao extends BaseDao {
     public function __construct() {}
     
     public function add($article){
        $conn = get_connection();
        //var_dump($article->getCategory());
        $entityDate = "STR_TO_DATE(".$article->getPublishDate().", '%m/%d/%Y')";
        $query = 'INSERT INTO articles 
                        (title, text, userId, publishDate, category, likesCount, dislikesCount) 
                        VALUES ("' 
                            . $article->getTitle() . '", "' 
                            . $article->getText() . '", "'
                            . $article->getAuthorId() . '", "'
                            . $article->getPublishDate() . '", "'
                            . $article->getCategory() . '", "'
                            . $article->getLikesCount() . '", "'
                            . $article->getDislikesCount() . '")';

        $entity = mysqli_query($conn, $query);

        mysqli_close($conn);
        return $entity;
     }
     
     public function update($article){
        $conn = get_connection();
        $query = 'UPDATE articles 
                        SET 
                        title = "' . $article -> getTitle() 
                        . '", text = "' . $article -> getText() 
                        . '", userId = "' . $article -> getAuthorId() 
                        . '", publishDate = "' . $article -> getPublishDate() 
                        . '", category = "' . $article -> getCategory() 
                        . '", likesCount = "' . $article -> getLikesCount() 
                        . '", dislikesCount = "' . $article -> getDislikesCount() 
                        . '" WHERE id = ' . $article->getId(); 
                
        $entity = mysqli_query($conn, $query);
        mysqli_close($conn);
        return $entity;
     }
     
     public function findById($id){
        $conn = get_connection();
        $query = "SELECT id, title, text, userId, publishDate, category, likesCount, dislikesCount FROM articles WHERE id = " . $id; 
        var_dump($id);
        $entity;    
        $dbQuery = mysqli_query($conn, $query);                    
        while($row = mysqli_fetch_assoc($dbQuery)){
            $entity = new Article($row["id"], $row["title"], $row["text"], $row["userId"], $row["publishDate"], $row["category"], $row["likesCount"], $row["dislikesCount"]);
        }
        
        mysqli_close($conn);
        return $entity;
     }
     
     public function findAll(){
        $conn = get_connection();
        $query = "SELECT id, title, text, userId, publishDate, category, likesCount, dislikesCount FROM articles"; 
                                   
        $entitiesList = array();
        $dbQuery = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($dbQuery)){
            $entity = new Article($row["id"], $row["title"], $row["text"], $row["userId"], $row["publishDate"], $row["category"], $row["likesCount"], $row["dislikesCount"]);
            $entitiesList[] = $entity;
        }
        mysqli_close($conn);
        return $entitiesList;
     }
     
     public function findAllByFilter($skip, $take){
        
     }
     
     public function like($id) {
         var_dump($id);
        $conn = get_connection();
        $query = "UPDATE SET likesCount = SET likesCount + 1 WHERE id = " . $id;
        mysqli_query($conn, $query);
        mysqli_close($conn); 
     }

     public function dislike($id) {
        $conn = get_connection();
        $query = "UPDATE SET dislikesCount = SET dislikesCount + 1 WHERE id = " . $id;
        mysqli_query($conn, $query);
        mysqli_close($conn); 
     }
     
     public function deleteById($id){
        $conn = get_connection();
        $query = 'DELETE FROM articles WHERE id = ' . $id;
        mysqli_query($conn, $query); 
        mysqli_close($conn);
     }
     
      public function deleteAll(){
        $conn = get_connection();
        $query = 'DELETE FROM articles';
        mysqli_query($conn, $query); 
        mysqli_close($conn);
     }
     
}
?>