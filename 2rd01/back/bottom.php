<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">頁尾版權資料管理</p>
    <form method="post" action="./api/edit.php">
        <table width="50%" class="cent ct">
            <tbody>
                <?php
                $rows = ${ucfirst($do)}->all();
                foreach ($rows as $row) {
                ?>
                    <tr>
                        <td style="background:yellow;" width="45%">頁尾版權資料</td>
                        <td width="55%">
                            <input style="width:80%;" type="text" name="text[]" value="<?= $row['text'] ?>">
                        </td>
                        <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
                        <input type="hidden" name="table" value="<?= $do ?>">
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>

        <div class="cent ct">
            <input type="submit" value="修改確定">
            <input type="reset" value="重置">
        </div>


    </form>
</div>
</div>