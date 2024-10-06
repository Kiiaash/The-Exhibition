<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 id="title">ویرایش منو </h1>
    <?php 
        $recall = new Recall();
        $recall -> selectOne("footermenu",1);
    ?>
    <form method="post" name="menuchanger" action="">
        <label class="label1">گزینه اول</label>
        <input type="text" name="sect1" class="smallinput" value="<?= $recall->singlefetch[0]["option1"] ?>">
        <label class="label1">گزینه دوم</label>
        <input type="text" name="sect2" class="smallinput" value="<?= $recall->singlefetch[0]["option2"] ?>"> 
        <label class="label1">گزینه سوم</label>
        <input type="text" name="sect3" class="smallinput" value="<?= $recall->singlefetch[0]["option3"] ?>">
        <label class="label1">گزینه چهارم</label>
        <input type="text" name="sect4" class="smallinput" value="<?= $recall->singlefetch[0]["option4"] ?>">
        <input type="submit" name="register" class="big-btn" value="ویرایش">
    </form>

    <?php 
        if(isset($_POST["register"])){
            $updater = new Updater();
            $updater->multiUpdate("footermenu","id","1","location:?iMcr=xbqs&og=bb",$formdata=[
                'option1'=>filter_input(INPUT_POST,"sect1",FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'option2'=>filter_input(INPUT_POST,"sect2",FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'option3'=>filter_input(INPUT_POST,"sect3",FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'option4'=>filter_input(INPUT_POST,"sect4",FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'updated_at'=>date('Y-m-d H:m:s'),
            ]);
        }
    ?>
</body>
</html>