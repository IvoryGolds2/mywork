<!DOCTYPE html>
<html lang="ko">
<head>
<?php include './front_header.php';?>
<?php 
    include './db.php';
    include './front_header.php';
    $category = $_POST['category'];
  ?>
<link rel="stylesheet" href="./css/commmon.css">
</head>
<body>
  <div class="backgroundcolorwrapper">
    <header class="contentHeader">
      <button id="goBackButton">
        <img class="goback" src="./img/sub-arrow.png" alt="">
      </button>
      <a class="logoimg" href="./home.php">
        <img src="./img/subpage-logo.png" alt="">
      </a>
    </header>
    <section class="innerWrapper">
    <img class="contentTopImg" src="./img/progress-3.png" alt="">
    <div class="contentBox">
      <h1>최근 1년간 받은 상여금과 연차수당을 입력해 주세요!</h1>
      <h5 class="margingogo">상여금은 인센티브, 휴가비용, 보너스 등 월급 이외에 받은 추가적인 임금을 의미합니다. </br>
      미사용 연차 갯수를 연차수당으로 환산해 퇴직금에 함께 기재해 드립니다.
      </h5>
      <h2>상여금(세전)</h2>
      <input class="minimargin" type="text" placeholder="₩ 3,000,000" id="bonusInput"> <!-- 아이디 추가 -->
      <h2>연차수당</h2>
      <input class="minimargin" type="text" placeholder="₩ 3,000,000" id="holidayAllowanceInput"> <!-- 아이디 추가 -->
      <a class="nextbtn" href="javascript:void(0);" onclick="validateInputsAndSave()"><img src="./img/3.png" alt=""></a>
    </div>
  </section>
  <div class="ads_wrap ads_main_big">
    <ins class="adsbygoogle"
    data-ad-client="ca-pub-2858778486116301"
    data-ad-slot="1949985773"
    data-language="ko"
    ></ins>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>
    <div class="ddd"></div>
  </div>
</body>
<script>
  // 입력값 유효성 검사 함수
  function validateInputsAndSave() {
    var bonusInput = document.getElementById('bonusInput').value; // 아이디 추가
    var holidayAllowanceInput = document.getElementById('holidayAllowanceInput').value; // 아이디 추가

    // 입력값이 숫자가 아니거나 빈 문자열일 경우 경고창 표시
    if (isNaN(bonusInput) || bonusInput === "" || isNaN(holidayAllowanceInput) || holidayAllowanceInput === "") {
      alert("올바른 값을 입력해 주세요.");
    } else {
      // 입력값을 세션 스토리지에 저장하고 다음 페이지로 이동
      sessionStorage.setItem('bonusInput', bonusInput);
      sessionStorage.setItem('holidayAllowanceInput', holidayAllowanceInput);
      window.location.href = './result.php';
    }
  }

  document.getElementById('goBackButton').addEventListener('click', function() {
      window.history.back(); // 브라우저의 뒤로 가기 기능을 사용하여 이전 페이지로 이동합니다.
    });
</script>
</html>