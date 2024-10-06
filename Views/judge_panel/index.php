<?php include('../../functions/user_panel_switch.php'); ?>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../public/css/index.css.css" type="text/css" rel="stylesheet">
    <title>پنل کاربری</title>
</head>

<body>
    <header class="user-panel-header">
        <span>
            <img src="../../public/pictures/User-9.png" width="60" height="60" alt="user-img">
            <pre>اطلاعات کاربری</pre>
        </span>
    </header>
    <main>
        <div class="menu-part">
            <a href="?ind=dash">
                <div class="mop ">داشبورد</div>
            </a>
            <a href="?ind=art">
                <div class="mop">مقاله ها</div>
            </a>
            <a href="?ind=mes">
                <div class="mop">پیام ها</div>
                <div class="small-indicator"></div>
            </a>
            <a href="?ind=prof">
                <div class="mop">پروفایل</div>
            </a>
        </div>
        <div class="main-part">
            <?php user_panel(); ?>
        </div>
    </main>
    <footer class="user-panel">
        <form method="post" name="exitform" action="">
            <input type="submit" name="exit" value="خروج" class="register-btn" style="margin: 0 0 0 15px; position:relative; 
                top:15px; ">
        </form>
        <?php
        if (isset($_POST["exit"])) {
            session_destroy();
            header("location: ../../");
        }
        ?>
    </footer>
</body>

</html>