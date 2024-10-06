<?php 
class Sustainer{
/*we check to see if the array key exists in the posted data or not and 
if the data have been sent through the post method or not
now if the data is there, we echo out the array and it's key */ 
    static function sustainer($arg,$key){
        if ($_SERVER['REQUEST_METHOD'] == "POST" && array_key_exists($key,$arg)) {   
            echo htmlspecialchars($arg[$key]);//the posteddata['key']
        }else{
            echo " ";
        }
    }

}
?>