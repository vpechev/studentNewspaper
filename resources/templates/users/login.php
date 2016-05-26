<?php
    if($_POST){
        if(isset($_POST['username']) && isset($_POST['password']))
        {
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);
            if($username == 'ivan' && $password =='ivan'){
                $_SESSION['user-id'] = 5;
                
            } else {
                echo 'Грешно потребителско име или парола!';
            }
        }   

        
    }
?>

<div class="col col-md-6">
    <form id="login-form" 
          method="POST" 
          action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <h2>Вход</h2>
        <div>
            <label for="username">Потребителско име</label>
            <input id="username" type="text" name="username" />
        </div>
        <div>
            <label for="password">Парола</label>
            <input id="password" type="password"  name="password" />
        </div>
        <div>
            <input id="submit-btn" type="submit" value="Вход"/>
        </div>
    </form>
</div>
