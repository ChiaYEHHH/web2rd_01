<h2 class="cent">新增最新消息</h2>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>最新消息文字 : </td>
            <td>
                <textarea name="text" id="" ></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="table" value="news">
                <input type="submit" value="新增">
                <input type="reset" value="重置">
            </td>
        </tr>
    </table>

</form>