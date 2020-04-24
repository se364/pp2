<?php

// Prints the array
function printArr($array){

    $length = count($array);
    for ($i = 0; $i < $length; $i++) {
        print $array[$i]."\n"  ;
    }
}

// Finds the largest value and prints
function largest($myArr){
    echo max($myArr);
}

// Removes the duplicate array
function removeDups($arr){
    $temp_array = array();

    foreach($arr as $val)
    {
        if(!isset($temp_array[$val])) {
            $temp_array[$val] = $val;
        }
    }

    foreach($temp_array as $val2)
    {
        if($val2 > 0)
        {
            echo $val2 . ', ';
        }
    }


}


// Returns number of each element in the array
// as an associative array
function distribution($sortArr){


    $array = array_count_values($sortArr);

    foreach($array as $keys => $count) {
        echo  "$keys"." -> ". "$count";

    }






}

