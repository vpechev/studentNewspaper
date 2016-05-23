<?php
include "BaseDao.php";
include "../models/news.php";

class NewsDao extends BaseDao{
     public function __construct() { }    
     
     public function add($news){
        $conn = get_connection();
        $query = "INSERT INTO News (text, publishDate) VALUES (" . $news->getText() . ", " . $news->getPublishDate() . ")";
                
        $entity = mysqli_query($conn, $query);
        mysqli_close($conn);
        return $entity;
     }
     
     public function update($news){
        $conn = get_connection();
        $query = "USE studentnewspaper; 
                  UPDATE News SET text = " . $news -> text . "publishDate = " . $news -> publishDate . "WHERE id = " . $news->id; 
                
        $entity = mysqli_query($conn, $query);
        mysqli_close($conn);
        return $entity;
     }
     
     public function findById($id){
        $conn = get_connection();
        $query = "USE studentnewspaper; 
                  SELECT * FROM News WHERE id = " . $news->id; 
                
        $entity = mysqli_query($conn, $query);
        mysqli_close($conn);
        return $entity;
     }
     
     public function findAll(){
        $conn = get_connection();
        $query = "SELECT * FROM News"; 
                                   
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
        $query = "USE studentnewspaper; DELETE * FROM News WHERE id = " . $id; 
        mysqli_close($conn);
     }
     
     
}
?>
