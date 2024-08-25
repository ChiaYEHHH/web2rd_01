<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">校園映像資料管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="60%">校園映像資料圖片</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                    <td></td>
                </tr>
                <?php
                $itemNum = ${ucfirst($do)}->count(); //確定有幾筆資料
                $div = 3;  //設定每一頁有幾個項目
                $pages = ceil($itemNum / $div);  //分頁數為($itemNum / $div)無條件進位
                $now = $_GET['p'] ?? 1; //目前頁面 預設值 1
                $start = ($now - 1) * $div; //每個頁面第一個項目是哪一筆
                $rows = ${ucfirst($do)}->all(" limit $start,$div"); //限制頁面顯示內容
                foreach ($rows as $row):
                ?>
                    <tr class="cent">
                        <td width="60%">
                            <img src="./image/<?= $row['img']; ?>" style="width: 100px;height:68px;">
                        </td>
                        <td width="10%">
                            <input type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>>
                        </td>
                        <td width="10%">
                            <input type="checkbox" name="del[]" value="<?= $row['id']; ?>">
                        </td>
                        <td>
                            <input type="button"
                                onclick="op('#cover','#cvr','./modals/<?= $do ?>_update.php?id=<?= $row['id']; ?>')"
                                value="更換圖片">
                        </td>
                        <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
                        <input type="hidden" name="table" value="<?= $do ?>">
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
        <div class="cent">
            <?php
            if (($now - 1) > 0) {
                $prev=$now - 1;
                echo "<a href='?do=$do&p=$prev'>";
                echo " < ";
                echo "</a>";
            }

            for($i=1;$i<=$pages;$i++){
                $font=($i == $now)? '24px' : '18px';
                echo "<a href='?do=$do&p=$i' style='font-size:$font'>";
                echo " $i ";
                echo "</a>";
            }

            if (($now + 1) <= $pages) {
                $next=$now + 1;
                echo "<a href='?do=$do&p=$next'>";
                echo " > ";
                echo "</a>";
            }
            ?>
        </div>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px">
                        <input type="button" onclick="op('#cover','#cvr','./modals/<?= $do ?>.php')"
                            value="新增校園映像資料圖片">
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