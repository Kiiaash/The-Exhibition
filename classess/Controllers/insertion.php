<?php
class Insertion
{

    public $post_data = [];
    public $fields = [];
    protected $newfields = [];
    public $errors = [];

    protected $keys;
    protected $values;

    protected $keys_as_string;
    protected $values_as_string;
    protected $new_keys;
    protected $binded_pramss;

    public $modstring;
    public $modfields;

    protected $query_check;
    protected $natid_check;
    public $path = "../public/pictures/";


    /* these methods are for records */
    public function getposteddata($datas)
    {
        foreach ($datas as $data) {
            array_push($this->post_data, $data);
        }
        return array_pop($this->post_data);
    }

    public function gettable($tablename, $con)
    {
        $sql = "DESCRIBE `$tablename`";
        $result = mysqli_query($con, $sql);
        foreach ($result as $res) {
            array_push($this->fields, $res['Field']);
        }
        return array_shift($this->fields);
        //tableDescribe($con,$tablename);
    }

    //the problem is i don't know why i can't see the data here
    public function modifier1()
    {
        $string = array_map(function ($item) {
            $newitem = array_search($item, $this->post_data); //here we find the index first
            if ($newitem !== array_key_last($this->post_data)) { // here we check if the index is equal to the last index or not
                return "'" . $item . "'" . ",";
            } else {
                return "'" . $item . "'";
            }
        }, $this->post_data);
        // $string = array_map(filedsmod($this->post_data),$this->post_data);
        return $this->modstring = implode(" ", $string);
    }

    public function modifier2()
    {
        $values = array_map(function ($item) {
            $newitem = array_search($item, $this->fields); //here we find the index first
            if ($newitem !== array_key_last($this->fields)) { // here we check if the index is equal to the last index or not
                return "`" . $item . "`" . ",";
            } else {
                return "`" . $item . "`";
            }
        }, $this->fields);
        //$values = array_map(valmod($this->fields),$this->fields);
        return $this->modfields = implode(" ", $values);
    }
    /* these methods are for records */

    public function validator($rawdata)
    {
        foreach ($rawdata as $key => $value) {

            switch ($key) {


                case 'name':
                    $this->namevalidator($rawdata["name"]);
                    break;

                case 'lastname':
                    $this->lastnamevalidator($rawdata["lastname"]);
                    break;

                case 'degree':
                    $this->degvalidator($rawdata["degree"]);
                    break;

                case 'description':
                    $this->desvalidator($rawdata["description"]);
                    break;

                    // case 'profilephoto':
                    //     $this->porfilevalidator($rawdata["profilephoto"]);
                    //     break;

                case 'username':
                    $this->uservalidator("username", $rawdata["username"]);
                    break;

                case 'email':
                    $this->emailvalidator($rawdata["email"]);
                    break;

                case 'password':
                    $this->passwordvalidator($rawdata["password"], $rawdata["passwordrepeat"]);
                    break;

                case 'natid':
                    $this->natidvalidator($rawdata["natid"]);
                    break;
            }
        }
    }

    public function uservalidator($key, $arg)
    {
        $username = strlen(htmlspecialchars($arg));
        if ($username > 5 && $username < 20) {
            //$this->query($key,$arg);
            $new = new Check();
            $new->loginCheck("competitors", $key, $arg);
            if (empty($new->getdata())) {
                echo "";
            } else {
                ($new->getdata()["username"] == $arg) ? $this->query_check = true : $this->query_check = false;
            }
            if ($this->query_check == false) {
                //echo "done";
            } else {
                array_push($this->errors, "نام کاربری قبلا استفاده شده است از نام کاربری جدید استفاده کنید");
            }
        } else {
            //echo "username not valid"."<br>";
            array_push($this->errors, "نام کاربری وارد شده صحیح نمی‌باشد");
        }
    }

    public function emailvalidator($arg)
    {
        $email = htmlspecialchars($arg);
        if (empty($email) || strpos($email, "@") == 0) {
            array_push($this->errors, "ایمیل وارد شده معتبر نیست");
        } else {
            //echo "your email is valid";
        }
    }


    public function passwordvalidator($arg, $arg3)
    {
        $pass = htmlspecialchars($arg);
        $passrep = htmlspecialchars($arg3);
        if ($pass !== $passrep) {
            array_push($this->errors, "پسورد ها مطابقت ندارند");
            //echo "password does not match";
        } else {
            //echo "done";
        }
    }


    public function natidvalidator($arg)
    {
        $natid = htmlspecialchars($arg);

        if (strlen($natid) == 10) {
            // $mysqli = new mysqli('localhost', 'root', '', 'conference');
            // $stmt = $mysqli->prepare("SELECT * FROM competitors WHERE natid = ?");
            // $stmt->bind_param("s", $natid);
            // $stmt->execute();
            //$sql_search = "SELECT * FROM `competitors` WHERE natid = '$natid'";
            //$result = mysqli_query($arg3, $sql_search);
            // $result = $stmt->get_result();
            // $data = $result->fetch_assoc();
            $new = new Check();
            $new->loginCheck("competitors", "natid", $arg);
            if (empty($new->getdata())) {
                echo "";
            } else {
                ($new->getdata()["natid"] == $arg) ? $this->natid_check = true : $this->natid_check = false;
            }
            if ($this->natid_check == $arg) {
                array_push($this->errors, "کد ملی وارد شده قبلا ثبت شده است");
            }
        } else {
            array_push($this->errors, "کد ملی وارد شده صحیح نیست");
        }
    }

    protected function namevalidator($arg)
    {
        $name = strlen(htmlspecialchars($arg));
        ($name > 5 && $name < 20) ? " " : array_push($this->errors, "نام وارد شده صحیح نمی‌باشد");
    }

    protected function lastnamevalidator($arg)
    {
        $name = strlen(htmlspecialchars($arg));
        ($name > 5 && $name < 20) ? " " : array_push($this->errors, "نام خانوادگی وارد شده صحیح نمی‌باشد");
    }

    protected function degvalidator($arg)
    {
        $degrees = ['کارشناسی', 'کارشناسی ارشد', 'دکتری'];
        $arg = htmlspecialchars($arg);
        (in_array($arg, $degrees) != true) ? array_push($this->errors, "نام خانوادگی وارد شده صحیح نمی‌باشد") : " ";
    }

    protected function desvalidator($arg)
    {
        $description = strlen(htmlspecialchars($arg));
        if ($description > 500 && $description < 50) {
            array_push($this->errors, "توضیحات باید بین 50 تا 500 کلمه باشد");
        }
    }


    protected function keyholder($array = [])
    {
        $this->keys = $array;
        $recordkeys = array_map(function ($item) {
            //$newitem = array_search($item,$this->keys);
            if ($item !== array_key_last($this->keys)) { // here we check if the index is equal to the last index or not
                return "`" . $item . "`" . ",";
            } else {
                return "`" . $item . "`";
            }
        }, array_keys($array));
        $recordkeys = implode("", $recordkeys);
        $this->keys_as_string = $recordkeys;
    }

    protected function valueholder($array = [])
    {
        $this->values = array_values($array);
        $recordvalues = array_map(function ($item) {
            $newitem = array_search($item, $this->values); //here we find the index first
            //echo $item."<br>";
            // echo $newitem."<br>";
            // echo array_key_last($this->recs2);
            if ($newitem !== array_key_last($this->values)) { // here we check if the index is equal to the last index or not
                return " ' " . $item . " ' " . ",";
            } else {
                return "'" . $item . " ' ";
            }
        }, array_values($array));
        $recordvalues = implode("", $recordvalues);
        $this->values_as_string = $recordvalues;
    }

    protected function newkeymaker($array = [])
    {
        $newkeys = array_map(function ($item) {
            return $item = "?";
        }, array_values($array));
        $newkeys = implode(',', $newkeys);
        $this->new_keys = $newkeys;
    }

    protected function errorhandler()
    {
        $errors = count($this->errors);
?>
        <span class="error-handler">
            <ul>
                <?php foreach ($this->errors as $err): ?>
                    <li><?= $err ?></li>
                <?php endforeach ?>
            </ul>
        </span>
        <?php
    }

    protected function bindPrams($array = [])
    {
        $bindprams = array_map(function ($item) {
            return $item = "s";
        }, array_values($array));
        $bindprams = implode('', $bindprams);
        $this->binded_pramss = $bindprams;
    }

    public function insert($tablename,$records = [])
    {

        $this->keyholder($records);
        // $this->keys = $records;
        // $recordkeys = array_map(function ($item) {
        //     //$newitem = array_search($item,$this->keys);
        //     if ($item !== array_key_last($this->keys)) { // here we check if the index is equal to the last index or not
        //         return "`" . $item . "`" . ",";
        //     } else {
        //         return "`" . $item . "`";
        //     }
        // }, array_keys($records));
        // $recordkeys = implode("", $recordkeys);
        // $this->keys_as_string = $recordkeys;

        $this->valueholder($records);
        // $this->values = array_values($records);
        // $recordvalues = array_map(function ($item) {
        //     $newitem = array_search($item, $this->values); //here we find the index first
        //     //echo $item."<br>";
        //     // echo $newitem."<br>";
        //     // echo array_key_last($this->recs2);
        //     if ($newitem !== array_key_last($this->values)) { // here we check if the index is equal to the last index or not
        //         return " ' " . $item . " ' " . ",";
        //     } else {
        //         return "'" . $item . " ' ";
        //     }
        // }, array_values($records));
        // $recordvalues = implode("", $recordvalues);
        // $this->values_as_string = $recordvalues;


        if (count($this->errors) > 0) {
            $errors = count($this->errors);
            $this->errorhandler();
        } else {
            $mysqli = new mysqli('localhost', 'root', '', 'conference');
            if ($mysqli->connect_errno != 0) {
                echo $mysqli->connect_error;
                exit();
            }
            //var_dump($recordvalues);
            //var_dump($recordkeys);
            //$sql_insert = "INSERT INTO `$tablename`($recordkeys)VALUES($recordvalues)";
            // $newkeys = array_map(function ($item) {
            //     return $item = "?";
            // }, array_values($records));
            // $newkeys = implode(',', $newkeys);
            // $this->new_keys = $newkeys;
            $this->newkeymaker($records);

            // $bindprams = array_map(function ($item) {
            //     return $item = "s";
            // }, array_values($records));
            // $bindprams = implode('', $bindprams);
            // $this->binded_pramss = $bindprams;
            $this->bindPrams($records);
            //echo $newkeys;
            //$counter = count($records) -1;

            $insertinto = new Insert();
            $insertinto->InsertInto($this->keys_as_string,$tablename,$this->new_keys,$records);
            
        }
    }

    // protected function query($arg, $arg2)
    // {

    //     $mysqli = new mysqli('localhost', 'root', '', 'conference');
    //     $stmt = $mysqli->prepare("SELECT * FROM competitors WHERE $arg = ? ");
    //     $stmt->bind_param("s", $arg2);
    //     //$sql_check = "SELECT * FROM `$tablename` WHERE $arg = '$arg2'";
    //     //$sql_result = mysqli_query($con,$sql_check);
    //     $stmt->execute();
    //     $result = $stmt -> get_result();
    //     $data = $result->fetch_assoc();
    //     //$num = mysqli_num_rows($sql_result);
    //     //($num > 0) ? $this->query_check = true : $this->query_check = false;
    //     ($data["username"] == $arg2) ? $this->query_check = true : $this->query_check = false;
    // }

    public function photovalidator($filedata)
    {
        $filename = $filedata['name'];
        $filetype = $filedata['type'];
        $filetmp = $filedata['tmp_name'];
        $filesize = $filedata["size"];
        if (!empty($filename)) {
            if ($filetype == "image/jpeg" || $filetype == "image/png" || $filetype == "image/jpg") {
                if ($filesize <= 800000) {
                    if (move_uploaded_file($filetmp, $this->path . $filedata['name']) == true) {
                        //echo "done";
                    } else {
                        echo "not done";
                    }
                } else {
                    //echo "big file";
                    array_push($this->errors, "اندازه فایل بیش از مجاز است");
                }
            } else {
                //echo "incorrect format";
                array_push($this->errors, "فورمت فایل معتبر نیست");
            }
        } else {
            //echo "not valid file";
            array_push($this->errors, "نام فایل درست نیست");
        }
    }
}
