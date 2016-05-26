<?php
    if(!isset($_SESSION))
    {
        session_start();
    }

    // if(!isset($_SESSION['user-id']))
    // {
    //     //header('Location: index.php');
    // }
    // else if(isset($_SESSION['user-id'])!='')
    // {
    //     //header('Location: home.php');
    // }

    // if(isset($_POST['logout']))
    // {
        session_destroy();
        unset($_SESSION['user-id']);
        //require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'php' . DIRECTORY_SEPARATOR . 'auth.php'; 
        //header("Refresh:0");
    //}
?>