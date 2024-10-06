<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 id="title">داوران</h1>
    <table align="center">
        <tr>
            <td class="title-row">#</td>
            <td class="title-row">نام</td>
            <td class="title-row">نام خانوادگی</td>
            <td class="title-row">مدرک</td>
            <td class="title-row">ایمیل</td>
            <td class="title-row">توضیحات</td>
            <td class="title-row">عکس پروفایل</td>
            <td class="title-row">اقدامات</td>
        </tr>
        <?php 
            $recall = new Recall();
            $recall -> selectAll("judges","ASC");

            $print = new Printer();
            $print -> print("../public/components/judges.show.php",$recall->fetched);

        ?>
    </table>
    </table>
    <script src="javascript/articles_overview.js"></script>
</body>
</html>