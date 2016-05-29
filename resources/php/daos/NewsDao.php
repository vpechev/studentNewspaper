<?php
include_once "BaseDao.php";
include_once "../models/news.php";
include_once "../functions/dbInitScript.php";

class NewsDao extends BaseDao{
     public function __construct() { }    
     
     public function add($news){
        $conn = get_connection();
        $query = 'INSERT INTO news (text, publishDate) VALUES ("' . $news->getText() . '", ' . date('Y-m-d', strtotime(date('Y-m-d'))) . ')';
                
        $entity = mysqli_query($conn, $query);
        mysqli_close($conn);
        return $entity;
     }
     
     public function update($news){
        $conn = get_connection();
        $query = 'UPDATE news SET text = "' . $news -> getText() . '", publishDate = "' . date('Y-m-d', strtotime($news -> getPublishDate())) . '" WHERE id = ' . $news->getId(); 
                
        $entity = mysqli_query($conn, $query);
        mysqli_close($conn);
        return $entity;
     }
     
     public function findById($id){
        $conn = get_connection();
        $query = "USE studentnewspaper; 
                  SELECT * FROM News WHERE id = " . $id; 
                
        $entity = mysqli_query($conn, $query);
        mysqli_close($conn);
        return $entity;
     }
     
     public function findAll(){
        $conn = get_connection();
        $query = "SELECT id, text, publishDate FROM News"; 
                                   
        $entitiesList = array();
        $dbQuery = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($dbQuery)){
            $entity = new News($row["id"], $row["text"], $row["publishDate"]);
            $entitiesList[] = $entity;
        }
        mysqli_close($conn);
        return $entitiesList;
     }
     
     public function findAllByFilter($skip, $take){
         
     }
     
     public function deleteById($id){
        $conn = get_connection();
        $query = 'DELETE FROM news WHERE id = ' . $id;
        mysqli_query($conn, $query); 
        mysqli_close($conn);
     }
     
     public function deleteAll(){
        $conn = get_connection();
        $query = 'DELETE FROM news';
        mysqli_query($conn, $query); 
        mysqli_close($conn);
     }
     
     
}
?>
