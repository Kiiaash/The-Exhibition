<?php 
    include('../classess/Controllers/insertion.php');
    include('../classess/Controllers/Updater.php');
    include('../classess/Models/Update.php');
    include('../classess/Models/Insert.php');
    include('../classess/Models/Check.php');
    include('../classess/Models/Remove.php');
    include('../classess/Controllers/Recall.php');
    include('../classess/Controllers/Printer.php');
    include('../classess/Controllers/getId.php');
    include('../classess/Controllers/searcher.php');
    include('../classess/Controllers/remover.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../public/css/main.css" type="text/css" rel="stylesheet">
    <title>
        <?php 
            if(isset($_GET["og"])){
                $artiti=$_GET["og"];
           
                switch($artiti){
                    case "za":
                        echo "داشبورد";
                        break;
                    case "zb":
                        echo "خلاصه وضعیت";
                        break;
                    case "zc":
                        echo "تعداد بازدید";
                        break;
                    case "zs":
                        echo "درباره";
                        break;
                    case "zd":
                        echo "ویرایش";
                        break;
                    case "zf":
                        echo "تعویض متن";
                        break;
                    case "zq":
                        echo "ویرایش لوگو";
                        break;
                    case "zw":
                        echo "ویرایش عنوان";
                        break;
                    case "kw":
                        echo "ویرایش لوگو";
                        break;
                    case "ze":
                        echo "خلاصه وضعیت";
                        break;
                    case "zt":
                        echo "ثبت نهایی";
                        break;
                    case "zr":
                        echo "تعیین داور برای آثار";
                        break;
                    case "zrr":
                        echo "جستجو";
                        break;
                    case "zv":
                        echo "ویرایش";
                        break;
                    case "sq":
                        echo "خلاصه وضعیت";
                        break;
                    case "sw":
                        echo "آثار داوران";
                        break;
                    case "sww":
                        echo "ویرایش";
                        break;
                    case "se":
                        echo "جدید";
                        break;
                    case "sd":
                        echo "لیست موارد";
                        break;
                    case "sc":
                        echo "جدید";
                        break;
                    case "scc":
                        echo "ویرایش";
                        break;
                    case "sr":
                        echo "خلاصه وضعیت";
                        break;
                    case "va":
                        echo "جدید";
                        break;
                    case "vaa":
                        echo "ویرایش";
                        break;
                    case "vs":
                        echo "بدون پاسخ";
                        break;
                    case "vd":
                        echo "پاسخ گویی";
                        break;
                    case "vq":
                        echo "پاسخ داده شده";
                        break;
                    case "aa":
                        echo "خلاصه وضعیت";
                        break;
                    case "ji":
                        echo "ثبت نهایی";
                        break;
                    case "jii":
                        echo "ویرایش";
                        break;
                    case "ab":
                        echo "کل اسپانسر ها";
                        break;
                    case "ac":
                        echo "ویرایش";
                        break;
                    case "bb":
                        echo "ویرایش منو";
                        break;
                    case "ba":
                        echo "ویرایش آدرس و تلفن";
                        break;
                    case "bc":
                        echo "ویرایش لوگو";
                        break;
                } 
            }
        ?>
    </title>
</head>
<body>
    <main>
        <div class="option-loader">
            <?php include("menuloader.php"); ?>
        </div>
        <div class="menu">
            <?php include("menu.php"); ?>
        </div>
    </main>
    
    <script src="../public/tinymce/js/tinymce/tinymce.min.js"></script>
    <script src="../public/javascript/about_text.js"></script>
    <script src="../public/javascript/judge_about.js"></script>
    <script src="../public/javascript/nandantext.js"></script>
    <script src="../public/javascript/quots-text.js"></script>
    <script src="../public/javascript/reply_text.js"></script>
    <script src="../public/javascript/address_footer.js"></script>
    <script src="../public/javascript/about.js"></script>
    <scritp src="javascript/maincms.js"></scritp>
</body>
</html>