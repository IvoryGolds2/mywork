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
      일반 건강 검진
      </a>
      <a class="normaltitle" href="./contentb.php" >
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
      <span class="boxtitle">대상자</span>
      <pre class="content">
        - 지역세대주
        - 직장 가입자
        - 20세 이상 세대원과 피부양자
        - 20세에서 64세까지의 의료급여 수급권자
        * 매 2년마다 1회의 건강검진을 받을 수 있으며, 비사무직 종사자의 경우에는 매년 건강검진을 받아야 합니다."
      </pre>  
      <span class="boxtitle">검사항목</span>
      <div class="redtitle">공통항목</div>
      <pre class="content">
      1.진찰, 상담, 신장, 체중, 허리둘레, 체질량지수, 시력, 청력, 혈압측정
      2.AST(SGOT), ALT(SGPT), 감마지티피
      3.공복혈당
      4.요단백, 혈청 크레아티닌, 혈색소, 신사구체여과율(e-GFR)
      5.흉부방사선촬영
      6.구강검진
      </pre>
      <div class="redtitle">성,연령별 검사 항목</div>
      <pre class="content">
      1.이상지질혈증(총콜레스테롤, HDL콜레스테롤, LDL콜레스테롤, 트리글리세라이드)
      -남자 24세 이상, 여자 40세 이상, 4년 주기
      2.B형간염검사(40세, 보균자 및 면역자는 제외)
      3.치면세균막검사(40세)
      4.골다공증(54·66세 여성)
      5.정신건강검사_우울증(20~70세) 해당 연령을 시작으로 10년동안 1회
      6.생활습관평가(40·50·60·70세)
      7.노인신체기능검사(66·70·80세)
      8.인지기능장애검사(66세 이상, 2년 주기)
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
        <span class="boxtitle">결과통보</span>
        <pre class="content">
          1. 일반건강검진 후 15일 이내 검진기관에서 문진표에 작성한 주소지(우편, 메일)로 발송
          2. 건강위험평가(HRA)
        </pre>
    </div>  
  </section>
</body>
</html>