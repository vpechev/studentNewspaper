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
            $entity = new News(0, $_POST["data"]["text"], date('d/m/Y', time()) );
            $controller->create($entity);
        } else if ($_POST['action'] == 'delete') {
            $controller = new NewsController();
            $id = intval($_POST["data"]["id"]);
            $controller->delete($id);
        } else if ($_POST['action'] == 'deleteAll') {
            $controller = new NewsController();
            $controller->deleteAll();
        } else if ($_POST['action'] == 'updateRedirect') {
            $controller = new NewsController();
            $data["id"] = $_POST["data"]["id"];
            $data["text"] = $_POST["data"]["text"];
            $data["date"] = $_POST["data"]["date"];
            render($data, '/../../templates/news/newsUpdate.php');
        } else if ($_POST['action'] == 'update') {
            $controller = new NewsController();
            $entity = new News($_POST["data"]["id"], $_POST["data"]["text"], $_POST["data"]["date"]);
            $controller->update($entity);
        }
    } else{
        
    }
?>