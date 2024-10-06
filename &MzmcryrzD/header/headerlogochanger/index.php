<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $recall = new Recall();
        $recall -> selectAll("header","asc");
        $recall->fetched;
    ?>
    <h1 id="title">ویرایش تصاویرHeader </h1>
    <h4 class="label1">تصویر هدر فعلی</h4>
    <div class="general-window">
        <img src="../public/<?= $recall->fetched[0]["photo"] ?>" width="100%" height="346" style="border-radius:10px;
        border:solid 2px #777;">
    </div>
    <form method="post" action="" name="header-form" enctype="multipart/form-data">
        <label class="label1">افزودن تصویر جدید</label>
        <label class="photoupload" for="file1">
            <span>بارگذاری</span>
            <img src="../public/pictures/upload.png" width="30" height="30">
        </label>
        <input type="file" name="photo" id="file1" hidden>
        <input type="submit" name="register" class="big-btn" value="افزودن">
    </form>
    <?php 
        if(isset($_POST["register"])){
            //var_dump($_FILES["photo"]);
            $updater = new Updater();
            $insertion = new Insertion();
            $insertion->photovalidator($_FILES["photo"]);
            $updater -> multiUpdate("header","id",1,"?iMcr=erUb&og=zq",$formdata=[
                'photo'=> htmlspecialchars($insertion->path.$_FILES["photo"]["name"]),
            ]);
        }
    ?>

</body>
</html>