<!DOCTYPE html>
<html lang="ko">
<head>
<?php include './front_header.php';?>
<?php 
    include './db.php';
    include './front_header.php';
    session_start();
    $start = $_SESSION['start'];
    $end = $_SESSION['end'];
    $recentSalary = $_SESSION['recentSalary'];
    $holidayAllowanceInput = $_SESSION['holidayAllowanceInput'];
    $bonusInput = $_SESSION['bonusInput'];
  ?>
<link rel="stylesheet" href="./css/commmon.css">
</head>
<body>
  <div class="backgroundcolorwrapper">
    <header class="contentHeader">
      <button id="goBackButton">
        <img class="goback" src="./img/sub-arrow.png" alt="">
      </button>
      <a class="logoimg" href="./home.php">
        <img src="./img/subpage-logo.png" alt="">
      </a>
    </header>
    <section class="innerWrapper">
    <div class="contentBox howcontent">
      <div class="howtopimg">
        <img src="./img/sub-deco-2.png" alt="">
      </div>
      <h1>평균임금과 상여금,</br> 연차수당 계산법 알아보기</h1>
      <div class="contentincontent">
        <h4>평균임금</h4>
        <h3>사유가 발생한 날 이전 3개월간의 임금총액 /</br>사유가 발생한 날 이전 3개월간의 총 일수</h3>
      </div>
      <div class="contentincontent">
        <h4 class="bordertop">상여금</h4>
        <h3>퇴직금에 포함할 상여금 = 1년치 상여금</br>총합 x 3/12</h3>
      </div>
      <div class="contentincontent">
        <h4  class="bordertop">연차수당</h4>
        <h3>1일통상임금 x 미사용 연차갯수</h3></br>
        <h3>* 1일 통상임금</br>시간급 x 1일 근무시간</br>* 시간급</br>통상임금/209시간</h3>
      </div>
      <div class="ads_wrap ads_main_big">
        <ins class="adsbygoogle"
          data-ad-client="ca-pub-2858778486116301"
          data-ad-slot="1949985773"
          data-language="ko"
          ></ins>
        <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      </div>
    </div>
    </section>
</body>
<script>
      document.getElementById('goBackButton').addEventListener('click', function() {
      window.history.back(); // 브라우저의 뒤로 가기 기능을 사용하여 이전 페이지로 이동합니다.
    });
</script>
</html>