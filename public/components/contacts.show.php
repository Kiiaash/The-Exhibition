<tr>
    <td class="title-data"><?= $arr["id"] ?></td>
    <td class="title-data"><?= $arr["name"] ?></td>
    <td class="title-data"><?= $arr["email"] ?></td>
    <td class="title-data"><?= $arr["reqtype"] ?></td>
    <td class="title-data" style="width: 150px; height:50px;"><?= $arr["details"] ?></td>
    <td class="title-data"><?= ($arr["answer"]) ?></td>
    <td class="title-data"><?= ($arr["status"] == 0) ? "در انتظار پاسخگویی" : "پاسخ داده شده"; ?></td>
    <td class="title-data"><?= $arr["reg_date"] ?></td>
    <td class="title-data"><?= $arr["replied_at"] ?></td>
    <td class="title-data">
        <a href="?iMcr=MdXU&og=vd&id=<?= $arr["id"] ?>">ویرایش</a>
    </td>
</tr>