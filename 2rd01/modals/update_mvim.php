<form action="./api/update.php" method="post" enctype="multipart/form-data">
    <table class="cent ct">
        <h2 class="cent">更新圖片</h2>
        <tr>
            <td style="text-align: end;width:30%">動畫圖片:</td>
            <td><input style="width:80%" type="file" name="img" id=""></td>
        </tr>

    </table>
    <div class="ct cent">
        <input type="hidden" name="table" value="mvim">
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
        <button type="submit">修改確定</button>
        <button type="reset">重置</button>
    </div>
</form>