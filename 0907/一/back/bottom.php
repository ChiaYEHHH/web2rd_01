<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">頁尾版權資料管理</p>
    <form method="post" action="./api/edit.php">
        <div class="cent" style="background:yellow">
        頁尾版權資料:<input type="text" name="text[]" value="<?= ${ucfirst($do)}->find(1)['text'] ?>">
            <input type="hidden" name="table" value="<?= $do ?>">
            <input type="hidden" name="id[]" value="1">
        </div>

        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>