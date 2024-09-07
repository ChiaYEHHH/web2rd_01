<?php include_once "../api/base.php"; ?>
<div class="cent" style="padding: 50px;">
    <form action="./api/submenu.php" method="post" enctype="multipart/form-data">
        <h2 class="cent">新增主選單</h2>
        <hr>
        <table id="sub">
            <tr class="yel">
                <td style="width: 45%;">主選單名稱:</td>
                <td style="width: 45%;">主選單連結網址:</td>
                <td>刪除</td>
            </tr>
            <?php
            // dd($_GET);
            $rows = $Menu->all(['main_id' => $_GET['id']]);
            // dd($rows);
            foreach ($rows as $row):
            ?>
                <tr>
                    <td>
                        <input style="width: 80%;" type="text" name="text[]" id="acc" value="<?= $row['text'] ?>">
                    </td>
                    <td>
                        <input style="width: 80%;" type="text" name="href[]" value="<?= $row['href'] ?>">
                    </td>
                    <td>
                        <input type="checkbox" name="del[]" value="<?= $row['id'] ?>">
                    </td>
                </tr>
                <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
                <?php endforeach; ?>
                
            <input type="hidden" name="table" value="menu">
            <input type="hidden" name="main_id" value="<?= $_GET['id'] ?>">

        </table>
        <td class="cent">
            <button type="submit">修改確定</button>
            <button type="reset">重置</button>
            <button type="button" onclick="more()">更多次選單</button>
        </td>
    </form>
</div>
<script>
    function more() {
        let str = `
        <tr>
                    <td>
                        <input style="width: 80%;" type="text" name="text2[]" id="acc">
                    </td>
                    <td>
                        <input style="width: 80%;" type="text" name="href2[]">
                    </td>
                    <td>
                    </td>
                </tr>
        `;
        $("#sub").append(str);
    }
</script>