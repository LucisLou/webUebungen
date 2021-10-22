<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Guess The Number!</title>

    <link rel="stylesheet" href="css/custom.css">
</head>
    <body>
        <nav>
            <ul>
                <li> </li>
            </ul>
        </nav>
        <main>
            <?php
                include('inc/dbh.inc.php');

                $username = $_POST['r-username'];
                $email = $_POST['r-email'];
                $pass1 = $_POST['password1'];
                $pass2 = $_POST['password2'];

                if ($pass1 == $pass2) {

                    $query = $dbh->prepare("SELECT username FROM users WHERE username = ?"); //prepare sql statement
                    $query->execute(array($username)); //execute statement $query with $username as argument
                    $queryResultUsername = $query->fetchColumn(); //fetches value(s) from query result, since we are looking for a specific value, only one is fetched

                    $query = $dbh->prepare("SELECT usermail FROM users WHERE usermail = ?"); //prepare sql statement
                    $query->execute(array($email)); //execute statement $query with $email as argument
                    $queryResultEmail = $query->fetchColumn(); //fetches value(s) from query result, since we are looking for a specific value, only one is fetched

                    if ($queryResultUsername == $username) { //if input username == username from query
                        echo "<p>User with specified username " . $username . " already exists, please try again.</p><a href='index.php'>Return to  previous page.</a>";
                    } else if ($queryResultEmail == $email) { //if input usermail == usermail from query
                        echo "<p>User with specified email " . $email . " already exists, please try again.</p><a href='index.php'>Return to  previous page.</a>";
                    } else {
                        $hashedPass = password_hash($pass1, PASSWORD_DEFAULT); //hash password

                        $dbh->beginTransaction();
                        $query = $dbh->prepare("INSERT INTO users(username, usermail, pswd) VALUES (?,?,?)");
                        $query->execute(array($username, $email, $hashedPass));
                        $dbh->commit();
  
                        session_start();
                        $_SESSION['username'] = $username;
                        header('Location: auth/main.php');
                        exit();
                    }

                } else {
                    echo "<p>Passwords do not match! Please try again.</p><a href='index.php'>Return to  previous page.</a>";
                }
            ?>
        </main>
        <footer>
            <p>This is a footer. Bla bla all rights reserved.</p>
        </footer>
    </body>
</html>