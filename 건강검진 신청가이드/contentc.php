<!DOCTYPE html>
<html lang="ko">
<head>
  <?php 
    include './db.php';
    include './front_header.php';
    $category = $_POST['category'];
    $categorycode = $_POST['categorycode'];
  ?>
</head>
<body>
  <header class="contentHeader">
    <a href="./home.php">
      <button>
        <img src="./img/prev.png" alt="">
      </button>
    </a>
      <div>
        <h1>일반 건강 검진</h1>
      </div>
  </header>
  <section>
    <div class="title">
      <a class="normaltitle" href="./contenta.php">
      일반 건강 검진
      </a>
      <a class="normaltitle" href="./contentb.php" >
      확진 검사
      </a>
      <a class="pointtitle" href="./contentc.php">
      필수 확인 사항
      </a>
    </div>
    <div class="contentbox">
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
      <span class="boldtitle">건강검진을 받기 전에 주의사항</span>
      <div class="redtitle">1. 금식</div>
      <pre class="content">
        검진 전날 저녁 9시 이후에는 아무런 음식이나 음료를 섭취하지 않도록 하십시오. 금식을 지켜야 정확한 결과를 얻을 수 있습니다.
      </pre>  
      <div class="redtitle">2. 공복 상태</div>
      <pre class="content">
        검진 당일 아침은 아무런 음식뿐만 아니라 물, 커피, 우유, 주스, 껌, 담배 등도 섭취하지 않도록 하십시오. 공복 상태에서 검진을 받아야 합니다.
      </pre>
      <div class="redtitle">3. 검진 시간</div>
      <pre class="content">
        가능하다면 오전 중에 검진을 받는 것이 좋습니다. 그러나 오후에 검진을 받을 경우에는 최소 8시간 이상의 공복 상태를 유지해야 합니다. 이를 지키지 않으면 검사 결과가 정확하지 않을 수 있습니다.
      </pre>
    </div>  
  </section>
</body>
</html>