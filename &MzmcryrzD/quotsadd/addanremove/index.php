<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 id="title">افزودن</h1>
    <form method="post" name="quots_add_form" action="" enctype="multipart/form-data">
        <label class="label1">عنوان</label>
        <input type="text" name="quot_title" class="smallinput">
        <label class="label1">متن</label>
        <textarea id="quot-text" name="quots"></textarea>
        <label class="label1">منبع</label>
        <input type="text" name="quoref" class="smallinput">
        <label class="label1">تصویر</label>
        <label class="photoupload" for="quote">
            <img src="../public/pictures/upload.png" width="30" height="30">
            <span>بارگذاری</span>
        </label>
        <input type="file" name="quotfile" id="quote" hidden>
        <input type="submit" name="register" value="ثبت" class="big-btn">
    </form>
    <?php 
        if(isset($_POST["register"])){
            $insertion = new Insertion();
            $insertion->photovalidator($_FILES["quotfile"]);
            //var_dump($_FILES);
            //var_dump($_POST);
            $insertion->insert("quotes",$records=[
                'title'=>filter_input(INPUT_POST,"quot_title",FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'text'=>filter_input(INPUT_POST,"quots",FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'textref'=>filter_input(INPUT_POST,"quoref",FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'photo'=>$insertion->path.$_FILES["quotfile"]["name"],
                'reg_date'=>date('Y-m-d H:m:s')
            ]);
            ob_start();
            header("location:?iMcr=NNJh&og=sr&id=0");
            ob_flush();
        }
    ?>
</body>
</html>