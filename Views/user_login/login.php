<?php
//include('../config/conf.php');
include('../../classess/Controllers/insertion.php');
include('../../classess/Controllers/sustainer.php');
include('../../classess/Controllers/login.php');
include('../../functions/array.loop.rawdata.php');
include('../../classess/Models/Check.php');
include('../../classess/Models/Insert.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../public/css/login.form.css.css" type="text/css" rel="stylesheet">
    <title>ورود به سیستم</title>
</head>

<body class="login-body">

    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form method="post" action="">
                <label for="chk" aria-hidden="true" style="position:relative; top:-30px; color:#000;">ثبت نام</label>
                <input type="text" name="username"  required="" value="<?php (!empty($_POST)) ? Sustainer::sustainer($_POST,"username") : "نام کاربری" ?>">
                <input type="email" name="email" placeholder="ایمیل" required="" value="<?php Sustainer::sustainer($_POST,"email")?>">
                <input type="password" name="password" placeholder="رمز عبور" required="">
                <input type="password" name="passwordrepeat" placeholder="تکرار رمز عبور" required="">
                <input type="text" name="natid" placeholder="کد ملی" required="" value="<?php Sustainer::sustainer($_POST,"natid")?>">
                <!-- <input   style="height:40px; background-color:#8CE3AC; cursor:pointer;"> -->
                <button type="submit" name="register" style="position: relative; top:-40px;">ثبت نام</button>
            </form>

        </div>

        <div class="login">
            <form method="post" action="">
                <label for="chk" aria-hidden="true" style="color:#000;">ورود به سیستم</label>
                <input type="text" name="username" placeholder="نام کاربری" required="">
                <input type="password" name="pswd" placeholder="رمز عبور" required="">
                <input type="submit" name="login" value=" ورود" style="height:40px; background-color:#8CE3AC; cursor:pointer;">
            </form>
        </div>
    </div>
    <?php
    if (isset($_POST["register"])) {
        $insertion= new Insertion();
        $insertion->validator($_POST);
        $insertion->insert('competitors',$records = [
            'username' => $_POST["username"],
            'email' => $_POST["email"],
            'password' => password_hash($_POST["password"], PASSWORD_BCRYPT),
            'natid' => $_POST["natid"],
            'date'=>date('Y-m-d H:m:s')
        ]);
        $insertion = null;
        // $mysqli = new mysqli('localhost','root','','conference');
        // $stmt = $mysqli -> prepare("INSERT INTO `competitors` (`username`,`email`,`password`,`natid`) VALUES(?,?,?,?)");
        // $username = $_POST["username"];
        // $password = password_hash($_POST["password"],PASSWORD_BCRYPT);
        // $email = $_POST["email"];
        // $natid = $_POST["natid"];
        // $stmt -> bind_param("ssss",$username,$password,$email,$natid);
        // $stmt -> execute();
    }
    if(isset($_POST["login"])){
        $login = new Login();
        $login->validator($_POST);
        $login->logger();
    }
    $login = null;
    ?>
</body>

</html>