<?php

include 'resources/php/functions/functions.php';

$connection = mysqli_connect('localhost', 'root', '', 'studentnewspaper');
mysqli_set_charset($connection, 'utf8');
$q = mysqli_query($connection, 'Select * Articles');

echo 'output'.$q;

$data = array();

// while ($row = mysql_fetch_assoc($q)) {
//     $data['books'][] = $row;
// }

$data['header'] = 'resources/templates/header.php';
$data['content'] = 'resources/templates/home.php';
$data['navigation'] = 'resources/templates/navigation.php';

render($data, 'resources/templates/layouts/layout.php');


?>