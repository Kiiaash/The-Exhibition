<tr>
    <td class="title-data"><?= $arr["id"] ?></td>
    <td class="title-data"><?= $arr["name"] ?></td>
    <td class="title-data"><?= $arr["lastname"] ?></td>
    <td class="title-data"><?= $arr["natid"] ?></td>
    <td class="title-data"><?= $arr["degree"] ?></td>
    <td class="title-data"><?= $arr["articletitle"] ?></td>
    <td class="title-data"><?= $arr["date"] ?></td>
    <td class="title-data">
        <form method="post" action="" name="opertations-form">
            <input type="hidden" name="hiddenid" value="<?= $arr["id"] ?>">
            <select class="small-selector" name="judgeselector">
                <option>داور 1</option>
                <option>داور 2</option>
                <option>داور 3</option>
                <option>داور 4</option>
                <option>داور 5</option>
            </select>
            <input type="submit" name="save" value="ثبت" class="table-btn">
        </form>
        <?php 
            if(isset($_POST["save"])){
                $updater = new Updater();
                $updater -> multiUpdate("competitors","id",$_POST["hiddenid"],"location:?iMcr=Dgse&og=z",$formdata=[
                    'judgeassigned' => $_POST["judgeselector"],
                ]);
            }
        ?>
    </td>
</tr>