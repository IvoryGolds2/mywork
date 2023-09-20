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
    <header class="homeHeader">
      <div class="homeHeaderimg">
        <img src="./img/logo.png" alt="">
      </div>
    </header>
    <section>
      <div class="homeinnerWrapper">
        <div class="homeTopBtn">
          <a href="javascript:;" onclick="postDataContent('SUB1')"><img src="./img/btn-1.png" alt=""></a>
          <a href="javascript:;" onclick="postDataContent('SUB2')"><img src="./img/btn-2.png" alt=""></a>
          <a href="javascript:;" onclick="postDataContent('SUB3')"><img src="./img/btn-3.png" alt=""></a>
        </div>
        <h2 class="greentitle"><img src="./img/deco.png" alt=""> 착한운전 마일리지 제도</h2>
        <pre class="homecontent">교통 법규를 준수하겠다는 서약을 한 후 서약 기간인 1년 동안에 무사고, 무위반을 유지할 경우 마일리지 점수를 부여하는 제도 
        ※ 1년이라는 기간동안 교통법규를 제대로 준수하겠다는 서약서에 적힌 내용대로 큰 문제 없이 넘어간 경우 10점씩 쌓이게 되고 누적된 만큼 향후 쌓은 점수로 소멸시킬 수 있는 혜택을 제공
        </pre>
        <div class="ads_wrap ads_main_big">
          <ins class="adsbygoogle"
            data-ad-client="ca-pub-2858778486116301"
            data-ad-slot="2985402594"
            data-language="ko"
            ></ins>
          <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
        </div>
        <img class="haku toggleImg" src="./img/btn-4.png" alt="">
        <img class="haku togglecontentImg" src="./img/chart-2.png" alt="">
        <h2 class="greentitle margintop"><img src="./img/deco.png" alt="">운전면허 적성검사 신청</h2>
        <img class="haku" src="./img/chart-1.png" alt="">
        <div class="homeTopBtn">
          <a href="javascript:;" onclick="postDataContent('SUB4')"><img src="./img/btn-5.png" alt=""></a>
          <a href="javascript:;" onclick="postDataContent('SUB5')"><img src="./img/btn-6.png" alt=""></a>
          <a href="javascript:;" onclick="postDataContent('SUB6')"><img src="./img/btn-7.png" alt=""></a>
        </div>
        <div class="ads_wrap ads_main_big">
          <ins class="adsbygoogle"
            data-ad-client="ca-pub-2858778486116301"
            data-ad-slot="2985402594"
            data-language="ko"
            ></ins>
          <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
        </div>
        <h2 class="greentitle margintop"><img src="./img/deco.png" alt="">어려운 설명은 NO! 한 눈에 보기</h2>
        <?php
          $sql = query("SELECT * from faq");
          foreach($sql as $key => $val) { ?>
          <div class="qnaToggleBox">
            <button class="toggleButton" data-key="<?=$key?>">
              <h1 class="toggleColor"><?=$val['question']?></h1> 
              <img class="toggleIcon" src="./img/arrow-2.png" alt="Show">
            </button>
            <div>
              <pre class="content" style="display: none;"><?=$val['answer']?></pre>
            </div>
          </div>
        <?php  } ?>  
      </div>
    </section>
  </div>
</body>
<script src="./js/postData.js"></script>
<script>
  // 이미지 토글
let toggleState = false;
function toggleContent() {
  const toggleImg = document.querySelector('.toggleImg');
  const toggleContentImg = document.querySelector('.togglecontentImg');
  toggleState = !toggleState;
  if (toggleState) {
    toggleContentImg.style.display = 'block';
    toggleImg.src = './img/btn-4-up.png';
  } else {
    toggleContentImg.style.display = 'none';
    toggleImg.src = './img/btn-4.png';
  }
}
const toggleButton = document.querySelector('.toggleImg');
toggleButton.addEventListener('click', toggleContent);

// faq 토글
  var toggleButtons = document.querySelectorAll(".toggleButton");
  var contents = document.querySelectorAll(".content");

  toggleButtons.forEach(function(button, index) {
    button.addEventListener("click", function() {
      contents.forEach(function(content, contentIndex) {
        if (contentIndex === index) {
          content.style.display = (content.style.display === "none") ? "block" : "none";
          button.querySelector(".toggleIcon").src = (content.style.display === "none") ? "./img/arrow-2.png" : "./img/arrow-1.png";
          button.querySelector(".toggleColor").style.color = (content.style.display === "none") ? "black" : "#000";
        } else {
          content.style.display = "none";
          toggleButtons[contentIndex].querySelector(".toggleIcon").src = "./img/arrow-2.png";
          toggleButtons[contentIndex].querySelector(".toggleColor").style.color = "black";
        }
      });
    });
  });
</script>
</html>