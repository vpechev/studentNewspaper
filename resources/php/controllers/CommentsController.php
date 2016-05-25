<?php
    include_once  "../daos/CommentDao.php";
    include_once  "../functions/functions.php";
    include_once  "BaseController.php";
    
    class CommentsController extends BaseController{
        static function create($entity) {
            $dao = new CommentDao();
            $dao->add($entity);
            return;
        }
        
        static function getByArticleId($id) {
            $dao = new CommentDao();
            $list = $dao->findAllByArticleId($id);
            return $list;
        }
    }
?>

