<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table class="cent ct">
        <h2 class="cent">新增最新消息資料</h2>

        <tr>
            <td style="text-align: end;width:20%;">最新消息資料:</td>
            <td><textarea name="text" style="width:90%" id="" rows="3"></textarea>

            </td>
        </tr>
    </table>
    <div class="ct cent">
        <input type="hidden" name="table" value="news">
        <button type="submit">新增</button>
        <button type="reset">重置</button>
    </div>
</form>