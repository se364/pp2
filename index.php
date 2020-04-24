<?php

    /*
     * Shah Emran
     * 4/17/2020
     *
     * Pair Program 2
     */

    //Turn on error reporting -- this is critical!
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    ?>

<?php

    include "functions.php";

    echo"PHP Arary Practice <br><br>";



    $numbers = array(7, 9, 8, 9, 8, 8, 6);


    echo "The array of numbers are<br>";
    printArr($numbers);

    echo "<br>";
    echo "<br>Large number from the array is:\n\n\n";
    largest($numbers);