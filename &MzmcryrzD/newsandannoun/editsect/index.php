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
        $getid->idGrabber($_GET["id"]);

        $recall = new Recall();
        $recall -> selectOne("news_announcment",$getid->id);
    ?>
    <h1 id="title">ویرایش</h1>
    <form method="post" name="newsandannoun_insertion" action="" enctype="multipart/form-data">
        <label class="label1">عنوان</label>
        <input type="text" class="smallinput" name="content_title" value="<?= $recall->singlefetch[0]["title"] ?>">
        <label class="label1">متن</label>
        <textarea id="nandantext" name="news_text"><?= $recall->singlefetch[0]["text"] ?></textarea>
        <label class="label1">تصویر</label>
        <div class="photopreview">
            <img src="<?= $recall->singlefetch[0]["photo"] ?>" width="190" height="190" alt="news_photo">
        </div>
        <label for="fileee" class="photoupload">
            <img src="../public/pictures/upload.png" width="30" height="30">
            <span>بارگذاری</span>
        </label>
        <input type="file" id="fileee" name="news_file" hidden>
        <label class="label1">دسته بندی</label>
        <p class="small-par">دسته بندی : <?= $recall->singlefetch[0]["category"] ?></p>
        <select class="big-selector" style="border:solid 2px #555;" name="category"> 
            <option>خبر</option>
            <option>اطلاعیه</option>
        </select>
        <label class="label1">فوریت</label>
        <input type="checkbox" id="emerg" hidden name="blocknun">
        <label for="emerg" id="chek">
                <div class="circle"></div>
        </label>
        <p class="small-par"><?php if($recall->singlefetch[0]["emergency"] == "1"){
            //echo "وضعیت : فوری";
            ?>
                <script>
                    const tik = document.getElementById("emerg");
                    tik.checked = true;
                </script>
            <?php
        }else{
            //echo " وضعیت :  عادی";
        }   ?></p>
        <input type="submit" name="remove" value="X" class="remove-btn">
        <input type="submit" name="update" value="ویرایش" class="big-btn" >
        
    </form>
    <?php 
        if(isset($_POST["update"])){
            $updater = new Updater();
            $insertion = new Insertion();
            //var_dump($_POST);
            var_dump($_FILES);
            $insertion -> photovalidator($_FILES["news_file"]);
            $updater -> multiUpdate("news_announcment","id",$getid->id,"location:?iMcr=UijN&og=sd&id=0",$fomrdata=[
                'title'=>filter_input(INPUT_POST,"content_title",FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'text'=>filter_input(INPUT_POST,"news_text",FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'emergency'=>(isset($_POST["blocknun"])) ? "1" : "0",
                'category'=>filter_input(INPUT_POST,"category",FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'photo'=>$insertion->path.$_FILES["news_file"]["name"],
                'updated_at'=>date('Y-m-d H:m:s'),
            ]);
        }

        if(isset($_POST["remove"])){
            $remover =  new Remover();
            $remover->remover("news_announcment",$getid->id,"location:?iMcr=UijN&og=sd&id=0");
        }
    ?>
</body>
</html>