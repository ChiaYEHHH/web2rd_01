<?php include_once "../api/base.php"; ?>
<h2 class="cent">編輯次選單</h2>
<form action="./api/submenu.php" method="post" enctype="multipart/form-data">
    <table width="95%" id="submenu" style="margin: auto;">
        <tr class="yel">
            <td width="40%">次選單名稱 : </td>
            <td width="40%">次選單超連結 : </td>
            <td width="10%">刪除</td>
        </tr>
        <?php
        $rows = $Menu->all(['main_id' => $_GET['id']]);
        // dd($rows);
        foreach ($rows as $row):
        ?>
            <tr class="cent">
                <td>
                    <input type="text" name="text[]" value="<?= $row['text'] ?>">
                </td>
                <td>
                    <input type="text" name="href[]" value="<?= $row['href'] ?>">
                </td>

                <td><input type="checkbox" name="del[]" value="<?= $row['id']; ?>"></td>
                <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
            </tr>

        <?php endforeach; ?>
    </table>
    <div class="cent">
        <input type="hidden" name="main_id" value="<?= $_GET['id'] ?>">
        <input type="hidden" name="table" value="menu">
        <input type="submit" value="修改">
        <input type="reset" value="重置">
        <button type="button" onclick="add()">增加次選單</button>
    </div>


</form>

<script>
    function add() {
        let str = `
        <tr class="cent">
            <td>
            <input type="text" name="text2[]">
            </td>
            <td>
            <input type="text" name="href2[]">
            </td>
            <td></td>
        </tr>

`;
        $('#submenu').append(str);
    }
</script>