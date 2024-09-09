<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table class="cent ct">
        <h2 class="cent">新增動畫圖片</h2>
        <tr>
            <td style="text-align: end;width:30%">動畫圖片:</td>
            <td><input style="width:80%" type="file" name="img" id=""></td>
        </tr>

    </table>
    <div class="ct cent">
        <input type="hidden" name="table" value="mvim">
        <button type="submit">新增</button>
        <button type="reset">重置</button>
    </div>
</form>