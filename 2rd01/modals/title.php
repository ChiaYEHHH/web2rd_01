<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table class="cent ct">
        <h2 class="cent">新增標題區圖片</h2>
        <tr>
            <td style="text-align: end;width:30%">標題區圖片:</td>
            <td><input style="width:80%" type="file" name="img" id=""></td>
        </tr>
        <tr>
            <td style="text-align: end;">標題區替代文字:</td>
            <td><input style="width:80%" type="text" name="text" id=""></td>
        </tr>
    </table>
    <div class="ct cent">
        <input type="hidden" name="table" value="title">
        <button type="submit">新增</button>
        <button type="reset">重置</button>
    </div>
</form>