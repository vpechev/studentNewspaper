<?php
    require "NewsController.php"; 
    require "ArticlesController.php"; 
    if(isset($_POST['pageTo'])){
        if($_POST['pageTo'] == 'news') {
            $controller = new NewsController();
            if($_POST['action'] == 'getAll') {
                $controller->getAll();
            } else if ($_POST['action'] == 'createRedirect') {
                render(null, '/../../templates/news/newsCreate.php');
            } else if ($_POST['action'] == 'create') {
                $entity = new News(0, $_POST["data"]["text"], date('d/m/Y', time()) );
                $controller->create($entity);
            } else if ($_POST['action'] == 'delete') {
                $id = intval($_POST["data"]["id"]);
                $controller->delete($id);
            } else if ($_POST['action'] == 'deleteAll') {
                $controller->deleteAll();
            } else if ($_POST['action'] == 'updateRedirect') {
                $data["id"] = $_POST["data"]["id"];
                $data["text"] = $_POST["data"]["text"];
                $data["date"] = $_POST["data"]["date"];
                render($data, '/../../templates/news/newsUpdate.php');
            } else if ($_POST['action'] == 'update') {
                $entity = new News($_POST["data"]["id"], $_POST["data"]["text"], $_POST["data"]["date"]);
                $controller->update($entity);
            }
        } else if($_POST['pageTo'] == 'articles'){
            $controller = new ArticlesController();
            if($_POST['action'] == 'getAll') {
                $controller->getAll();
            } else if ($_POST['action'] == 'createRedirect') {
                render(null, '/../../templates/articles/articleCreate.php');
            } else if ($_POST['action'] == 'create') {
                $entity = new Article(0,                            //id         
                                      $_POST["data"]["title"], 
                                      $_POST["data"]["text"], 
                                      1, //author id 
                                      date('d/m/Y', time()), 
                                      intval($_POST["data"]["category"]), 
                                      0,
                                      0,
                                      null 
                                      );
                $controller->create($entity);
            } else if ($_POST['action'] == 'delete') {
                $id = intval($_POST["data"]["id"]);
                $controller->delete($id);
            } else if ($_POST['action'] == 'deleteAll') {
                $controller->deleteAll();
            } else if ($_POST['action'] == 'updateRedirect') {
                $data["id"] = $_POST["data"]["id"];
                $data["text"] = $_POST["data"]["text"];
                $data["date"] = $_POST["data"]["date"];
                render($data, '/../../templates/articles/articleUpdate.php');
            } else if ($_POST['action'] == 'update') {
                $entity = new Article($_POST["data"]["id"], $_POST["data"]["text"], $_POST["data"]["date"]);
                $controller->update($entity);
            }
        } else if($_POST['pageTo'] == 'users') {
            render(null, '/../../templates/users/usersList.php');
        } else if($_POST['pageTo'] == 'home') {
            render(null, '~/resources');
        } else if($_POST['pageTo'] == 'contacts') {
            render(null, '/../../templates/contacts/contacts.php');
        }
    }
?>