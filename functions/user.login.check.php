<?php
function userCheck($post_key, $character_set, $target_value, $error_array)
{
    
    if ($post_key == 'username') {
        foreach ($character_set as $sp) {
            if (strpos($target_value, $sp) == true) {
                // echo "email is not valid";
                array_push($error_array, "نام کاربری وارد شده معتبر نیست");
                break;
            }
        }
    }
}


