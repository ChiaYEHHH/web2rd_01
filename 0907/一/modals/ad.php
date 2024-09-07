<form action="./api/add.php" method="post" enctype="multipart/form-data" style="margin: auto;">
    <div class="cent">
        <table class="cent">
            <h3 class="cent">新增動態文字廣告</h3>
            <tr>
                <td>動態文字廣告:</td>
                <td><input type="text" name="text" id=""></td>
            </tr>
        </table>
    </div>
    <div class="cent">
        <input type="hidden" name="table" value="ad">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>