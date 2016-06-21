<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    require_once "NewsController.php"; 
    require_once "ArticlesController.php"; 
    require_once "CommentsController.php";
    require_once "UsersController.php";
    require_once "VideosController.php";
     
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
                                            $_SESSION['user-id'], 
                                            date('d/m/Y', time()), 
                                            intval($_POST["data"]["category"]), 
                                            0,
                                            0
                                          );
                    $controller->create($entity);
                    break;
                case "updateRedirect" :
                    $entity = $controller->get($_POST["data"]["id"]);
                    
                    $data["id"] = $entity -> getId();
                    $data["title"] = $entity -> getTitle();
                    $data["text"] = $entity -> getText();
                    $data["date"] = $entity -> getPublishDate();
                    $data["category"] = $entity -> getCategoryEntry();
                    render($data, '/../../templates/articles/articleUpdate.php');
                    break;
                case "update" :
                    //$entity = new Article($_POST["data"]["id"], $_POST["data"]["title"], $_POST["data"]["text"], $_SESSION['user-id'], $_POST["data"]["date"], $_POST["data"]["category"], $_POST["data"]["likesCount"], $_POST["data"]["dislikesCount"]);
                    $entity = new Article($_POST["data"]["id"], $_POST["data"]["title"], $_POST["data"]["text"], $_SESSION['user-id'], $_POST["data"]["date"], $_POST["data"]["category"], 0, 0);
                    $controller->update($entity);
                    break;
                case "details" :
                    $id = $_POST["data"]["id"];
                    $controller->getFull($id);
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
                                          $_SESSION["user-id"], 
                                          $_POST["data"]["articleId"],
                                          $_POST["data"]["text"],
                                          date('d/m/Y', time())
                                         );
                    $controller->create($entity);
                    break;
              }
        } 
        else if($_POST['pageTo'] == 'users') {
            $controller = new UsersController();
            $controller->getAll();
        } else if($_POST['pageTo'] == 'home') {
            render(null, __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR .'auth.php');
        } else if($_POST['pageTo'] == 'videos') {
            $controller = new VideosController();
            switch($_POST['action']){
                case "getAll" :
                    $controller->getAll();
                    break;
                case 'create' :
                    $entity = new Video(0, 
                                        $_POST["data"]["url"],
                                        $_POST["data"]["label"]
                                        ); 
                    $controller->create($entity);
                    break;
            }
            
        } else if($_POST['pageTo'] == 'contacts') {
            render(null, '/../../templates/contacts/contacts.php');
        } else if($_POST['pageTo'] == 'logout') {
            render(null, '/../../templates/users/logout.php');
        } else if ($_POST['pageTo'] == 'login'){
            $controller = new UsersController();
            $username = trim($_POST['data']['username']);
            $password = trim($_POST['data']['password']);

            if($username == 'admin' && $password == '21232f297a57a5a743894a0e4a801fc3'){
                $_SESSION['user-id'] = -1;
                $_SESSION['is-admin'] = true; 
            } else{
                $user = $controller->get($username, $password);
                $_SESSION['user-id'] = $user->getId();
                $_SESSION['username'] = $user->getUsername();
                $_SESSION['is-admin'] = false; 
            }
            
            render(null, '/../auth.php');
        } else if ($_POST['pageTo'] == 'register') {
            $controller = new UsersController();
            
            $username = trim($_POST['data']['username']);
            $password = trim($_POST['data']['password']);
            $passwordHash = md5($password);
            
            $user = new User(0, $username, $passwordHash);
            
            $id = $controller->create($user);
            if($id != -1){
                $_SESSION['user-id'] = $id;
                $_SESSION['username'] = $username;
            }
            render(null, '/../auth.php');
        } else if($_POST['pageTo'] == 'fmi-about') {
            render(null, __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'fmi' . DIRECTORY_SEPARATOR . 'fmi.php');
        } else if($_POST['pageTo'] == 'photos') {
            render(null, __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'photos' . DIRECTORY_SEPARATOR . 'photosList.php');
        }
    }
?>