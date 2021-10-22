<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>PHP1 Kompetenzcheck</title>
</head>
<body>
    <?php
        //Task 1
        $people = array();
        $people[0]['Vorname'] = "Fritz";
        $people[0]['Nachname'] = "Phantom";
        $people[0]['Alter'] = 70;
        $people[1]['Vorname'] = "Lilo";
        $people[1]['Nachname'] = "Knickerbocker";
        $people[1]['Alter'] = 37;
        $people[2]['Vorname'] = "Thomas";
        $people[2]['Nachname'] = "Breziner";
        $people[2]['Alter'] = 58;
        $people[3]['Vorname'] = "Tom";
        $people[3]['Nachname'] = "Turbo";
        $people[3]['Alter'] = 27;

        echo "<p>" . print_r($people) . "</p>";

        foreach ($people as $person) {
            echo "<p>";
            foreach ($person as $fieldName => $value) {
                echo $fieldName . ": " . $value . " <br>";
            }
            echo "</p>";
        }

        //Task 2
        $peopleAndColor = array();
        $peopleAndColor['Fritz'] = "Lila";
        $peopleAndColor['Lilo'] = "Pink";
        $peopleAndColor['Thomas'] = "Gelb";
        $peopleAndColor['Tom'] = "Rot";

        foreach($peopleAndColor as $person => $color) {
            echo "<p>" . $person . " likes " . $color . "</p>";
        }

        //Task 3
        $tom_mag = array('Schmieröl', 'DeBreziner' , 'Essiggurkerl');
        $tricks= array(6, 89, 23, 1, 7, 8, 19);
        
        sort($tom_mag);
        echo print_r($tom_mag);
        echo "<br>";

        rsort($tricks);
        echo print_r($tricks);
        echo "<br>";

        ksort($peopleAndColor);
        echo print_r($peopleAndColor);
        echo "<br>";

        arsort($peopleAndColor);
        echo print_r($peopleAndColor);
        echo "<br>";

        //Task 4
        $sentence1 = "Die Knickerbockerbande, das sind wir!";
        $sentence2 = "Tom Turbo mag Schmieröl";
        $sentence3 = "Turbo Durchblick";

        echo "<p>" . strlen($sentence1) . "</p>";
        echo "<p>" . strpos($sentence2, "Schmieröl") . "</p>";
        echo "<p>" . strrev($sentence3) . "</p>";

        //Task 5

        $file = fopen('tricks.txt', 'w');

        fwrite($file, "Turbo Kleber \n");
        fwrite($file, "Turbo Bratpfannentrick \n");
        fwrite($file, "Knoblauch Stinkbombe");

        fclose($file);

    ?>
    
</body>
</html>