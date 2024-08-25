<h2 class="cent">更新圖片</h2>
<form action="./api/update.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>校園映像資料圖片 : </td>
            <td><input type="file" name="img" id=""></td>
        </tr>
        
        <tr>
            <td>
                <input type="hidden" name="id" value="<?=$_GET['id']?>">
                <input type="hidden" name="table" value="image">
                <input type="submit" value="修改">
                <input type="reset" value="重置">
            </td>
        </tr>
    </table>

</form>