<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
    $recall = new Recall();
    $recall->selectAll("header", "asc");
    $recall->fetched;
    ?>
    <h1 id="title">ویرایش عنوان ها</h1>
    <div class="general-window">
        <h2><?= htmlspecialchars($recall->fetched[0]["title"]) ?></h2>
        <h4><?= htmlspecialchars($recall->fetched[0]["text"]) ?></h4>
    </div>

    <form method="post" name="title-changer-form" action="">
        <label class="label1">تغییر عنوان</label>
        <input type="text" name="title" class="smallinput" value="">
        <label class="label1">زیر عنوان</label>
        <input type="text" name="text" class="smallinput" value="">
        <input type="submit" name="update" value="ویرایش" class="big-btn">
    </form>

    <?php
    if (isset($_POST["update"])) {
        $updater = new Updater();
        $updater->multiUpdate("header", "id", "1", "?iMcr=Mooi&og=zw", $formdata = [
            'title' => htmlspecialchars($_POST["title"]),
            'text' => htmlspecialchars($_POST["text"]),
        ]);
    }
    ?>
</body>

</html>