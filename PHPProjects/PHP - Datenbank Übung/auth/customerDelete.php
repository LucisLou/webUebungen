<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poof! They're gone!</title>
    <link rel="stylesheet" href="../css/custom.css">
</head>
<body>

    <?php 
        include_once('../inc/header.php');
        include('../inc/dbh.inc.php');
        session_start();

        $cid = $_POST['d-cid'];

        $dbh->beginTransaction();
        $query = $dbh->prepare("DELETE FROM customers WHERE CID = ?");
        $query->execute(array($cid));
        $dbh->commit();

        echo "<p>Customer was deleted.<br>Redirecting to main shortly.</p>";
        
        header('refresh:3;url=main.php'); //moves to next page after 3 seconds
        exit();
    ?>

</body>
</html>