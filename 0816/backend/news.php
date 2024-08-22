<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">最新消息管理</p>
    <form method="post" action="./api/edit.php" enctype="multipart/form-data">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="80%">最新消息</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                </tr>
                <?php
                $totalpage = ${ucfirst($do)}->count(); //取的資料筆數
                $div = 4; //一頁最多
                $pages = ceil($totalpage / $div);
                $now = $_GET['p'] ?? 1; //看網址有沒有p沒有就是1
                $start = ($now - 1) * $div; //從第幾筆開始顯示
                $rows = ${ucfirst($do)}->all("limit $start,$div"); //找出所有資料從第$start筆開始顯示到$div筆
                foreach ($rows as $row):
                ?>
                    <tr class='cent'>
                        <td width="80%">
                            <textarea name="text[]" id="text" style="width:98%;height:60px"><?= $row['text']; ?></textarea>
                        </td>
                        <td width="10%">
                            <input type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? "checked" : ""; ?>>
                        </td>
                        <td width="10%">
                            <input type="checkbox" name="del[]" value="<?= $row['id']; ?>">
                        </td>
                        <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="cent">
            <?php
            if ($now - 1 >= 1) {
                $prev = $now - 1;
                echo "<a href='?do=$do&p=$prev'>";
                echo "<";
                echo "</a>";
            }

            for ($i = 1; $i <= $pages; $i++) {
                $size = ($i == $now) ? "24px" : "18px";
                echo "<a href='?do=$do&p=$i'style='font-size:$size'>";
                echo $i;
                echo "</a>";
            }

            if ($now + 1 >= 1) {
                $next = $now + 1;
                echo "<a href='?do=$do&p=$next'>";
                echo ">";
                echo "</a>";
            }


            ?>
        </div>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px">
                        <input type="button" onclick="op('#cover','#cvr','./modals/<?= $do; ?>.php')" value="新增最新消息">
                    </td>
                    <td class="cent">
                        <input type="hidden" name="table" value="<?= $do; ?>">
                        <input type="submit" value="修改確定">
                        <input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>