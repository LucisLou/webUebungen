<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER CREATION RESULT</title>

    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
<?php include_once('inc/header.php');
      include('inc/dbh.inc.php');

    $name = $_POST['firstname'];
    $familyname = $_POST['familyname'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $pass1 = $_POST['password1'];
    $pass2 = $_POST['password2'];

    if ($pass1 == $pass2) {

        $query = $dbh->prepare("SELECT email FROM users WHERE email = ?"); //prepare sql statement
        $query->execute(array($email)); //execute statement $query with $email as argument
        $queryResult = $query->fetchColumn(); //fetches value(s) from query result, since we are looking for a specific value, only one is fetched

        if ($queryResult == $email) { //if input usermail == usermail from query
            echo "<p>User with specified email already exists, please try again.</p><a href='index.php'>Return to  previous page.</a>";
        } else {
            $hashedPass = password_hash($pass1, PASSWORD_DEFAULT); //hash password

            $dbh->beginTransaction();
            $query = $dbh->prepare("INSERT INTO users(fname, lname, age, email, pswd) VALUES (?,?,?,?,?)");
            $query->execute(array($name, $familyname, $age, $email, $hashedPass));
            $dbh->commit();

            $query = $dbh->prepare("SELECT UID FROM users WHERE email = ?");
            $query->execute(array($email));
            $queryResultUserID = $query->fetchColumn();
            
            session_start();
            $_SESSION['username'] = $name;
            $_SESSION['userid'] = $queryResultUserID;
            header('Location: auth/main.php');
            exit();
        }

    } else {
        echo "<p>Passwords do not match! Please try again.</p><a href='index.php'>Return to  previous page.</a>";
    }
?>
</body>
</html>