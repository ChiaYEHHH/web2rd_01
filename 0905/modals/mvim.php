<div class="cent" style="padding: 50px;">
<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <h2 class="cent">新增動畫圖片</h2>
    <hr>
    <table>
        <tr>
            <td>動畫圖片:</td>
            <td><input type="file" name="img" id="img"></td>
        </tr>
        
    </table>
    <td class="cent">
        <input type="hidden" name="table" value="mvim">
        <button type="submit">新增</button>
        <button type="reset">重置</button>
    </td>
</form>
</div>