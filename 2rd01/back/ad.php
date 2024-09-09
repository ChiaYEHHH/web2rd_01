<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">動態文字廣告管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%" class="cent">
            <tbody>
                <tr class="yel">
                    <td width="45%">動態文字廣告</td>

                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>

                </tr>
                <?php
                $rows = ${ucfirst($do)}->all();
                foreach ($rows as $row) {
                ?>
                <tr>
                    <td>
                        <input style="width:80%;" type="text" name="text[]" value="<?= $row['text'] ?>">
                    </td>
                    <td>
                        <input type="checkbox" name="sh[]" value="<?= $row['id'] ?>"
                            <?= ($row['sh'] == 1) ? 'checked' : ''; ?>>
                    </td>
                    <td>
                        <input type="checkbox" name="del[]" value="<?= $row['id'] ?>">
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
                        <input type="button" onclick="op('#cover','#cvr','./modals/<?= $do ?>.php')" value="新增動態文字廣告">
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