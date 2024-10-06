<?php
    include('../../classess/Controllers/judge_login.php');
    include('../../classess/Models/check.php');
    include('../../classess/Controllers/login.php');
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
        <div class="login" style="margin:230px 0 0 0;">
            <form method="post" action="">
                <label for="chk" aria-hidden="true" style="color:#000;">ورود به سیستم</label>
                <input type="text" name="name" placeholder="نام کاربری" required="">
                <input type="password" name="password" placeholder="رمز عبور" required="">
                <input type="submit" name="login" value=" ورود" style="height:40px; background-color:#8CE3AC; cursor:pointer;">
            </form>
        </div>
    </div>
    <?php
    if(isset($_POST["login"])){
        $logger = new Logger($_POST);
        $logger->validator("judges","name",htmlspecialchars($_POST["name"]));
    }
    
    ?>
</body>

</html>