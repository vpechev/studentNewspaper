<?php

function render($data, $name) {
    if(isset($_SESSION) && isset($_SESSION['user-id'])){
        include_once $name; 
    } else {
        include_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'auth.php';
        echo '<div class="bg-danger"><h3>Логни се</h3></div>';
    }
}

?>