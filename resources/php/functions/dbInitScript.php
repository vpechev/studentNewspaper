<?php
function setup_db() {
    //echo phpinfo();
    create_db();
    create_article_table();
    create_news_table();
    create_users_table();
}

function create_db(){
    $conn = mysqli_connect('localhost', 'root', '');

    // If we couldn't, then it either doesn't exist, or we can't see it.
    $sql = 'CREATE DATABASE IF NOT EXISTS studentnewspaper';

    if (mysqli_query($conn, $sql)) {
        //echo "Database studentnewspaper created successfully\n";
    } else {
        echo 'Error creating database: ' . mysql_error() . "\n";
    }

    mysqli_close($conn);
}

function get_connection() {
    // Connect to MySQL
    return mysqli_connect('localhost', 'root', '', 'studentnewspaper');
}

function create_article_table() {
    $conn = get_connection();
    $query = "USE studentnewspaper;
                CREATE TABLE IF NOT EXISTS Articles (
                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    text VARCHAR(300) NOT NULL,
                    userId INT(6) NOT NULL,
                    publishDate DATETIME,
                    category VARCHAR(30),
                    likesCount INT(6),
                    dislikesCount INT(6)
            )";
            
    mysqli_query($conn, $query);
    mysqli_close($conn);
}

function create_news_table() {
    $conn = get_connection();
    $query = "USE studentnewspaper;
                CREATE TABLE IF NOT EXISTS News (
                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    text VARCHAR(300) NOT NULL,
                    publishDate DATETIME
            )";
            
    mysqli_query($conn, $query);
    mysqli_close($conn);
}

function create_users_table() {
    $conn = get_connection();
    $query = "USE studentnewspaper;
                CREATE TABLE IF NOT EXISTS Users (
                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    username VARCHAR(30) NOT NULL,
                    password VARCHAR(300) NOT NULL
            )";
            
    mysqli_query($conn, $query);
    mysqli_close($conn);
}
?>