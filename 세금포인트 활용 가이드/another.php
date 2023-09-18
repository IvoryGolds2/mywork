<?php
include './db.php';
include './front_header.php';
?>
<body>
  <header class="contentHeader">
    <a href="./home.php">
      <img src="./img/sub-arrow.png" alt="">
    </a>
    <h1>그 외의 이용방법</h1>
  </header>
  <section class="innerWrapper">
    <?php
      $sql = query("SELECT * from another");
      foreach($sql as $key => $val) { ?>
        <div class="anotherBox">
          <div class="triangle">
            <img src="./img/deco-arrow.png" alt="">
            <h1><?=$val['title']?></h1>
          </div>
          <pre class="anotherContentBox firstbox"><?=$val['content']?></pre>
          <?php if (!empty($val['subtitle'])) { ?>
            <div class="triangle">
              <img src="./img/deco-arrow.png" alt="">
              <h1><?=$val['subtitle']?></h1>
            </div>
          <?php } ?>
          <pre class="anotherContentBox"><?=$val['subcontent']?></pre>
        </div>
    <?php } ?>  
  </section>
</body>
<script src="./js/postData.js"></script>
</html>