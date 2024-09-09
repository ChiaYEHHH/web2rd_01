<?php include_once "../api/base.php"; ?>
<form action="./api/sub.php" method="post" enctype="multipart/form-data">
    <table class="cent ct" id="sub">
        <h2 class="cent">編輯次選單</h2>
        <tr>
            <td style="width:30%;">次選單名稱:</td>
            <td style="width:50%;">次選單連結網址:</td>
        </tr>
        <?php
        $subs = $Menu->all(['main_id' => $_GET['id']]);
        foreach ($subs as $ss) {
        ?>
            <tr>
                <td><input style="width:80%" type="text" name="text[]" value="<?= $ss['id'] ?>"></td>
                <td><input style="width:80%" type="text" name="href[]" value="<?= $ss['id'] ?>"></td>
                <td><input type="checkbox" name="del[]" value="<?= $ss['id'] ?>"></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <div class="ct cent">
        <input type="hidden" name="main_id" value="<?= $_GET['id'] ?>">
        <input type="hidden" name="table" value="menu">
        <button type="submit">新增</button>
        <button type="reset">重置</button>
        <button type="button" onclick="more()">更多次選單</button>
    </div>
</form>
<script>
    function more() {
        let str = `
         <tr>
            <td><input style="width:80%" type="text" name="text2[]" value=""></td>
            <td><input style="width:80%" type="text" name="href2[]" value=""></td>
            <td></td>
        </tr>
        `;
        $("#sub").append(str);
    }
</script>