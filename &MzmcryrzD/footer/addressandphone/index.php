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
        $recall -> selectOne("address",1);
    ?>
    <h1 id="title">ویرایش آدرس و شماره تلفن ها</h1>
    <p class="small-par"><b>آدرس فعلی : </b><?= $recall->singlefetch[0]["address"] ?></p>
    <p class="small-par"><b> شماره تلفن اول : </b><?= $recall->singlefetch[0]["phonenumber1"] ?></p>
    <p class="small-par"><b> شماره تلفن دوم : </b><?= $recall->singlefetch[0]["phonenumber2"] ?></p>
    <p class="small-par"><b> شماره تلفن سوم : </b><?= $recall->singlefetch[0]["phonenumber3"] ?></p>
    <form method="post" name="address_telephon_form" action="">
        <label class="label1">آدرس</label>
        <textarea id="address_footer" name="addfoot"></textarea>
        <label class="label1">تلفن 1</label>
        <input type="text" name="phone1" class="smallinput">
        <label class="label1">تلفن 2</label>
        <input type="text" name="phone2" class="smallinput">
        <label class="label1">تلفن 3</label>
        <input type="text" name="phone3" class="smallinput">
        <input type="submit" name="edit" value="ویرایش" class="big-btn" style="text-align: center;">
    </form>
    <?php 
        if(isset($_POST["edit"])){
            $updater = new Updater();
            $updater->multiUpdate("address","id","1","location:?iMcr=Ocxg&og=ba",$formdata=[
                'name'=>'address',
                'address'=>filter_input(INPUT_POST,"addfoot",FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'phonenumber1'=>filter_input(INPUT_POST,"phone1",FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'phonenumber2'=>filter_input(INPUT_POST,"phone2",FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'phonenumber3'=>filter_input(INPUT_POST,"phone3",FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'updated_at'=>date('Y-m-d H:m:s'),
            ]);
        }
    ?>
</body>
</html>