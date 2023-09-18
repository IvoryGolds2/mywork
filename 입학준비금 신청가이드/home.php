<?php include './front_header.php'; ?>
<body>
  <div class="homeTop">
    <img src="./img/backgrounimage.png" alt="">
    <div class="homebtn">
      <a href="javascript:;" onclick="postDataContent('AA')">
        <button class="homebtn1" type="button">
          <img src="./img/btn-1.png" alt="">
        </button>
      </a>
      <a href="javascript:;" onclick="postDataContent('BA')">
        <button class="homebtn2" type="button">
          <img src="./img/btn-2.png" alt="">
        </button>
      </a>
    </div>
  </div>
  <div>
    <ins class="adsbygoogle"
        style="display: block;"
        data-language="ko"
        data-ad-client="ca-pub-2858778486116301"
        data-ad-slot="3441944885"
        data-ad-format="autorelaxed"
        data-matched-content-ui-type="image_sidebyside,image_sidebyside"
        data-matched-content-rows-num="4,1"
        data-matched-content-columns-num="1,1"
        ></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</div>
  <div class="home">
    <div class="area">
      <p>지역별 입학준비금</p>
      <ul>
        <li><a href="javascript:;" onclick="postDataContent('CA')">서울시</a></li>
        <li><a href="./gyeonggi.php">경기도</a></li>
        <li><a href="javascript:;" onclick="postDataContent('EA')">인천광역시</a></li>
        <li><a href="javascript:;" onclick="postDataContent('FA')">광주광역시</a></li>
        <li><a href="./busan.php">부산광역시</a></li>
        <li><a href="javascript:;" onclick="postDataContent('HA')">강원도</a></li>
        <li><a href="javascript:;" onclick="postDataContent('IA')">충청남도</a></li>
        <li><a href="./chungcheongbuk.php">충청북도</a></li>
        <li><a href="./gyeongsangbuk.php">경상북도</a></li>
        <li><a href="./jeollanam.php">전라남도</a></li>
        <li><a href="javascript:;" onclick="postDataContent('MA')">전라북도</a></li>
      </ul>
    </div>
  </div>
</body>
<script src="./js/postData.js"></script>
</html>