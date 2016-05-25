<?php
    require_once "NewsController.php"; 
    require_once "ArticlesController.php"; 
    require_once "CommentsController.php";
    require_once "UsersController.php";
     
    if(isset($_POST['pageTo'])){
        if($_POST['pageTo'] == 'news') {
            $controller = new NewsController();
            
            switch($_POST['action']){
                case "getAll" :
                    $controller->getAll();
                    break;
                case "createRedirect" :
                    render(null, '/../../templates/news/newsCreate.php');
                    break;
                case "create" : 
                    $entity = new News(0, $_POST["data"]["text"], date('d/m/Y', time()) );
                    $controller->create($entity);
                    break;
                case "updateRedirect" :
                    $data["id"] = $_POST["data"]["id"];
                    $data["text"] = $_POST["data"]["text"];
                    $data["date"] = $_POST["data"]["date"];
                    render($data, '/../../templates/news/newsUpdate.php');
                    break;
                case "update" : 
                    $entity = new News($_POST["data"]["id"], $_POST["data"]["text"], $_POST["data"]["date"]);
                    $controller->update($entity);
                    break;       
                case "delete" : 
                    $id = intval($_POST["data"]["id"]);
                    $controller->delete($id);
                    break;
                case "deleteAll" :
                    $controller->deleteAll();
                    break;    
            }
        } else if($_POST['pageTo'] == 'articles') {
            $controller = new ArticlesController();
            
            switch($_POST['action']){
                case "getAll" :
                    $controller->getAll();
                    break;
                case "createRedirect" :
                    render(null, '/../../templates/articles/articleCreate.php');
                    break;
                case "create" : 
                    $entity = new Article(  0, //id         
                                            $_POST["data"]["title"], 
                                            $_POST["data"]["text"], 
                                            1, //author id 
                                            date('d/m/Y', time()), 
                                            intval($_POST["data"]["category"]), 
                                            0,
                                            0
                                          );
                    $controller->create($entity);
                    break;
                case "updateRedirect" :
                    // $data["id"] = $_POST["data"]["id"];
                    // $data["text"] = $_POST["data"]["text"];
                    // $data["date"] = $_POST["data"]["date"];
                    render($data, '/../../templates/articles/articleUpdate.php');
                    break;
                case "update" :
                    $entity = new Article($_POST["data"]["id"], $_POST["data"]["text"], $_POST["data"]["date"]);
                    $controller->update($entity);
                    break;
                case "details" :
                    $id = $_POST["data"]["id"];
                    $controller->get($id);
                    break;
                case "like" :
                    $id = $_POST["data"]["id"];
                    $controller->like($id); 
                    break;
                case "dislike" :
                    $id = $_POST["data"]["id"];
                    $controller->dislike($id); 
                    break;       
                case "delete" : 
                    $id = intval($_POST["data"]["id"]);
                    $controller->delete($id);
                    break;
                case "deleteAll" :
                    $controller->deleteAll();
                    break;    
            }
        } else if($_POST['pageTo'] == 'comments') {
             $controller = new CommentsController();
              switch($_POST['action']){
                case "create" : 
                    $entity = new Comment(0, 
                                          /*$_SESSION["user-id"], */ 1, 
                                          $_POST["data"]["articleId"],
                                          $_POST["data"]["text"],
                                          date('d/m/Y', time())
                                         );
                    $controller->create($entity);
                    break;
              }
        } 
        else if($_POST['pageTo'] == 'users') {
            render(null, '/../../templates/users/usersList.php');
        } else if($_POST['pageTo'] == 'home') {
            render(null, '~/resources');
        } else if($_POST['pageTo'] == 'videos') {
            render(null, '/../../templates/videos/videosList.php');
        } else if($_POST['pageTo'] == 'contacts') {
            render(null, '/../../templates/contacts/contacts.php');
        }
    }
?>