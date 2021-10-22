<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Übung 1</title>
</head>
<body>
    <?php 
        print "<h1>Hello, user!</h1>"
    ?>

    <?php 
        $numEight = 8;
        $numEightString = "8";
        print $numEight;
        print "<p>The number 8 above was printed by initializing a variable with 8 and printing the variable.</p>";
        print $numEightString;
        print "<p>The number 8 above was printed by doing the same thing, but this 8 is a String.</p>";
        print "8";
        print "<p>The 8 above is simply a print command with 8.</p>";
    ?>

    <?php 
        $num1 = 2;
        $num2 = 5;
        print "Two numbers: " . $num1 . " and " . $num2;
        echo "<br> These two numbers multiplied: ";
        echo $num1 * $num2 . "<br><br>";
    ?>

    <?php 
        $part1 = "Die Donau ist ins Wasser g’falln,";
        $part2 = "der Rheinstrom ist verbrannt,";
        $part3 = "In Frankfurt ist ein Spaß passiert,";
        $part4 = "der Geisbock hats erzählt.";

        print $part1 . "<br>" . $part2 . "<br>". $part3 . "<br>" . $part4;
    ?>

    <?php 
        $customer = array();
        $customer[0]['Name'] = "Frankie"; //a mix of associative and indexed 2D array
        $customer[0]['Last Name'] = "Franker";
        $customer[1]['Name'] = "Eddie";
        $customer[1]['Last Name'] = "Brewer";
        $customer[2]['Name'] = "Lorrie";
        $customer[2]['Last Name'] = "Levron";

        foreach($customer as $array) { //Used to print out the array $customer
            print "<p>";
            foreach($array as $key => $value) { //used  to print out each value per key
                print $key . " " . $value;
            }
            print "</p>\n";
        }
    ?>
    
</body>
</html>