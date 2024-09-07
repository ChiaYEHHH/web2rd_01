<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">管理者帳號管理</p>
    <form method="post" action="./api/edit.php">
        <table class="cent" width="100%">
            <tbody>
                <tr class="yel">
                   
                    <td width="40%">帳號</td>
                    <td width="40%">密碼</td>
                    <td width="20%">刪除</td>
                    <td></td>
                </tr>
                <?php
                $rows = ${ucfirst($do)}->all();
                // dd($rows);
                foreach ($rows as $row):
                ?>
                    <tr>
                       <td>
                            <input style="width: 40%;" type="text" name="acc[]" id="acc" value="<?= $row['acc'] ?>">
                        </td>
                        <td>
                            <input style="width: 40%;" type="text" name="pw[]"  value="<?= str_repeat("*",strlen($row['pw'])) ?>" >
                        </td>
                        <td>
                            <input type="checkbox" name="del[]"  value="<?= $row['id'] ?>">
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
                        <input type="button" onclick="op('#cover','#cvr','./modals/<?=$do?>.php')" value="新增管理者帳號">
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