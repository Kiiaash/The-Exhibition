<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 id="title">خلاصه وضعیت</h1>
    <table>
        <?php
        $getid = new getId();
        $getid->idGrabber($_GET["id"]);
        ?>
        <tr>
            <td class="title-row">#</td>
            <td class="title-row">نام</td>
            <td class="title-row">ایمیل</td>
            <td class="title-row">نوع درخواست</td>
            <td class="title-row">متن درخواست</td>
            <td class="title-row">پاسخ</td>
            <td class="title-row">وضعیت</td>
            <td class="title-row">تاریخ ثبت</td>
            <td class="title-row">تاریخ پاسخ گویی</td>
            <td class="title-row">اقدامات</td>
        </tr>
        <?php
        $recall = new Recall();
        $recall->selectAllpaged("contact", "ASC", $getid->id, 10);

        $print = new Printer();
        $print->print("../public/components/contacts.show.php", $recall->fetched);

        $recall2 = new Recall();
        $recall2->selectAll("contact", "ASC");
        ?>
    </table>
    <div class="frame">
        <a href="?iMcr=AuRt&og=vs&id=<?=($getid->id == 0) ? "0" : $getid->id - 10 ;?>" class="page">></a>
        <?php
            $print->pageNumberPrinter("../public/components/pagenumber.contact.show.php", ceil(count($recall2->fetched) / 10));
        ?>
        <a href="?iMcr=AuRt&og=vs&id=<?= ($getid->id / 10 + 1 != ceil(count($recall2->fetched) / 10)) ? $getid->id + 10: $getid->id; ?>" class="page"><</a>
    </div>
</body>

</html>