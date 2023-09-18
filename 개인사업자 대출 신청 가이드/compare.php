<!DOCTYPE html>
<html lang="en">
<head>
<?php include './front_header.php';?>
<?php
	include './db2.php';
    $step1 = isset($_POST['step1']) ? $_POST['step1'] : '';
    $search = $_POST['search'];
?>
<link rel="stylesheet" href="./css/commmon.css">
<!-- <link rel="stylesheet" href="./css/finance.css"> -->
</head>
<body>
  <header class="contentHeader">
    <a href="#" onclick="goBack()">
      <img src="./img/prev.png" alt="">
    </a>
    <h1>개인사업자 대출 비교</h1>
  </header>
  <section class="innerWrapper">
    <form action="" method="post" class="compareTopMenu">
      <h1>대출비교</h1>
      <select name="step1" id="step1" onchange="form.submit()">
      <option value=''>
        기관명 <img src='./img/open.png' alt="" height="100">
      </option>;
          <?php 
            $sql2 = query("SELECT distinct sub_title from emp_loan");
            foreach ($sql2 as $r2 => $row2) { 
              $selected = ($_POST['step1'] === $row2['sub_title']) ? 'selected' : '';
              echo "<option value='" . htmlspecialchars($row2['sub_title']) . "' $selected>" . htmlspecialchars($row2['sub_title']) . "</option>";
            }
          ?>
      </select>
    </form>
    <div class="content_wrap">
      <ul>
        <?php
        $sql = query("SELECT * from emp_loan where title like '%".$search."%' and sub_title like '%".$step1."%'");
        $i = 1;
        foreach ($sql as $r => $row) {
          if ($i % 10 === 0) { ?>
            <li>
            <a href="javascript:;" onclick="postLoan('<?=$row['seq']?>')" class="content">
              <h2><?=$row['sub_title']?></h2>
              <h3><?=$row['title']?></h3>
              <div class="fl">
                <div class="minicontent">
                  <span>한도</span>
                  <p><?=$row['interest']?></p>
                </div>
                <div class="minicontent">
                    <span>금리</span>
                    <p><?=$row['rate']?></p>
                  </div>
                </div>	
              </a>
            </li>
            <?php echo'
          <div class="ads_wrap ads_sub_sm centergogo">
          <ins class="adsbygoogle"
            data-ad-client="ca-pub-2858778486116301"
            data-ad-slot="2985402594"
            data-language="ko"
            ></ins>
          <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
        </div>
            ';
          } else { ?>
            <li>
              <a href="javascript:;" onclick="postLoan('<?=$row['seq']?>')" class="content">
                <h2><?=$row['sub_title']?></h2>
                <h3><?=$row['title']?></h3>
                <div class="fl">
                  <div class="minicontent">
                    <span>한도</span>
                    <p><?=$row['interest']?></p>
                  </div>
                  <div class="minicontent">
                      <span>금리</span>
                      <p><?=$row['rate']?></p>
                  </div>
                </div>	
              </a>
            </li>
          <? }
          $i++;
          }
        ?>
      </ul>
    </div>		
  </section>
</body>
<script src="./js/postData.js"></script>

</html>