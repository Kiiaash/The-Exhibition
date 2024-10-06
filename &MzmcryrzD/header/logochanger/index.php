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
        $recall -> selectAll("logos","asc");
        $recall->fetched;
        //var_dump($recall->fetched);
    ?>
    <h1 id="title">header ویرایش لوگو</h1>
    <div class="label1">لوگو فعلی</div>
    <div class="small-window">
        <img src="../public/<?= $recall->fetched[0]["logo"] ?>" width="200" height="200" alt="<?= $recall->fetched[0]["name"] ?>">
    </div>
    <form method="post" name="logofomr" action="" enctype="multipart/form-data">
        <label class="label1">بارگذاری لوگو</label>
        <label class="photoupload" for="logoup">
            <span>بارگذاری</span>
            <img src="../public/pictures/upload.png" width="30" height="30">
        </label>
        <input type="file" name="logo" id="logoup" hidden>
        <input type="submit" name="register" class="big-btn" value="افزودن">
    </form>
    <?php
    if (isset($_POST["register"])) {
        $updater = new Updater();
        $insertion = new Insertion();
        //var_dump($_FILES["logo"]);
        $insertion->photovalidator($_FILES["logo"]);
        $updater->multiUpdate("logos", "position", "header", "?iMcr=Moqi&og=kw", $formdata = [
            'name' => "header logo",
            'position' => "header",
            'logo' => $insertion->path . $_FILES["logo"]["name"],
            'updated_at'=>date('Y-m-d H:m:s')
        ]);
    }
    ?>
</body>

</html>