<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مقاله ها</title>
</head>
<body>
    <h1 id="title">مقاله ها</h1>

    <form method="post" action="">
        <label id="formlabel">بارگذاری فایل مقاله</label><br>
        <label for="inp" id="upload">
            بارگذاری
        </label>
        <input type="file" name="article" id="inp" hidden>

        <input type="submit" name="submit" value="آپلود" class="register-btn">
        <a href="#"><button class="register-btn">نمایش</button></a>
    </form>

    <div class="info">
        <div class="summery">
            <h3>مشحصات مقاله</h3>
            <ul>
                <div class="li">
                    <li>سایز قابل قبول است</li>
                    <img src="../../public/pictures/tik.png"
                        width="20"
                        height="20"
                        alt="tik">
                </div>
                <div class="li">
                    <li>فرمت فایل مناسب است</li>
                    <img src="../../public/pictures/tik.png"
                        width="20"
                        height="20"
                        alt="tik">
                </div>
            </ul>
        </div>
    </div>
    
</body>
</html>