<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1 id="title">افزودن</h1>
    <form method="post" name="spons_edit" action="" enctype="multipart/form-data">
        <label class="label1">نام شرکت</label>
        <input type="text" name="companyname" class="smallinput">
        <label class="label1">توضیح کوتاه</label>
        <input type="text" name="companytext" class="smallinput">
        <label class="label1">تصویر</label>
        <label class="photoupload" for="photo-up">
            <img src="../public/pictures/upload.png" width="30" height="30">
            <span>بارگذاری </span>
        </label>
        <input type="file" name="photoup" id="photo-up" hidden>
        <input type="submit" name="photoregister" value="افزودن" class="big-btn" style="text-align: center;">
    </form>
    <?php 
       if(isset($_POST["photoregister"])){
        $insertion  = new Insertion();
        $insertion->photovalidator($_FILES["photoup"]);
        $insertion -> insert("sponsers",$records=[
            'name'=> filter_input(INPUT_POST,"companyname",FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'smalltxt'=> filter_input(INPUT_POST,"companytext",FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'icon'=>$insertion->path.$_FILES["photoup"]["name"],
            'reg_date'=>date('Y-m-d H:m:s')
        ]);
       }
    ?>
</body>
</html>