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
        $type = str_repeat("s", count(array_values($array1)));
        $params = array_merge([$type], $array1);
        $stmt = $mysqli->prepare("INSERT INTO `$tablename` ($string1) VALUES ($string2)");
        $newvalues = [];
        foreach ($params as $key => &$value) {
            $newvalues[] = &$value;
        }
        call_user_func_array([$stmt, 'bind_param'], $newvalues);
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
        $stmt->execute();
    }
}
