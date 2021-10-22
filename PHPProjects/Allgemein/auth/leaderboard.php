<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Leaderboard - Guess The Number!</title>
</head>
<body>
    <?php include('../inc/dbh.inc.php');
        session_start();
        $username = $_SESSION['username'];
        echo "<nav><ul><li class='first-of-nav'><a href='main.php'>To Game</a></li><li>Hello, " . $username . "!</li><li><a href='../index.php'>Logout</a></li></ul></nav>";
    ?>

    <main>
        <article class="top">
            <h1>GUESS THE NUMBER!</h1>
        </article>
        <article id="scores">

            <table>
                <tr>
                    <th>
                        Username
                    </th>
                    <th>
                        Score
                    </th>
                </tr>
            <?php

                $statement = "SELECT username, score FROM scores ORDER BY score DESC";
                $query = $dbh->prepare($statement);
                $query->execute();
                $result = $query->fetchAll();

                foreach($result as $row) {
                    echo "<tr><td>" . $row['username'] . "</td><td>" . $row['score'] . "</td></tr>\n";
                }

            ?>
            </table>
        </article>
    </main>
    
</body>
</html>