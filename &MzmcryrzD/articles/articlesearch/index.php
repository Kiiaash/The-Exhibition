<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1 id="title">جستجو </h1>

    <form method="post" action="" name="search_form">
        <input type="text" name="search_query" class="biginput">
        <label for="mag" id="maglab"><img src="../public/pictures/magnif.png" width="30" height="30" id="magnifimg"></label>
        <input type="submit" name="search" id="mag" hidden>
    </form>
    <table  class="search-table">
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
            <td class="title-row">تاریخ</td>
            <td class="title-row">اقدامات</td>
        </tr>
        <?php 
            $search = new Search();
            $search -> search("competitors"
                            ,"username",
                            filter_input(INPUT_POST,
                                        "search_query",
                                        FILTER_SANITIZE_FULL_SPECIAL_CHARS));
            $print = new Printer();
            $print -> print("../public/components/comps.row.php",$search->searched);
        ?>
    </table>
    <script src="javascript/articles_overview.js"></script>
</body>
</html>