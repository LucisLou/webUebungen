<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER CREATION RESULT</title>

    <link rel="stylesheet" href="../css/custom.css">
</head>
<body>
<?php include_once('../inc/header.php');
      include('../inc/dbh.inc.php');
    session_start();
    $uid = $_SESSION['userid'];

    $compname = $_POST['compname'];
    $contact = $_POST['contact'];
    $tel = $_POST['tel'];
    $adr= $_POST['address'];
    $zip = $_POST['zip'];

            
    $dbh->beginTransaction();
    $query = $dbh->prepare("INSERT INTO customers(compname, contact, tel, address, zip, UID) VALUES (?,?,?,?,?,?)");
    $query->execute(array($compname, $contact, $tel, $adr, $zip, $uid));
    $dbh->commit();

    echo "<p>New customer was registered.<br>Redirecting to main shortly.</p>";
    
    header('refresh:3;url=main.php'); //moves to next page after 3 seconds
    exit();

?>
</body>
</html>