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
      헌혈
      </a>
      <a class="normaltitle" href="./contentb.php" >
      헌혈 전 유의사항
      </a>
      <a class="normaltitle" href="./contentc.php">
      헌혈 후 유의사항
      </a>
    </div>
    <div class="contentbox">
      <span class="boxtitle">헌혈 전 검사</span>
      <div class="redtitle">몸무게, 혈압, 맥박, 체온 측정</div>
      <pre class="content">
      몸무게는 남자 50kg 및 여자 45kg 미만, 혈압은 수축기 혈압 90mmHg 미만 또는 180mmHg 이상, 이완기 혈압 100mmHg 이상, 맥박은 1분간 50회 미만이나 100회 초과, 체온 37.5°C 초과 시 헌혈이 제한됩니다.
      </pre>
      <div class="redtitle">혈액형 검사 (초회 헌혈자에 한함)</div>
      <pre class="content">
      채혈현장에서는 A,B,O,AB형에 대한 혈구형 검사만 실시하고, 헌혈 후에 검사센터에서 혈구형, 혈청형 등 자세한 검사를 실시합니다.
      </pre>
      <div class="redtitle">빈혈검사</div>
      <pre class="content">
      혈색소 수치가 성분헌혈은 12.0 g/dL 이상인 경우, 전혈 헌혈은 12.5 g/dL 이상인 경우 헌혈이 가능합니다.      
      </pre>
      <div class="redtitle">혈소판 수 측정</div>
      <pre class="content">
      혈소판 수가 15만 개/μL 이상일 경우 혈소판성분헌혈이 가능합니다.
      </pre>
      <div class="redtitle">문진</div>
      <pre class="content">
      문진은 헌혈자의 헌혈관련증상 발생을 예방하고 수혈자의 건강을 보호하기 위해 시행하며, 문진간호사는 헌혈자가 작성한 헌혈기록카드를 확인하여 헌혈 적격여부를 판정합니다.      
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
      <span class="boxtitle">혈액사용 보류요청</span>
      <pre class="content">
      헌혈 전 문진내용에 사실과 다르게 응답하거나 헌혈 후 발생한 질환으로 인해 수혈자의 안전을 지키기 위해서는 헌혈자의 연락이 반드시 필요합니다.      
      </pre>
      <span class="boxtitle">혈액사용 보류요청 신청 해야 하는 경우</span>
      <pre class="content">
      문진사항에 사실과 다르게 응답하고 헌혈한 경우
      헌혈 후 질병 발병
      과거병력 및 약물 복용
      말라리아 위험지역 여행 및 거주
      변형 크로이츠펠트-야콥병 위험지역 헌혈배제      
      </pre>

    </div>  
  </section>
</body>
</html>