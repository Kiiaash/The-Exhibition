<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 id="title">آثار تعیین شده برای داوران</h1>
    <div class="container-judge">
        <div class="row1">
            <div style="float: right; width:80px; height:80px; background-image:url(<?= "../pictures/IMG_2257.JPG" ?>);
            background-size:80px 80px; background-repeat:no-repeat; background-position:center; 
            border-radius:50%; margin:10px 30px;"></div>
            <div style="float: right; font-family:irs-bold; font-size:1.3rem; margin:25px 10px;">استاد تست</div>
        </div>
        <div class="row2">
            <div class="small-container" style="direction:ltr">
                <br>
                <span id="progvalue" style="font-family: irs-bold;"></span>
                <progress max=100 value="35" dir="rtl" id="prog1"></progress>
                <span style="font-family: irs-med;">مقالات بررسی شده</span>
                <br><br>
                <span id="progvalue2" style="font-family: irs-bold;"></span>
                <progress max=100 value="76" dir="rtl" id="prog2"></progress>
                <span style="font-family: irs-med;">مقالات باقیمانده</span>
                <br><br>
                <span id="progvalue3" style="font-family: irs-bold;"></span>
                <progress max=100 value="82" dir="rtl" id="prog3"></progress>
                <span style="font-family: irs-med;">میانگین نمرات</span>
            </div>
            <table style="margin: 10px 15px;">
                <tr>
                    <td class="title-row">نام</td>
                    <td class="title-row">نام خانوادگی</td>
                    <td class="title-row">عنوان مقاله</td>
                    <td class="title-row">مشاهده فایل</td>
                    <td class="title-row">اقدامات</td>
                </tr>
                <tr>
                    <td class="title-data">تست</td>
                    <td class="title-data">تست</td>
                    <td class="title-data">تست</td>
                    <td class="title-data">تست</td>
                    <td class="title-data">
                    <form method="post" action="" name="opertations-form">
                    <label for="editor" id="editorlab" style="position: relative; right:-7px;"><a href="#"style="position:relative; top:-5px;">مشاهده اثر</a></label>  
                    <input type="submit" name="edit" id="editor" hidden>
                    <label for="deletor" id="deletorlab" style="position: relative; right:-2px; top:-0px;"><img src="../pictures/closed_trash.png" width="23" height="23" id="deletorimg"></label>
                    <input type="submit" name="deletion" id="deletor" hidden>
                </form>
                <?php 
                    
                    if(isset($_POST["deletion"])){
                        echo "deleted";
                    }
                ?>
            </td>
                <tr>
                    <td class="title-data">تست</td>
                    <td class="title-data">تست</td>
                    <td class="title-data">تست</td>
                    <td class="title-data">تست</td>
                    <td class="title-data">
                    <form method="post" action="" name="opertations-form">
                    <label for="editor" id="editorlab" style="position: relative; right:-7px;"><a href="#"style="position:relative; top:-5px;">مشاهده اثر</a></label>  
                    <input type="submit" name="edit" id="editor" hidden>
                    <label for="deletor" id="deletorlab" style="position: relative; right:-2px; top:-0px;"><img src="../pictures/closed_trash.png" width="23" height="23" id="deletorimg"></label>
                    <input type="submit" name="deletion" id="deletor" hidden>
                </form>
                <?php 
                    
                    if(isset($_POST["deletion"])){
                        echo "deleted";
                    }
                ?>
            </td>
              
                <tr>
                    <td class="title-data">تست</td>
                    <td class="title-data">تست</td>
                    <td class="title-data">تست</td>
                    <td class="title-data">تست</td>
                    <td class="title-data">
                    <form method="post" action="" name="opertations-form">
                    <label for="editor" id="editorlab" style="position: relative; right:-7px;"><a href="#"style="position:relative; top:-5px;">مشاهده اثر</a></label>  
                    <input type="submit" name="edit" id="editor" hidden>
                    <label for="deletor" id="deletorlab" style="position: relative; right:-2px; top:-0px;"><img src="../pictures/closed_trash.png" width="23" height="23" id="deletorimg"></label>
                    <input type="submit" name="deletion" id="deletor" hidden>
                </form>
                <?php 
                    
                    if(isset($_POST["deletion"])){
                        echo "deleted";
                    }
                ?>
            </td>
            </table>
        </div>
    </div>
    <div class="container-judge">
        <div class="row1">
            <div style="float: right; width:80px; height:80px; background-image:url(<?= "../pictures/IMG_2257.JPG" ?>);
            background-size:80px 80px; background-repeat:no-repeat; background-position:center; 
            border-radius:50%; margin:10px 30px;"></div>
            <div style="float: right; font-family:irs-bold; font-size:1.3rem; margin:25px 10px;">استاد تست</div>
        </div>
        <div class="row2">
            <div class="small-container" style="direction:ltr">
                <br>
                <span id="progvalue" style="font-family: irs-bold;"></span>
                <progress max=100 value="35" dir="rtl" id="prog1"></progress>
                <span style="font-family: irs-med;">مقالات بررسی شده</span>
                <br><br>
                <span id="progvalue2" style="font-family: irs-bold;"></span>
                <progress max=100 value="76" dir="rtl" id="prog2"></progress>
                <span style="font-family: irs-med;">مقالات باقیمانده</span>
                <br><br>
                <span id="progvalue3" style="font-family: irs-bold;"></span>
                <progress max=100 value="82" dir="rtl" id="prog3"></progress>
                <span style="font-family: irs-med;">میانگین نمرات</span>
            </div>
            <table style="margin: 10px 15px;">
                <tr>
                    <td class="title-row">نام</td>
                    <td class="title-row">نام خانوادگی</td>
                    <td class="title-row">عنوان مقاله</td>
                    <td class="title-row">مشاهده فایل</td>
                    <td class="title-row">اقدامات</td>
                </tr>
                <tr>
                    <td class="title-data">تست</td>
                    <td class="title-data">تست</td>
                    <td class="title-data">تست</td>
                    <td class="title-data">تست</td>
                    <td class="title-data">
                    <form method="post" action="" name="opertations-form">
                    <label for="editor" id="editorlab" style="position: relative; right:-7px;"><a href="#"style="position:relative; top:-5px;">مشاهده اثر</a></label>  
                    <input type="submit" name="edit" id="editor" hidden>
                    <label for="deletor" id="deletorlab" style="position: relative; right:-2px; top:-0px;"><img src="../pictures/closed_trash.png" width="23" height="23" id="deletorimg"></label>
                    <input type="submit" name="deletion" id="deletor" hidden>
                </form>
                <?php 
                    
                    if(isset($_POST["deletion"])){
                        echo "deleted";
                    }
                ?>
            </td>
                <tr>
                    <td class="title-data">تست</td>
                    <td class="title-data">تست</td>
                    <td class="title-data">تست</td>
                    <td class="title-data">تست</td>
                    <td class="title-data">
                    <form method="post" action="" name="opertations-form">
                    <label for="editor" id="editorlab" style="position: relative; right:-7px;"><a href="#"style="position:relative; top:-5px;">مشاهده اثر</a></label>  
                    <input type="submit" name="edit" id="editor" hidden>
                    <label for="deletor" id="deletorlab" style="position: relative; right:-2px; top:-0px;"><img src="../pictures/closed_trash.png" width="23" height="23" id="deletorimg"></label>
                    <input type="submit" name="deletion" id="deletor" hidden>
                </form>
                <?php 
                    
                    if(isset($_POST["deletion"])){
                        echo "deleted";
                    }
                ?>
            </td>
              
                <tr>
                    <td class="title-data">تست</td>
                    <td class="title-data">تست</td>
                    <td class="title-data">تست</td>
                    <td class="title-data">تست</td>
                    <td class="title-data">
                    <form method="post" action="" name="opertations-form">
                    <label for="editor" id="editorlab" style="position: relative; right:-7px;"><a href="#"style="position:relative; top:-5px;">مشاهده اثر</a></label>  
                    <input type="submit" name="edit" id="editor" hidden>
                    <label for="deletor" id="deletorlab" style="position: relative; right:-2px; top:-0px;"><img src="../pictures/closed_trash.png" width="23" height="23" id="deletorimg"></label>
                    <input type="submit" name="deletion" id="deletor" hidden>
                </form>
                <?php 
                    
                    if(isset($_POST["deletion"])){
                        echo "deleted";
                    }
                ?>
            </td>
            </table>
        </div>
    </div>
    <div class="container-judge">
        <div class="row1">
            <div style="float: right; width:80px; height:80px; background-image:url(<?= "../pictures/IMG_2257.JPG" ?>);
            background-size:80px 80px; background-repeat:no-repeat; background-position:center; 
            border-radius:50%; margin:10px 30px;"></div>
            <div style="float: right; font-family:irs-bold; font-size:1.3rem; margin:25px 10px;">استاد تست</div>
        </div>
        <div class="row2">
            <div class="small-container" style="direction:ltr">
                <br>
                <span id="progvalue" style="font-family: irs-bold;"></span>
                <progress max=100 value="35" dir="rtl" id="prog1"></progress>
                <span style="font-family: irs-med;">مقالات بررسی شده</span>
                <br><br>
                <span id="progvalue2" style="font-family: irs-bold;"></span>
                <progress max=100 value="76" dir="rtl" id="prog2"></progress>
                <span style="font-family: irs-med;">مقالات باقیمانده</span>
                <br><br>
                <span id="progvalue3" style="font-family: irs-bold;"></span>
                <progress max=100 value="82" dir="rtl" id="prog3"></progress>
                <span style="font-family: irs-med;">میانگین نمرات</span>
            </div>
            <table style="margin: 10px 15px;">
                <tr>
                    <td class="title-row">نام</td>
                    <td class="title-row">نام خانوادگی</td>
                    <td class="title-row">عنوان مقاله</td>
                    <td class="title-row">مشاهده فایل</td>
                    <td class="title-row">اقدامات</td>
                </tr>
                <tr>
                    <td class="title-data">تست</td>
                    <td class="title-data">تست</td>
                    <td class="title-data">تست</td>
                    <td class="title-data">تست</td>
                    <td class="title-data">
                    <form method="post" action="" name="opertations-form">
                    <label for="editor" id="editorlab" style="position: relative; right:-7px;"><a href="#"style="position:relative; top:-5px;">مشاهده اثر</a></label>  
                    <input type="submit" name="edit" id="editor" hidden>
                    <label for="deletor" id="deletorlab" style="position: relative; right:-2px; top:-0px;"><img src="../pictures/closed_trash.png" width="23" height="23" id="deletorimg"></label>
                    <input type="submit" name="deletion" id="deletor" hidden>
                </form>
                <?php 
                    
                    if(isset($_POST["deletion"])){
                        echo "deleted";
                    }
                ?>
            </td>
                <tr>
                    <td class="title-data">تست</td>
                    <td class="title-data">تست</td>
                    <td class="title-data">تست</td>
                    <td class="title-data">تست</td>
                    <td class="title-data">
                    <form method="post" action="" name="opertations-form">
                    <label for="editor" id="editorlab" style="position: relative; right:-7px;"><a href="#"style="position:relative; top:-5px;">مشاهده اثر</a></label>  
                    <input type="submit" name="edit" id="editor" hidden>
                    <label for="deletor" id="deletorlab" style="position: relative; right:-2px; top:-0px;"><img src="../pictures/closed_trash.png" width="23" height="23" id="deletorimg"></label>
                    <input type="submit" name="deletion" id="deletor" hidden>
                </form>
                <?php 
                    
                    if(isset($_POST["deletion"])){
                        echo "deleted";
                    }
                ?>
            </td>
              
                <tr>
                    <td class="title-data">تست</td>
                    <td class="title-data">تست</td>
                    <td class="title-data">تست</td>
                    <td class="title-data">تست</td>
                    <td class="title-data">
                    <form method="post" action="" name="opertations-form">
                    <label for="editor" id="editorlab" style="position: relative; right:-7px;"><a href="#"style="position:relative; top:-5px;">مشاهده اثر</a></label>  
                    <input type="submit" name="edit" id="editor" hidden>
                    <label for="deletor" id="deletorlab" style="position: relative; right:-2px; top:-0px;"><img src="../pictures/closed_trash.png" width="23" height="23" id="deletorimg"></label>
                    <input type="submit" name="deletion" id="deletor" hidden>
                </form>
                <?php 
                    
                    if(isset($_POST["deletion"])){
                        echo "deleted";
                    }
                ?>
            </td>
            </table>
        </div>
    </div>
    <script src="../javascript/progressvalue_judges.js"></script>
</body>
</html>