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
      <a class="normaltitle" href="./contentd.php">
      암검진
      </a>
      <a class="pointtitle" href="./contente.php" >
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
      <span class="boxtitle">검진표 발송 및 수령</span>
      <pre class="content">
      1. 지역가입자의 경우, 주민등록 주소지로 우편으로 발송됩니다. 만약 공단에 실거주지 등록이 되어있는 경우 해당 경로로 발송됩니다.

      2. 직장가입자 및 직장피부양자의 경우, 주민등록 주소지로 우편으로 발송됩니다. 

      3. 의료급여수급권자의 경우, 주민등록 주소지로 우편으로 발송됩니다.
      검진표를 분실하거나 수령하지 못한 경우, 1577-1000번으로 연락하거나 가까운 지사에 신청하면 검진대상자 확인서를 발급해드립니다. 

      또한, 국민건강보험 사이트(건강검진/검진대상자 확인)에서 공동인증서를 사용하여 검진대상자 확인서를 직접 출력할 수도 있습니다. 
      </pre>  
      <span class="boxtitle">결과통보</span>
      <pre class="content">
      검진결과는 검진기관에서 15일 이내에 선택하신 방법(우편, 이메일 등)으로 통보해드립니다.
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
    </div>  
  </section>
</body>
</html>