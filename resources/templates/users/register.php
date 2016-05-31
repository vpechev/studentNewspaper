<?php
      include_once __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "php" . DIRECTORY_SEPARATOR . "models" . DIRECTORY_SEPARATOR . "User.php";
      include_once __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "php" . DIRECTORY_SEPARATOR . "controllers" . DIRECTORY_SEPARATOR . "UsersController.php";
      
      if($_POST){
        if(isset($_POST['reg-username']) 
            && isset($_POST['reg-password'])
            && isset($_POST['reg-re-password']))
        {
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);
            $rePassword = trim($_POST['password']);
            
            if($password == $rePassword){
                $controller = new UserController();
                $user = new User($username, $passwordHash);
                $controller->create($user);
                $passwordHash = md5($password); 
                
                $controller->create($user);
                               
                $_SESSION['user-id'] = 5;
            } else {
                echo 'Паролите не съвпадат';
            }
        }   
    }
?>

<div class="col col-md-6">
    <form id="register-form" method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <h2>Регистрация</h2>
        <div>
            <label for="username">Потребителско име</label>
            <input id="reg-username" type="text" name="reg-username"/>
        </div>
        <div>
            <label for="password">Парола</label>
            <input id="reg-password" type="password" name="reg-password"/>
        </div>
        <div>
            <label for="re-password">Парола</label>
            <input id="reg-re-password" type="password" name="reg-re-password"/>
        </div>
        <div>
            <input id="submit-btn" type="submit" value="Регистрирай"/>
        </div>
    </form>
</div>