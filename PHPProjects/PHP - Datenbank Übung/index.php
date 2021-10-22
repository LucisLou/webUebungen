<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP2 Things</title>

    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
    <?php include_once('inc/header.php');
        session_start();
        $_SESSION = array(); //resets session
    ?>
    <form action="formDataLogin.php" method="post">
        <h3>Login</h3>

        <div>
            <label for="email">E-Mail:</label>        
            <input type="email" name="email" id="email" required>
        </div>

        <div>
           <label for="password">Password:</label> 
            <input type="password" name="password" id="password" required> 
        </div>
        
        <input type="submit" class="button-styled" value="LOGIN">
    </form>

    <h3>Don't have an account yet? Register below:</h3>

    <form action="formDataRegister.php" method="post">
        <h3>Register</h3>
        <h4>All fields are required!</h4>
        
        <div>
            <label for="firstname">First Name:</label>
            <input name="firstname" placeholder="First Name" id="firstname" maxlength="20" required>
        </div>

        
        <div>
            <label for="familyname">Family Name:</label>       
            <input name="familyname" placeholder="Family Name" id="familyname" maxlength="20" required> 
        </div>

        <div>
            <label for="age">Age:</label> 
            <input type="number" name="age" id="age" min="1" max="120" required>   
        </div>
 
        <div>
            <label for="r-email">E-Mail:</label>
            <input type="email" name="email" id="r-email" maxlength="30" required>
        </div>

        <div>
            <label for="pass1">Password:</label> 
            <input type="password" name="password1" id="pass1" maxlength="20" required>
        </div>
        
        <div>
            <label for="pass2">Repeat Password:</label>
            <input type="password" name="password2" id="pass2" maxlength="20" required>
        </div>

        <input type="submit" class="button-styled" value="REGISTER">
    </form>
</body>
</html>