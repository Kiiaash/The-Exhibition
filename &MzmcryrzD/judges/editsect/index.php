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
        $getid -> idGrabber($_GET["id"]);
        //var_dump($getid->id);

        $recall = new Recall();
        $recall->selectOne("judges",$getid->id);
        //var_dump($recall->singlefetch);

    ?>
    <form method="post" name="add_judge_form" action="" enctype="multipart/form-data">
        <label class="label1">نام</label>
        <input type="text" name="jname" class="smallinput" value="<?= $recall->singlefetch[0]["name"] ?>" readonly>
        <label class="label1">نام خانوادگی</label>
        <input type="text" name="jname" class="smallinput" value="<?= $recall->singlefetch[0]["lastname"] ?>" readonly>
        <label class="label1">مدرک</label>
        <p class="small-par"><?= $recall->singlefetch[0]["degree"] ?></p>
        <select class="big-selector" name="deg-selector" style="border:solid 2px #555; margin:10px 30px;">
            <option>کارشناسی</option>
            <option>کارشناسی ارشد</option>
            <option>دکتری</option>
        </select>
        <label class="label1">ایمیل</label>
        <input type="email" name="jname" class="smallinput" value="<?= $recall->singlefetch[0]["email"] ?>" readonly>
        <!-- <label class="label1">پسورد</label>
        <input type="password" name="jname" class="smallinput">
        <label class="label1">تکرار پسورد</label>
        <input type="password" name="jname" class="smallinput"> -->
        <label class="label1">درباره</label>
        <textarea id="judge_about" name="description"><?= $recall->singlefetch[0]["description"] ?></textarea>
        <label class="label1">آپلود تصویر پروفایل</label>
        
        <div style="width: 200px; height:150px; background-color:#555; margin:10px 30px;">
            <img src="public/<?= $recall->singlefetch[0]["profilephoto"] ?>" alt="judge_photo">
        </div>
        <!-- <label class="photoupload" for="filee">
            <span>بارگذاری فایل</span>
            <img src="../public/pictures/upload" width="30" height="30" alt="upload_sign"> 
        </label>
        <input type="file" name="judge_photo" id="filee" hidden>
        <br> -->
        <!-- <input type="submit" class="bigger-btn" value="ویرایش" name="register" style="font-size:1.3rem; 
        position:relative; right:-15px; font-family:irs-bold; margin:10px 0px 30px 0px;"><br><br> -->
        <input type="submit" name="delete" value="X" class="remove-btn">
    </form>
    <?php 
        if(isset($_POST["delete"])){
            $remover = new Remover();
            $remover->remover("judges",$getid->id,"location:?iMcr=Zdrt&og=sq");
        }
    ?>
</body>
</html>