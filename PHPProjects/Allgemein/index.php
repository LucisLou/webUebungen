<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Guess The Number!</title>
</head>
<body>
    <?php
        session_start();
        $_SESSION = array(); //resets session, used for logout
    ?>
    <nav>
        <ul>
            <li class="link-styled" onclick="toggleSignIn()">Sign-In</li>
        </ul>
    </nav>
    <main>
        <article class="top">
            <h1>GUESS THE NUMBER!</h1>
            <section>
                <button onclick="toggleSignIn()">Sign-In & Play</button>
                <button onclick="toggleRegister()">Register & Play</button>
            </section>
            <p><strong>Why do I need to register?</strong><br>Because I made this into a PHP exercise.<br>I'm too lazy to make a site without all the fancy database stuff.</p>
        </article>

        <article id="sign-in">
            <form action="formLogin.php" method="post">
                <h2>Login</h2>

                <div>
                    <label for="email">E-Mail:</label>        
                    <input type="email" name="email" id="email" required>
                </div>

                <div>
                <label for="password">Password:</label> 
                    <input type="password" name="password" id="password" required> 
                </div>
                
                <input type="submit" class="button-styled" value="LOGIN">
                <button type="button" class="button-styled-cancel" onclick="cancelSignIn()">CANCEL</button>
            </form>
        </article>

        <article id="register">
            <form action="formRegister.php" method="post">
                <h2>Register</h2>
                <h3>All fields are required!</h3>
                
                <div>
                    <label for="r-username">Username:</label>
                    <input name="r-username" placeholder="Username" id="r-username" maxlength="20" onkeypress="return event.charCode != 32" required>
                </div>

                <div>
                    <label for="r-email">E-Mail:</label>
                    <input type="email" placeholder="example@mail.com" name="r-email" id="r-email" maxlength="30" onkeypress="return event.charCode != 32" required>
                </div>

                <div>
                    <label for="pass1">Password:</label> 
                    <input type="password" name="password1" id="pass1" maxlength="20" onkeypress="return event.charCode != 32" required>
                </div>
                
                <div>
                    <label for="pass2">Repeat Password:</label>
                    <input type="password" name="password2" id="pass2" maxlength="20" onkeypress="return event.charCode != 32" required>
                </div>

                <input type="submit" class="button-styled" value="REGISTER">
                <button type="button" class="button-styled-cancel" onclick="cancelRegister()">CANCEL</button>
        	</form>
        </article>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="js/scriptIndex.js"></script>
</body>
</html>