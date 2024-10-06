<?php 
    include('../classess/Controllers/sustainer.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 id="title">افزودن داور جدید</h1>
    <form method="POST" name="add_judge_form" action="" enctype="multipart/form-data">
        <label class="label1">نام</label>
        <input type="text" name="name" class="smallinput">
        <label class="label1">نام خانوادگی</label>
        <input type="text" name="lastname" class="smallinput">
        <label class="label1">مدرکی</label>
        <select class="big-selector" name="degree" style="border:solid 2px #555; margin:10px 30px;">
            <option>کارشناسی</option>
            <option>کارشناسی ارشد</option>
            <option>دکتری</option>
        </select>
        <label class="label1">ایمیل</label>
        <input type="email" name="email" class="smallinput">
        <label class="label1">پسورد</label>
        <input type="password" name="password" class="smallinput">
        <label class="label1">تکرار پسورد</label>
        <input type="password" name="passwordrepeat" class="smallinput">
        <label class="label1">درباره</label>
        <textarea id="judge_about" name="description"></textarea>
        <label class="label1">آپلود تصویر پروفایل</label>
        
        <label class="photoupload" for="phot">
            <input type="file" name="photo" id="phot" hidden>
            <span>بارگذاری فایل</span>
            <img src="../public/pictures/upload" width="30" height="30">
        </label>
        <input type="submit" class="bigger-btn" value="ثبت" name="register" style="font-size:1.3rem; 
        position:relative; right:-15px; font-family:irs-bold; margin:10px 0px 30px 0px;">
    </form>
    <?php 
        if(isset($_POST["register"])){
            $insertion= new Insertion();
            //$insertion->validator($_POST);
            $insertion->photovalidator($_FILES["photo"]);
            //var_dump($_FILES);
            $insertion -> insert("judges",$records=[
                'name'=>htmlspecialchars($_POST['name']),
                'lastname'=>htmlspecialchars($_POST["lastname"]),
                'degree'=>htmlspecialchars($_POST["degree"]),
                'email'=>htmlspecialchars($_POST["email"]),
                'password'=>password_hash($_POST["password"],PASSWORD_BCRYPT),
                'description'=>htmlspecialchars($_POST["description"]),
                'profilephoto'=>htmlspecialchars($insertion->path.$_FILES["photo"]["name"]),
            ]);
        }
    ?>
</body>
</html>