<?php

function filedsmod($item,$first_array=[])
{
    $newitem = array_search($item, $first_array=[]); //here we find the index first
    if ($newitem !== array_key_last($first_array=[])) { // here we check if the index is equal to the last index or not
        return "'" . $item . "'" . ",";
    } else {
        return "'" . $item . "'";
    }
}
