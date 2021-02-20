<?php
    
    /* A function to generate a 12-pin numbers in
    a number of times specified */
    function generatePin($max_val){

        echo "Generating ".$max_val." (12-pin) numbers<br><br>";

        for($i = 1; $i <= $max_val; $i++){
            // set default pin to be null
            $pin = "";
            //generate a 12-pin numbers
            for ($count = 1; $count <= 12; $count++){
                //generate a random number between 0-9
                $num= rand(0,9);
                // add the random number to the pin
                $pin = $pin.$num;
            }
            // print generated 12-pins
            echo $pin;

            /* add a new line
            before printing a new generated pin */
            echo "<br>";
        }
        
    }

    // calling the Generate Pins function
    // with specified values
    generatePin(200);

?>