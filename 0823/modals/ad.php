<h2 class="cent">新增動態文字廣告</h2>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>動態文字廣告文字 : </td>
            <td>
                <textarea name="text" id="" ></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="table" value="ad">
                <input type="submit" value="新增">
                <input type="reset" value="重置">
            </td>
        </tr>
    </table>

</form>