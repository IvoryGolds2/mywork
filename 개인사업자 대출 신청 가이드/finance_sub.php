<?php
    include './db2.php';
    $seq = $_POST['seq'];
?>
<html lang="ko">
<head>
	<?php include './front_header.php'; ?>
    <link rel="stylesheet" href="./css/finance.css">
</head>
<body>
		<div id="wrap">
			<header class="contentHeader">
			<a href="#" onclick="goBack()">
				<img src="./img/prev.png" alt="">
			</a>
			<h1>개인사업자 대출 비교</h1>
			</header>
		<main class="innerWrapper">
			<?php
			$sql = query("SELECT * from emp_loan where seq='".$seq."'");
			$row = $sql -> fetch_array();

			// 최저금리 처리
			$data = trim($row['rate']);
			$parts = explode("~", $data);
			if (count($parts) === 2) { $rate = $parts[0];
			} else { $rate = $row['rate'];
			}

			// ~ 원 글씨 처리
			$interest = $row['interest'];
			$interest_won = mb_substr($interest, -1);
			?>
			<div class="title">
				<p class="bank"><?=$row['sub_title']?></p>
				<h2><?=$row['title']?></h2>
			</div>
			<div class="flBox">
				<div class="fl">
					<p class="left">한도</p>
					<p class="right"><?php echo mb_substr($interest, 0, -1) . "<b>" . $interest_won . "</b>";?></p>
				</div>
				<div class="fl">
					<p class="left">금리</p>
					<p class="right"><?=$rate?><b>%</b></p>
				</div>
			</div>

			
			<div class="box">
				<pre><?=$row['add_info']?></pre>
				<div class="detail_info">
					<?php
					// $keyword = "심의필 번호";
					// $position = mb_strpos($row['detail_info'], $keyword);
					// if ($position !== false) {
					//     $result = mb_substr($row['detail_info'], 0, $position);
					//     echo $result;
					// } else {
					//     echo $row['detail_info'];
					// }
					echo $row['detail_info'];
					?>
				</div>
			</div>
			<div class="warn">
				※ 금융회사의 상품별 이자율 등 거래 조건이 수시로 변경되어 지연 공시 될 수 있으므로 반드시 해당 금융 회사에 문의하시기 바랍니다.<br><br>
				※ 각 금융회사의 담보가치 산정방식의 차이나 대출 신청자의 소득, 대출기간 등에 따라 대출가능 금액, 대출 금리가 달라질 수 있으므로 자세한 내용은 상세정보를 확인하시고, 금융회사에 직접 문의하여 주시기 바랍니다.
			</div>
		</main>

    </div>
</body>
<script>
    var preTags = document.getElementsByTagName("pre");
    for (var i = 0; i < preTags.length; i++) {
        var preTag = preTags[i];
        var text = preTag.innerHTML;
        var processedText = text.replace(/\|\|/g, '<br><br>').replace(/::/g, '<br>');
        preTag.innerHTML = processedText;
    }

</script>
</html>