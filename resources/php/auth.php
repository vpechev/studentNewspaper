<?php
//require_once(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'redirecting.php');
if(isset($_SESSION['user-id'])) {
    include_once __DIR__ . DIRECTORY_SEPARATOR .'..'. DIRECTORY_SEPARATOR. 'templates' . DIRECTORY_SEPARATOR . 'home.php';    
} else {
	include_once __DIR__ . DIRECTORY_SEPARATOR .'..'. DIRECTORY_SEPARATOR. 'templates' . DIRECTORY_SEPARATOR . '/users' . DIRECTORY_SEPARATOR . 'login.php';
    include_once __DIR__ . DIRECTORY_SEPARATOR .'..'. DIRECTORY_SEPARATOR. 'templates' . DIRECTORY_SEPARATOR . '/users' . DIRECTORY_SEPARATOR . 'register.php';
}
?>