<?php

    /*
     * Shah Emran
     * 4/17/2020
     *
     * Pair Program
     */

    //Turn on error reporting -- this is critical!
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    
    ?>

<?php

    echo"PHP Arary Practice";

    $numbers = array(7, 9, 8, 9, 8, 8, 6);

    include "functions.php";

    printArr($numbers);

    echo "<br>";
    echo "Large number from the array is printed.";