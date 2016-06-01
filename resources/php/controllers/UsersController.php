<?php
    include_once  __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'daos' . DIRECTORY_SEPARATOR . 'UserDao.php';
    include_once  __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'functions.php';
    include_once  "BaseController.php";
    
    class UsersController extends BaseController{
        static function get($username, $password) {
            $passHash = md5($password);
            $dao = new UserDao();
            return $dao->getIdByUsernameAndPassword($username, $passHash);
        }
        
        static function getAll() {
            $dao = new UserDao();
            $data["usersList"] = $dao->findAll();
            render($data, '../../templates/users/usersList.php');             
        }
        
        static function create($entity) {
            $dao = new UserDao();
            $id = $dao->add($entity);
            return $id;
        }
    }
?>

