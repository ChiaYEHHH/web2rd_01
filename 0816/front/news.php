<div class="di"
	style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
	<marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
		<?php $ad = $Ad->all(['sh' => 1]);
		foreach ($ad as $a) {
			echo $a['text'] . " ///     ";
		} ?>
	</marquee>
	<div style="height:32px; display:block;"></div>
	<!--正中央-->
	<h3 class="cent">更多最新消息區</h3>
	<div>
		<?php
		$totalpage = ${ucfirst($do)}->count(); //取的資料筆數
		$div = 5; //一頁最多
		$pages = ceil($totalpage / $div);
		$now = $_GET['p'] ?? 1; //看網址有沒有p沒有就是1
		$start = ($now - 1) * $div; //從第幾筆開始顯示
		$rows = ${ucfirst($do)}->all("limit $start,$div"); //找出所有資料從第$start筆開始顯示到$div筆
		?>
		<ol start="<?= $start + 1; ?>">
			<?php
			foreach ($rows as $row): ?>
				<li class="sswww">
					<?= mb_substr($row['text'], 0, 25); ?>
					<span class="all" style="display:none">
						<?= $row['text']; ?>
					</span>
				</li>
			<?php endforeach; ?>
		</ol>
	</div>
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
</div>
<div id="alt"
	style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
</div>
<script>
	$(".sswww").hover(
		function() {
			$("#alt").html("" + $(this).children(".all").html() + "").css({
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