<?php

if(!isset($_SESSION))
{
    session_start();
}

//require_once(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'redirecting.php');
if(!isset($_SESSION['user-id'])) {
	include_once "resources/templates/users/login.php";
}
?>