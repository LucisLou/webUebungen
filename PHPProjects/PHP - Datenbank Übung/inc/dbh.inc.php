<?php
//this php file is used to establish a connection with a database, in this case it's php practice 
//try catch for error handling
try {
    $dbhost = 'localhost';
    $dbname = 'php2_practice';
    $dbuser = 'root';
    $dbpass = '';
    $dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
} catch (PDOException $exception) {
    echo "Error: " . $exception->getMessage() . "<br />";
    die();
}