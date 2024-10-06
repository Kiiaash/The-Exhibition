<?php 
    
    function arrayLooper($first_array,$seconed_array){
        foreach ($first_array as $data) {
            array_push($seconed_array, $data);
        }
        return array_pop($seconed_array);
    }

?>