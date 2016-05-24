<?php

include 'resources/templates/includes.php';

//initially create database if neccessary
setup_db();

$connection = get_connection();
mysqli_set_charset($connection, 'utf8');
$q = mysqli_query($connection, 'Select * FROM Articles');

$data = array();

 $data['header'] = 'resources/templates/header.php';
$data['content'] = 'resources/templates/home.php';
$data['navigation'] = 'resources/templates/navigation.php';

render($data, 'resources/templates/layouts/layout.php');


?>