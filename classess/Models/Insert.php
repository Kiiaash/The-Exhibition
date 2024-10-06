<?php

class Insert
{
    public function InsertInto($string1, $tablename, $string2,$array1 = [])
    {
        $mysqli = new mysqli('localhost', 'root', '', 'conference');
        if ($mysqli->connect_errno != 0) {
            echo $mysqli->connect_error;
            exit();
        }
        //var_dump($array1);
        //var_dump($string2);
        //var_dump($string1);
        //var_dump($tablename);
        $type = str_repeat("s", count(array_values($array1)));
        $params = array_merge([$type], $array1);
        $stmt = $mysqli->prepare("INSERT INTO `$tablename` ($string1) VALUES ($string2)");
        $newvalues = [];
        foreach ($params as $key => &$value) {
            $newvalues[] = &$value;
        }
        call_user_func_array([$stmt, 'bind_param'], $newvalues);
        //$stmt->bind_param($bindprams,extract($recordvalues));
?>
        <script>
            confirm("ادامه می‌دهید؟")
            if (confirm) {
                window.alert("عملیات با موفقیت انجام شد");
                const chk = document.getElementById("chk");
                chk.checked = true;
            }
        </script>
<?php

        //mysqli_query($con, $sql_insert);
        $stmt->execute();

        //return $sql_insert; // comments are for knowing the debuggers and the workflow
        //echo "done";
    }
}
