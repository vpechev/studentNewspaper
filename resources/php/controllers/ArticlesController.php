<?php
    include_once  "../daos/ArticleDao.php";
    include_once  "../functions/functions.php";
    include_once  "BaseController.php";
    
    class ArticlesController extends BaseController{
        static function getAll() {
            $dao = new ArticleDao();
            $data["articlesList"] = $dao->findAll();
            render($data, '../../templates/articles/articlesList.php');             
        }
        
        static function create($entity) {
            $dao = new ArticleDao();
            $dao->add($entity);
            ArticlesController::getAll();
        }
        
        static function delete($id) {
            $dao = new ArticleDao();
            $dao->deleteById($id);
            ArticlesController::getAll();
        }
        
        static function deleteAll() {
            $dao = new ArticleDao();
            $dao->deleteAll();
            ArticlesController::getAll();
        }
        
        static function update($entity){
            $dao = new ArticleDao();
            $dao->update($entity);
            ArticlesController::getAll();
        }
    }
?>

