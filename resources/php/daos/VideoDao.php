<?php
include_once "BaseDao.php";
include_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR . 'video.php';
include_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'dbInitScript.php';

class VideoDao extends BaseDao{
     public function __construct() { }    
     
     public function add($user){
         var_dump('dao');
        $conn = get_connection();
        $query = 'INSERT INTO videos (url, label) VALUES ("' . $user->getUrl() . '", "' . $user->getLabel() . '")';
                
        $entity = mysqli_query($conn, $query);
        
        $id = mysqli_insert_id($conn);
        mysqli_close($conn);

        return $id;
     }
     
     public function update($user){
        // $conn = get_connection();
        // $query = 'UPDATE users SET text = "' . $news -> getText() . '", publishDate = "' . $news -> getPublishDate() . '" WHERE id = ' . $news->getId(); 
                
        // $entity = mysqli_query($conn, $query);
        // mysqli_close($conn);
        // return $entity;
     }
     
     public function findById($id){
        $conn = get_connection();
        $query = "SELECT id, url, label FROM Videos WHERE id = " . $id; 
        
        $entity;        
        $dbQuery = mysqli_query($conn, $query);
         while($row = mysqli_fetch_assoc($dbQuery)){
            $entity = new Video($row["id"], $row["url"], $row["label"]);
        }
        mysqli_close($conn);
        return $entity;
     }
     
     public function findAll(){
        $conn = get_connection();
        $query = "SELECT id, url, label FROM videos"; 
                                   
        $entitiesList = array();
        $dbQuery = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($dbQuery)){
            $entity = new Video($row["id"], $row["url"], $row["label"]);
            $entitiesList[] = $entity;
        }
        mysqli_close($conn);
        return $entitiesList;
     }
     
     public function deleteById($id){
        $conn = get_connection();
        $query = 'DELETE FROM videos WHERE id = ' . $id;
        mysqli_query($conn, $query); 
        mysqli_close($conn);
     }
     
     public function deleteAll(){
        $conn = get_connection();
        $query = 'DELETE FROM videos';
        mysqli_query($conn, $query); 
        mysqli_close($conn);
     }
     
     
}
?>
