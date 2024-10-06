<?php
class Update
{
    public $id;
    public function updater($tablename,$indicator,$id,$array=[])
    {
        $mysqli = new mysqli("localhost", "root", "", "conference");
        if ($mysqli->connect_errno != 0) {
            echo $mysqli->connect_error;
            exit();
        }
        $indicator = htmlspecialchars($indicator);
        $id = htmlspecialchars($id);
        foreach($array as $key => $value){
            $stmt = $mysqli -> prepare("UPDATE `$tablename` SET $key = ? WHERE $indicator = ?");
            $stmt -> bind_param("ss",$value,$id);
            $stmt -> execute();
            echo "done";
        }
        //($stmt->execute() == true) ? $this->success() : Login::abort();
    }

    public function updatefromtill($tablename,$indicator,$from,$till,$array){
        $mysqli = new mysqli("localhost", "root", "", "conference");
        if ($mysqli->connect_errno != 0) {
            echo $mysqli->connect_error;
            exit();
        }
        foreach($array as $key => $value){
            $stmt = $mysqli -> prepare("UPDATE `$tablename` SET $key = ? WHERE $indicator BETWEEN $from AND $till");
            $stmt -> bind_param("s",$value);
            $stmt -> execute();
            echo "done";
        }
    }

    protected function success(){
        ?>
            <script>window.alert('عملیات با موفقیت انجام شد')</script>
        <?php
    }

    public function fetchId($input){
        if(isset($ipnut)){
            $this->id = $input; 
        }
    }
}
