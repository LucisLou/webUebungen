<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER LOGIN RESULT</title>

    <link rel="stylesheet" href="css/custom.css">
</head>
    <body>
    <?php include_once('inc/header.php');
          include('inc/dbh.inc.php');
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $back = "<a href='index.php'>Return to previous site.</a>";

        $query = $dbh->prepare("SELECT email FROM users WHERE email = ?"); //prepare sql statement
        $query->execute(array($email)); //execute statement $query with $email as argument
        $queryResultUser = $query->fetchColumn(); //fetches value(s) from query result, since we are looking for a specific value, only one is fetched
        
        if ($email == $queryResultUser) {

            $query = $dbh->prepare("SELECT pswd FROM users WHERE email = ?");
            $query->execute(array($email));
            $queryResultPass = $query->fetchColumn();

            if (password_verify($pass, $queryResultPass)) { //checks if inserted password matches the hashed password in the database
                
                $query = $dbh->prepare("SELECT fname FROM users WHERE email = ?"); //fetch name for welcome
                $query->execute(array($email));
                $queryResultName = $query->fetchColumn();

                $query = $dbh->prepare("SELECT UID FROM users WHERE email = ?"); //fetch UID for access purposes
                $query->execute(array($email));
                $queryResultUserID = $query->fetchColumn();

                session_start();
                $_SESSION['username'] = $queryResultName;
                $_SESSION['userid'] = $queryResultUserID;
                header('Location: auth/main.php');
                exit();

            } else {
                echo "<p>Password incorrect. Please retry.</p>";
                echo $back;
            }

        } else {
            echo "<p>No account with " . $email . " found. Please retry or create an account.</p>";
            echo $back;
        }
    ?>
    </body>
</html>