<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">選單管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%" class="cent">
            <tbody>
                <tr class="yel">
                    <td width="30%">主選單名稱</td>

                    <td width="30%">選單連結網址</td>
                    <td width="10%">次選單數</td>
                    <td width="10%">刪除</td>
                    <td></td>

                </tr>
                <?php
                $rows = ${ucfirst($do)}->all(['main_id' => 0]);
                foreach ($rows as $row) {
                ?>
                    <tr>
                        <td>
                            <input style="width:80%;" type="text" name="text[]" value="<?= $row['text'] ?>">
                        </td>
                        <td>
                            <input style="width:80%;" type="text" name="href[]" value="<?= $row['href'] ?>">
                        </td>
                        <td>
                            <?= $Menu->count(['main_id' => $row['id']]) ?>
                        </td>
                        <td>
                            <input type="checkbox" name="del[]" value="<?= $row['id'] ?>">
                        </td>
                        <td>
                            <input type="button"
                                onclick="op('#cover','#cvr','./modals/update_<?= $do ?>.php?id=<?= $row['id'] ?>')"
                                value="編輯次選單">
                        </td>

                        <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
                        <input type="hidden" name="table" value="<?= $do ?>">
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px">
                        <input type="button" onclick="op('#cover','#cvr','./modals/<?= $do ?>.php')" value="新增主選單">
                    </td>
                    <td class="cent">
                        <input type="submit" value="修改確定">
                        <input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>
</div>