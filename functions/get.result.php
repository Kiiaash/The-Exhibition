<?php 


function tableDescribe($con,$tablename,$first_array=[]){
    $tablename = htmlspecialchars($tablename);
    $sql = "DESCRIBE `$tablename`";
    $result = mysqli_query($con, $sql);
    
    foreach ($result as $res) {
        array_push($first_array, $res['Field']);
    }
    return array_shift($first_array);
}


?>