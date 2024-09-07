<div class="di" style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
    <marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:80px;">
        <?php
        $rows = $Ad->all(['sh' => 1]);
        // dd($rows);
        foreach ($rows as $idx => $row) {
            echo ($idx + 1) . $row['text'];
        } ?>
    </marquee>
    <div style="height:32px; "></div>
    <!--正中央-->
    <div style="text-align:center;">
        <div style="height:32px; ">更多最新消息顯示區</div>
            <?php
            $num = $News->count(['sh' => 1]);
            $div = 5;
            $pages = ceil($num / $div);
            $now = $_GET['p'] ?? 1;
            $start = ($now - 1) * $div;
            $news = $News->all("limit $start,$div");
            ?>
        <ol>
            <?php
            // dd($rows);
            foreach ($news as $new):
            ?>
                <li class="sswww">
                    <?= mb_substr($new['text'], 0, 20); ?>
                    <span class="all" style="display:none"><?=$new['text']?></span>
                </li>
            <?php endforeach; ?>
        </ol>
        
    </div>
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