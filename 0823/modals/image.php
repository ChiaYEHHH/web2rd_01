<h2 class="cent">新增校園映像資料圖片</h2>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>校園映像資料圖片 : </td>
            <td><input type="file" name="img" id=""></td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="table" value="image">
                <input type="submit" value="新增">
                <input type="reset" value="重置">
            </td>
        </tr>
    </table>

</form>