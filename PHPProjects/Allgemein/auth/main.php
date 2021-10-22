<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Guess The Number!</title>
</head>
<body>
    <?php
        session_start();
        $username = $_SESSION['username'];
        echo "<nav><ul><li class='first-of-nav'><a href='leaderboard.php'>Leaderboard</a></li><li><strong>Hello, " . $username . "!</strong></li><li><a href='../index.php'>Logout</a></li></ul></nav>";
    ?>
    <main>
        <article class="top">
            <h1>GUESS THE NUMBER!</h1>
            <section id="game-data">
                <p id="data-tries"></p>
                <p id="data-limit"></p>
            </section>
        </article>
        <article>
            <section id="settings">
                <h2>Game Settings</h2>
                <div>
                    <label for="tries">Number of Tries: </label>
                    <input type="number" name="tries" value="5" id="tries" min="5" max="100" onKeyDown="return false" required>
                </div>
                <div>
                    <label for="upper-limit">Upper Limit: </label>
                    <input type="number" name="upper-limit" value="10" id="upper-limit" min="10" max="100" onKeyDown="return false" required>
                </div>
                <button id="start-btn" onclick="gameStart()">START</button>
            </section>
            <section id="game-field">
                <div id="guess">
                    <h3>Your Guess: </h3><h3 id="numbers-guessed"></h3>
                    <h4 id="hint"></h4>
                </div>
                <div id="game-buttons">
                    <div>
                        <button class="button-styled-cancel" id="seven" onclick="addInput(7)">7</button>
                        <button class="button-styled-cancel" id="eight" onclick="addInput(8)">8</button>
                        <button class="button-styled-cancel" id="nine" onclick="addInput(9)">9</button>
                    </div>
                    <div>
                        <button class="button-styled-cancel" id="four" onclick="addInput(4)">4</button>
                        <button class="button-styled-cancel" id="five" onclick="addInput(5)">5</button>
                        <button class="button-styled-cancel" id="six" onclick="addInput(6)">6</button>
                    </div>
                    <div>
                        <button class="button-styled-cancel" id="one" onclick="addInput(1)">1</button>
                        <button class="button-styled-cancel" id="two" onclick="addInput(2)">2</button>
                        <button class="button-styled-cancel" id="three" onclick="addInput(3)">3</button>
                    </div>
                    <div>
                        <button id="reset" onclick="resetInput()">RESET</button>
                        <button class="button-styled-cancel" id="zero" onclick="addInput(0)">0</button>
                        <button id="enter" onclick="enterInput()">ENTER</button>
                    </div>
                </div>
            </section>
            <section id="history-area">
               <button onclick="showHistory()" id="history-btn">HISTORY</button>
            </section>
        </article>
        <article id="history">
            <section id="history-content">
                <h2>History</h2>
                <p id="last-input"></p>
                <button onclick="closeHistory()" class="button-styled-cancel">CLOSE</button>
            </section>
        </article>
        <article id="game-over">
            <section>
                <h2>GAME OVER</h2>
                <h3>You lost! Too bad!</h3>
                <button onclick="resetGameLose()">RESTART</button>
            </section>
        </article>
        <article id="game-won">
            <section>
                <h2>🎊YOU WON!🎊</h2>
                <h3>Hooray! You won!</h3>
                <p id="score"></p>
                <div>
                    <button id='save-score-btn' onclick='saveScore("<?=$username?>")'>SAVE SCORE</button>
                    <button class="button-styled-cancel" onclick="resetGameWin()">FINISH</button>
                </div>
                <p id="save-result"><a href="leaderboard.php">Score saved! Check out the leaderboard!</a></p>
            </section>
        </article>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../js/scriptMain.js"></script>
</body>
</html>