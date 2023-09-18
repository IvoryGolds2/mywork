<!DOCTYPE html>
<html lang="ko">
<head>
<?php include './front_header.php';?>
<?php 
    include './db.php';
    include './front_header.php';
    $category = $_POST['category'];
  ?>
<link rel="stylesheet" href="./css/commmon.css">
</head>
<body>
  <div class="backgroundcolorwrapper">
  <header class="contentHeader">
    <img class="logoimg" src="./img/logo.png" alt="">
    <a href="./home.php">
      <button>
        <img class="home" src="./img/home.png" alt="">
      </button>
    </a>
  </header>
    <section class="innerWrapper">
    <?php
      $sql = query("SELECT DISTINCT title from content WHERE category = '$category'");
      foreach($sql as $key => $val) { ?>
        <div>
          <h1><?=$val['title']?></h1>
        </div>
        <?php  
            $sql2 = query("SELECT DISTINCT * from content WHERE title = '$val[title]' and category = '$category'");
            foreach ($sql2 as $key2 => $val2) { ?>
              <div class="whitecontentbox">
                <?php if($val2['content']) { ?>
                  <pre><?= $val2['content'] ?></pre>
                <?php } ?>
              </div>
              <div class="ads_wrap ads_sub_sm">
                  <ins class="adsbygoogle"
                      data-ad-client="ca-pub-2858778486116301"
                      data-ad-slot="5839717365"
                      data-language="ko"
                      ></ins>
                  <script>
                      (adsbygoogle = window.adsbygoogle || []).push({});
                  </script>
              </div>
            <?php 
      }
    } 
  ?>
  <div class="subcontent">
  본 저작물은 행정안전부에서 2023년 작성하여 공공누리 제1유형으로 개방한 '2023년 주민등록 사실조사, 출생미등록 아동 확인도 함께 실시 (작성자:주민과)’을 이용하였으며,
해당 저작물은 행정안전부, https://www.mois.go.kr'에서 무료로 다운받으실 수 있습니다.
  </div>  
    </section>
  </div>
</body>
<script src="./js/postData.js"></script>
</html>