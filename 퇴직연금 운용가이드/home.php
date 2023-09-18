<!DOCTYPE html>
<html lang="ko">
<head>
<?php include './front_header.php';?>
<link rel="stylesheet" href="./css/commmon.css">
</head>
<body>
  <div class="backgroundcolorwrapper">
    <header class="homeHeader">
      <img src="./img/mainpage-logo.png" alt="">
    </header>
    <section>
      <div class="homeinnerWrapper">
        <div class="hometopbtn">
          <a href="javascript:;" onclick="postDataContentA('SUB1')"><img src="./img/main-btn-1.png" alt=""></a>
          <a href="javascript:;" onclick="postDataContentB('SUB2')"><img src="./img/main-btn-2.png" alt=""></a>
          <a href="javascript:;" onclick="postDataContentB('SUB3')"><img src="./img/main-btn-3.png" alt=""></a>
          <a href="javascript:;" onclick="postDataContentB('SUB4')"><img src="./img/main-btn-4.png" alt=""></a>
        </div>
        <div class="contentbox"> 
          <h2>퇴직연금이란?</h2>
          <pre>퇴직하는 근로자의 노후 소득 보장을 위해 기업이 퇴직금을 금융기관에 적립하고, 근로자가 퇴직할 때 연금 또는 일시금으로 지급하는 법정 퇴직 급여 제도</pre>
        </div>
        <div class="homemidbtn">
          <a href="./chart.php"><img src="./img/main-btn-5.png" alt=""></a>
          <a href="javascript:;" onclick="postDataContentC('SUB8')"><img src="./img/main-btn-6.png" alt=""></a>
          <a href="javascript:;" onclick="postDataContentC('SUB6')"><img src="./img/main-btn-7.png" alt=""></a>
          <a href="javascript:;" onclick="postDataContentC('SUB5')"><img src="./img/main-btn-8.png" alt=""></a>
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
        <h1>퇴직연금 종류 쉽게 보기</h1>
        <img class="homechartimg" src="./img/chart-1.png" alt="">
        <div class="homebotbtn">
          <a href="javascript:;" onclick="postDataContentC('SUB9')"><img src="./img/main-btn-9.png" alt=""></a>
          <a href="./faq.php"><img src="./img/main-btn-10.png" alt=""></a>
        </div>
      </div>
    </section>
  </div>
</body>
<script src="./js/postData.js"></script>
</html>