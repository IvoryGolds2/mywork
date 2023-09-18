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
    <img class="contentTopImg" src="./img/progress-2.png" alt="">
    <div class="contentBox">
      <h1>가장 최근에 받은 월급을 입력해 주세요!</h1>
      <h5>퇴사 직전 3개월간의 임금총액을 3개월간의 총 일수로 나눠 평균임금이 계산됩니다.</h5>
      <input type="number" placeholder="₩ 3,000,000" id="salaryInput"> <!-- 아이디 추가 -->
      <a class="nextbtn" href="javascript:void(0);" onclick="validateInputAndSave()"><img src="./img/3.png" alt=""></a>    
    </div>
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
    </section>
  </div>
</body>
<script>
  function validateInputAndSave() {
    var salaryInput = document.getElementById('salaryInput').value;
    
    // 입력값이 숫자가 아닌 경우 또는 빈 문자열인 경우 경고창 표시
    if (isNaN(salaryInput) || salaryInput === "") {
      alert("올바른 값을 입력해 주세요.");
    } else {
      sessionStorage.setItem('recentSalary', salaryInput);
      window.location.href = './calculation3.php';
    }
  }

  document.getElementById('goBackButton').addEventListener('click', function() {
      window.history.back(); // 브라우저의 뒤로 가기 기능을 사용하여 이전 페이지로 이동합니다.
    });
</script>
</html>