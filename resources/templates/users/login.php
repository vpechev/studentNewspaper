<?php
    if($_POST){
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        var_dump($_POST);
        if($username == 'ivan' && $password =='ivan'){
            $_SESSION['user-id'] = 5;
            echo 'ok';
        } else {
            echo 'Нещо объркА!';
        }
        
    }
?>

<div class="col col-md-6">
    <form id="login-form" method="POST">
        <h2>Вход</h2>
        <div>
            <label for="username">Потребителско име</label>
            <input id="username" type="text" />
        </div>
        <div>
            <label for="password">Парола</label>
            <input id="password" type="password" />
        </div>
        <div>
            <input id="submit-btn" type="submit" value="Вход"/>
        </div>
    </form>
</div>


