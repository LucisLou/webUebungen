<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Übung 1 - 2</title>
</head>
<body>
    <?php
        //Task 1
        $productAvailability = 0;
        print "Sneakers, Blue, Size 41 <br>";
        checkAvailability($productAvailability);

        function checkAvailability($productAvailability) {
            if($productAvailability != 0) {
                print "<p>Thank you for your purchase!</p>";
            } else {
               print "<p>Product is currently not available. Sorry for the inconvenience!</p>";
            }
        }

        //Task 2
        $product = array();
        $product['Product Name'] = "Sneakers Blue";
        $product['Price'] = 20;
        $product['No. Available'] = 5;

        notifyCustomer($product['Product Name'], $product['Price'], $product['No. Available']);

        function notifyCustomer($name, $price, $availability) {
            if ($availability === 0) {
                print "<p>Product " . $name . " is sadly no longer available.</p>";
            } elseif ($availability > 0 && $price >= 20) {
                print "<p>For the product " . $name . ", there are no delivery fees.</p>";
            } elseif ($availability > 0 && $price < 20) {
                print "<p>For the product " . $name . ", the delivery fees are €5.</p>";
            }
        }


        //Task 3
        echo "<p>Print 1 to 10 usinf a For-Loop</p>";
        for($i = 1; $i < 11; $i++){
            print $i . "<br>";
        }
        
        echo "<p>Print 1 to 10 using a While-Loop</p>";
        $i = 1;

        while($i < 11) {
            print $i . "<br>";
            $i++;
        }

        $i = 1;
        echo "<p>Print 1 to 10 using a Do-While-Loop</p>";
        do {
            print $i . "<br>";
            $i++;
        } while($i < 11);


        //Task 4
        //Create an array for a vegetables and fruits product range. (Apples, pears, tomatoes which are technically a fruit too, but let's not get into that, and finally zucchinis)
        //The first level should be a numeric index, the second level should be associative with description/name (String), price (Numeric), and special offer (boolean).
        //create a foreach loop which gives out the product name and price. Should there be a special offer, print out "Special Offer!"
        
        $grocery = array();
        $grocery[0]['Product Name'] = "Apples";
        $grocery[0]['Price'] = 1;
        $grocery[0]['Special Offer'] = true;
        $grocery[1]['Product Name'] = "Pears";
        $grocery[1]['Price'] = 2;
        $grocery[1]['Special Offer'] = false;
        $grocery[2]['Product Name'] = "Tomatoes";
        $grocery[2]['Price'] = 2;
        $grocery[2]['Special Offer'] = true;
        $grocery[3]['Product Name'] = "Zucchinis";
        $grocery[3]['Price'] = 3;
        $grocery[3]['Special Offer'] = false;

        foreach($grocery as $product) {
            if($product['Special Offer'] === true) {
                print "<p>". $product['Product Name'] . ", Price: €" . $product['Price'] . " | CAUTION: SPECIAL OFFER!</p>";
            } else {
                print "<p>" . $product['Product Name'] . ", Price: €" . $product['Price'] . "</p>";
            }
        }

        print "<br>";

        //Task 5
        foreach($grocery as $level1) {
            foreach ($level1 as $level2 => $value) {
                if($level2 == "Special Offer")
                    continue; //used to skip special offer
                print $level2 . ": " . $value . "<br>"; 


                //alternatively:
                /*
                if($level2 != "Special Offer")     
                    print $level2 . ": " . $value . "<br>"; 
                */
            }
            print "<br>";
        }

        //Task 6
        $number = 2;
        $powResult = array();
        $powResult = powerCalculation($number);

        function powerCalculation($num) {
            $result = array();

            print "<p>Power calculation of " . $num . ": </p>";

            for($i = 0; $i < 11; $i++) {
                 $result[$i] = $num**$i;
            }

            return $result;
        }

        $powResultString = implode("<br>", $powResult);

        print "<p>" . $powResultString . "</p>";

        //Task 7
        include 'Uebung2external1.php';
        powerCalculationExternal($number);

        //Task 8
        $random = rand(0, 100);
        $squareRooted = sqrt($random);

        echo "random number: " . $random . ", square root of the number: " . $squareRooted;
    ?>
</body>
</html>