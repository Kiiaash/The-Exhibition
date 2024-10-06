<?php

class getId{

    public $id;

    public function idGrabber($id){
        if(isset($id)){
            $id = htmlspecialchars($id);
            $this->id = $id;
        }
    }

}