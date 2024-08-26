<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">頁尾版權管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <?php
                $rows = ${ucfirst($do)}->all();
                foreach ($rows as $row):
                ?>
                    <tr class="yel">
                        <td width="50%">頁尾版權 : </td>
                        <td width="50%">
                            <input style="width:60%" type="text" name="text[]" value="<?= $row['text']; ?>">
                        </td>
                        <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
                        <input type="hidden" name="table" value="<?= $do ?>">
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:100%;">
            <tbody>
                <tr>
                    <td class="cent">
                        <input type="submit" value="修改確定">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>
