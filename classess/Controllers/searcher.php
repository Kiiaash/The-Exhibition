<?php 

class Search{

    public $searched =[];

    public function search($tablename,$key,$searchitem){
        $check = new Check;
        $check -> search($tablename,$key,$searchitem);
        $this->searched = $check->getsearchres();
    }

}



?>