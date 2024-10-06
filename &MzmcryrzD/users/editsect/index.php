<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 id="title">ویرایش</h1>
    <?php
        $getid = new getId();
        $getid->idGrabber($_GET["gid"]);
        $recall = new Recall();
        $recall->selectOne("competitors",$getid->id);
        $recall->singlefetch;

       
    ?>
    <form method="post" name="user_ban_remove_eligiblity_form" action="">
        <div class="small-container">
            <label class="label1">نام</label>
            <input type="text" name="uname" class="smallinput" value="<?= $recall->singlefetch[0]["name"] ?>" readonly>
            <label class="label1">نام خانوادگی</label>
            <input type="text" name="uname" class="smallinput" value="<?= $recall->singlefetch[0]["lastname"] ?>" readonly>
            <label class="label1">نام کاربری</label>
            <input type="text" name="uname" class="smallinput" value="<?= $recall->singlefetch[0]["username"] ?>" readonly>
        </div>
        <div class="small-container">
            <label class="label1">مسدودیت</label>
            <input type="checkbox" id="chek1" hidden name="blocknun1">
            <label for="chek1" id="chek">
                <div class="circle"></div>
            </label>
            <label class="label1">حذف</label>
            <input type="checkbox" id="chek3" hidden name="blocknun2">
            <label for="chek3" id="chek">
                <div class="circle3"></div>
            </label>
            <label class="label1">تعیین صلاحیت</label>
            <input type="checkbox" id="chek4" hidden name="blocknun3">
            <label for="chek4" id="chek">
                <div class="circle4"></div>
            </label>
            <input type="submit" name="update" value="به روز رسانی" class="big-btn" style="text-align: center;">
        </div>
    </form>
    <?php

        if(isset($_POST["update"])){
            $update = new Updater();
            $update -> multiUpdate("competitors","id",$getid->id,"location:?iMcr=Asdv&og=aa&id=0",$formdata=[
                'remove'=>(isset($_POST["blocknun2"])) ? ' 1 ':'0',
                'ban'=>(isset($_POST["blocknun1"])) ? ' 1 ':'0',
                'eligibility'=>(isset($_POST["blocknun3"])) ? ' 1 ':'0',
                'updated_at'=>date('Y-m-d H:m:s')
            ]);
        }
         if($recall->singlefetch[0]["ban"] != 0 ){
            ?>
                <script>
                    const chk1 = document.getElementById("chek1");
                    chk1.checked = true;
                </script>
            <?php
        }
        if($recall->singlefetch[0]["remove"] != 0 ){
            ?>
                <script>
                    const chek3 = document.getElementById("chek3");
                    chek3.checked = true;
                </script>
            <?php
        }
        if($recall->singlefetch[0]["eligibility"] != 0 ){
            ?>
                <script>
                    const chek4 = document.getElementById("chek4");
                    chek4.checked = true;
                </script>
            <?php
        }
    ?>
</body>

</html>