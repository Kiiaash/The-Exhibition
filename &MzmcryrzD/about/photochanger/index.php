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
        $recall = new Recall();
        $recall -> selectOne("about",$getid->id);
        //var_dump($recall->singlefetch);
    ?>
    <form method="post" action="" name="about-edit-form" enctype="multipart/form-data">
        <label class="label1">عنوان</label>
        <input type="text" name="title" class="smallinput" value="<?= htmlspecialchars($recall->singlefetch[0]["title"]) ?>">
        <label class="label1">زیر عنوان</label>
        <input type="text" name="subtitle" class="smallinput" value="<?= htmlspecialchars($recall->singlefetch[0]["subtitle"]) ?>">
        <label class="label1">متن</label>
        <textarea id="about-text" name="text"><?= htmlspecialchars($recall->singlefetch[0]["text"]) ?></textarea>
        <label class="label1">تصویر</label>
        <label class="photoupload" for="phoup">
            <span>بارگذاری فایل</span>
            <img src="../public/pictures/upload" width="30" height="30">
        </label>
        <input type="file" name="photo" id="phoup" hidden>
        <span>
        <img src="../public/<?=htmlspecialchars($recall->singlefetch[0]["photo"]) ?>" width="500" height="500" style="display:block;
        position:relative; right:50px; border-radius:15px; border:solid 1px #777;">
        </span>
        <input type="file" name="about-photo" id="phoup" hidden>
        <label class="label1">رفرنس تصویر</label>
        <input type="text" name="refrence" class="smallinput" value="<?= htmlspecialchars($recall->singlefetch[0]["refrence"]) ?>">
        <input type="submit" name="edit_btn" class="edit-btn" value="ویرایش">
    </form>
    <?php 
       if(isset($_POST["edit_btn"])){
        $insertion = new Insertion();
        $insertion->photovalidator($_FILES["photo"]);

        var_dump($_FILES["photo"]);
        $updater = new Updater();
        $updater -> multiUpdate("about","id",$getid->id,"location:?iMcr=NJkx&og=zs",$formdata = [
            'title' => htmlspecialchars($_POST["title"]),
            'subtitle'=>htmlspecialchars($_POST["subtitle"]),
            'text' => htmlspecialchars($_POST["text"]),
            'photo'=>htmlspecialchars($insertion->path.$_FILES["photo"]["name"]),
            'refrence' => htmlspecialchars($_POST["refrence"]),
        ]); 
       }
    ?>
</body>
</html>