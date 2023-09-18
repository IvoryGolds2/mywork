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
        <img src="./img/logo.png" alt="">
      </div>
    </header>
    <section>
      <div class="homeinnerWrapper">
      <div class="hometopBtn">
        <div class="btnbg">
          <h2>적극적인 사실조사 참여,</br>정확한 주민등록의</br>바탕입니다.</h2>
          <img src="./img/main_icon.png" alt="">
        </div>
        <a href="javascript:;" onclick="postDataContentSub('A')"><img class="topbtn" src="./img/main_btn.png" alt=""></a>
      </div>
      <div class="ads_wrap ads_main_big">
          <ins class="adsbygoogle"
              data-ad-client="ca-pub-2858778486116301"
              data-ad-slot="5839717365"
              data-language="ko"
              ></ins>
          <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
      </div>
        <div class="menubox">
          <div>주민등록 사실조사</div>
          <a href="javascript:;" onclick="postDataContent('E')"><img src="./img/btn_a.png" alt="">증정조사 대상</a>
          <a href="javascript:;" onclick="postDataContent('D')"><img src="./img/btn_b.png" alt="">조사 방식</a>
          <a href="javascript:;" onclick="postDataContent('B')"><img src="./img/btn_c.png" alt="">실시 기간</a>
          <a href="javascript:;" onclick="postDataContent('C')"><img src="./img/btn_d.png" alt="">수정 기간</a>
          <a href="javascript:;" onclick="postDataContent('F')"><img src="./img/btn_e.png" alt="">과태료 관련</a>
          <a href="javascript:;" onclick="postDataContent('G')"><img src="./img/btn_f.png" alt="">출생미등록 아동</a>
        </div>
      </div>
    </section>
  </div>
</body>
<script src="./js/postData.js"></script>
</html>