<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">頁尾版權管理</p>
    <form method="post" action="./api/edit.php" enctype="multipart/form-data">
        <table width="100%">
            <tbody>

                <label for="bottom" style="width:50%;background:yellow;padding: 10px;">頁尾版權資料 : </label>
                <input type="text" name="text" id="text" value="<?= $Bottom->find(1)['text'] ?>" style="width:50%">
                <input type="hidden" name="id[]" value="1">
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>

                    <td class="cent">

                        <input type="hidden" name="table" value="<?= $do; ?>">
                        <input type="submit" value="修改確定">
                        <input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>