<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 id="title">اخبار و اطلاعیه ها</h1>
    <table align="center">
        <tr>
            <td class="title-row">#</td>
            <td class="title-row">عنوان</td>
            <td class="title-row">متن</td>
            <td class="title-row">دسته بندی</td>
            <td class="title-row">تصویر</td>
            <td class="title-row">فوریت</td>
            <td class="title-row">تاریخ</td>
            <td class="title-row">اقدامات</td>
        </tr>
        <?php 
            $getid = new getId();
            $getid->idGrabber($_GET["id"]);

            $recall = new Recall();
            $recall->selectAllpaged("news_announcment","ASC",$getid->id,10);

            $print = new Printer();
            $print -> print("../public/components/news.show.php",$recall->fetched);

            $recall2 = new Recall();
            $recall2 -> selectAll("news_announcment","ASC");
        ?>
    </table>
        <div class="frame">
        <a href="?iMcr=UijN&og=sd&id=<?php 
            if($getid->id == 0){
                echo 0;
            }else{
                echo $getid->id - 10;
            }
        ?>" class="page">></a>
        <?php
        $print->pageNumberPrinter("../public/components/pagenumbers.news.php", ceil(count($recall2->fetched) / 10));
        ?>
        <a href="?iMcr=UijN&og=sd&id=<?php
            if($getid->id / 10 + 1 != ceil(count($recall2->fetched) / 10)){
                echo $getid->id+10;
            }else{
                echo $getid->id;
            }
        ?>" class="page"><</a>
    </div>
</body>
</html>