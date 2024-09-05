<div class="cent" style="padding: 50px;">
    <form action="./api/add.php" method="post" enctype="multipart/form-data">
        <h2 class="cent">新增動態文字廣告</h2>
        <hr>
        <table>
            <tr>
                <td>動態文字廣告:</td>
                <td><input type="text" name="text" id="text"></td>
                <input type="hidden" name="table" value="ad">
            </tr>
        </table>
        <td class="cent">
            <button type="submit">修改確定</button>
            <button type="reset">重置</button>
        </td>
    </form>
</div>