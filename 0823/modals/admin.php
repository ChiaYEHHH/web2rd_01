<h2 class="cent">新增管理者帳號</h2>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>帳號 : </td>
            <td><input type="text" name="acc" id=""></td>
        </tr>
        <tr>
            <td>密碼 : </td>
            <td><input type="password" name="pw" id=""></td>
        </tr>
        <tr>
            <td>確認密碼 : </td>
            <td><input type="password" name="pw2" id=""></td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="table" value="admin">
                <input type="submit" value="新增">
                <input type="reset" value="重置">
            </td>
        </tr>
    </table>

</form>