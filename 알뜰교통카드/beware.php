<!DOCTYPE html>
<html lang="en">
<head>
<?php 
  include './db.php';
  include './front_header.php';
  $category = $_POST['category'];
?>
<link rel="stylesheet" href="./css/commmon.css">
</head>
<body>
  <header class="contentHeader">
    <a href="./home.php"><button>
      <img src="./img/sub-arrow.png" alt="">
    </button></a>
        <div>
          <h1>알뜰교통카드 사용시 유의할 점</h1>
        </div>
  </header>
  <section class="innerWrapper">
  <div class="contentBoxThick">
    <div class="contentTitleBox">
      <img src="./img/deco.png" alt="">
      <h1 class="contentTitle">알뜰교통카드 사용 유의점</h1> 
    </div>
    <div class="content">
      -대략적으로 주5일 버스나 지하철을 이용시 15,000원 정도의 캐시백을 받을 수 있습니다.</br>

      -마일리지는 주민등록상 주소지 지자체 예산으로 지급되므로 숙지하고 있어야 합니다.</br>

      -앱 설치 후 출발지에서 출발 버튼 클릭 후 하차 태그 하고 최종 목적지에서 도착 버튼을 클릭 해야만 횟수가 정상적으로 반영됩니다.</br>

      -홈페이지나 앱 다운한 다음 신청 후 배송받고 난 후 회원으로 등록이 가능합니다.</br>

      -저소득층의 경우 국민기초생활수급자 증명서나 한부모, 차산위계층 확인서 등을 제출 해야합니다.</br>

      -만 19세 이상만 발급 및 사용이 가능합니다.
    </div>
  </section>
</body>
</html>