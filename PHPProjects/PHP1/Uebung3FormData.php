<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Uebung 1 - 3</title>
</head>
<body>
    <h2>Great! You inserted a number!</h2>
    <?php
        $userNumber = $_POST["userNumber"];
        $userNumber = intval($userNumber);

        echo "Your number is: " . $userNumber . "<br>";

        $numbersFromFile = array();
        $fileHandle = fopen('numbers.txt', 'r');

        if ($fileHandle) {
            $i = 0;

            while (!feof($fileHandle)) {

                $line = fgets($fileHandle);
    
                $line = trim($line); //used to ensure that $line is only a line from the file
    
                $numbersFromFile[$i] = intval($line); //adds value of $line into the $numbersFromFile array as a number
                $i++;
            }

            fclose($fileHandle);

        } else {
            echo "<p>Failed to read file.</p>";
        }

        echo "<p>Numbers read from a file: </p>";
        $numbersFromFileString = implode("<br>", $numbersFromFile); //merely used to see if this code above even works
        echo "<p>" . $numbersFromFileString . "</p>"; //same as above

        $newFile = fopen('newFile.txt', 'w') or die ("Cannot open file!");
        
        foreach ($numbersFromFile as $numFromFile) {
            $numFromFile = $numFromFile * $userNumber;
            fwrite($newFile, $numFromFile . "\n");
        }
        
        fclose($newFile);

        echo "<p>A new file has been created that multiplied all numbers shown above with the number you inserted!</p>";

    ?>
    
</body>
</html>