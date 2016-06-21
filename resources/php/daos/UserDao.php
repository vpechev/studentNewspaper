<?php
include_once "BaseDao.php";
include_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR . 'user.php';
include_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'dbInitScript.php';

class UserDao extends BaseDao{
     public function __construct() { }    
     
     public function add($user){
        $conn = get_connection();
        $query = 'INSERT INTO users (username, password) VALUES ("' . $user->getUsername() . '", "' . $user->getPassword() . '")';
                
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
        $query = "SELECT id, username FROM Users WHERE id = " . $id; 
        
        $entity=new User(-1,"",null);        
        $dbQuery = mysqli_query($conn, $query);
         while($row = mysqli_fetch_assoc($dbQuery)){
            $entity = new User($row["id"], $row["username"], null);
        }
        mysqli_close($conn);
        return $entity;
     }
     
     public function getByUsernameAndPassword($username, $password){
        $conn = get_connection();
        $query = 'SELECT id, username FROM Users WHERE username = "' . $username . '" AND password = "' . $password . '";'; 
        $id;
        $username;
        $dbQuery = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($dbQuery)){
            $id = $row["id"];
            $username = $row["username"];
        }
        
        if(empty($id)){
            $id = -1;
        }
        
        mysqli_close($conn);
        
        return new USer($id, $username, null);
     }
     
     public function findAll(){
        $conn = get_connection();
        $query = "SELECT id, username FROM users"; 
                                   
        $entitiesList = array();
        $dbQuery = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($dbQuery)){
            $entity = new User($row["id"], $row["username"], null);
            $entitiesList[] = $entity;
        }
        mysqli_close($conn);
        return $entitiesList;
     }
     
     public function findAllByFilter($skip, $take){
         
     }
     
     public function deleteById($id){
        $conn = get_connection();
        $query = 'DELETE FROM users WHERE id = ' . $id;
        mysqli_query($conn, $query); 
        mysqli_close($conn);
     }
     
     public function deleteAll(){
        $conn = get_connection();
        $query = 'DELETE FROM users';
        mysqli_query($conn, $query); 
        mysqli_close($conn);
     }
     
     
}
?>
