<form action="./api/add.php" method="post" enctype="multipart/form-data" style="margin: auto;">
    <div class="cent">
        <table class="cent">
            <h3 class="cent">新增標題區圖片</h3>
            <tr>
                <td>標題區圖片:</td>
                <td><input type="file" name="img" id=""></td>
            </tr>
            <tr>
                <td>標題區替代文字:</td>
                <td><input type="text" name="text" id=""></td>
            </tr>
        </table>
    </div>
    <div class="cent">
        <input type="hidden" name="table" value="title">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>