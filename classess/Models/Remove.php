<?php 
class Remove{
    
    public function singleRemove($tablename,$id,$redirectAdress){
        $mysqli = new mysqli('localhost','root','','conference');
        if($mysqli -> connect_errno != 0){
            echo $mysqli->connect_error;
            exit();
        }

        $stmt = $mysqli->prepare("DELETE FROM `$tablename` WHERE id = ?");
        $stmt ->bind_param("s",$id);

        $stmt -> execute();
        header($redirectAdress);

    }

}
?>