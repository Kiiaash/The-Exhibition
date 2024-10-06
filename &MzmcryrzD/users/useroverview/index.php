<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1 id="title">کاربران</h1>
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
            <td class="title-row">نام کاربری</td>
            <td class="title-row">مدرک</td>
            <td class="title-row">عنوان مقاله</td>
            <td class="title-row">حذف</td>
            <td class="title-row">مسدودیت</td>
            <td class="title-row">واجد شرایط بودن</td>
            <td class="title-row">تاریخ ثبت نام</td>
            <td class="title-row">اقدامات</td>
        </tr>
        <?php 
            $recall = new Recall();
            $recall->selectAllpaged("competitors","ASC",$getid->id,10);

            $print = new Printer();
            $print->print("../public/components/user.show.php",$recall->fetched);

            $recall2 = new Recall();
            $recall2->selectAll("competitors","ASC");
        ?>
        
    </table>
    <div class="frame">
        <a href="?iMcr=Asdv&og=aa&id=<?=($getid->id == 0) ? "0" : $getid->id - 10 ;?>" class="page">></a>
        <?php
            $print->pageNumberPrinter("../public/components/pagenumber.users.show.php", ceil(count($recall2->fetched) / 10));
        ?>
        <a href="?iMcr=Asdv&og=aa&id=<?= ($getid->id / 10 + 1 != ceil(count($recall2->fetched) / 10)) ? $getid->id + 10: $getid->id; ?>" class="page"><</a>
    </div>
    <script src="javascript/articles_overview.js"></script>
</body>
</html>