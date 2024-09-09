<div class="di"
    style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
    <marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
        <?php
        $ads = $Ad->all(['sh' => 1]);

        foreach ($ads as $ad) {
        ?>
            "|<?= $ad['text'] ?>|"
        <?php
        }
        ?>
    </marquee>

    <div style="height:32px; display:block;"></div>
    <!--正中央-->
    <ol>
        <?php
        $num = $News->count(['sh' => 1]);
        $div = 5;
        $pages = ceil($num / $div);
        $now = $_GET['p'] ?? 1;
        $start = ($now - 1) * $div;
        $news = $News->all(['sh' => 1], " limit $start,$div");
        foreach ($news as $idx => $ns) {
        ?>
            <li class="sswww" start="<?= $idx + 1; ?>">
                <div>
                    <?= mb_substr($ns['text'], 0, 30) ?>
                </div>

                <span class="all" style="display: none;"><?= $ns['text'] ?></span>
            </li>
        <?php
        }
        ?>
    </ol>
    <div style="text-align:center;">
        <?php
        if ($now - 1 > 0) {
            $prev = $now - 1;
            echo "<a class='bl' style='font-size:30px;' href='?do=news&p=$prev'>&lt;&nbsp;</a>";
        }
        for ($i = 1; $i <= $pages; $i++) {
            $font = ($now == $i) ? '36px' : '30px';
            echo "<a class='bl' style='font-size:$font;' href='?do=news&p=$i'>$i</a>";
        }
        if ($now + 1 <= $pages) {
            $next = $now + 1;
            echo "<a class='bl' style='font-size:30px;' href='?do=news&p=$next'>&nbsp;&gt;</a>";
        }
        ?>

    </div>
</div>
<div id="alt"
    style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
</div>
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