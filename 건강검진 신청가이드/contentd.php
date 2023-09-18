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
        <h1>암검진</h1>
      </div>
  </header>
  <section>
    <div class="title">
      <a class="pointtitle" href="./contentd.php">
      암검진
      </a>
      <a class="normaltitle" href="./contente.php" >
      검진절차
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
      <span class="boxtitle">암검진 종류</span>
      <div class="redtitle">위암검진</div>
      <pre class="content">
      40세 이상인 남성과 여성은 증상이 없더라도 2년마다 위내시경 검사를 받아야 합니다. 만약 위내시경 검사를 받기 어려운 경우, 위장조영검사를 선택할 수도 있습니다.
      </pre>  
      <div class="redtitle">대장암검진</div>
      <pre class="content">
        50세 이상인 남성과 여성은 1년마다 분변잠혈검사(FOBT)를 받아야 합니다. FOBT 결과가 양성으로 나온 경우, 해당 환자는 대장내시경 검사를 받아야 합니다.
      </pre>
      <div class="redtitle">간암검진</div>
      <pre class="content">
      40세 이상인 남성과 여성 중 간암 발생 위험군에 해당하는 대상자는 매년 상반기 1회와 하반기 1회, 총 2회로 6개월마다 간 초음파 검사와 혈액검사 (혈청 알파태아단백검사)를 받아야 합니다.
      * 고위험군 기준
      - 해당 년도 이전 2개년도의 보험급여 내역 중 간암 발생 고위험군에 속한 경우
      - 과거 년도의 일반건강검진 결과에서 B형 간염 바이러스 표면항원 양성자 또는 C형 간염 바이러스 항체 양성자인 경우
      </pre>
      <div class="redtitle">유방암검진</div>
        <pre class="content">
        1. 40세 이상 여성은 2년마다 유방촬영 검사를 받아야 합니다.
        2. 유방암 산정특례적용자는 검진대상에서 유예합니다.(본인 검진희망 시 대상 추가등록가능)
        </pre>
      <div class="redtitle">자궁경부암검진</div>
        <pre class="content">
        20세 이상 여성은 2년 주기로 자궁경부세포검사를 받아야 하며, 자궁경부암 산정특례 적용자는 검진대상에서 제외됩니다. 
        주의사항 :  자궁적출술을 받았거나 성경험이 없는 경우, 미리 검진의사와 상담해야 합니다.
        </pre>
      <div class="redtitle">폐암검진</div>
        <pre class="content">
        54세부터 74세 이상인 남녀는 폐암발생 고위험군에 해당되면 2년마다 저선량 흉부CT검사와 결과상담을 받아야 합니다.
        * 고위험군의 기준: 해당 연도 전 2년 내에 국가건강검진 시 작성되는 문진표로 30갑년 이상의 흡연력과 현재 흡연 여부가 확인되는 경우
        또는 건강보험 금연치료 사업의 문진표를 통해 30갑년 이상의 흡연력이 확인되는 경우도 고위험군에 해당됩니다.
        </pre>
    </div>  
  </section>
</body>
</html>