<?php include_once "../api/base.php"; ?>
<form action="./api/submenu.php" method="post" enctype="multipart/form-data" style="margin: auto;">
    <div class="cent">
        <table class="cent" id="sub">
            <h3 class="cent">編輯次選單</h3>
            <tr class="yel">
                <td>次選單名稱:</td>
                <td>連結網址:</td>
                <td>刪除</td>
            </tr>
            <?php
            $rows = $Menu->all(['main_id' => $_GET['id']]);
            foreach ($rows as $row) { ?>
                <tr>
                    <td><input type="text" name="text[]" value="<?= $row['text'] ?>"></td>
                    <td><input type="text" name="href[]" value="<?= $row['href'] ?>"></td>
                    <td>
                        <input type="checkbox" name="del[]" value="<?= $row['id'] ?>">
                    </td>
                    <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
                </tr>
            <?php } ?>
        </table>
    </div>
    <div class="cent">
        <input type="hidden" name="main_id" value="<?= $_GET['id'] ?>">
        <input type="hidden" name="table" value="menu">
        <input type="submit" value="修改確定">
        <input type="reset" value="重置">
        <input type="button" onclick="more()" value="更多次選單">

    </div>
</form>
<script>
    function more() {
        let str = `
        <tr>
            <td><input type="text" name="text2[]" value=""></td>
            <td><input type="text" name="href2[]" value=""></td>
            <td></td>                   
        </tr>
    `;
    $("#sub").append(str);
    }
</script>