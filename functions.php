<?php

function printArr($array){

    $length = count($array);
    for ($i = 0; $i < $length; $i++) {
        print $array[$i]."\n"  ;
    }
}

function largest($myArr){
    echo max($myArr);
}

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

