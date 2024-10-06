<tr>
    <td class="title-data"><?= $arr["id"] ?></td>
    <td class="title-data"><?= $arr["title"] ?></td>
    <td class="title-data" style="text-overflow: ellipsis; height:70px;"><?= $arr["text"] ?></td>
    <td class="title-data"><?= $arr["category"] ?></td>
    <td class="title-data"><img src="<?= $arr["photo"] ?>" width="40" height="40" alt="annphoto"></td>
    <td class="title-data"><?php if($arr["emergency"] == 1){echo "فوری";}else{echo "عادی";} ?></td>
    <td class="title-data"><?= $arr["reg_date"] ?></td>
    <td class="title-data">
        <a href="?iMcr=CcVf&og=vaa&id=<?= $arr["id"] ?>">ویرایش</a>
    </td>
</tr>