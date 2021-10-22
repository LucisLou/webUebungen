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
                $email = $_POST['email'];
                $pswd = $_POST['password'];

                $back = "<a href='index.php'>Return to previous site.</a>";

                $query = $dbh->prepare("SELECT usermail FROM users WHERE usermail = ?"); //prepare sql query
                $query->execute(array($email)); //execute $query with $email as argument
                $queryResultUsermail = $query->fetchColumn(); //fetches value(s) from query result, since we are looking for a specific value, only one is fetched
                
                if ($email == $queryResultUsermail) {

                    $query = $dbh->prepare("SELECT pswd FROM users WHERE usermail = ?");
                    $query->execute(array($email));
                    $queryResultPass = $query->fetchColumn();

                    if (password_verify($pswd, $queryResultPass)) { //checks if inserted password matches the hashed password in the database
                        
                        $query = $dbh->prepare("SELECT username FROM users WHERE usermail = ?"); //fetch username for name display
                        $query->execute(array($email));
                        $queryResultUser = $query->fetchColumn();

                        session_start();
                        $_SESSION['username'] = $queryResultUser;
                        header('Location: auth/main.php');
                        exit();

                    } else {
                        echo "<p>Password incorrect. Please retry.</p>";
                        echo $back;
                        exit();
                    }

                } else {
                    echo "<p>No account with " . $email . " found. Please retry or create an account.</p>";
                    echo $back;
                    exit();
                }
            ?>
        </main>
        <footer>
            <p>This is a footer. Bla bla all rights reserved.</p>
        </footer>
    </body>
</html>