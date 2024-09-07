<div class="cent" style="padding: 50px;">
    <form action="./api/add.php" method="post" enctype="multipart/form-data">
        <h2 class="cent">新增主選單</h2>
        <hr>
        <table>
            <tr>
                <td>主選單名稱:</td>
                <td><input type="text" name="text" id="text"></td>
            </tr>
            <tr>
                <td>主選單連結網址:</td>
                <td><input type="text" name="href" id="href"></td>
            </tr>
            <input type="hidden" name="table" value="menu">
        </table>
        <td class="cent">
            <button type="submit">新增</button>
            <button type="reset">重置</button>
        </td>
    </form>
</div>