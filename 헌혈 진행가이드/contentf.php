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
      <a class="pointtitle" href="./contenta.php">
      전혈헌혈
      </a>
      <a class="normaltitle" href="./contentg.php" >
      성분헌혈
      </a>
    </div>
    <div class="contentbox">
      <span class="boxtitle">전혈헌혈이란?</span>
      <pre class="content">
      혈액의 모든 성분을 채혈하는 것으로 320mL, 400mL 두 종류가 있습니다.      
      </pre>
      <span class="boxtitle">전혈헌혈 제한</span>
      <div class="redtitle">나이</div>
      <pre class="content">
      320mL - 만 16세 ~ 69세 / 400mL - 만 17세 ~ 69세
      65세 이상인 자의 헌혈은 60세부터 64세까지 헌혈한 경험이 있는 자에 한함
      </pre>
      <div class="redtitle">몸무게</div>
      <pre class="content">
      남자 50kg이상 ,여자 45kg이상 (단, 400mL 전혈을 50kg 이상)
      </pre>
      <div class="redtitle">혈색소</div>
      <pre class="content">
      12.5 g/dL 이상      
      </pre>
      <div class="redtitle">혈압</div>
      <pre class="content">
      수축기혈압 : 90mmHg 초과, 180mmHg미만 / 이완기 혈압 : 100mmHg 미만      
      </pre>
      <div class="redtitle">소요시간</div>
      <pre class="content">
      약 10분~15분
      </pre>
      <div class="redtitle">다음 헌혈 가능 일자</div>
      <pre class="content">
      헌혈일로부터 8주 후 같은 요일
      (연 5회 가능)
      </pre>
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
  </section>
</body>
</html>