<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1 id="title">کاربران مسدود شده</h1>
    <table align="right" style="margin: 10px 20px;">
        <tr>
            <td class="title-row">#</td>
            <td class="title-row">نام</td>
            <td class="title-row">نام خانوادگی</td>
            <td class="title-row">کد ملی</td>
            <td class="title-row">نام کاربری</td>
            <td class="title-row">مدرک</td>
            <td class="title-row">عنوان مقاله</td>
            <td class="title-row">مسدودیت</td>
            <td class="title-row">اقدامات</td>
        </tr>
        <tr>
            <td class="title-data">1</td>
            <td class="title-data">تست</td>
            <td class="title-data">تست</td>
            
            <td class="title-data">تست</td>
            <td class="title-data">تست</td>
            <td class="title-data">تست</td>
            <td class="title-data">تست</td>
            <td class="title-data">تست</td>
            <td class="title-data">
                <form method="post" action="" name="opertations-form">
                    <label for="editor" id="editorlab"><img src="../pictures/edit.png" width="30" height="30" id="editorimg"></label>  
                    <input type="submit" name="edit" id="editor" hidden>
                    <label for="deletor" id="deletorlab"><img src="../pictures/closed_trash.png" width="23" height="23" id="deletorimg"></label>
                    <input type="submit" name="deletion" id="deletor" hidden>
                </form>
                <?php 
                    ob_start();
                    if(isset($_POST["edit"])){
                        header("location:?iMcr=CLxo&og=jii&gbhd=15496723");
                    }
                    ob_flush();
                    if(isset($_POST["deletion"])){
                        echo "deleted";
                    }
                ?>
            <script src="javascript/articles_overview.js"></script>
            </td>
        </tr>
    </table>
</body>
</html>