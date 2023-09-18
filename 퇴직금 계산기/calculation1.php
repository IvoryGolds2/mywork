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
      <button id="gohomebutton">
        <img class="goback" src="./img/sub-arrow.png" alt="">
      </button>
      <a class="logoimg" href="./home.php">
        <img src="./img/subpage-logo.png" alt="">
      </a>
    </header>
    <section class="innerWrapper">
    <img class="contentTopImg" src="./img/progress-1.png" alt="">
    <div class="contentBox">
      <div class="spacebtw">
        <h1>입사일을 입력해 주세요!</h1>
        <input type="date" id="startDate"> <!-- 아이디 추가 -->
        <h1>퇴사일을 입력해 주세요!</h1>
        <input type="date" id="endDate"> <!-- 아이디 추가 -->
      </div>
      <a class="nextbtn" href="javascript:void(0);" onclick="validateInput()"><img src="./img/3.png" alt=""></a>
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
  // 입력값 유효성 검사 함수
  function validateInput() {
    var start = document.getElementById('startDate').value; // 아이디로 요소 선택
    var end = document.getElementById('endDate').value; // 아이디로 요소 선택

    // 입력값이 비어있으면 경고창 표시
    if (start === "" || end === "") {
      alert("입력란을 모두 채워주세요.");
    } else {
      // 입력값이 유효할 경우 다음 페이지로 이동
      sessionStorage.setItem('start', start);
      sessionStorage.setItem('end', end);
      window.location.href = './calculation2.php';
    }
  }

  document.getElementById('gohomebutton').addEventListener('click', function() {
    window.location.href = './home.php'; // 브라우저의 뒤로 가기 기능을 사용하여 이전 페이지로 이동합니다.
  });
</script>
</html>