<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">進站總人數管理</p>
    <form method="post" action="./api/edit.php">
        <table class="cent" width="100%">
            <tbody>
                <tr class="yel">
                    <td>進站總人數:</td>
                    <td><input type="text" name="text" value="<?= ${ucfirst($do)}->find(1)['text']; ?>"></td>
                    <input type="hidden" name="table" value="<?= $do; ?>">
                    <input type="hidden" name="id[]" value="1">
                </tr>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td class="cent">
                        <button type="submit" >修改確定</button>
                        <button type="reset">重置</button>
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>