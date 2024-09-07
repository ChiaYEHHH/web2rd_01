<div class="cent" style="padding: 50px;">
    <form action="./api/add.php" method="post" enctype="multipart/form-data">
        <h2 class="cent">新增最新消息資料</h2>
        <hr>
        <table>
            <tr>
                <td>最新消息資料:</td>
                <td>
                    <textarea width="200px" name="text" id="text" cols="5"></textarea>
                    
                </tr>
            </table>
            <td class="cent">
            <input type="hidden" name="table" value="news">
            <button type="submit">新增</button>
            <button type="reset">重置</button>
        </td>
    </form>
</div>