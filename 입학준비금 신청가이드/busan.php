<?php include './front_header.php'; ?>
<body>
  <div class="topMenu">
    <a href="./home.php">
      <button>
        <img src="./img/sub-arrow.png" alt="">
      </button>
    </a>
    <span>부산광역시</span>
    </div>
      <div class="area">
        <ul>
          <li><a href="javascript:;" onclick="postDataContent('GA')">진구</a></li>
          <li><a href="javascript:;" onclick="postDataContent('GB')">수영구</a></li>
        </ul>
      </div>
</body>
<script src="./js/postData.js"></script>
</html>