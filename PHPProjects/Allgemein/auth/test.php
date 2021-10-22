<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include('../inc/dbh.inc.php');

    $response = false;

    $username = "thisisaname";
    $score = 160;

    //$dbh->beginTransaction();
    $statement = "INSERT INTO scores (username, score) VALUES (?,?)";
    $query = $dbh->prepare($statement);
    $query->execute(array($username, $score));
    //$query->bind_param('s', $username);
    //$query->bind_param('i', $score);
    //$query->execute();
    //$dbh->commit;

    $response = true;

    echo $response;
?>
</body>
</html>