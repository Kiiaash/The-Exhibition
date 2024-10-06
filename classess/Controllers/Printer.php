<?php

class Printer
{

    public function print($componentAddress,$array=[])
    {   
        foreach($array as $arr) {
            include($componentAddress);
        }
    }

    public function pageNumberPrinter($componentAddress,$number){
        $index = 1;
        while($index <= $number){
            $index++;        
            include($componentAddress);
        }
    }
}
?>