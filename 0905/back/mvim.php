<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">動畫圖片管理</p>
    <form method="post" action="./api/edit.php">
        <table class="cent" width="100%">
            <tbody>
                <tr class="yel">
                    <td width="60%">動畫圖片</td>
                   
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                    <td></td>
                </tr>
                <?php
                $rows = ${ucfirst($do)}->all();
                // dd($rows);
                foreach ($rows as $row):
                ?>
                    <tr>
                        <td>
                            <img src="./image/<?= $row['img']; ?>" style="width:120px;height:90px">
                        </td>
                        
                        <td>
                            <input type="checkbox" name="sh[]" id="sh" value="<?= $row['id'] ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>>
                        </td>
                        <td>
                            <input type="checkbox" name="del[]"  value="<?= $row['id'] ?>">
                        </td>
                        <td>
                            <button type="button" onclick="op('#cover','#cvr','./modals/<?=$do?>_update.php?id=<?= $row['id'] ?>')">更新圖片</button>
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
                        <input type="button" onclick="op('#cover','#cvr','./modals/<?=$do?>.php')" value="新增動畫圖片">
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