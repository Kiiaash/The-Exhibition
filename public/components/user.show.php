<tr>
    <td class="title-data"><?= $arr["id"] ?></td>
    <td class="title-data"><?= $arr["name"] ?></td>
    <td class="title-data"><?= $arr["lastname"] ?></td>
    <td class="title-data"><?= $arr["natid"] ?></td>
    <td class="title-data"><?= $arr["username"] ?></td>
    <td class="title-data"><?= $arr["degree"] ?></td>
    <td class="title-data"><?= $arr["articletitle"] ?></td>
    <td class="title-data"><?= ($arr["remove"] == 0) ? "در همایش شرکت می‌کند" : "از همایش حذف شده اس" ?></td>
    <td class="title-data"><?= ($arr["remove"] == 0) ? "مسدود نیست" : "کاربر مسدود است" ?></td>
    <td class="title-data"><?= ($arr["remove"] == 0) ? "می‌توانند شرکت کنند" : "واجد شرایط نیستند" ?></td>
    <td class="title-data"><?= $arr["date"] ?></td>
    <td class="title-data">
        <a href="?iMcr=CLxo&og=jii&gid=<?= $arr["id"] ?>">ویرایش</a>
    </td>
</tr>