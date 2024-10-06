<?php
include('../../functions/user.login.check.php');
class Login
{
    //get the inputs
    protected $posted_data = [];
    protected $login_errors = [];

    protected $userpass;
    protected $wholedata = [];

    public function validator($rawdata)
    {
        foreach ($rawdata as $key => $value) {
            $specilchars = ["!", "#", "$", "%", "^", "&", "*", "(", ")", "=", "+", "/", ",", "<", ">", "?", "`", "~", "@"];
            filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            userCheck($key, $specilchars, $value, $this->login_errors);
            // if($key == 'username'){
            //     foreach($specilchars as $sp){
            //         if(strpos($value,$sp) == true){
            //             // echo "email is not valid";
            //             array_push($this->login_errors,"نام کاربری وارد شده معتبر نیست");
            //             break;
            //         }
            //     }
            // }
            array_push($this->posted_data, [
                $key => htmlspecialchars($value),
            ]);
        }
        array_pop($this->posted_data);
    }

    public function logger()
    {
        if (count($this->login_errors) > 0) {
?>
            <span class="error-handler">
                <ul>
                    <?php foreach ($this->login_errors as $err): ?>
                        <li><?= $err ?></li>
                    <?php endforeach ?>
                </ul>
            </span>
        <?php
        } else {
            //var_dump($this->posted_data);
            $username = $this->posted_data[0]['username'];
            //echo $username;
            $this->query($username);
            if ($this->wholedata["username"] == " "  && ($this->wholedata["password"] == "")) {
                Login::needtologin();
            } else {
                $password = password_verify($this->posted_data[1]['pswd'], $this->wholedata["password"]);
                $_SESSION["username"] = $username;
                $_SESSION["loggedin"] = true;
                ($password == true) ? header("location: ../user_panel/?ind=dash") : Login::abort();
            }
        }
    }

    static function abort()
    {
        ?>
        <script>
            window.alert("خطا در برقراری ارتباط")
        </script>
    <?php
        die();
    }

    static function nojudgefound() 
    {
        ?>
        <script>
            window.alert("کاربر با مشخصات وارد شده وجود ندارد");
        </script>
    <?php
        die();
    }

    static function needtologin()
    {
    ?>
        <script>
            window.alert("شما هنوز ثبت نام نکرده‌اید");
        </script>
<?php
    }

    protected function query($arg1)
    {
        $mysqli = new mysqli('localhost', 'root', '', 'conference');
        $stmt = $mysqli->prepare("SELECT * FROM competitors WHERE `username`= ? ");
        $stmt->bind_param("s", $arg1);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();
        //$sql_check = "SELECT * FROM $tablename WHERE `username`='$arg1'";
        //$sql_result = mysqli_query($con, $sql_check);
        //$num = mysqli_num_rows($sql_result);
        //($num > 0) ? $userdata = mysqli_fetch_assoc($sql_result) : $userdata = null;
        var_dump($data);
        $this->wholedata = $data;
        // if($stmt->num_rows() > 0){
        //     $userdata = $data["username"];
        // }else{
        //      $userdata = null;
        // }
        // if($num > 0){
        //      $userdata = mysqli_fetch_assoc($sql_result);           
        // }
        //($userdata != null) ? $this->userpass = $data["password"] :  " ";
    }
}
