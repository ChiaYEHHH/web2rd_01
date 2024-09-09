<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table class="cent ct">
        <h2 class="cent">新增管理者帳號</h2>

        <tr>
            <td style="text-align: end;">帳號:</td>
            <td><input style="width:80%" type="text" name="acc" id=""></td>
        </tr>
        <tr>
            <td style="text-align: end;">密碼:</td>
            <td><input style="width:80%" type="password" name="pw" id=""></td>
        </tr>
        <tr>
            <td style="text-align: end;">確認密碼:</td>
            <td><input style="width:80%" type="password" name="pw2" id=""></td>
        </tr>
    </table>
    <div class="ct cent">
        <input type="hidden" name="table" value="admin">
        <button type="submit">新增</button>
        <button type="reset">重置</button>
    </div>
</form>