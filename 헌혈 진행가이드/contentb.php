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
      헌혈
      </a>
      <a class="pointtitle" href="./contentb.php" >
      헌혈 전 유의사항
      </a>
      <a class="normaltitle" href="./contentc.php">
      헌혈 후 유의사항
      </a>
    </div>
    <div class="contentbox">
      <pre class="content">
      1. 헌혈 당일 몸상태가 좋지 않은 경우 헌혈자의 안전을 위해 헌혈이 제한될 수 있습니다.(전날 과음, 피로, 생리중 등)

      2. 헌혈 전 신분확인을 위해 신분증을 지참하여야 합니다.

      3. 헌혈 전날 충분한 수면을 취해 주시고, 헌혈 전에는 가벼운 식사를 해주세요. (혈소판성분헌혈에 참여하실 경우 헌혈 당일 기름진 음식 섭취는 피해 주세요.)

      4. 복용 중인 약물이나 치료 중인 질환이 있는 경우 헌혈장소 방문 전 고객센터 또는 혈액원으로 문의해 주세요.      </pre>
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