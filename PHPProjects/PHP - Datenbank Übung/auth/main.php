<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP2 Things</title>
    <link rel="stylesheet" href="../css/custom.css">
</head>
<body>
    <?php include_once '../inc/header.php';
          include('../inc/dbh.inc.php'); ?>
    <?php 
        session_start();
        $user = $_SESSION['username'];
        $userID = $_SESSION['userid'];
        echo "<section id='welcome'><h3>Welcome, " . $user ."!</h3><a href='../index.php'>Logout</a></section>";
    ?>
    <form action="customerDelete.php" method="post" id="delete-form">
      <h3>Are you sure you want to delete <span id="d-compname"></span>?</h3>
      <input name="d-cid" id="d-cid" style="display: none;">
      <section>
          <button type="button" onclick="cancelDelete()">CANCEL</button>
          <input type="submit" class="button-styled-red" value="DELETE"> 
      </section>
    </form>
    <article><h4>Click on a customer name in the list below to see its information.</h4></article>
    <main class="flexed-boxes-row">
        <article id="comp-list">
            <header>Customer List</header>
            <section>
                <?php
                $statement = "SELECT * FROM customers";
                $query = $dbh->prepare($statement);
                $query->execute();
                $result = $query->fetchAll();

                foreach($result as $row) {
                    echo "<p class='comp-list-item' onclick='showComp(" . $row['CID'] . ", " . $userID . ")'>" . $row['compname'] . "</p>\n";
                }
                ?>
            </section>
        </article>
        <article id="comp-data">
            <header id="comp-name">[Name]</header>
            <section>
                <p id="comp-contact"></p>
                <p id="comp-tel"></p>
                <p id="comp-adr"></p>
                <p id="comp-zip"></p>
                <p id="comp-created"></p>
                <p id="comp-edited"></p>
            </section>

            <section id="buttons"></section>
        </article>
    </main>
    <form action="customerEdit.php" method="post" id="edit-form">
        <h3>Edit Customer <span id="c-name"></span></h3>
        <input name="cid" id="e-cid" style="display:none;">
        <div>
            <label for="e-compname">Company Name:</label>
            <input name="compname" id="e-compname" placeholder="Company Name" maxlength="30" required>
        </div>
        
        <div>
            <label for="e-compcon">Person:</label>
            <input name="contact" id="e-compcon" placeholder="Name" maxlength="30" required>
        </div>
        
        <div>
            <label for="e-comptel">Telephone No. of Company/Contact:</label>
            <input name="tel" id="e-comptel" placeholder="+43..." maxlength="15" required>    
        </div>

        <div>
            <label for="e-compadr">Address (Street, City):</label>
            <input name="address" id="e-compadr" placeholder="Example Street 12, City" maxlength="30" required>
        </div>

        <div>
            <label for="e-compzip">ZIP-Code:</label>
            <input name="zip" id="e-compzip" placeholder="1004" maxlength="5" required>
        </div>


        <div class="buttons">
            <button type="button" onclick="cancelEdit()">CANCEL</button>
            <input type="submit" class="button-styled" value="SUBMIT"> 
        </div>
    </form>
    <form action="customerRegistration.php" method="post">
        <h3>Register A New Customer</h3>
        <h4>All fields are required!</h4>

        <div>
            <label for="compname">Company Name:</label>
            <input name="compname" id="compname" placeholder="Company Name" maxlength="30" required>
        </div>

        <div>
            <label for="contact">Contact Person:</label>
            <input name="contact" id="contact" placeholder="Name" maxlength="30" required>
        </div>

        <div>
            <label for="tel">Telephone No. of Company/Contact:</label>
            <input name="tel" id="tel" placeholder="+43..." maxlength="15" required>   
        </div>
        
         <div>
             <label for="address">Address (Street, City):</label>
             <input name="address" id="address" placeholder="Example Street 12, City" maxlength="30" required>
         </div>

        <div>
            <label for="zip">ZIP-Code:</label>        
        <input name="zip" id="zip" placeholder="1004" maxlength="5" required>
        </div>

        <input type="submit" class="button-styled" value="CREATE NEW ENTRY">
    </form>
    

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../js/script.js"></script>
    
</body>
</html>