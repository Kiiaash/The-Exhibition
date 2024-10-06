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
    $getid->idGrabber($_GET["gbhd"]);

    $recall = new Recall();
    $recall->selectOne("competitors", $getid->id);
    $recall->singlefetch;
    ?>
    <h1 id="title">ویرایش</h1>
    <label class="label1">نام</label>
    <input type="text" class="smallinput" readonly value="<?= $recall->singlefetch[0]["name"] ?>">
    <label class="label1">نام خانوادگی</label>
    <input type="text" class="smallinput" value="<?= $recall->singlefetch[0]["lastname"] ?>" readonly>
    <label class="label1">کد ملی</label>
    <input type="text" class="smallinput" value="<?= $recall->singlefetch[0]["natid"] ?>" readonly>
    <h4 id="title4">عنوان مقاله</h4>
    <p class="small-par"><?= $recall->singlefetch[0]["articletitle"] ?></p>
    <p class="small-par"><b>داوری :</b> <?= $recall->singlefetch[0]["judgeassigned"] ?></p>
    <p class="small-par"><b>تصمیم نهایی :</b> <?= $recall->singlefetch[0]["finaldes"] ?></p>
    <div class="small-container">
        <form method="post" action="" name="aricle-edit-form">
            <label class="label1">نمره</label>
            <input type="number" name="mark" min=1 max=100 class="small-numinput" value="<?= $recall->singlefetch[0]["mark"] ?>">
    </div>
    <div class="small-container">
        <label class="label1">داور مربوطه</label>
        <select class="big-selector" name="judge_selector">
            <option>داور1</option>
            <option>داور2</option>
            <option>داور3</option>
            <option>داور4</option>
            <option>داور5</option>
        </select>
    </div>
    <div class="small-container">
        <label class="label1">مشاهده فایل آپلود شده</label>
        <div class="bigger-btn"><a href="<?= $recall->singlefetch[0]["uploadedfile"] ?>">مشاهده فایل آپلود شده</a></div>
    </div>
    <div class="small-container">
        <label class="label1">تصمیم نهایی</label>
        <select class="big-selector" name="decsion_selector">
            <option>تایید</option>
            <option>در حال بررسی</option>
            <option>رد</option>
        </select>
    </div>
    
    <input type="submit" name="update" class="edit-btn" value="به روز رسانی" style="margin: 450px 30px 30px 0;">
    </form>
    <?php
        if(isset($_POST["update"])){
            $updater = new Updater();
            $updater -> multiUpdate("competitors","id",$getid->id,"location:?iMcr=fjiu&og=ze&id=0",$formdata=[
                'mark'=>htmlspecialchars($_POST["mark"]),
                'judgeassigned'=>htmlspecialchars($_POST["judge_selector"]),
                'finaldes'=>htmlspecialchars($_POST["decsion_selector"]),
            ]);
        }
    ?>
</body>
</html>