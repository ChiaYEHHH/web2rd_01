<div class="di" style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
    <marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
        <?PHP
        $ad = $Ad->all(['sh' => 1]);
        // dd($ad);
        foreach ($ad as $K => $v) {
            echo " /**{$v['text']}**\ ";
        }
        ?>
    </marquee>
    <div style="height:32px; display:block;"></div>
    <!--正中央-->
<div>
<?PHP
    $itemNum = ${ucfirst($do)}->count(); //確定有幾筆資料
    $div = 5;  //設定每一頁有幾個項目
    $pages = ceil($itemNum / $div);  //分頁數為($itemNum / $div)無條件進位
    $now = $_GET['p'] ?? 1; //目前頁面 預設值 1
    $start = ($now - 1) * $div; //每個頁面第一個項目是哪一筆
    $rows = ${ucfirst($do)}->all(" limit $start,$div"); //限制頁面顯示內容
    // dd($rows);
    ?>
    <ol start="<?= ($start + 1) ?>">
        <?php
        foreach ($rows as $row) :
        ?>
            <li class="sswww">
                <?= mb_substr($row['text'], 0, 25) ?>
                <span class="all"  style="display:none">
                    <?= $row['text'] ?>
                </span>
            </li>
            <?php endforeach; ?>
        </ol>
</div>
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
</div>
<div id="alt" style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;"></div>
<script>
    $(".sswww").hover(
        function() {
            $("#alt").html("<pre>" + $(this).children(".all").html() + "</pre>").css({
                "top": $(this).offset().top - 50
            })
            $("#alt").show()
        }
    )
    $(".sswww").mouseout(
        function() {
            $("#alt").hide()
        }
    )
</script>