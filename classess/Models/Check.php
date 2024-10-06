<?php 
class Check{

    protected $checkeddata =[];
    protected $fetchdata =[];
    protected $fetchone = [];
    protected $paginateddata=[];
    protected $paginateddatawhere=[];
    protected $selectallwhere=[];
    protected $selectallwhereisnull=[];
    protected $selectallwhereisnotnull=[];
    protected $searchresult=[];

    public function loginCheck($tablename,$arg1,$arg2){
        $mysqli = new mysqli("localhost","root","" ,"conference");
        if($mysqli -> connect_errno != 0){echo $mysqli->connect_error; exit();}

        $arg1 = htmlspecialchars($arg1);
        $arg2 = htmlspecialchars($arg2);
        $tablename = htmlspecialchars($tablename);

        $stmt = $mysqli -> prepare("SELECT * from `$tablename` WHERE $arg1 = ?");
        $stmt -> bind_param("s",$arg2);
        $stmt -> execute();
        $result = $stmt -> get_result();
        $data = $result->fetch_assoc();

        $this->checkeddata = $data;
          
    }

    public function fetch($tablename,$order){
        $mysqli = new mysqli("localhost","root","" ,"conference");
        if($mysqli -> connect_errno != 0){echo $mysqli->connect_error; exit();}

        $tablename = htmlspecialchars($tablename);
        $order = htmlspecialchars($order);
        $stmt = $mysqli -> prepare("SELECT * FROM `$tablename` ORDER BY id $order");
       
        $stmt -> execute();
        $result = $stmt -> get_result();
        $data = $result -> fetch_all(MYSQLI_ASSOC);

        $this->fetchdata = $data;

    }

    public function withPagination($tablename,$order,$from,$till){
        $mysqli = new mysqli("localhost","root","" ,"conference");
        if($mysqli -> connect_errno != 0){echo $mysqli->connect_error; exit();}
        $tablename = htmlspecialchars($tablename);
        $order = htmlspecialchars($order);
        $stmt = $mysqli -> prepare("SELECT * FROM `$tablename` ORDER BY id $order LIMIT $from,$till");
       
        $stmt -> execute();
        $result = $stmt -> get_result();
        $data = $result -> fetch_all(MYSQLI_ASSOC);

        $this->paginateddata = $data;
    }

    public function withPaginationwhere($tablename,$order,$from,$till,$key,$value){
        $mysqli = new mysqli("localhost","root","" ,"conference");
        if($mysqli -> connect_errno != 0){echo $mysqli->connect_error; exit();}
        $tablename = htmlspecialchars($tablename);
        $order = htmlspecialchars($order);
        $key = htmlspecialchars($key);
        $from = htmlspecialchars($from);
        $till = htmlspecialchars($till);
        $stmt = $mysqli -> prepare("SELECT * FROM `$tablename` WHERE $key = ? ORDER BY id $order  LIMIT $from,$till");
        $stmt ->bind_param("s",$value);
       
        $stmt -> execute();
        $result = $stmt -> get_result();
        $data = $result -> fetch_all(MYSQLI_ASSOC);

        $this->paginateddatawhere = $data;
    }

    public function fetchOne($tablename,$id){
        $mysqli = new mysqli("localhost","root","" ,"conference");
        if($mysqli -> connect_errno != 0){echo $mysqli->connect_error; exit();}

        $tablename = htmlspecialchars($tablename);
        $stmt = $mysqli -> prepare("SELECT * FROM `$tablename` WHERE id = ?");
        $stmt -> bind_param("s",$id);
        $stmt -> execute();
        $result = $stmt -> get_result();
        $data = $result -> fetch_all(MYSQLI_ASSOC);

        $this->fetchone = $data;
    }

    public function selectAllWhere($tablename,$key,$value){
        $mysqli = new mysqli("localhost","root","" ,"conference");
        if($mysqli -> connect_errno != 0){echo $mysqli->connect_error; exit();}

        $tablename = htmlspecialchars($tablename);
        $stmt = $mysqli -> prepare("SELECT * FROM `$tablename` WHERE $key = ?");
        $stmt -> bind_param("s",$value);
        $stmt -> execute();
        $result = $stmt -> get_result();
        $data = $result -> fetch_all(MYSQLI_ASSOC);

        $this->selectallwhere = $data;
    }

    public function selectAllwhereISNULL($tablename,$key){
        $mysqli = new mysqli("localhost","root","" ,"conference");
        if($mysqli -> connect_errno != 0){echo $mysqli->connect_error; exit();}

        $tablename = htmlspecialchars($tablename);
        $stmt = $mysqli -> prepare("SELECT * FROM `$tablename` WHERE $key IS NULL");
        
        $stmt -> execute();
        $result = $stmt -> get_result();
        $data = $result -> fetch_all(MYSQLI_ASSOC);

        $this->selectallwhereisnull = $data;
    }

    public function selectAllwhereISnotNULL($tablename,$key){
        $mysqli = new mysqli("localhost","root","" ,"conference");
        if($mysqli -> connect_errno != 0){echo $mysqli->connect_error; exit();}

        $tablename = htmlspecialchars($tablename);
        $stmt = $mysqli -> prepare("SELECT * FROM `$tablename` WHERE $key IS NOT NULL");
       
        $stmt -> execute();
        $result = $stmt -> get_result();
        $data = $result -> fetch_all(MYSQLI_ASSOC);

        $this->selectallwhereisnotnull = $data;
    }

    public function search($tablename,$key,$searchitem){
        $mysqli = new mysqli("localhost","root","" ,"conference");
        if($mysqli -> connect_errno != 0){echo $mysqli->connect_error; exit();}

        $tablename = htmlspecialchars($tablename);
        $key = htmlspecialchars($key);

        $stmt = $mysqli->prepare("SELECT * FROM `$tablename` WHERE $key LIKE '%$searchitem%'");
        //$stmt -> bind_param("s",$searchitem);
        $stmt->execute();
        $result = $stmt -> get_result();
        $data = $result -> fetch_all(MYSQLI_ASSOC);

        $this->searchresult = $data;
    }

    public function getdata(){
        return $this->checkeddata;
    }

    public function fetchdata(){
        return $this->fetchdata;
    }

    public function getFetchOne(){
        return $this->fetchone;
    }

    public function getPaginated(){
        return $this->paginateddata;
    }

    public function getPaginatedwhere(){
        return $this->paginateddatawhere;
    }
    
    public function getSelectallwhere(){
        return $this->selectallwhere;
    }

    public function getselectallwhereisnull(){
        return $this->selectallwhereisnull;
    }

    public function getsearchres(){
        return $this->searchresult;
    }
}
?>