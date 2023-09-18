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
        <h1>조혈모세포 이식과 기증의 필요성</h1>
      </div>
  </header>
  <section>
    <div class="title">
      <a class="pointtitle" href="./contentd.php">
      조혈모세포
      </a>
      <a class="normaltitle" href="./contente.php" >
      조혈모세포 기증 절차
      </a>
    </div>
    <div class="contentbox">
      <span class="boxtitle">조혈모 세포란?</span>
      <pre class="content">
      조혈모세포는 모든 혈액세포를 만들어내는 능력을 가진 원조가 되는 어머니 세포를 말하며 혈액을 구성하는 적혈구, 백혈구, 혈소판으로 분화됩니다.      
      </pre>  
      <span class="boxtitle">조혈모세포 (골수,말초혈) 이식의 필요성</span>
      <pre class="content">
      백혈병과 같은 혈액암 환자들은 조혈모세포가 건강한 혈액세포를 만들어 내지 못해 생명을 유지하기 어렵습니다.
      따라서 타인의 건강한 조혈모세포를 이식받아 정상적인 기능을 수행할 수 있는 혈액세포를 만들어 냄으로써 생명을 유지할 수 있게 됩니다.      
      </pre>  
      <pre class="content">
      조혈모세포 이식은 환자와 기증자의 조직적합성 항원형이 일치하여야 하는데, 환자와 기증자간 HLA형이 일치할 확률은 부모와 자식간 5% 이내, 형제자매간 25% 이내, 타인 간 일치할 확률은 수천에서 수 만명 중 1명에 불과할 정도로 확률이 매우 낮습니다. 따라서, 조혈모세포 기증희망자 등록은 가능한 한 많은 사람이 등록하여야 환자가 이식받을 확률이 높아지게 됩니다.      
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