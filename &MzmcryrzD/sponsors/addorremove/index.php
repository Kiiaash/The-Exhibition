<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $getid = new getId();
    $getid->idGrabber($_GET["id"]);

    $recall = new Recall();
    $recall->selectOne("sponsers", $getid->id);
    ?>
    <h1 id="title">ویرایش</h1>
    <form method="post" name="spons_edit" action="" enctype="multipart/form-data">
        <label class="label1">نام شرکت</label>
        <input type="text" name="companyname" class="smallinput" value="<?= $recall->singlefetch[0]["name"] ?>">
        <label class="label1">توضیح کوتاه</label>
        <input type="text" name="companytext" class="smallinput" value="<?= $recall->singlefetch[0]["smalltxt"] ?>">
        <label class="label1">تصویر</label>
        <div class="photopreview">
            <img src="<?= $recall->singlefetch[0]["icon"] ?>" width="190" height="190" alt="sonsers-icon">
        </div>
        <label class="photoupload" for="photo-up">
            <img src="../public/pictures/upload.png" width="30" height="30">
            <span>بارگذاری </span>
        </label>
        <input type="file" name="photoup" id="photo-up" hidden>
        <input type="submit" name="photoupdate" value="به روز رسانی" class="big-btn" style="text-align: center;">
        <input type="submit" name="remove" value="X" class="remove-btn">
    </form>
    <?php
    if (isset($_POST["photoupdate"])) {
        $updater = new Updater();
        $insertion = new Insertion();
        $insertion->photovalidator($_FILES["photoup"]);
        $updater->multiUpdate("sponsers", "id", $getid->id, "location:?iMcr=Oyui&og=ab", $formdata = [
            'name' => filter_input(INPUT_POST, "companyname", FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'smalltxt' => filter_input(INPUT_POST, "companytext", FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'icon' => $insertion->path . $_FILES["photoup"]["name"],
            'updated_at' => date('Y-m-d H:m:s')
        ]);
    }

    if(isset($_POST["remove"])){
        $remove = new Remove();
        $remove -> singleRemove("sponsers",$getid->id,"location:?iMcr=Oyui&og=ab");
    }
    ?>

</body>

</html>