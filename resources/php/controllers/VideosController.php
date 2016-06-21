<?php
    include_once  __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'daos' . DIRECTORY_SEPARATOR . 'VideoDao.php';
    include_once  __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'functions.php';
    include_once  "BaseController.php";
    
    class VideosController extends BaseController{
        static function get($id) {
            $dao = new VideoDao();
            return $dao->findById($id);
        }
        
        static function getAll() {
            $dao = new VideoDao();
            $data["videosList"] = $dao->findAll();
            render($data, '../../templates/videos/videosList.php');             
        }
        
        static function create($entity) {
            $dao = new VideoDao();
            $id = $dao->add($entity);
            return $id;
        }
    }
?>

