<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 id="title">تعیین داور برای آثار</h1>

    <table align="center">
        <tr>
            <td class="title-row">#</td>
            <td class="title-row">نام</td>
            <td class="title-row">نام خانوادگی</td>
            <td class="title-row">کد ملی</td>
            <td class="title-row">مدرک</td>
            <td class="title-row">عنوان مقاله</td>
            <td class="title-row">تاریخ</td>
            <td class="title-row">اقدامات</td>
        </tr>
        <?php
        $recall = new Recall();
        $recall->selectAllWhereISNULL("competitors", "judgeassigned");

        $print = new Printer();
        $print->print("../public/components/judge.assgin.php", $recall->fetched);
        ?>
    </table>

    <h3 id="title3">افزودن سریع</h3>
    <form method="post" name="quickadd-form" action="">
        <label class="label1">از</label>
        <input type="number" min=1 name="from" class="smallinput">
        <label class="label1">تا</label>
        <input type="number" min=1 name="till" class="smallinput">
        <select class="big-selector" name="judgeselectorfromtill" style="background-color:#777; margin:20px 10px;">
            <option>داور 1</option>
            <option>داور 2</option>
            <option>داور 3</option>
            <option>داور 4</option>
            <option>داور 5</option>
        </select>
        <input type="submit" name="add" class="big-btn" value="افزودن">
        
    </form>
    <?php
    if (isset($_POST["add"])) {
        $updater2 = new Updater();
        $from = filter_input(INPUT_POST, "from", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $till = filter_input(INPUT_POST, "till", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $updater2->fromtillupdate("competitors", "id", $from, $till, $fromdata = [
            'judgeassigned' => htmlspecialchars($_POST["judgeselectorfromtill"]),
        ]);
    }
    ?>
    <script src="javascript/articles_overview.js"></script>

</body>

</html>