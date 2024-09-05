<div class="cent" style="padding: 50px;">
<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <h2 class="cent">新增校園映像圖片</h2>
    <hr>
    <table>
        <tr>
            <td>校園映像圖片:</td>
            <td><input type="file" name="img" id="img"></td>
        </tr>
    </table>
    <td class="cent">
        <input type="hidden" name="table" value="image">
        <button type="submit">修改確定</button>
        <button type="reset">重置</button>
    </td>
</form>
</div>