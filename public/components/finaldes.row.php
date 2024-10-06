<tr>
    <td class="title-data"><?= $arr["id"] ?></td>
    <td class="title-data"><?= $arr["name"] ?></td>
    <td class="title-data"><?= $arr["lastname"] ?></td>
    <td class="title-data"><?= $arr["natid"] ?></td>
    <td class="title-data"><?= $arr["degree"] ?></td>
    <td class="title-data"><?= $arr["articletitle"] ?></td>
    <td class="title-data"><?= $arr["judgeassigned"] ?></td>
    <td class="title-data"><?= $arr["mark"] ?></td>
    <td class="title-data"><?= $arr["finaldes"] ?></td>
    <td class="title-data">
        <form method="post" action="" name="opertations-form">
            <input type="submit" name="confirm" value="تایید">
            <input type="submit" name="refuse" value="رد">
            <input type="hidden" name="hiddenid" value="<?= $arr["id"]?>">
        </form>
        <?php
            if(isset($_POST["confirm"])){
                $updater = new Updater();
                $updater->multiUpdate("competitors","id",$_POST["hiddenid"],"location:?iMcr=sebD&og=zt&id=0",$formdata=[
                    'finaldes'=>'تایید'
                ]);
            }

            if(isset($_POST["refuse"])){
                $updater = new Updater();
                $updater->multiUpdate("competitors","id",$_POST["hiddenid"],"location:?iMcr=sebD&og=zt&id=0",$formdata=[
                    'finaldes'=>'رد'
                ]);
            }
        ?>
    </td>
</tr>