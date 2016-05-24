<?php
    include_once  "../daos/NewsDao.php";
    include_once  "../functions/functions.php";
    include_once  "BaseController.php";
    
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
        
        static function update($entity){
            $dao = new NewsDao();
            $dao->update($entity);
            NewsController::getAll();
        }
    }
?>

