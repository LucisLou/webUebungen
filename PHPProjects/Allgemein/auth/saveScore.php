<?php
    include('../inc/dbh.inc.php');

    $response = false; //merely so there's a response of some kind, do not recommend, but here we are

    $username = $_POST['username'];
    $score = $_POST['score'];

    $statement = "INSERT INTO scores (username, score) VALUES (?,?)";
    $query = $dbh->prepare($statement);
    $query->execute(array($username, $score));

    if($query){
        $response = true;
    }    

    echo $response;
?>