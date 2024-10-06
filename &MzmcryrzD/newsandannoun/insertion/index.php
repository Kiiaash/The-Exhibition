<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 id="title">افزودن</h1>
    <form method="post" name="newsandannoun_insertion" action="" enctype="multipart/form-data">
        <label class="label1">عنوان</label>
        <input type="text" class="smallinput" name="content_title">
        <label class="label1">متن</label>
        <textarea id="nandantext" name="content_text"></textarea>
        <label class="label1">تصویر</label>
        <label for="fileee" class="photoupload">
            <img src="../public/pictures/upload.png" width="30" height="30">
            <span>بارگذاری</span>
        </label>
        <input type="file" id="fileee" name="news_file" hidden>
        <label class="label1">دسته بندی</label>
        <select class="big-selector" style="border:solid 2px #555;" name="category"> 
            <option>خبر</option>
            <option>اطلاعیه</option>
        </select>
        <label class="label1">فوریت</label>
        <input type="checkbox" id="emerg" name="blocknun" hidden>
        <label for="emerg" id="chek">
                <div class="circle"></div>
        </label>
        <input type="submit" name="register" value="ثبت" class="big-btn" >
    </form>
    <?php 
        if(isset($_POST["register"])){
            //var_dump($_POST);
            $insertion = new Insertion();
            $insertion->photovalidator($_FILES["news_file"]);

            //var_dump($_FILES);

            $insertion->insert("news_announcment",$records=[
                'title'=>filter_input(INPUT_POST,"content_title",FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'text'=>filter_input(INPUT_POST,"content_text",FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'emergency'=>($_POST["blocknun"] == true) ? "1" : " 0 ",
                'category'=>htmlspecialchars($_POST["category"]),
                'photo'=>htmlspecialchars($insertion->path.$_FILES["news_file"]["name"]),
                'reg_date'=>date('Y-m-d H:i:s'),
            ]);
            header("location:?iMcr=UijN&og=sd&id=0");
        }
    ?>
</body>
</html>