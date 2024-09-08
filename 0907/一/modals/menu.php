<form action="./api/add.php" method="post" enctype="multipart/form-data" style="margin: auto;">
    <div class="cent">
        <table class="cent">
            <h3 class="cent">新增主選單</h3>
            <tr>
                <td>主選單名稱:</td>
                <td><input type="text" name="text" id=""></td>
            </tr>
            <tr>
                <td>連結網址:</td>
                <td><input type="href" name="href" id=""></td>
            </tr>
        </table>
    </div>
    <div class="cent">
        <input type="hidden" name="table" value="menu">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>