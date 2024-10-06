<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <h1 id="title">ویرایش</h1>
    <?php
    $getid = new getId();
    $getid->idGrabber($_GET["id"]);

    $recall = new Recall();
    $recall->selectOne("quotes", $getid->id);
    ?>
    <form method="post" name="quots_add_form" action="" enctype="multipart/form-data">
        <label class="label1">عنوان</label>
        <input type="text" name="quot_title" class="smallinput" value="<?= $recall->singlefetch[0]["title"] ?>">
        <label class="label1">متن</label>
        <textarea id="quot-text" name="quots"><?= $recall->singlefetch[0]["text"] ?></textarea>
        <label class="label1">منبع</label>
        <input type="text" name="quoref" class="smallinput" value="<?= $recall->singlefetch[0]["textref"] ?>">
        <label class="label1">تصویر</label>
        <div class="photopreview"><img src="<?= $recall->singlefetch[0]["photo"] ?>" width="190" height="190"></div>
        <label class="photoupload" for="quote">
            <img src="../public/pictures/upload.png" width="30" height="30">
            <span>بارگذاری</span>
        </label>
        <input type="file" name="quotfile" id="quote" hidden>
        <input type="submit" name="remove" value="X" class="remove-btn">
        <input type="submit" name="update" value="ویرایش" class="big-btn">
    </form>
    <?php
    if (isset($_POST["update"])) {
        $updater = new Updater();
        $insertion = new Insertion();
        var_dump($_FILES["quotfile"]);
        $insertion->photovalidator($_FILES["quotfile"]);
        $updater->multiUpdate("quotes", "id", $getid->id, "location:?iMcr=NNJh&og=sr&id=0", $fomrdata = [
            'title' => filter_input(INPUT_POST, "quot_title", FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'text' => filter_input(INPUT_POST, "quots", FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'textref' => filter_input(INPUT_POST, "quoref", FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'photo' => $insertion->path . $_FILES["quotfile"]["name"],
            'updated_at' => date('Y-m-d H:m:s'),
        ]);
    }

    if(isset($_POST["remove"])){
        $remove = new Remover();
        $remove->remover("quotes",$getid->id,"location:?iMcr=NNJh&og=sr&id=0");
    }
    ?>
</body>

</html>