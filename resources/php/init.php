<?php

//external libs and internal basefiles
require_once 'resources/templates/includes.php';

//initially create database if neccessary
setup_db();

//set default charset
$connection = get_connection();
mysqli_set_charset($connection, 'utf8');
mysqli_close($connection);

$data = array();

// $data['header'] = 'resources/templates/header.php';
// $data['content'] = 'resources/templates/home.php';
// $data['navigation'] = 'resources/templates/navigation.php';

//render($data, 'resources/templates/layouts/layout.php');
include_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR .'layouts' . DIRECTORY_SEPARATOR . 'layout.php';
        


?>