<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 id="title">ثبت نهایی</h1>
    <?php
    $getid = new getId();
    $getid->idGrabber($_GET["id"]);
    ?>
    <table align="center">
        <tr>
            <td class="title-row">#</td>
            <td class="title-row">نام</td>
            <td class="title-row">نام خانوادگی</td>
            <td class="title-row">کد ملی</td>
            <td class="title-row">مدرک</td>
            <td class="title-row">عنوان مقاله</td>
            <td class="title-row">داور مربوطه</td>
            <td class="title-row">نمره</td>
            <td class="title-row">تصمیم نهایی</td>
            <td class="title-row">اقدامات</td>
        </tr>
        <?php
        $recall = new Recall();
        $recall->selectAllpagedwhere("competitors", "ASC",$getid->id, 10,"finaldes","در حال بررسی");
        $printer = new Printer();
        $printer->print("../public/components/finaldes.row.php", $recall->fetched);
        ?>
    </table>
    <?php
    $recall2 = new Recall();
    $recall2->selectAllWhere("competitors","finaldes","در حال بررسی");
    ?>
    <div class="frame">
        <a href="?iMcr=sebD&og=zt&id=<?php 
            if($getid->id == 0){
                echo 0;
            }else{
                echo $getid->id - 10;
            }
        ?>" class="page">></a>
        <?php
        $printer->pageNumberPrinter("../public/components/pagenumbers.finaldes.php", ceil(count($recall2->fetched) / 10));
        ?>
        <a href="?iMcr=sebD&og=zt&id=<?php
            if($getid->id / 10 + 1 != ceil(count($recall2->fetched) / 10)){
                echo $getid->id+10;
            }else{
                echo $getid->id;
            }
        ?>" class="page"><</a>
    </div>

    <script src="javascript/articles_overview.js"></script>
</body>

</html>