<div class="cent" style="padding: 50px;">
<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <h2 class="cent">新增標題區圖片</h2>
    <hr>
    <table>
        <tr>
            <td>標題區圖片:</td>
            <td><input type="file" name="img" id="img"></td>
        </tr>
        <tr>
            <td>標題區文字:</td>
            <td><input type="text" name="text" id="text"></td>
        </tr>
    </table>
    <td class="cent">
        <input type="hidden" name="table" value="title">
        <button type="submit">新增</button>
        <button type="reset">重置</button>
    </td>
</form>
</div>