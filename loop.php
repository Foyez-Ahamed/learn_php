<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Php loop</title>
    </head>

    <br>

        <!-- for loop -->
        <?php

        for ($x = 0; $x <= 100; $x += 10) {
            echo "The number is: $x </br>";
        }

        ?>

    </br>

        <!-- forEach loop -->
        <?php

        $colors = array("Red", "Blue", "Yellow", "Violet");

        $testColor =array_reverse($colors);

        foreach($testColor as $colors){
            echo "$colors </br>";
        }

       

        ?>



    </body>

</html>
