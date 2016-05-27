<?php
    include_once  "../daos/UserDao.php";
    include_once  "../functions/functions.php";
    include_once  "BaseController.php";
    
    class ArticlesController extends BaseController{
        static function get($username, $password) {
            $dao = new UserDao();
            return $dao->findByUsernameAndPassword($id);
                         
        }
        
        static function getAll() {
            $dao = new UserDao();
            $data["usersList"] = $dao->findAll();
            render($data, '../../templates/users/usersList.php');             
        }
        
        static function create($entity) {
            $dao = new UserDao();
            $dao->add($entity);
            return null;
        }
    }
?>

