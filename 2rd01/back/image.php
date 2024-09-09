<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">校園映像資料管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%" class="cent">
            <tbody>
                <tr class="yel">
                    <td width="50%">校園映像資料圖片</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                    <td width="30%"></td>

                </tr>
                <?php
                $num = ${ucfirst($do)}->count();
                $div = 3;
                $pages = ceil($num / $div);
                $now = $_GET['p'] ?? '1';
                $start = ($now - 1) * $div;
                $rows = ${ucfirst($do)}->all(" limit $start,$div");
                foreach ($rows as $row) {
                ?>
                <tr>
                    <td>
                        <img src="./image/<?= $row['img'] ?>" alt="" style="width: 100px;height:68px;">
                    </td>

                    <td>
                        <input type="checkbox" name="sh[]" value="<?= $row['id'] ?>"
                            <?= ($row['sh'] == 1) ? 'checked' : ''; ?>>
                    </td>
                    <td>
                        <input type="checkbox" name="del[]" value="<?= $row['id'] ?>">
                    </td>
                    <td>
                        <input type="button"
                            onclick="op('#cover','#cvr','./modals/update_<?= $do ?>.php?id=<?= $row['id'] ?>')"
                            value="更新圖片">
                    </td>
                    <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
                    <input type="hidden" name="table" value="<?= $do ?>">
                </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
        <div style="text-align:center;">
            <?php
            if ($now - 1 > 0) {
                $prev = $now - 1;
                echo "<a class='bl' style='font-size:30px;' href='?do=$do&p=$prev'>&lt;&nbsp;</a>";
            }
            for ($i = 1; $i <= $pages; $i++) {
                $font = ($now == $i) ? '36px' : '30px';
                echo "<a class='bl' style='font-size:$font;' href='?do=$do&p=$i'>$i</a>";
            }
            if ($now + 1 <= $pages) {
                $next = $now + 1;
                echo "<a class='bl' style='font-size:30px;' href='?do=$do&p=$next'>&nbsp;&gt;</a>";
            }
            ?>

        </div>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px">
                        <input type="button" onclick="op('#cover','#cvr','./modals/<?= $do ?>.php')" value="新增校園映像資料">
                    </td>
                    <td class="cent">
                        <input type="submit" value="修改確定">
                        <input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>
</div>