<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table class="cent ct">
        <h2 class="cent">新增動態文字廣告</h2>

        <tr>
            <td style="text-align: end;">動態文字廣告:</td>
            <td><input style="width:80%" type="text" name="text" id=""></td>
        </tr>
    </table>
    <div class="ct cent">
        <input type="hidden" name="table" value="ad">
        <button type="submit">新增</button>
        <button type="reset">重置</button>
    </div>
</form>