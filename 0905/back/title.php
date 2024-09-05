<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">網站標題管理</p>
    <form method="post" action="./api/edit.php">
        <table class="cent" width="100%">
            <tbody>
                <tr class="yel">
                    <td width="45%">網站標題</td>
                    <td width="23%">替代文字</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                    <td></td>
                </tr>
                <?php
                $rows = ${ucfirst($do)}->all();
                // dd($rows);
                foreach ($rows as $row):
                ?>
                    <tr>
                        <td>
                            <img src="./image/<?= $row['img']; ?>" style="width:300px;height:30px">
                        </td>
                        <td>
                            <input type="text" name="text[]" id="text" value="<?= $row['text'] ?>">
                        </td>
                        <td>
                            <input type="radio" name="sh[]" id="sh" value="<?= $row['id'] ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>>
                        </td>
                        <td>
                            <input type="checkbox" name="del[]" id="<?= $row['id'] ?>"  value="<?= $row['id'] ?>">
                        </td>
                        <td>
                            <button type="button" onclick="op('#cover','#cvr','./modals/<?=$do?>_update.php')">更新圖片</button>
                        </td>
                    <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
                    <input type="hidden" name="table" value="<?=$do;?>">

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px">
                        <input type="button" onclick="op('#cover','#cvr','./modals/<?=$do?>.php')" value="新增網站標題圖片">
                    </td>
                    <td class="cent">
                        <button type="submit" >修改確定</button>
                        <button type="reset">重置</button>
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>