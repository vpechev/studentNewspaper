<?php
    require "NewsController.php"; 
    
    if(isset($_POST['pageTo']) && $_POST['pageTo'] == 'news') {
        if($_POST['action'] == 'getAll') {
            $controller = new NewsController();
            $controller->getAll();
        } else if ($_POST['action'] == 'createRedirect') {
            render(null, '/../../templates/news/newsCreate.php');
        } else if ($_POST['action'] == 'create') {
            $controller = new NewsController();
            $entity = new News(0, $_POST["data"]["text"], date("m/d/Y"));
            $controller->create($entity);
        } else if ($_POST['action'] == 'delete') {
            $controller = new NewsController();
            $id = intval($_POST["data"]["id"]);
            $controller->delete($id);
        } else if ($_POST['action'] == 'deleteAll') {
            $controller = new NewsController();
            $controller->deleteAll();
        }
    } else{
        
    }
?>