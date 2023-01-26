<?php
session_start();

//Open Connection
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'users2'; //phpMyAdmin
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging error #: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

//create DB , used phpMyAdmin

//Create Table in DB (I did it using phpMyAdmin straight forward)
// $query = 'CREATE TABLE users2 ( user_id INT NOT NULL AUTO_INCREMENT,
// name VARCHAR(50) NOT NULL,
// email  VARCHAR(50) NOT NULL,
// pass VARCHAR(50) NOT NULL,
// primary key ( user_id ))';

?>
