<?php 

class Recall{
    
    public $fetched = [];
    public $singlefetch = [];

    public function selectAll($tablename,$order){
        $check = new Check();
        $check ->fetch($tablename,$order);
        $this->fetched = $check -> fetchdata();
    }

    public function selectAllpaged($tablename,$order,$from,$till){
        $check = new Check();
        $check ->withPagination($tablename,$order,$from,$till);
        $this->fetched = $check -> getPaginated();
    }

    public function selectAllpagedwhere($tablename,$order,$from,$till,$key,$value){
        $check = new Check();
        $check ->withPaginationwhere($tablename,$order,$from,$till,$key,$value);
        $this->fetched = $check -> getPaginatedwhere();
    }    

    public function selectAllWhere($tablename,$key,$value){
        $check = new Check();
        $check -> selectAllWhere($tablename,$key,$value);
        $this->fetched = $check->getselectallwhere();
    }

    public function selectAllWhereISNULL($tablename,$key){
        $check = new Check();
        $check -> selectAllWhereISNULL($tablename,$key);
        $this->fetched = $check->getSelectallwhereisnull();
    }
    
    public function selectOne($tablename,$id){
        $check = new Check();
        $check -> fetchOne($tablename,$id);
        $this->singlefetch = $check -> getFetchOne();
    }

}

?>