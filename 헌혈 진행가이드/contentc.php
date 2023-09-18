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
      <a class="normaltitle" href="./contentb.php" >
      헌혈 전 유의사항
      </a>
      <a class="pointtitle" href="./contentc.php">
      헌혈 후 유의사항
      </a>
    </div>
    <div class="contentbox">
      <pre class="content">
      1. 헌혈 중이나 헌혈 후 채혈침대에 누워 있을 때 호흡을 규칙적으로 하면서 다리를 발목 근처에서 꼬고 다리 근육에 힘을 주는 운동을 해주세요. 이 자세는 헌혈 후 발생할 수 있는 저혈압을 예방해 줍니다.

      2. 헌혈부위 반창고는 최소 4시간 이상 붙여 주세요. 헌혈하신 부위에 이물질이 접촉되지 않도록 주의하셔야 합니다.

      3. 헌혈 직후에는 헌혈장소에서 편안한 자세로 15분 이상 휴식을 취해 주세요.

      4. 평소보다 3~4컵의 물을 더 섭취해 주세요. 손실된 혈액량을 보충하는데 많은 도움이 됩니다.

      5. 당일 음주, 1시간 이내의 흡연은 피해 주세요. 1시간 이내의 흡연은 현기증이나 구토를 유발할 수 있습니다.

      6. 당일 가벼운 샤워는 괜찮지만 사우나, 찜질방, 통목욕은 수분 손실이 많으니 피해 주세요.

      7. 헌혈부위에서 출혈이 되면 가급적 팔을 가슴보다 높게 들어 올린 상태에서 지혈이 될 때까지 출혈 부위를 눌러주세요.

      8. 트럭 운전사, 다이버, 높은 곳에서 작업하시는 분은 최소 12시간 이상, 항공기 조종사는 최소 24시간 이상 휴식을 취하신 후 업무에 복귀해 주세요.

      9. 헌혈장소를 떠난 후에 오심, 구토, 현기증 등의 증상이 나타나면 즉시 바닥에 주저앉아 호전될 때까지 무릎사이에 머리를 넣거나, 가능하면 다리를 들어 올려 주세요. 
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