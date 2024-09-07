<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">最新消息資料管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="70%">最新消息資料內容</td>
                    <td width="15%">顯示</td>
                    <td width="15%">刪除</td>
                    <td></td>
                </tr>
                <?php
                $num=${ucfirst($do)}->count();
                $div=4;
                $pages=ceil($num / $div);
                $now=$_GET['p']??1;
                $start=($now-1)*$div;
                $rows = ${ucfirst($do)}->all("limit $start,$div");
               
                foreach ($rows as $row) { ?>
                    <tr class="cent">
                       <td>
                        <textarea name="text[]" id="" style="width: 90%;" rows="3"><?= $row['text'] ?></textarea>
                            
                        </td>
                        <td>
                            <input type="checkbox" name="sh[]" value="<?= $row['id'] ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>>
                        </td>
                        <td>
                            <input type="checkbox" name="del[]" value="<?= $row['id'] ?>">
                        </td>
                        
                        <input type="hidden" name="table" value="<?= $do ?>">
                        <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <div class="cent">
            <?php
            if ($now - 1 > 0) {
                $prev = $now - 1;
                echo "<a href='?do=$do&p=$prev'> < </a>";
            }
            for ($i = 1; $i <= $pages; $i++) {
                $font = ($now == $i) ? '24px' : '16px';
                echo "<a href='?do=$do&p=$i' style='font-size:$font'> $i </a>";
            }
            if ($now + 1 <= $pages) {
                $next = $now + 1;
                echo "<a href='?do=$do&p=$next'> > </a>";
            }
            ?>
        </div>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','modals/<?= $do ?>.php')" value="新增最新消息資料"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>