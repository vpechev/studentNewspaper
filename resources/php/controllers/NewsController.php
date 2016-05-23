<?php
    include "../daos/NewsDao.php";
    include "../functions/functions.php";
    include "BaseController.php";
    
    class NewsController extends BaseController{
        static function getAll() {
            $dao = new NewsDao();
            $data["newsList"] = $dao->findAll();
            render($data, '../../templates/news/newsList.php');             
        }
        
        static function create($entity) {
            $dao = new NewsDao();
            $dao->add($entity);
            NewsController::getAll();
        }
        
        static function delete($id) {
            $dao = new NewsDao();
            $dao->deleteById($id);
            NewsController::getAll();
        }
        
        static function deleteAll() {
            $dao = new NewsDao();
            $dao->deleteAll();
            NewsController::getAll();
        }
    }
?>

