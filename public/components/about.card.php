<div class="container">
    <div class="right-container">
        <div class="rc-title"><?= $arr["title"] ?></div>
        <div class="rc-sub-title"><?= $arr["subtitle"] ?></div>
        <p><?= $arr["text"] ?></p>
        <div class="rc-photorefrence"><?= $arr["refrence"] ?></div>
    </div>
    <div class="left-container">
        <img src="<?= $arr["photo"] ?>" width="478" height="310">
    </div>
    <a href="?iMcr=OUka&og=zd&id=<?=$arr["id"]?>" style="text-decoration:none;"><button name="edit" class="big-btn">ویرایش</button></a>
</div>