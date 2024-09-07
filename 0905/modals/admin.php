<div class="cent" style="padding: 50px;">
    <form action="./api/add.php" method="post" enctype="multipart/form-data">
        <h2 class="cent">新增管理者帳號</h2>
        <hr>
        <table>
            <tr>
                <td>帳號:</td>
                <td><input type="text" name="acc" id="text"></td>
            </tr>
            <tr>
                <td>密碼:</td>
                <td><input type="password" name="pw" id="pw"></td>
            </tr>
            <tr>
                <td>確認密碼:</td>
                <td><input type="password" name="pw2" id="pw2"></td>
            </tr>
            <input type="hidden" name="table" value="admin">
        </table>
        <td class="cent">
            <button type="submit">新增</button>
            <button type="reset">重置</button>
        </td>
    </form>
</div>