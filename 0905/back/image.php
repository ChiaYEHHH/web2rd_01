<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">校園映像資料管理</p>
    <form method="post" action="./api/edit.php">
        <table class="cent" width="100%">
            <tbody>
                <tr class="yel">
                    <td width="60%">校園映像資料圖片</td>
                   
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                    <td></td>
                </tr>
                <?php
                $num=${ucfirst($do)}->count();
                $div=4;
                $pages=ceil($num / $div);
                $now=$_GET['p']??1;
                $start=($now -1) *$div;
                $rows = ${ucfirst($do)}->all("limit $start,$div");
                foreach ($rows as $row):
                ?>
                    <tr>
                        <td>
                            <img src="./image/<?= $row['img']; ?>" style="width:120px;height:90px">
                        </td>
                        
                        <td>
                            <input type="checkbox" name="sh[]" id="sh" value="<?= $row['id'] ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>>
                        </td>
                        <td>
                            <input type="checkbox" name="del[]" value="<?= $row['id'] ?>">
                        </td>
                        <td>
                            <button type="button" onclick="op('#cover','#cvr','./modals/<?=$do?>_update.php?id=<?= $row['id'] ?>')">更新圖片</button>
                        </td>
                    <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
                    <input type="hidden" name="table" value="<?=$do;?>">

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="cent">
            <?php
            if($now -1 > 0){
                $prev=$now-1;
                echo "<a href='?do=news&p=$prev'> < </a>";
            }

            for ($i=1 ;$i<=$pages;$i++){
                $font=($i == $now)?'24px':'18px';
                echo "<a href='?do=news&p=$i' style='font-size:$font'> $i </a>";
            }

            if($now +1 <= $pages){
                $next=$now+1;
                echo "<a href='?do=news&p=$next'> > </a>";
            }
            ?>
        </div>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px">
                        <input type="button" onclick="op('#cover','#cvr','./modals/<?=$do?>.php')" value="新增校園映像資料圖片">
                    </td>
                    <td class="cent">
                        <button type="submit" >修改確定</button>
                        <button type="reset">重置</button>
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>