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
      <a class="pointtitle" href="./contentb.php" >
      확진 검사
      </a>
      <a class="normaltitle" href="./contentc.php">
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
      <span class="boldtitle">1. 고혈압 또는 당뇨병 질환의심자</span>
      <pre class="content">
        - 일반건강검진 결과표와 신분증을 지참합니다.
        - 가까운 병·의원 (상급종합병원 및 종합병원 제외)에서 확진검사 및 진료를 실시합니다.
        - 의료급여수급권자인 경우, 의료전달체계에 따라 가까운 의원에서 실시됩니다.
      </pre>  
      <span class="boldtitle">2. 폐결핵 질환의심자</span>
      <pre class="content">
        - 일반건강검진 결과표와 신분증을 지참합니다.
        - 가까운 병·의원에서 폐결핵 확진검사 및 진료를 실시합니다.
      </pre>
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
      <span class="boldtitle">3. 확진검사항목</span>
      <pre class="content">
      - 고혈압: 진찰 및 상담 / 혈압측정
      - 당뇨병: 진찰 및 상담 / 공복혈당검사
      - 폐결핵: 진찰 및 상담 / 객담검사
      </pre>
    </div>  
  </section>
</body>
</html>