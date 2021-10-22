<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function powerCalculationExternal($num) {
            $result = array();

            print "<p>Power calculation of " . $num . " using external .php file: </p>";

            for($i = 0; $i < 11; $i++) {
                 $result[$i] = $num**$i;
            }

            printArray($result);
        }

        function printArray($array) {
            $arrayString = implode("<br>", $array);

            print "<p>" . $arrayString . "</p>";
        }
    ?>
</body>
</html>