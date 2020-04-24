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

