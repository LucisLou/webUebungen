<?php
try {
    $dbhost = 'localhost';
    $dbname = 'guess_the_number';
    $dbuser = 'root';
    $dbpass = '';
    $dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
} catch (PDOException $exception) {
    echo "Error: " . $exception->getMessage() . "<br />";
    die();
}