<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1 id="title">ویرایش لوگو footer</h1>\
    <?php 
        $recall = new Recall();
        $recall -> selectOne("logos",2);
    ?>
    <form method="post" name="footer_logo_changer_form" action="" enctype="multipart/form-data">
        <label class="label1">تغییر لوگو</label>
        <div class="photopreview">
            <img src="<?= $recall->singlefetch[0]["logo"] ?>" width="190" height="190" alt="logopreview">
        </div>
        <label class="photoupload" for="logochanger">
            <img src="../public/pictures/upload.png" width="30" height="30">
            <span>بارگذاری</span>
        </label>
        <input type="file" name="logoupdate" hidden id="logochanger">
        <input type="submit" name="update" value="به روزرسانی" class="big-btn">
    </form>
    <?php 
        if(isset($_POST["update"])){
            $updater = new Updater();
            $insertion = new Insertion();
            $insertion->photovalidator($_FILES["logoupdate"]);
            $updater->multiUpdate("logos","id",2,"location:?iMcr=NarT&og=bc",$formdata=[
                'logo'=>$insertion->path.$_FILES["logoupdate"]["name"],
                'updated_at'=>date('Y-m-d H:m:s'),
            ]);
        }
    ?>
</body>
</html>