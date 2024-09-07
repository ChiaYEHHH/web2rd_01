<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">選單管理</p>
    <form method="post" action="./api/edit.php">
        <table class="cent" width="100%">
            <tbody>
                <tr class="yel">
                   
                    <td width="30%">主選單名稱</td>
                    <td width="30%">選單連結網址</td>
                    <td width="10%">次選單數</td>
                    <td width="5%">顯示</td>
                    <td width="5%">刪除</td>
                    <td width="20%"></td>
                    <td></td>
                </tr>
                <?php
                $rows = ${ucfirst($do)}->all(['main_id'=>0]);
                // dd($rows);
                foreach ($rows as $row):
                ?>
                    <tr>
                       <td>
                            <input style="width: 80%;" type="text" name="text[]" id="acc" value="<?= $row['text'] ?>">
                        </td>
                        <td>
                            <input style="width: 80%;" type="text" name="href[]"  value="<?= $row['href'] ?>" >
                        </td>
                        <td>
                            <?= $Menu->count(['main_id'=>$row['id']]) ?>
                        </td>
                        <td>
                            <input type="checkbox" name="sh[]"  value="<?= $row['id'] ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>>
                        </td>
                        <td>
                            <input type="checkbox" name="del[]"  value="<?= $row['id'] ?>">
                        </td>
                        <td>
                        <button type="button" onclick="op('#cover','#cvr','./modals/submenu.php?id=<?= $row['id'] ?>')">編輯次選單</button>
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
                        <input type="button" onclick="op('#cover','#cvr','./modals/<?=$do?>.php')" value="新增主選單">
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