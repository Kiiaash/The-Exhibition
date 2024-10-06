<?php 

class Updater{

    protected $posted_data=[];

    public function multiUpdate($tablename,$indicator,$id,$location,$formdata=[]){
        $update = new Update();
        //var_dump($formdata);
        $update -> updater($tablename,$indicator,$id,$formdata);
        //($update->updater($tablename,$indicator,$id,$formdata) == true) ? "done" : "not done";
        ob_start();
        header($location);
        ob_flush();
    }

    public function fromtillupdate($tablename,$indicator,$from,$till,$formdata=[]){
        $update = new Update();
        $update -> updatefromtill($tablename,$indicator,$from,$till,$formdata);
    }

}