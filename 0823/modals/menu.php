<h2 class="cent">新增主選單</h2>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>主選單名稱 : </td>
            <td><input type="text" name="text" id=""></td>
        </tr>
        <tr>
            <td>主選單超連結 : </td>
            <td><input type="text" name="href" id=""></td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="table" value="menu">
                <input type="submit" value="新增">
                <input type="reset" value="重置">
            </td>
        </tr>
    </table>

</form>