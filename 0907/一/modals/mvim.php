<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table class="cent">
        <h3 class="cent">新增動畫圖片</h3>
        <tr>
            <td>動畫圖片:</td>
            <td><input type="file" name="img" id=""></td>
        </tr>
    </table>
    <div class="cent">
        <input type="hidden" name="table" value="mvim">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>