<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 id="title">پاسخ گویی</h1>
    <?php
    $getid = new getId();
    $getid->idGrabber($_GET["id"]);
    $recall = new Recall();
    $recall->selectOne("contact", $getid->id);
    ?>
    <div class="container">
        <div class="row">
            <h4><?= $recall->singlefetch[0]["name"] ?></h4>
            <h4><?= $recall->singlefetch[0]["email"] ?></h4>
            <h4><?= $recall->singlefetch[0]["reqtype"] ?></h4>
            <p><?= $recall->singlefetch[0]["details"] ?></p>
        </div>
    </div>
    <form method="post" name="reply_text_form" action="">
        <label class="label1">متن پاسخ</label>
        <textarea id="replytext" name="reptxt"><?= $recall->singlefetch[0]["answer"] ?></textarea>
        <input type="submit" name="rep" value="ثبت" class="big-btn">
        <input type="submit" name="remove" value="X" class="remove-btn">
    </form>
    <?php
    if (isset($_POST["rep"])) {

        $updater = new Updater();
        $updater->multiUpdate(
            "contact",
            "id",
            $getid->id,
            "location:?iMcr=AuRt&og=vs&id=0",
            $formdata = [
                'answer' => filter_input(INPUT_POST, "reptxt", FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'status' => 1,
                'replied_at' => date('Y-m-d H:m:s'),
            ]
        );
    }

    if(isset($_POST["remove"])){
        $remove = new Remover();
        $remove -> remover("contact",$getid->id,"location:?iMcr=AuRt&og=vs&id=0");
    }
    ?>
</body>

</html>