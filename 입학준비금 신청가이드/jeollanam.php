<?php include './front_header.php'; ?>
<body>
  <div class="topMenu">
    <a href="./home.php">
      <button>
        <img src="./img/sub-arrow.png" alt="">
      </button>
    </a>
    <span>전라남도</span>
    </div>
      <div class="area">
        <ul>
          <li><a href="javascript:;" onclick="postDataContent('LA')">구례군</a></li>
          <li><a href="javascript:;" onclick="postDataContent('LB')">나주시</a></li>
          <li><a href="javascript:;" onclick="postDataContent('LC')">목포시</a></li>
          <div class="ads_wrap ads_sub_sm">
            <ins class="adsbygoogle"
              data-ad-client="ca-pub-2858778486116301"
              data-ad-slot="2985402594"
              data-language="ko"
            ></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            </div>
          <li><a href="javascript:;" onclick="postDataContent('LD')">순천시</a></li>
          <li><a href="javascript:;" onclick="postDataContent('LE')">여수시</a></li>
        </ul>
      </div>
</body>
<script src="./js/postData.js"></script>
</html>