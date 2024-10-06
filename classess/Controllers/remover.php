<?php 

class Remover{

    public function remover($tablename,$id,$redirectAdress){
        $remover = new Remove();
        $remover->singleRemove($tablename,$id,$redirectAdress);
    }


}