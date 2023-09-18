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
    <header class="homeHeader">
      <div class="homeHeaderimg">
        <img src="./img/mainpage-logo.png" alt="">
      </div>
    </header>
      <div class="homeinnerWrapper">
        <div class="homeTopBox">
          <div class="leftBox">
            <a href="javascript:;" onclick="postDataContent('SUB1')"><img src="./img/main-btn-1.png" alt=""></a>
          </div>
          <div class="rightBox">
            <a href="https://www.sbiz.or.kr/gift"><img src="./img/main-btn-2.png" alt=""></a>
            <a href="./qna.php"><img src="./img/qna-btn.png" alt=""></a>
          </div>
        </div>
        <!-- <div class="homeMidBox">
          <a href="./qna.php"><img src="./img/main-btn-4.png" alt=""></a>
        </div> -->
        <div class="ads_wrap ads_main_big">
          <ins class="adsbygoogle"
            data-ad-client="ca-pub-6499164332093487"
            data-ad-slot="7755700315"
            data-language="ko"
            ></ins>
          <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
        </div>
        <div class="homeTextBox">
          <h2>온누리 상품권이란?</h2>
          <pre>전통시장 및 상점가의 판매를 촉진하고 지역경제 활성화를 위해 중소벤처기업부와 소상공인시장진흥공단이 발행하는 전통시장 및 상점가 전용 상품권입니다.</pre>
        </div>
        <h3>온누리 상품권 종류</h3>
        <div class="homeBotBox">
          <a href="javascript:;" onclick="postDataContent('SUB3')"><img src="./img/main-btn-5.png" alt=""></a>
          <a href="javascript:;" onclick="postDataContent('SUB4')"><img src="./img/main-btn-6.png" alt=""></a>
          <a href="javascript:;" onclick="postDataContent('SUB5')"><img src="./img/main-btn-7.png" alt=""></a>
        </div>
        <a class="lastBox" href="javascript:;" onclick="postDataContent('SUB2')"><img src="./img/main-btn-8.png" alt=""></a>
      </div>
      <div class="ads_wrap ads_main_big">
        <ins class="adsbygoogle"
          data-ad-client="ca-pub-6499164332093487"
          data-ad-slot="7755700315"
          data-language="ko"
          ></ins>
        <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      </div>
  </div>
</body>
<script src="./js/postData.js"></script>
</html>