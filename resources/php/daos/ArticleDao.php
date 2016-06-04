<?php
include_once "../models/article.php";
include_once "../functions/dbInitScript.php";

class ArticleDao extends BaseDao {
     public function __construct() {}
     
     public function add($article){
        $conn = get_connection();
        $entityDate = date('Y-m-d', strtotime($article->getPublishDate()));
        $query = 'INSERT INTO articles 
                        (title, text, userId, publishDate, category, likesCount, dislikesCount) 
                        VALUES ("' 
                            . $article->getTitle() . '", "' 
                            . $article->getText() . '", "'
                            . $article->getAuthorId() . '", "'
                            . date('Y-m-d', strtotime(date('Y-m-d'))) . '", "'
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
                        . '", publishDate = "' . date('Y-m-d', strtotime($article -> getPublishDate())) 
                        . '", category = "' . $article -> getCategory() 
                        . '" WHERE id = ' . $article->getId(); 
                
        $entity = mysqli_query($conn, $query);
        mysqli_close($conn);
        return $entity;
     }
     
     public function findById($id){
        $conn = get_connection();
        $userDao = new UserDao();
        $query = "SELECT id, title, text, userId, publishDate, category, likesCount, dislikesCount FROM articles WHERE id = " . $id; 
        $entity;    
        $dbQuery = mysqli_query($conn, $query);                    
        while($row = mysqli_fetch_assoc($dbQuery)){
            $entity = new Article($row["id"], $row["title"], $row["text"], $row["userId"], $row["publishDate"], $row["category"], $row["likesCount"], $row["dislikesCount"]);
            $author = $userDao->findById($entity->getAuthorId());
            $entity->setAuthor($author);
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
        $conn = get_connection();
        $query = 'UPDATE articles SET likesCount = likesCount + 1 WHERE id = ' . $id;
        
         if (!mysqli_query($conn, $query)) {
              printf("Errormessage: %s\n", mysqli_error($conn));
        }
        mysqli_close($conn); 
     }

     public function dislike($id) {
        $conn = get_connection();
        $query = "UPDATE articles SET dislikesCount = dislikesCount + 1 WHERE id = " . $id;
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