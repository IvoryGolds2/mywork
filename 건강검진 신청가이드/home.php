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
    <header class="homeHeader">
      <div class="homeHeaderimg">
        <img src="./img/logo.png" alt="">
      </div>
    </header>

    <section>
      <div class="homeinnerWrapper">
        <div class="homeTopBtn">
          <a target="_blank" href="https://www.kahp.or.kr/ho/medi/intro.do"><img src="./img/btn1.png" alt=""></a>
          <a target="_blank" href="http://globaltopeco.or.kr/"><img src="./img/btn2.png" alt=""></a>
        </div>

        <h2>내 건강을 챙기는 지름길,<span class="bigred">건강검진</span></h2>

        <div class="homeMidBtn">
        <a href="https://www.e-health.go.kr/gh/caSrvcGud/selectIntgrtInspRsltGud.do?prfDocClCd=SC&menuId=200028">
          내 건강검진 내역 확인해 보러 가기 
          <img src="./img/arrow1.png" alt="">
        </a>
        <a href="https://www.nhis.or.kr/nhis/healthin/retrieveExmdAdminSearch.do">
          내 주변 검진기관 / 병원찾기
          <img src="./img/arrow2.png" alt="">
        </a>
        </div>

        <h2>국가건강검진 - 일반건강검진</h2>
        <div class="grayBox">
        국민건강보험법에 따라 고혈압, 당뇨병 등과 같은 생활습관과 관련된 질환을 조기에 발견하고 예방하기 위해 실시되는 것을 목적으로 하며, 주기는 2년마다 1회로 출생년도 짝, 홀수 기준으로 시행합니다. 단, 비사무직은 매년 실시합니다.
        </div>
        <div class="heartTitle">
          <img class="heart" src="./img/deco.png" alt="">
          <span class="titleh2">건강검진 종류</span>
        </div>
        <div class="homeBotBtn">
          <a href="./contenta.php">
            <div>
              <img src="./img/icon1.png" alt="">
              일반 건강 검진 알아보기
            </div>
            <img src="./img/arrow3.png" alt="">
          </a>
          <a href="./contentd.php">
            <div>
              <img src="./img/icon2.png" alt="">
              암검진 알아보기
            </div>
            <img src="./img/arrow3.png" alt="">
          </a>
          <a href="javascript:;" onclick="postDataContent('SUB3')">
            <div>
              <img src="./img/icon3.png" alt="">
              의료급여 생애전환기 검진 알아보기
            </div>
            <img src="./img/arrow3.png" alt="">
          </a>
          <a href="javascript:;" onclick="postDataContent('SUB4')">
            <div>
              <img src="./img/icon4.png" alt="">
              영유아 건강검진 알아보기
            </div>
            <img src="./img/arrow3.png" alt="">
          </a>
          <a href="javascript:;" onclick="postDataContent('SUB5')">
            <div>
              <img src="./img/icon5.png" alt="">
              학교 밖 청소년 건강검진 알아보기
            </div>
            <img src="./img/arrow3.png" alt="">
          </a>
        </div>
        <div class="ads_wrap ads_main_big">
          <ins class="adsbygoogle"
            data-ad-client="ca-pub-2858778486116301"
            data-ad-slot="1643431225"
            data-language="ko"
            ></ins>
          <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
        </div>
      </div>
      </div>
        <div class="homeqna">
          <div class="heartMore">
            <div class="heartTitle">
              <img class="heart" src="./img/deco.png" alt="">
              <span class="titleh2">건강검진 FAQ</span>
            </div>
            <a href="./faq.php"><img class="more" src="./img/more.png" alt=""></a>
          </div>
          <div class="homeqnaBox">
            <a href="./faq.php">2023년 국가건강검진 대상자는 누구인가요<span class="redtext">?</span></a>
            <a href="./faq.php">국가 건강검진은 안받으면 불이익이 있나요<span class="redtext">?</span></a>
            <a href="./faq.php">건강검진 며칠전부터 금주해야하나요<span class="redtext">?</span></a>
          </div>
        </div>
    </section>
</body>
<script src="./js/postData.js"></script>
</html>