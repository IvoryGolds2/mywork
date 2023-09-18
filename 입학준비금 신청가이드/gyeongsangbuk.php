<?php include './front_header.php'; ?>
<body>
  <div class="topMenu">
    <a href="./home.php">
      <button>
        <img src="./img/sub-arrow.png" alt="">
      </button>
    </a>
    <span>경상북도</span>
    </div>
      <div class="area">
        <ul>
          <li><a href="javascript:;" onclick="postDataContent('KA')">경주시</a></li>
          <li><a href="javascript:;" onclick="postDataContent('KB')">영천시</a></li>
          <li><a href="javascript:;" onclick="postDataContent('KC')">예천시</a></li>
        </ul>
      </div>
</body>
<script src="./js/postData.js"></script>
</html>