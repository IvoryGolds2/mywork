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
<body class="homybody">
    <header class="homeHeader">
      <div class="homeHeaderBackground">
        <img src="./img/background.png" alt="">
      </div>
      <div class="homeHeaderimg">
        <img src="./img/logo.png" alt="">
      </div>
    </header>
    <section>
      <div class="homeinnerWrapper">
        <div class="homeTopBtn">
          <a href="https://www.bloodinfo.net/knrcbs/bh/resv/resvBldHousStep1.do?mi=1094"><img src="./img/btn1.png" alt=""></a>
          <a href="./contenta.php"><img src="./img/btn2.png" alt=""></a>
        </div>
        <div class="secondBtn">
          <a href="https://www.bloodinfo.net/knrcbs/pr/promtn/progrsPromtnList.do?type=A&mi=1301"><img src="./img/btn3.png" alt=""></a>
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
        <h2>헌혈의 필요성</h2>
        <pre class="grayBox">
        -혈액은 수혈이 필요한 환자의 생명을 구하는 유일한 수단으로 아직까지 대체할 물질이 없고 인공적으로 만들 수도 없습니다.

        -혈액은 장기간 보관이 불가능하기 때문에 적정 혈액보유량을 유지하기 위해서는 지속적이고 꾸준한 헌혈이 필요합니다.

        -우리는 언제든 수혈받을 상황에 처할 수 있습니다. 건강할 때 헌혈하는 것은 자신과 사랑하는 가족, 더 나아가 우리 모두를 위한 사랑의 실천입니다.        
        </pre>
      </div>
      <a href="javascript:;" onclick="postDataContent('A')"><img class="banner" src="./img/banner.png" alt=""></a>
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
      <div class="homelastBtn">
        <a href="javascript:;" onclick="postDataContent('B')"><img src="./img/btn4.png" alt=""></a>
        <a href="./contentd.php"><img src="./img/btn5.png" alt=""></a>
        <a href="javascript:;" onclick="postDataContent('C')"><img src="./img/btn6.png" alt=""></a>
        <a href="./contentf.php"><img src="./img/btn7.png" alt=""></a>
      </div>
    </section>
</body>
<script src="./js/postData.js"></script>
</html>