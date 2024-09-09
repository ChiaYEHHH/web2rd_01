<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table class="cent ct">
        <h2 class="cent">新增主選單</h2>
        <tr>
            <td style="width:30%;">主選單名稱:</td>
            <td style="width:50%;">選單連結網址:</td>
        </tr>
        <tr>
            <td><input style="width:90%" type="text" name="text" id=""></td>
            <td><input style="width:90%" type="text" name="href" id=""></td>
        </tr>
    </table>
    <div class="ct cent">
        <input type="hidden" name="table" value="menu">
        <button type="submit">新增</button>
        <button type="reset">重置</button>
    </div>
</form>